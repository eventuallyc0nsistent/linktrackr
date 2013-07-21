<?
require_once ('header.php');
require_once ('include/swift-mailer/lib/swift_required.php');

// echo function_exists('proc_open') ? "Yep, that will work" : "Sorry, that won't work";

// Values from POST
$message = $_POST['message'];

// Create the message
$message = Swift_Message::newInstance()

// Give the message a subject
->setSubject($message)

// Set the From address with an associative array
->setFrom(array('john@doe.com' => 'John Doe'))

// Set the To addresses with an associative array
->setTo(array('receiver@domain.org', 'other@domain.org' => 'A name'))

// Give it a body
->setBody('Here is the message itself')

// And optionally an alternative body
->addPart('<q>Here is the message itself</q>', 'text/html')

// Optionally add any attachments
->attach(Swift_Attachment::fromPath('my-document.pdf'))

;


?>
<div class="container">
<form class="well span8" action="contact_form.php">
  <div class="row">
		<div class="span3">
			<label>First Name</label>
			<input type="text" class="span3 height30" placeholder="Your First Name">
			<label>Last Name</label>
			<input type="text" class="span3 height30" placeholder="Your Last Name">
			<label>Email Address</label>
			<input type="text" class="span3 height30" placeholder="Your email address">
          	<label>Subject</label>
			<select id="subject" name="subject" class="span3">
				<option value="na" selected="">Choose One:</option>
				<option value="service">General Customer Service</option>
				<option value="suggestions">Suggestions</option>
				<option value="product">Product Support</option>
			</select>
		</div>
		<div class="span5">
			<label>Message</label>
			<textarea name="message" id="message" class="input-xlarge span5" rows="10"></textarea>
		</div>
	
		<button type="submit" class="btn btn-primary pull-right">Send</button>
	</div>
</form>
</div>
<?php require_once ('footer.php'); ?>