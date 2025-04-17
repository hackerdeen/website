<?php $page = "Home";
 $description = "57North is a hacker collective with a shared space located in Aberdeen, Scotland. We meet regularly to share knowledge, hack on projects together, and build community.";
 include('header.php'); ?>

	<section id="jumbotron">
                <div class="container">
		<div class="row"><div class="col-md-12">
		<p class="animated fadeInDown animation-delay-8" style="text-align: center; margin-top: 20px; line-height: 100%; font-size: 64pt;">MAKE. LEARN.<br>SHARE. HACK.</p>
                </div></div></div>
	</section>

        <section id="mind-features">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                       <article class="mind-features-item hover animated bounceInLeft animation-delay-8">
                           <div class="item-icon">
                               <i class="fa fa-bolt"></i>
                           </div>
                           <div class="item-content">
                               <h3>Electronics Hacking</h3>
                               <p>We have a range of tools for electronics projects including soldering irons, power supplies, oscilloscopes, multimeters and more.</p>
                               <!-- a href="#" class="btn btn-success pull-right">Read more</a -->
                           </div>
                       </article> <!-- mind-features-item -->
                   </div>
                   <div class="col-md-3 col-sm-6">
                       <article class="mind-features-item hover animated bounceInLeft animation-delay-3">
                           <div class="item-icon">
                               <i class="fa fa-code"></i>
                           </div>
                           <div class="item-content">
                               <h3>Software Hacking</h3>
                               <p>The lab provides a social environment for software hacking, a variety of tools for programming embedded platforms and a HPC cluster for parallel programming.</p>
                               <!-- a href="#" class="btn btn-success pull-right">Read more</a -->
                           </div>
                       </article> <!-- mind-features-item -->
                   </div>
                   <div class="col-md-3 col-sm-6">
                       <article class="mind-features-item hover animated bounceInRight animation-delay-6">
                           <div class="item-icon">
                               <i class="fa fa-wrench"></i>
                           </div>
                           <div class="item-content">
                               <h3>Materials Hacking</h3>
                               <p>We have a range of carpentry tools for woodwork and have experience in hand mouldable plastics for making cases for electronics projects.</p>
                               <!-- a href="#" class="btn btn-success pull-right">Read more</a -->
                           </div>
                       </article> <!-- mind-features-item -->
                   </div>
                   <div class="col-md-3 col-sm-6">
                       <article class="mind-features-item hover animated bounceInRight animation-delay-10">
                           <div class="item-icon">
                               <i class="fa fa-mobile"></i>
                           </div>
                           <div class="item-content">
                               <h3>Communications Hacking</h3>
                               <p>Our hacklab network provides both IPv4 and IPv6 Internet access for all members in the lab. We also have a series of enterprise-grade networking equipment for experimentation, study and use in projects.</p>
                               <!-- a href="#" class="btn btn-success pull-right">Read more</a -->
                           </div>
                       </article> <!-- mind-features-item -->
                   </div>
                </div>
            </div>
        </section>


        <section class="animated fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h2 class="section-title">About us</h2>
                        <img src="img/home_about.jpg" class="hidden-xs img-responsive alignleft imageborder" alt="Image">
                        <img src="img/home_about.jpg" class="visible-xs img-responsive alignleft imageborder" style="width: 100%;" alt="Image">
                        <p class="p-lg">57North is a hacker collective with a shared space (known as the hacklab, hackspace, hackerspace, or simply just the space) located in Aberdeen, Scotland. We meet regularly to share knowledge, hack on projects together, and build community. If you're interested in joining 57North, come to some of our public meetings or join the 57North mailing list.</p>
                        <p class="p-lg">57North (previously Hackerdeen) was born from the efforts of a group of like-minded people in Aberdeen. Following two in-person meetings at the University of Aberdeen we got our own space to move into and have grown rapidly ever since. We have a range of electronics and computing tools available to our members that have been donated or loaned to us by members and local organisations.</p>
			            <p class="p-lg">Our current home is Suite H, Kettock Lodge, Innovation Park Campus Two, Bridge of Don, Aberdeen, AB22 8GU.</p>
                    </div>
                    <div class="col-md-4">
                        <h2 class="section-title">Quick Information</h2>
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                            Tuesday Meetup
                                        </a>
                                    </h4>
                                </div>

                                <div id="collapseOne" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        Every Tuesday at 1900h there is a meetup at the space not only for members but also for those that may want to join us. Typically, the projects people will be working on will be announced on the mailing list in advance of the meeting.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed">
                                            Workshops
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Workshops are occasionally organised by 57North's members and are open to the public. You can find more details about upcoming workshops on our events page.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- container -->
        </section>


	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="section-title">Sponsors</h2>
					<a href="/sponsors#aaisp"><img style="height: 80px;" src="/img/andrews_and_arnold_logo.png" alt="AAISP: Andrews & Arnold Ltd"></a>
					<a href="/sponsors#bitfolk"><img style="height: 80px;" src="/img/bitfolk.gif" alt="Bitfolk Limited"></a>
					<a href="/sponsors#inferno"><img style="height: 80px;" src="/img/inferno.svg" alt="Inferno Communications"></a>
					<br>You can find more information about our sponsors, including the services they provide to us, on our <a href="/sponsors">sponsors page</a>.
				</div>
			</div>
		</div>
	</section>

<?php include('footer.php'); ?>
