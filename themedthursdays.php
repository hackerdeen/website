<?php define('IN_SITE', 1); $page = "Events &raquo; Themed Thursdays"; include('header.php'); ?>

	<div class="container">
<section>
      <div class="row">
        <div class="col-md-12">
		<h1>Events &raquo; Themed Thursdays</h1>
<?php include('eventsbar.php'); ?>
<p>Every Thursday at 57North (until we run out of activities) is a Themed Thursday. Members of the space will organise (in the loosest meaning of the word) a themed night and these nights are open to the public. The nights are free for members of the hacklab, £5 for non-members.</p>

<?php

$tt = json_decode(file_get_contents("http://opentechcalendar.co.uk/api1/group/151/events.json"));

foreach ( $tt->data as $t ) { 
if ( ! ereg('TT', $t->summary) ) continue; ?>
<div class="panel panel-primary">
<div class="panel-heading"><?php echo(date("jS M Y", $t->start->timestamp)); ?>: <?php echo(str_replace("(TT)", "", $t->summary)); ?></div>
<div class="panel-body">
<p><?php echo($t->description); ?></p>
<br style="clear:both; line-height: 0px;">
</div><!-- panel-body -->
</div><!-- panel -->

<?php } //foreach ?>

 </div>
      </div>
</section>
</div><!-- container -->
<?php include('footer.php'); ?>
