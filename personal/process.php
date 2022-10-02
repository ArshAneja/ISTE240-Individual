<?php
$visitor = $_POST['visitor'];
$groupNum = $_POST['groupNum'];
$vdate = $_POST['vdate'];
$place = $_POST['fplace'];
$rating = $_POST['rating'];

$destination_email = "asa1712@rit.edu,RITISTprofessor@gmail.com";
$email_subject = "NYC - Vistor Arsh Aneja";
$email_body .= "Vistor name $visitor\n";
$email_body .= "Group Size $groupNum\n";
$email_body .= "Date visited $vdate\n";
$email_body .= "Favorite place $place\n";
$email_body .= "\n Rating: $rating";

mail($destination_email, $email_subject, $email_body);
echo "Data Sent \n";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Thank you for your Feedback</title>
    <script src = "assets/images/mouseover.js"></script>
</head>

<body>

<a href="https://people.rit.edu/asa1712/iste240/personal/personal/feedback.html">
        <img class="NoBorder" src="assets/images/home_blue.png" id="home" alt="Home"    title="Home"
           onmouseover="change('home','assets/images/home_red.png')"
           onmouseout ="change('home','assets/images/home_blue.png')" />
</a>
</body>
</html>