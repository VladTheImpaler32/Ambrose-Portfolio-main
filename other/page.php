<?php
if (isset($_POST['pass']) && $_POST['pass'] == 'hillman') {
    echo "welcome to page";
} else {
    header('Location:form.html');
}
?>
<html>
<HEAD>
<TITLE>ambrose allison</TITLE>
<link rel="stylesheet" href="main1.css" media="screen" /> <link rel="stylesheet" href="mobile1.css" media="screen and (max-device-width: 800px)" />
 <media="screen and (max-device-width: 800px)" />
<meta name="description" content="other">
</HEAD>
<meta name="viewport" content="width=device-width, initial-scale=0.7,"/>

<font style="font-family:times;font-size:56px;">
<body onload="{load();}" style="word-wrap: initial; background-color: black">

&nbsp;<p style="text-decoration:none; font-size:56px;"><font color=#EA638C>&nbsp;&nbsp;&nbsp;you made it!</font></p>
<!-- &nbsp;<p style="text-decoration:none; font-size:36px;"><font color=#30343F>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;now what?</font></p> -->
<<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <form method="post" name="form" action="https://www.ambroseallison.com/other/leaderboard.php"> 
        <input type="text"  value="ambrose" name="userName" id="userName">
        <input type="number"  value="68" name="score" id="score">
        <input type="number"  value="1" name="type" id="type">
        <input type="button" value="ajax POST" onclick="{send();}">
        <input type="submit" name="submit" value="form POST" id="submit">
    </form><br><br>

    <div id="div"></div>
    <script>

        function send() {
            let userName = document.getElementById('userName').value;
            let score = document.getElementById('score').value;
            let type = document.getElementById('type').value;
            sendData = {userName, score, type};

                $.ajax({
                        type        : 'POST', 
                        url         : 'https://www.ambroseallison.com/other/leaderboard.php', 
                        data        : sendData, 
                        success: function( response ) {
                            console.log( response );
                        }
                });
            };
    </script>
</body>

</html>