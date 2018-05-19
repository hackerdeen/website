<?php define('IN_SITE', 1); $page = "About"; 

$description = "Learn more about 57North Hacklab, our board of directors, how to communicate with us via IRC and e-mail and how to become a member of our hackerspace.";

include('header.php'); ?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>About 57North</h1>
            </div>
        </div><!-- row -->
        <div class="row">
            <div class="col-md-6">
                <h2>About the 57North hackspace</h2>
                <p>57North is a hacker collective with a shared space located in Aberdeen, Scotland. We meet regularly to share knowledge, hack on projects together, and build community. If you're interested in joining 57North, come to some of our public meetings or join the 57North mailing list.</p>
                <p>57North (previously Hackerdeen) was born from the efforts of a group of like-minded people in Aberdeen. Following two in-person meetings at the University of Aberdeen we got our own space to move into and have grown rapidly ever since. We have a range of electronics and computing tools available to our members that have been donated or loaned to us by members and local organisations.</p>
                <p>Our current home downstairs from Engage Gaming at 26 North Silver Street, AB10 1RL.</p>
                <p>The hackspace was founded in Febuary 2015, so it is about <?php echo round( ( time() - strtotime("2015-02-18 00:00:00") ) / 60 ); ?> minutes old.</p>
            </div>
            <div class="col-md-6">
                <h1>What is a hackspace?</h1>
                <p>A hackerspace (also referred to as a hacklab, hackspace or makerspace) is a community-operated, often not for profit (501(c)(3) in the United States), work space where people with common interests, often in computers, machining, technology, science, digital art or electronic art, can meet, socialize and collaborate.[1][2] Hackerspaces are comparable to other community-operated spaces with similar aims and mechanisms such as Fab Lab, men's sheds, and commercial for-profit companies such as TechShop. <small>From <a href="https://en.wikipedia.org/wiki/Hackerspace">wikipedia</a>.</p>
            </div>
        </div><!-- row -->

        <div class="row">
            <div class="col-md-6">
                <h2>Our Members</h2>
                <p>Of course there would not be a hacklab were it not for our members. Our membership spans many technical fields with those that have knowledge and experience and also those that wish to learn. The hacklab exists for everyone that would like to use it.  We welcome everyone, and enthusiastically celebrate diversity.</p>
            </div>
            <div class="col-md-6">
                <h2>Joining the hacklab</h2>
                <p>Our bills are paid primarily through the collection of membership fees from our members which are currently £20pcm. For more casual users of the space, we do also allow people to use the space under the supervision of a member and donations are appreciated. For casual users there is a suggested minimum donation of £5 per day. If you just want to hang around to get a feel for the space, we're not going to pressure you for a donation, so don't let that stop you coming along.</p>
            </div>
        </div><!-- row -->


        <div class="row">
            <div class="col-md-12">
                <h2>Current Board of Directors</h2>
            </div>
        </div><!-- row -->

        <div class="row">
            <div class="col-md-6">
                <img src="/img/hibby.jpg" style="width:100px;height:100px;" class="img-responsive alignleft imageborder">
                <h5>Hibby</h5>
                <p>Hibby's an engineer who works in telecoms and plays with radios.  He happens to have a mad passion for coffee, tea, music, technology, The occasional gin and shiny things.</p>
            </div>
            <div class="col-md-6">
                <img src="/img/ed.gif" style="width:100px;height:100px;" class="img-responsive alignleft imageborder">
                <h5>Ed Watson</h5>
                <p>I am an elearning developer who works mostly with dynamic languages and media production during the day, then plays with AVRs and desktop fabrication methods during the evening. If it has I/O, melted plastic and needs a dremel tool, it's awesome.</p>
            </div>
        </div><!-- row -->

        <div class="row">
            <div class="col-md-6">
                <img src="/img/Doc.png" style="width:100px;height:100px;" class="img-responsive alignleft imageborder">
                <h5>Doc Ocassi</h5>
                <p>"Culture can't catch its breath, and in the end a dead humanity lies next to its works, whose invention cost us so much of our intellect that we had none left to put them to use. We were complicated enough to build machines and too primitive to make them serve us." - <span title="Translated from German by Johnathan Franzen in his book 'The Kraus Project'">Karl Kraus "Apocalypse"</span></p>
            </div>
            <div class="col-md-6">
                <img src="/img/rob.png" style="width:100px;height:100px;" class="img-responsive alignleft imageborder">
                <h5>Robert McWilliam</h5>
                <p>I am an electronic engineer, working with FPGAs for accelerating computing or communication. For fun I play with a wider variety of electronics and occasionally build actual physical things.</p>
            </div>
        </div><!-- row -->

        <div class="row">
            <div class="col-md-6">
                <img src="https://s.gravatar.com/avatar/fb988ce06af50b01ccb18a15ad93cb69?s=80" style="width:100px;height:100px;" class="img-responsive alignleft imageborder"/>
                <h5>Andy Gaskell</h5>
                <p>I'm a web developer, making all sorts of Open Source things, often with Joomla.  I mainly like PHP, JS, backend, DevOps, APIs and that stuff.  I also like hacking stuff, playing with my kids, cooking, painting and gardening.</p>
            </div>
            <div class="col-md-6">
                &nbsp;
            </div>
        </div><!-- row -->

        <div class="row">
            <div class="col-md-12">
                <h2>Roll of Honour - Previous Directors</h2>
            </div>
        </div><!-- row -->

        <div class="row">
            <div class="col-md-6">
                <img src="https://0.gravatar.com/avatar/54eda92e520484f98b942ce02dfe7156" style="width:100px;height:100px;" class="img-responsive alignleft imageborder">     
                <h5>Tom Jones</h5>
                <p>I am a programmer and adventurer. From my trusty macbook I create software and hardware things, in a house by the sea. I like to hack on games, poke at registers. If it can be made to blink interesting colours I am interested.</p>
            </div>
            <div class="col-md-6">
                <img src="/img/carl.jpg" style="width:100px;height:100px;" class="img-responsive alignleft imageborder">
                <h5>Carl Anderson</h5>
                <p>Previosly employed by the University of Aberdeen as a Network Technician.
-I enjoy taking MOOCs, reading manuals, building things for my cat and being a rad motherfucker.</p>
            </div>
        </div><!-- row -->

        <div class="row">
                <div class="col-md-6">
                <img src="/img/irl.jpg" style="width:100px;height:100px;" class="img-responsive alignleft imageborder">
                <h5>Iain Learmonth</h5>
                <p>Hello. I'm Iain R. Learmonth a.k.a. irl. Nouns that can describe me include: hacker, researcher, developer and activist. I live in Aberdeen, Scotland, Europe, Earth, Milky Way. </p>
            </div>
                <div class="col-md-6">
                <img src="/img/calum.jpg" style="width:100px;height:100px;" class="img-responsive alignleft imageborder">           
                <h5>Calum Chisholm</h5>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
            </div>

        </div><!-- row -->

        <div class="row">
            <div class="col-md-6">
                <img src="/wiki_logo.png" style="width:100px;height:100px;" class="img-responsive alignleft imageborder">    
                <h5>Tony Shannon</h5>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
            </div>
            <div class="col-md-6">
                &nbsp;
            </div>
        </div><!-- row -->

    </div><!-- container -->
</section>		

<?php include('footer.php'); ?>

