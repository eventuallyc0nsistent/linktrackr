<?
require_once ('header.php');
require_once('mysql_connect.php');
require_once ('include/swift-mailer/lib/swift_required.php');
$home = 'http://'.$_SERVER['SERVER_NAME'].'/linktrackr/index.php';


// Create the Transport
$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465,'ssl')
  ->setUsername('kirankoduru11')
  ->setPassword('mostwanted')
  ;

/*
You could alternatively use a different transport such as Sendmail or Mail:

// Sendmail
$transport = Swift_SendmailTransport::newInstance('/usr/sbin/sendmail -bs');

// Mail
$transport = Swift_MailTransport::newInstance();
*/

// Create the Mailer using your created Transport
$mailer = Swift_Mailer::newInstance($transport);

// echo function_exists('proc_open') ? "Yep, that will work" : "Sorry, that won't work";

// Create the message
$message = Swift_Message::newInstance()	;

// Give the message a subject
$message->setSubject('My Subject');

// Values from POST
if(isset($_POST)){
	if(isset($_POST['message'])) {
		$body = $_POST['message'];

		// Give the message a subject
		$message->setBody($body);
	}

	if(isset($_POST['to-address'])) {
				
		$to_addresses = array();		
		
		// dummy insert
		$query = "INSERT INTO users (email,link) VALUES ('krk311','hello')";
		$mysqli->query($query);
		$new_id = $mysqli->insert_id;
		
		$to_address = $_POST['to-address'];

		// Set the From address with an associative array
		$message->setFrom(array($to_address));

		$to_addresses = explode(',', $to_address);		
		foreach ($to_addresses as $key => $value) {
			$new_id++;
			$link = $home.'?uid='.$new_id;
			$query = "INSERT INTO users (email,link,id) VALUES ('$value','$link',$new_id)";
			$mysqli->query($query);			
		}

	}	

	if(isset($_POST['from-address'])) {
	
		// Set the from addresses with an associative array
		$message->setFrom(array($_POST['from-address']));
	
	}

// Send the message
$numSent = $mailer->send($message);

printf("Sent %d messages\n", $numSent);


}


?>
<div class="container">
<form class="well span8" action="contact_form.php" method="POST">
  <div class="row">
		<div class="span3">
			<label>From Address</label>
			<input type="text" class="span3 height30" name="from-address" placeholder="Your Email">
			<label>To Address</label>
			<input type="text" class="span3 height30" name="to-address" placeholder="To Email Address">
          	<label>Subject</label>
			<select id="subject" name="subject" class="span3">
				<option value="na" selected="">Choose One:</option>
				<option value="service">Send to all</option>
				<option value="suggestions">Send to one</option>
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