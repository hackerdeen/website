<?php define('IN_SITE', 1); $page = "Open Evenings"; 

$description = "Open Evenings, every Tuesday, come along and see what the Hacklab is about, all welcome.";

include('header.php'); ?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Open Evenings</h1>
            </div>
        </div><!-- row -->
        <div class="row">
            <div class="col-md-6">

                <h2>Open Evening, Every Tuesday</h2>

                <p>Every week on a Tuesday evening the Hacklab is open to all.  Come along from around 7pm if you're keen to find out more about 57North Hacklab.  

                <p>Tuesday is usually the busiest evening at the space and is often more focussed on socialising, sharing ideas and helping each other.</p>

                <p>
                    Usually, every Tuesday, there is a email out, so it's worth checking the 
                    <a href="https://lists.57north.org.uk/mailman3/hyperkitty/list/57north-announce@lists.57north.org.uk/">announce</a>
                    and 
                    <a href="https://lists.57north.org.uk/mailman3/hyperkitty/list/57north-discus@lists.57north.org.uk/">discuss</a>
                    mailing lists.
                </p>        
                
                <p>There are some details on getting here by various means on the <a href="/contact" title="57 North contact page">contact page</a>.</p>

                <h2>Upcoming Open Evenings</h2>
                <p>The next 10 Tuesdays are...</p>
                <ul>
                    <li><?php echo date('jS \of F Y', strtotime('next tuesday')); ?></li>
                    <li><?php echo date('jS \of F Y', strtotime('+1 weeks tuesday')); ?></li>
                    <li><?php echo date('jS \of F Y', strtotime('+2 weeks tuesday')); ?></li>
                    <li><?php echo date('jS \of F Y', strtotime('+3 weeks tuesday')); ?></li>
                    <li><?php echo date('jS \of F Y', strtotime('+4 weeks tuesday')); ?></li>
                    <li><?php echo date('jS \of F Y', strtotime('+5 weeks tuesday')); ?></li>
                    <li><?php echo date('jS \of F Y', strtotime('+6 weeks tuesday')); ?></li>
                    <li><?php echo date('jS \of F Y', strtotime('+7 weeks tuesday')); ?></li>
                    <li><?php echo date('jS \of F Y', strtotime('+8 weeks tuesday')); ?></li>
                    <li><?php echo date('jS \of F Y', strtotime('+9 weeks tuesday')); ?></li>

                </ul>


            </div>
            <div class="col-md-6">

                <h2>Getting in</h2>

                <p>When you arrive at the hacklab, press 'H' on the door entry system, and someone will buzz you in.  You can check if the space is open on our <a href="https://twitter.com/57NorthHacklab" title="57 North on Twitter" target="_blank">Twitter feed</a>.</p>

                <p><img src="/img/outside_all_w550.jpg" alt="The outside of the space"></p>

                <p><img src="/img/outside_door_w550.jpg" alt="The outside of the space"></p>

                <p><img src="/img/outside_buzzer_w550.jpg" alt="The outside of the space"></p>



            </div>
        </div><!-- row -->
    
        
    </div><!-- container -->
</section>		

<?php include('footer.php'); ?>

