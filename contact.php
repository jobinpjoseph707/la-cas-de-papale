<?php
 $name = $_REQUEST['name'];
 $email = $_REQUEST['email'];
 $message = $_REQUEST['comt'];

if(empty($name) || empty($email)  || empty($message))
{
	echo "please fill all";
}
else
{
	mail("jobinpjoseph006@gmail.com", "money", $message,"from: $name < $email >");
	echo "<script type='text/javascript'>alert('your message sent succesfully');
	window.history.log(-1);
	</script>"
}
?>
