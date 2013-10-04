<?
require_once ('header.php');
require_once('mysql_connect.php');
require_once ('include/swift-mailer/lib/swift_required.php');
$home = 'http://'.$_SERVER['SERVER_NAME'].'/linktrackr/index.php';

//fetch the row of the last insert
$query = "SELECT id FROM users ORDER BY id DESC LIMIT 1";
$result = $mysqli->query($query);

while ($row=$result->fetch_assoc())
{
	$id = $row['id'];
}

$id++ ;
$link = $home.'?uid='.$id;

// Create the Transport
$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465,"ssl")
  ->setUsername('username')
  ->setPassword("password") ;

// Create the Mailer using your created Transport
$mailer = Swift_Mailer::newInstance($transport);

// echo function_exists('proc_open') ? "Yep, that will work" : "Sorry, that won't work";

// Values from POST
if(isset($_POST))
{
	
	

	if(isset($_POST['to-address'])) 
	{
		
		$to_address = $_POST['to-address'];

		// dummy insert
		$query = "INSERT INTO users (`email`,`link`,`id`) VALUES ('$to_address','$link',$id)";
		$mysqli->query($query);		

		// Create the message
		$message = Swift_Message::newInstance()	;

		// Give the message a subject
		$message->setSubject($_POST['subject']);

		$body = $_POST['message'];
		// Give the message a subject
		$message->setBody($body);

		if(isset($_POST['from-address'])) 
		{
		
			// Set the from addresses with an associative array
			$message->setFrom(array($_POST['from-address']));
		}

		// Set the From address with an associative array
		$message->setTo($to_address);
		
		// Send the message
		$numSent = $mailer->send($message);

		printf("Sent %d messages\n", $numSent);
	

	}	

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
        </div>
		<div class="span5">
			<br>
			<input type="text" class="span5	height30" name="subject" placeholder="Subject">
			<label>Message</label>
			<textarea name="message" id="message" class="input-xlarge span5" rows="10"></textarea>
			<label>Paste the link below</label>
			<?php echo $link ; ?>
		</div>
	
		<button type="submit" class="btn btn-primary pull-right">Send</button>
	</div>
</form>
</div>
<?php require_once ('footer.php'); ?>
