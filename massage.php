
<!DOCTYPE html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name = htmlspecialchars($_REQUEST['sname']);
if (empty($name)) {
echo "Empty Name";
} else {
echo $name;
}
}
?>


<?php
echo("Address: " . $_POST['Add'] . "<br />\\n");

{
“app”: “Name of the incoming message app”,
“sender”: “A person’s name or number who is sending you the message”,
“message”: “Incoming message”
}

{
“reply”: “Hi, we have received your request, thanks for contacting”
}

?>
  
<html>
<body>
   
  
</body>
</html>
