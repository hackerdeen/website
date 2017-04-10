<?php define('IN_SITE', 1); $page = "Events &raquo; Calendar"; include('header.php'); ?>

	<div class="container">
<section>
      <div class="row">
        <div class="col-md-12">
		<h1>Events &raquo; Calendar</h1>
<?php include('eventsbar.php'); ?>
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

$footerStuff .= shell_exec("python /usr/local/bin/otc2fc.py ".escapeshellarg("http://opentechcalendar.co.uk/api1/group/151/events.json"));

$footerStuff .= <<<HTML
, timeFormat: { '': 'h:mm{ - h:mm}' }	
		});
		
	});
</script>
HTML;

include('footer.php'); ?>
