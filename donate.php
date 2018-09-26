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
This pages requires the stripe PHP bindings...
https://github.com/stripe/stripe-php

Docs at... 
https://stripe.com/docs/api?lang=php#intro
https://stripe.com/docs/checkout/php
https://stripe.com/docs/recipes/variable-amount-checkout

Steps to get Stripe...
1) Download from https://github.com/stripe/stripe-php/archive/master.zip
2) At the top level of the fileset, unzip it to a directory called "stripe-php"

*/

# bring in the API
require_once('stripe-php/init.php');

# set config info
$stripe = array(
  "secret_key"      => "sk_test_",
  "publishable_key" => "pk_test_"
);

# create the stripe object
\Stripe\Stripe::setApiKey($stripe['secret_key']);


if ( !isset( $_GET["state"] ) ) {
    # initial state
    ?>
    <h3>Step 1 of 3: Enter donation details</h3>
    <form action="donate?state=2" method="post">
        <div class="input-group ">
            <input class="form-control" placeholder="Name or handle" name="name" type="text"> <br/><br/>
            <input class="form-control" placeholder="Email address" name="email" type="text"> <br/><br/>
            <input class="form-control" placeholder="Donation amount in £" name="amount" type="text"> <br/><br/>
            <input class="form-control" placeholder="Comment" name="comment" type="text"> <br/><br/>

            <button class="btn btn-success" type="submit">Subscribe</button>
        </div>
    </form>
    <?php


} elseif ( $_GET["state"] == 2) {
    # second state
    if ( $_POST["name"] ) {
        $name = $_POST["name"];
    } else {
        $name = "Anonymous";
    }

    if ( $_POST["email"] ) {
        $email = $_POST["email"];
    } else {
        $email = "Anonymous";
    }

    if ( $_POST["amount"] ) {
        $amount = $_POST["amount"];
    } else {
        $amount = "10";
    }
    $amount_in_pence = $amount * 100;

    if ( $_POST["comment"] ) {
        $comment = $_POST["comment"];
    } else {
        $comment = "No comment provided";
    }




    ?>
    <h3>Step 2 of 3: Payment</h3>

    <p>
        Name: <?php echo $name; ?><br/>
        Email: <?php echo $email; ?><br/>
        Amount: &pound;<?php echo $amount; ?><br/>
        Comment: <?php echo $comment; ?><br/>
    </p>

    <form action="donate?state=3" method="post">
        <script 
            src="https://checkout.stripe.com/checkout.js" 
            class="stripe-button" 
            data-key="<?php echo $stripe['publishable_key']; ?>" 
            data-name="57 North Hackspace" 
            data-description="Donate to 57 North Hackspace" 
            data-panel-label="Donate" 
            data-locale="auto" 
            data-currency="GBP"
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
  
    $customer = \Stripe\Customer::create(array(
        'email' => $email,
        'source'  => $token
    ));
  
    $charge = \Stripe\Charge::create(array(
        'customer' => $customer->id,
        'amount'   => 5000,
        'currency' => 'usd'
    ));
  
    ?>
    <h3>Step 3 of 3: Confirmation</h3>

    <?php
} else {
    echo "<p>Sorry, there has been a problem</p>";
}


?>
            </div>
            <div class="col-md-6">
                <h2>Your Donation 57 North Hackspace</h2>
                <p>Donating to 57 North Hackspace is a great idea.  As a non-profit social enterprise we rely on donations to run community workshops and many other programs.</p>

                <hr/>

                <h2>Donate Securely</h2>
                <p>The 57 North Hackspace donation system uses the secure Stripe payment service to process your donation.  No payment data is processed or stored on the 57 North hackspace website or servers.  Stripe is headquartered in San Francisco, with offices in Dublin, London, Paris, Singapore and Tokyo. You can read their <a href="https://stripe.com/gb/privacy" target="_blank" title="Stripe secure payment">privacy policy online</a>.</p>
                <p><a href="https://stripe.com" target="_blank" title="Stripe secure payment"><img src="/img/powered_by_stripe.png" alt="Stripe secure payment"></a></p>
            </div>
        </div><!-- row -->        
    </div><!-- container -->
</section>		

<?php include('footer.php'); ?>

