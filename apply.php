<?php define('IN_SITE', 1); $page = "Apply &raquo; Membership"; include('header.php'); ?>

        <div class="container">

<h1>Membership Application</h1>

<p>Thank you for showing interest in joining 57North Hacklab.</p>

<p>Any person who wishes to become a member of the hacklab must submit an
application for membership, along with a remittance to meet the first
month's subscription (£20). The application will then be considered by the
board of directors.</p>

<p><b>You must be at least 18 years of age to become a member of 57North
Hacklab Ltd.</b></p>

<p>On this page, you can complete your application for membership, but your
application will not be considered until you have submitted your first month's
subscription. Should your application be denied, you will be entitled to a full
refund.</p>

<p>We will automatically send an email with details from the "Introduction"
section to our public discussion mailing list. This allows other members to
give input on the decision as to whether or not to approve your membership.
The board does not have to take member input into consideration. More
importantly, it allows other members to spot when new members are joining with
similar interests to their own and encourages collaboration.</p>

<p>The "Personal Details" section will not be made public and will be used only
for official 57North Hacklab administration purposes.</p>

<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Introduction Details</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nick">Desired Username</label>  
  <div class="col-md-6">
  <input id="nick" name="nick" placeholder="Username" class="form-control input-md" required="" type="text">
  <span class="help-block">The name which you would like to be known by when using electronic systems. This will be used as your username for space services.</span>  
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="background">Background</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="background" name="background" placeholder="I formally lived in the West Country before moving here due to an unplanned uprooting. I am an out-of-work actor partial to hot tea and dressing gowns." rows="5" cols="80"></textarea>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="interests">Interests</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="interests" name="interests" placeholder="I have an interest in travel and ebook reading. I enjoy hacking bathtowels in new and interesting ways." rows="5" cols="80"></textarea>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="knowledge">Knowledge and Skills</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="knowledge" name="knowledge" placeholder="I can understand all languages known to creation and have experience with very low-budget orbital hardware." rows="5" cols="80"></textarea>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="ideas">Ideas and Aims</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="ideas" name="ideas" placeholder="I wish to gain more hands-on independent knowledge about electronics and product design in general, so that if the world ends I can at least fix my digital watch." rows="5" cols="80"></textarea>
  </div>
</div>

</fieldset>

<fieldset>

<!-- Form Name -->
<legend>Personal Details</legend>

<p>The details in this section will only be used to record your membership on our register of members and for official 57North Hacklab administrative purposes.</p>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="fullname">Full Name</label>  
  <div class="col-md-6">
  <input id="fullname" name="fullname" placeholder="Your Full Name" class="form-control input-md" type="text">
  <span class="help-block">This name will be listed on our register of members.</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email Address</label>  
  <div class="col-md-6">
  <input id="email" name="email" placeholder="Your Email Address" class="form-control input-md" type="text">
  <span class="help-block">This email address will be the email address subscribed to our mailing list and any optional mailing list you select below.</span>  
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="address">Address</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="address" name="address" cols="80" rows="5" placeholder="This address will be listed on our register of members."></textarea>
  </div>
</div>

</fieldset>

<fieldset>

<!-- Form Name -->
<legend>Mailing Lists</legend>

<p>As a member, you must be subscribed to the announcements list, which is a low volume list. It is your responsibility to ensure you recieve messages from this list or to regularly check the archives online if you choose to unsubscribe. It is also highly recommended that you are subscribed to the discussion list. You may also choose to subscribe to our optional mailing lists.</p>

<!-- Multiple Checkboxes -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Mailing-Lists">Subscribe To</label>
  <div class="col-md-4">
  <div class="checkbox">
    <label for="Mailing-Lists-0">
      <input name="Mailing-Lists" id="Mailing-Lists-0" value="announce" type="checkbox" checked="checked" disabled="disabled">
      Announcements
    </label>
	</div>
  <div class="checkbox">
    <label for="Mailing-Lists-1">
      <input name="Mailing-Lists" id="Mailing-Lists-1" value="discuss" type="checkbox" checked="checked">
      Discussion
    </label>
	</div>
  <div class="checkbox">
    <label for="Mailing-Lists-2">
      <input name="Mailing-Lists" id="Mailing-Lists-2" value="ctte" type="checkbox">
      Board Announcements
    </label>
	</div>
  <div class="checkbox">
    <label for="Mailing-Lists-3">
      <input name="Mailing-Lists" id="Mailing-Lists-3" value="music" type="checkbox">
      Music Discussion
    </label>
	</div>
  </div>
</div>

</fieldset>

<fieldset>

<!-- Form Name -->
<legend>Declaration</legend>

<!-- Multiple Checkboxes -->
<div class="form-group">
  <label class="col-md-4 control-label" for="declaration">Declaration</label>
  <div class="col-md-4">
  <div class="checkbox">
    <label for="declaration-0">
      <input name="declaration" id="declaration-0" value="declaration" type="checkbox">
      I declare that the information given in the personal details section is accurate to the best of my knowledge and that I would like to become a member of 57North Hacklab Ltd.
    </label>
	</div>
  </div>
</div>
</fieldset>

<!-- Button (Double) -->
<div class="form-group">
  <div class="col-md-4">&nbsp;</div>
  <div class="col-md-8">
    <button id="submit" name="submit" class="btn btn-success">Submit Form</button>
    <button id="reset" name="reset" class="btn btn-danger">Reset Form</button>
  </div>
</div>


</form>

</div>

<?php include('footer.php'); ?>
