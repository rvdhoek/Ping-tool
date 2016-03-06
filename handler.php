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
function disable_ob() {
// Turn off output buffering
ini_set('output_buffering', 'off');
// Turn off PHP output compression
ini_set('zlib.output_compression', false);
//Flush (send) the output buffer and turn off output buffering
//ob_end_flush();
while (@ob_end_flush());
// Implicitly flush the buffer(s)
ini_set('implicit_flush', true);
ob_implicit_flush(true);
//prevent apache from buffering it for deflate/gzip
header("Content-type: text/plain");
header('Cache-Control: no-cache'); // recommended to prevent caching of event data.
for($i = 0; $i < 1000; $i++)
{
echo '  ';
}
ob_flush();
flush();
}

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
        	disable_ob();
                $output = shell_exec('ping -c'.escapeshellarg($_POST["countvalue"]).' -t '.escapeshellarg($_POST["ttlvalue"]).' -s '.escapeshellarg($_POST["packetvalue"]).' '.escapeshellarg($_POST["ping_servername"]).' 2>&1; echo $?');
                echo "<pre>$output</pre>";
	ob_flush();
	flush();
?>

	</tr>
        </body>
</head>
</html>



