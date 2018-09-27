<?php define('IN_SITE', 1); $page = "Donate"; 

$description = "Learn more about 57North Hacklab, our board of directors, how to communicate with us via IRC and e-mail and how to become a member of our hackerspace.";

include('header.php'); ?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Donate to 57North</h1>
            </div>
        </div><!-- row -->
        <div class="row">
            <div class="col-md-6">
                <h2>Donate to 57 North Hackspace</h2>
<?php
/*
This is a simple Stripe donation system
It is deliberately written in simple, functional PHP for ease of reading
Initially written in October 2018 by Andy
There is a github issue at https://github.com/hackerdeen/website/issues/9

This pages requires the stripe PHP bindings...
https://github.com/stripe/stripe-php

Stripe docs at... 
API Refs:       https://stripe.com/docs/api?lang=php#intro
Checkout docs:  https://stripe.com/docs/checkout/php
Recipe:         https://stripe.com/docs/recipes/variable-amount-checkout
Test card info: https://stripe.com/docs/testing

Steps to get Stripe PHP bindings...
1) Download from https://github.com/stripe/stripe-php/archive/master.zip
2) At the top level of the fileset, unzip it to a directory called "stripe-php"


*/

# bring in the API
require_once('stripe-php/init.php');

# set config info
$stripe = array(
  "secret_key"      => "sk_test_4eC39HqLyjWDarjtT1zdp7dc",
  "publishable_key" => "pk_test_TYooMQauvdEDq54NiTphI7jx"
);

# create the stripe object
\Stripe\Stripe::setApiKey($stripe['secret_key']);

?>
<style type="text/css">
    label > small {
        font-weight: normal;
    }
</style>

<?php


if ( !isset( $_GET["state"] ) ) {
    # initial state
    ?>
    <h3>Step 1 of 3: Enter donation details</h3>
    <br/>
    <form action="donate?state=2" method="post" id="donate_form">
        <label for="amount">How much would you like to donate?</label>
        <div class="input-group">
            <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-primary">
                    <input type="radio" name="amount_options" id="amount_5" value="5" checked> &pound;5
                </label>
                <label class="btn btn-primary">
                    <input type="radio" name="amount_options" id="amount_10" value="10"> &pound;10
                </label>
                <label class="btn btn-primary">
                    <input type="radio" name="amount_options" id="amount_20" value="20"> &pound;20
                </label>
                <label class="btn btn-primary">
                    <input type="radio" name="amount_options" id="amount_50" value="50"> &pound;50
                </label>
                <label class="btn btn-primary">
                    <input type="radio" name="amount_options" id="amount_other" value="other"> Choose your own amount
                </label>            
            </div>
        </div>
        <br/>

        <label for="amount">Choose your own amount...</label>
        <div class="input-group">
            <input type="text" class="form-control" id="amount" name="amount" placeholder="Donation amount in £" >
        </div>
        <br/>

        <label for="email">Email <small>Required</small></label>
        <div class="input-group">
            <input type="text" class="form-control" id="email" name="email" placeholder="Your email address" >
        </div>
        <br/>

        <label for="name">Name <small>Optional</small></label>
        <div class="input-group">
            <input type="text" class="form-control" id="name" name="name" placeholder="Your name" >
        </div>
        <br/>

        <label for="comment">Comment <small>Optional</small></label>
        <div class="input-group">
            <input type="text" class="form-control" id="comment" name="comment" placeholder="Enter a comment if you like" >
        </div>
        <br/>

        <button class="btn btn-success" type="submit">Donate</button>

    </form>

    <?php /*
    Simple client validation
    yea, I know, inline is ugly, but it keeps it simple and all in one place
    */ ?>
    <script type="text/javascript">
    <?php /* Bind the event handler to the "submit" JavaScript event */ ?>
    $('form').submit(function () {

        
        <?php /* Get the amount */ ?>
        var amount_options = $("#donate_form input[type='radio']:checked").val();
        if (amount_options != "other") {
            <?php /* Get the amount */ ?>
            var amount = amount_options;
            $('#amount').val(amount);
        } else {
            var amount = $.trim($('#amount').val());
        }
        
        <?php /* Get the fields and trim them */ ?>
        var email = $.trim($('#email').val());
        

        <?php /* Check if either field is empty */ ?>
        if (amount === '' || email === '' ) {
            alert('Please enter the required fields.');
            return false;
        }
    });
    </script>
    <?php


} elseif ( $_GET["state"] == 2) {
    # second state

    # get the amount
    if ( $_POST["amount"] ) {
        $amount = $_POST["amount"];
    } else {
        # hard error, though just a fallback if JS validation fails
        exit("Error, missing field amount");
    }
    $amount_in_pence = $amount * 100;

    # get the email
    if ( $_POST["email"] ) {
        $email = $_POST["email"];
    } else {
        # hard error, though just a fallback if JS validation fails
        exit("Error, missing field email");
    }

    # get the name
    if ( $_POST["name"] ) {
        $name = $_POST["name"];
    } else {
        $name = "Anonymous";
    }

    # get the comment
    if ( $_POST["comment"] ) {
        $comment = $_POST["comment"];
    } else {
        $comment = "No comment provided";
    }
    ?>
    <h3>Step 2 of 3: Payment</h3>

    <h4>Review your donation details</h4>
    <p>
        Amount: &pound;<?php echo number_format((float)$amount, 2, '.', ''); ?><br/>
        Email: <?php echo $email; ?><br/>
        Name: <?php echo $name; ?><br/>
        Comment: <?php echo $comment; ?><br/>
    </p>

    <form action="donate?state=3&val=<?php echo $amount_in_pence; ?>"  method="post">
        <script 
            src="https://checkout.stripe.com/checkout.js" 
            class="stripe-button" 
            data-key="<?php echo $stripe['publishable_key']; ?>" 
            data-name="57 North Hackspace" 
            data-description="Donate to 57 North Hackspace" 
            data-panel-label="Donate Securely" 
            data-label="Donate Securely" 
            data-locale="auto" 
            data-currency="gbp"
            data-email="<?php echo $email; ?>"
            data-amount="<?php echo $amount_in_pence; ?>"
            data-allow-remember-me="false" 
            data-image="https://57n-staging.ssofb.co.uk/img/logo_128x128.png"
            >
        </script>
    </form>
    <?php

} elseif ( $_GET["state"] == 3) {
    # third state
    $token  = $_POST['stripeToken'];
    $email  = $_POST['stripeEmail'];
    $amount_in_pence  = $_GET['val'];
  
    $customer = \Stripe\Customer::create(array(
        'email' => $email,
        'source'  => $token
    ));
  
    $charge = \Stripe\Charge::create(array(
        'customer' => $customer->id,
        'amount'   => $amount_in_pence,
        'currency' => 'gbp'
    ));
    
    # handy debug block
    #echo "<pre>post:\n" . print_r($_POST, TRUE) . "</pre>\n";
    #echo "<pre>get:\n" . print_r($_GET, TRUE) . "</pre>\n";
    #echo "<pre>customer:\n" . print_r($customer, TRUE) . "</pre>\n";
    #echo "<pre>charge:\n" . print_r($charge, TRUE) . "</pre>\n";

    # check the transaction
    if ( $charge->status == "succeeded" ) {
        # transaction successful
        echo "<h3>Step 3 of 3: Confirmation</h3>";
        echo "<p><b>Transaction complete.</b></p>";
        echo "<p><i class=\"fa fa-heart\" aria-hidden=\"true\"></i> Thank you very much for your donation.</p>";

    } else {
        # transaction error, card errors are dealt with in the Stripe pop-up so this should not really be hit ever
        echo "<h3>Step 3 of 3: Sorry, there was a problem</h3>";
        echo "<p><b>Transaction error.</b></p>";
        echo "<p>Sorry, it seems an error occurred, no funds were transferred, but please contact us if you have any concerns.</p>";
    }

} else {
    # hard error, though just a fallback if wrong state
    exit("Error, invalid input");

}
?>
            </div>
            <div class="col-md-6">
                <h2>Your Donation to 57 North Hackspace</h2>
                <p>Donating to 57 North Hackspace is a great idea.  As a non-profit social enterprise we rely on donations to run community workshops and many other programs.</p>

                <hr/>

                <h2><i class="fa fa-lock" aria-hidden="true"></i> Your Donation is Secure</h2>
                <p>The 57 North Hackspace donation system uses the secure Stripe payment service to process your donation.  No payment data is processed or stored on the 57 North hackspace website or servers.  Stripe is headquartered in San Francisco, with offices in Dublin, London, Paris, Singapore and Tokyo. You can read their <a href="https://stripe.com/gb/privacy" target="_blank" title="Stripe secure payment">privacy policy online</a>.</p>
                <p><a href="https://stripe.com" target="_blank" title="Stripe secure payment"><img src="/img/powered_by_stripe.png" alt="Stripe secure payment"></a></p>
            </div>
        </div><!-- row -->        
    </div><!-- container -->
</section>

<?php include('footer.php'); ?>