<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
<?php
    if(isset($_GET['name'])) {
?>
    <p>Hello, <?php echo $_GET['name']; ?>! It's nice meeting you.</p>
    <p>Did I get your name wrong!? Click <a href="index.php">here</a> and tell me again.</p>
<?php        
    } else {
?>
<p>Hello, world! My name is fimas. What is your name?</p>
<form action="index.php" method="get" name="name_form">
    <p>
        <input type="text" name="name">
    </p>
    <p>
        <button onclick="document.name_form.submit"><img src="images/ok.png">Tell me your name!</button>
    </p>
</form>
<?php
    }
?>