

<?php
$link = mysqli_connect("localhost", "root", "", "ecom");
$added_on=date('Y-m-d h:i:s');
$sql="INSERT INTO contact_us (name, email, mobile, comment, added_on) VALUES ('$_POST[n]', '$_POST[e]','$_POST[m]', '$_POST[t]', '$added_on')";

if($link->query($sql) === true)
{
	
    ?><script>
    alert('Message has sent successfully!! Thank You!');
    location.replace("contact.php");
    </script><?php
}
else
{
  echo "ERROR: Could not able to execute $sql.".$link->error;
}
$link->close(); 
?>
<html>
<body>
</body>
<html>