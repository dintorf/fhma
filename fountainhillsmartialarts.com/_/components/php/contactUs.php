<?php
function spamcheck($field) {
  // Sanitize e-mail address
  $field=filter_var($field, FILTER_SANITIZE_EMAIL);
  // Validate e-mail address
  if(filter_var($field, FILTER_VALIDATE_EMAIL)) {
    return TRUE;
  } else {
    return FALSE;
  }
}
?>

<div id="contact" class="col-lg-8 col-lg-push-2 col-md-8 col-md-push-2 col-sm-8 col-sm-push-2 col-xs-12">
	<caption>
		<h2 style="color: white">Contact Us</h2>
	</caption>
	

	<div class="leftSection col-lg-6 col-md-6 col-sm-6">
	<br />
	

<?php 
$action = "";
if(isset($_REQUEST['action']))
	$action = $_REQUEST['action']; 
if ($action != "submit")    /* display the contact form */ 
    { 
    ?> 
    <p>If you'd like to get in touch with us or register for an event, please fill out the form below!</p>
    <form  action="" method="POST" enctype="multipart/form-data" onSubmit="return chkForm();"> 
    <input type="hidden" name="action" value="submit" />

    Event interested in:<br>
    <select name="event" id="event">
    	<option value="">None</option>
    	<option value="Taekwondo">Taekwondo</option>
    	<option value="PTK">Pekiti-Tirsia Kali (PTK)</option>
    	<option value="Birthday">Birthday</option>
    	<option value="Warrior Camp">Warrior Camp</option>
    	<option value="Summer Camp">Summer Camp</option>
    	<option value="Other">Other</option>
    </select><br>

    Your name:<br> 
    <input id="name" name="name" type="text" value="" size="30" placeholder="Full Name"/><br>

    Your child's name:<br> 
    <input id="cname" name="cname" type="text" value="" size="30" placeholder="Child's Name"/><br> 

    Your email:<br> 
    <input id="email" name="email" type="email" value="" size="30" placeholder="E-mail Address"/><br>

    Your phone number:<br>
    <input id="phone" name="phone" type="phone" value="" size="30" placeholder="Phone Number"/><br>

    Your message:<br> 
    <textarea id="message" name="message" placeholder="Enter your message." rows="5" cols="50"></textarea><br>
	
    What is 3 + 120?<br>  
    <input id="math" name="math" type="text" value="" size="30" /><br>
    
    <input type="submit" class="btn btn-danger" value="Send email"/> 
    <input type="reset" class="btn btn-danger" value="Reset">
    </form> 
    
    <?php 
	}
	else                /* send the submitted data */ 
    { 
    	if(isset($_REQUEST['math']) && $_REQUEST['math'] === "123"){
		    $event=$_REQUEST['event'];
		    $name=$_REQUEST['name'];
		    $cname= ($_REQUEST['cname'] == "") ? "N/A" : $_REQUEST['cname']; 
		    $email=$_REQUEST['email'];
		    $phone=$_REQUEST['phone']; 
		    $body=$_REQUEST['message'];

		    $message  = ($event === "") ? "" : "Event: $event
";
	    	$message .= "Name: $name 
Child's Name: $cname 
E-mail Address: $email 
Phone Number: $phone 

$body";
		 	// message lines should not exceed 70 characters (PHP rule), so wrap it
	    	$message = wordwrap($message, 70);

	        $from="From: $name<$email>\r\nReturn-path: $email"; 
	        $subject="Message from Website!"; 
	        // mail("dintorf@gmail.com", $subject, $message, $from); 
	        mail("fhmartialarts@gmail.com", $subject, $message, $from); 
	        echo "<script type='text/javascript'>alert('Thank you for the email! We will get back to you ASAP!');</script>"; 
	        echo "Thank you for the email! We will get back to you ASAP!"; 
        }
    }   
?> 

	</div>
	<div class="rightSection col-lg-6 col-md-6 col-sm-6">
		<div class="col-lg-12 col-md-12 col-sm-12"><div class="col-lg-1 col-md-1 col-sm-1"><h3><i class="fa fa-phone"></i></h3></div><div class="col-lg-11 align-bot"><h4>(602) 499-3778</h4></div></div>
		<div class="col-lg-12 col-md-12 col-sm-12"><div class="col-lg-1 col-md-1 col-sm-1"><h4><i class="fa fa-envelope"></i></h4></div><div class="col-lg-11"><h4>fhmartialarts@gmail.com</h4></div></div>
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12792.84874604251!2d-111.71005!3d33.586693!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x872ba28630a0c68b%3A0xf578f5dd395a00eb!2s11010+N+Saguaro+Blvd!5e1!3m2!1sen!2sus!4v1400043014877" width="300" height="225" frameborder="0" style="border:0"></iframe>
		<br />
		<h4>Like us on Facebook!</h4>
		<div class="fb-like" data-href="https://www.facebook.com/pages/Fountain-Hills-Martial-ArtsHwa-Rang-Kwan-of-Arizona/137130889672148" data-width="325" data-colorscheme="dark" data-layout="standard" data-show-faces="true" data-action="like" data-share="true"></div>
	</div>
</div>

<script type="text/javascript">
function chkForm(){
	if($('#name').val() == ""){
		alert("Please enter your full name.");
		$('#name').focus();
		return false;
	}
	else if($('#email').val() == ""){
		alert("Please enter your email address.");
		$('#email').focus();
		return false;
	}
	else if($('#phone').val() == ""){
		alert("Please enter your phone number.");
		$('#phone').focus();
		return false;
	}
	else if($('#message').val() == ""){
		alert("Please enter a message.");
		$('#message').focus();
		return false;
	}
	else if($('#math').val() != "123"){
		alert("Incorrect Captcha");
		return false;
	}
	return true;
}
</script>