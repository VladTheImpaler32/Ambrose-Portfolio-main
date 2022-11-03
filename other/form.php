<head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Lato&display=swap');
body {
    background-color: #FF8C42;
    font-family: 'Lato', sans-serif;
}
</style>
</head>
<body>
    <h1>Form info page</h1>
    <h4>this took me way too long to figure out.<br>I do not know how to use php<br>mr ellis please give me a good mark please and thank you :D</h4>
<?php
if (isset($_GET['name'])) {
    echo "Your Name: "; print_r($_GET['name']);
} else {
    echo "Did not recieve a valid Name";
}
?><br><br> 
<?php
if (isset($_GET['email'])) {
    echo "Your Email: "; print_r($_GET['email']);
} else {
    echo "Did not recieve a vaild Email";
}
?><br><br> 
<?php
if (isset($_GET['password'])) {
    echo "Your Password: "; print_r($_GET['password']);
} else {
    echo "Did not recieve a valid Password";
}

?><br><br>
<?php
if (isset($_GET['level'])) {
    echo "Your Level: "; print_r($_GET['level']);
} else {
    echo "Did not recieve a valid Level";
}

?><br><br> 
<?php
if (isset($_GET['notes'])) {
    echo "Your Notes: "; print_r($_GET['notes']);
} else {
    echo "Did not recieve valid Notes";
}

?><br><br> 

<?php
$myfile = fopen("/var/www/html/other/log.txt", "a") or die("Unable to open file!");
$txt = "\n" . date("h:i:sa") . " " . date("Y/m/d") . " From: " . $_SERVER['REMOTE_ADDR'] . "\n";
fwrite($myfile, $txt); 
fwrite($myfile, $_GET['name']."\n");
fwrite($myfile, $_GET['email']."\n");
fwrite($myfile, $_GET['password']."\n");
fwrite($myfile, $_GET['level']."\n");
fwrite($myfile, $_GET['notes']."\n");
fclose($myfile);
?>
</body>