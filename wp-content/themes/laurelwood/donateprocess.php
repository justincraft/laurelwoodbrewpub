<?php 

function checkInput($post){
    // if form contains invalid characters return false
    if ($post['honey']=='human' && $post['username'] == '') {
    foreach ($_REQUEST as $var) {
        if ((stristr($var, "cc:") != false) || (stristr($var,"bcc:") != false) || (stristr($var, "Content-type:") != false) || (stristr($var, "MIME-Version:") != false)) {
            return false;
        }
    }
    } else { return false; }
    return true;
}

if (checkInput($_POST)) {
    $message = "\n Event Name: " . $_POST["eventname"];
    $message .= "\n Event Location: " . $_POST["eventlocation"];
    $message .= "\n Event Date: " . $_POST["eventdate"];
    $message .= "\n Start Time: " . $_POST["eventstart"];
    $message .= "\n End Time: " . $_POST["eventend"];
    $message .= "\n Attendance estimate: " . $_POST["estimate"];
    $message .= "\n Will other alcohol be served? " . $_POST["commlist"];
    $message .= "\n What sort of alcohol? " . $_POST["whatsort"];
    $message .= "\n Event type: " . $_POST["type"] . " " . $_POST["otherexplain"];
    $message .= "\n Years running: " . $_POST["yearsrunning"];
    $message .= "\n Last year's attendance: " . $_POST["attendance"];
    $message .= "\n Have we ever donated to your organization in the past?: " . $_POST["pastdonate"];
    $message .= "\n What items did we donate? " . $_POST["itemsdonated"];
    $message .= "\n Who will benefit from the event? " . $_POST["whobenefits"];
	
    $message .= "\n\n Organization name: " . $_POST["orgname"];
    $message .= "\n Is your organization a charity or non-profit? " . $_POST["ischarity"] . $_POST["otherexplain"];
    $message .= "\n Point of contact: " . $_POST["contact"];
    $message .= "\n Contact's phone: " . $_POST["phone"];
    $message .= "\n Contact's email: " . $_POST["email"];
    $message .= "\n What part of the community do you serve?: " . $_POST["whatpart"];
    $message .= "\n How will you advertise your event?: " . $_POST["advert"];
    $message .= "\n Would you like to include Laurelwood's name or logo with your advertising materials? " . $_POST["adlogo"];
    $message .= "\n What other groups (if any) will be supporting this event? " . $_POST["support"];
    $message .= "\n How did you hear about Laurelwood Brew Pub? " . $_POST["howheard"];
    $message .= "\n May we list you on our website as a \"Partner in the Community?\" " . $_POST["commlist"];
	$message .= "\n What is your URL? " . $_POST["url"];
    $message .= "\n Would you be willing to list us as a sponsor on your site with a reciprocal link? " . $_POST["sponsor"];
	
    $message .= "\n\n What would you like to have donated? " . $_POST["whatdonated"] . $_POST["otherdonate"];;
    $message .= "\n How much / how many? " . $_POST["howmuch"];
    $message .= "\n How will the donation be used? " . $_POST["howused"];
	$message .= "\n\n";
	
	// add extra info with the $message .= "\nItem: " . $_POST["ItemID"]; format
	
	// The .= appends the extra info to the message and the "ItemID" comes from 
	// the ID of the element in the form.
	
    $to = "Desi <desi@laurelwoodbrewpub.com.test-google-a.com>, Justin <justincraft@gmail.com>";
	// add multiple addresses separated by commas: Name <example@example.com>, NewName <example@example.com>
	$subject = "Laurelwood Donation Request Form";
    $headers = "From: " . $_POST["contact"] . " <" . $_POST["email"] . ">\r\n";
	
	mail($to, $subject, $message, $headers) or die("email error");
	
	header("Location: http://www.laurelwoodbrewpub.com/community/donation-request-form-thank-you/");
	// Redirects to a thank you page after form is submitted.
	exit;
} else {
    // email injection found
	echo "Please use only regular letters and punctuation.<br />Email strings such as bcc: are not allowed.";
	exit;
}

?>