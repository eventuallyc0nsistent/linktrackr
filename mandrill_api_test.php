<?php


require_once 'include/mailchimp-mandrill-api-php/src/Mandrill.php'; 

if($_POST)
{
	/*
 	capture name and email of user
	 */
	$email = $_POST['email'];
	$name  = $_POST['name'];
	// $tag = 'download-the-esf-policy-primer-on-microgrids-and-energy-security';
	// $tag = 'premium-report-natural-gas-and-renewables';
	$tag = 'primer-on-natural-gas';
	// $tag = 'primer-on-solar-energy-policy';

	try
	{

	$mandrill = new Mandrill('JoLOKzBCZCSLVOOrIeXg-g');
	$message = array(
	        'subject'=> 'ESF Policy Primer on Microgrids and Energy Security',
	        'from_email' => 'info@energysolforum.com',
	        'to' => array(
	            array(
	                'email' => $email,
	                'name' => $name,
	            )
	        ),
	        'important' => false,
	        'track_opens' => true,
	        'track_clicks' => true,
	        'view_content_link' => null,
	        'tags' => array($tag),
	    );
	
	$async = false;
	$result = $mandrill->messages->send($message, $async);
	} 
	catch(Mandrill_error $e)
	{
		// Mandrill errors are thrown as exceptions
	    echo 'A mandrill error occurred: ' . get_class($e) . ' - ' . $e->getMessage();
	    // A mandrill error occurred: Mandrill_Unknown_Subaccount - No subaccount exists with the id 'customer-123'
	    throw $e;
	}

	if($result[0]['status']=='sent')
	{
		echo "Thank You!";
	}

}




?>
<!doctype html>
<html>
<head>
	<title>Mandrill API Test</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	
</head>
<body>
	<div class="container">

		<form method="POST" action="">
			<div class="form" style="display:none">
				<label>Email</label>
				<input type="text" name="email"/>
				<label>Name</label>
				<input type="text" name="name"/>
			</div>
			<button class="btn">Download Now</button>
		</form>
	</div>
	<script>
		$(".btn").hover(function(){
			$('.form').show(500);
		});
		$
	</script>
</body>
</html>


