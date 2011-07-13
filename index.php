<?php
    if(isset($_GET['name'])) {
?>
    <p>Hello, <?=$_GET['name']; ?>! It's nice meeting you.</p>
    <p>Did I get your name wrong!? Click <a href="index.php">here</a> and tell me again.</p>
<?php        
    } else {
?>
<style type="text/css">
    input[type=submit] {
        background: url(images/ok.png) no-repeat;
        padding-left: 18px;
    }
</style>
<p>Hello, world! My name is fimas. What is your name?</p>
<form action="index.php" method="get">
    <input type="text" name="name">
    <br>
    <input type="submit" value="Tell me your name!">
</form>
<?php
    }
?>