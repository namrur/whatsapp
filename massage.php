
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

<body>
<html>
  
<form action="Demo.php" method="post">
The Name: <input type="text" name="Name"><br>
The E-mail: <input type="text" name="Email"><br>
<input type="submit">

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
  
</body>
</html>
