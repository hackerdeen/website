<?php define('IN_SITE', 1); $page = "Events &raquo; Calendar"; include('header.php'); ?>

<div class="container">
  <section>
    <div class="row">
      <div class="col-md-12">
        <h1>Open Evenings</h1>
        <p>Every Tuesday from around 1900h there is a meetup at the space not only for members but also for those that may want to join us. Typically, the projects people will be working on will be announced on the mailing list in advance of the meeting. Come along to work on your project, socialise with members, or if you're new, just to find out more about us.</p>
    
        <p>Of course, the space is always available for members to access via <a href="https://wiki.57north.org.uk/index.php/Projects:Doorbot">doorbot</a>. If you do not have a key to the front door, it is always a good idea to co-ordinate with one of the keyholders beforehand in case the building has been locked.</p>

        <h1>Calendar</h1>
        <div id="calendar"></div>
        <p><i>Powered by <a href="http://opentechcalendar.co.uk/">Open Tech Calendar</a>.</i></p>
      </div>
    </div>
</section>
</div><!-- container -->
<?php

$footerStuff = <<<HTML
<script type="text/javascript">
	$(document).ready(function() {

	$('#calendar').fullCalendar({
		header: {
			left: 'prev,next today',
			center: 'title',
			right: 'month,agendaWeek,agendaDay'
		},
		editable: false,
		events: 
HTML;

$footerStuff .= shell_exec("python /usr/local/bin/otc2fc.py ".escapeshellarg("https://opentechcalendar.co.uk/api1/venue/941/events.json"));

$footerStuff .= <<<HTML
, timeFormat: { '': 'h:mm{ - h:mm}' }	
		});
		
	});
</script>
HTML;

include('footer.php'); ?>
