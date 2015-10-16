<html>
<HEAD>
<meta name="robots" content="noindex">
<TITLE>Ping test</TITLE>
</HEAD>

<BODY BGCOLOR="WHITE">
<table border="3" bordercolor="#c86260" bgcolor="#ffffcc" width="50%" cellspacing="5" cellpadding="3">
        <tr><td><H1>A Simple Ping test</H1></td></tr>
</table>
<TABLE><TR><TD COLSPAN=2> </TD></TR></TABLE>

<table border="3" bordercolor="#c86260" bgcolor="#ffffcc" width="50%" cellspacing="5" cellpadding="3">
<tr><td align="center" colspan="2"><?php $strHeading = "<h1>Ping tested: " . $_POST["ping_servername"] . "</h1>"; echo $strHeading; ?></td></tr>
<tr><td valign="top">

<?php
if (strpos($_POST["ping_servername"],'qwerty') !== false) {
    echo 'No valid ip/dns name.  '. $_POST["ping_servername"] ;
    break;
}
if (strpos($_POST["ping_servername"],'192.') !== false) {
    echo 'No valid ip/dns name.  '. $_POST["ping_servername"] ;
    break;
}
if (strpos($_POST["ping_servername"],'local') !== false) {
    echo 'No valid ip/dns name.  '. $_POST["ping_servername"] ;
    break;
}
if (strpos($_POST["ping_servername"],'rasp') !== false) {
    echo 'No valid ip/dns name.  '. $_POST["ping_servername"] ;
    break;
}
if (strpos($_POST["ping_servername"],'127.') !== false) {
    echo 'No valid ip/dns name.  '. $_POST["ping_servername"] ;
    break;
}
if ("" == trim($_POST["ping_servername"])) {
    echo 'No valid ip/dns name.  (empty string)' ;
    break;
}

                echo "ping -c ". $_POST["countvalue"]." -t ". $_POST["ttlvalue"]." -s ". $_POST["packetvalue"]." ". $_POST["ping_servername"];
                $output = shell_exec('ping -c'. $_POST["countvalue"].' -t '.$_POST["ttlvalue"].' -s '.$_POST["packetvalue"].' '.$_POST["ping_servername"]);
                echo "<pre>$output</pre>";

?>

	</tr>
        </body>
</head>
</html>

