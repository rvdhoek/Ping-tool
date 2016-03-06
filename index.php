<?php 
include_once("/var/www/analyticstracking.php");
session_start();

$publickey='6Le4kg8TAAAAAN86m9WiQLuWJs8HDxCa4Uly8kjV';
$privatekey='6Le4kg8TAAAAADtAm-_WBa6nLRaLasESgU2Umzwg';
if (!empty($publickey) && !empty($privatekey)){
if ($_SESSION['ping_valid'] != 1){
        print "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">\n";
        print "<html>\n";
        print "<head>\n";
        print "<link rel=\"apple-touch-icon\" href=\"apple-touch-icon.png\"/>";
        print "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=false\" />\n";
        print "<link type=\"text/css\" rel=\"stylesheet\" href=\"" . BASE_URI . "/" . CSS_FILE ."\" />\n";
        print "<title>Log In</title>\n";
        print "</head>\n";
        print '<body><b><form action="" method="post">';
	print '<H2>Please enter the code</H2>';
        require_once('../recaptcha-php-1.11/recaptchalib.php');

                # the response from reCAPTCHA
                $resp = null;
                # the error code from reCAPTCHA, if any
                $error = null;

                # was there a reCAPTCHA response?
        if ($_POST["recaptcha_response_field"]) {
                $resp = recaptcha_check_answer ($privatekey,$_SERVER["REMOTE_ADDR"],$_POST["recaptcha_challenge_field"],$_POST["recaptcha_response_field"]);
                if ($resp->is_valid) {
                        echo "You got it!";
                        $_SESSION['ping_valid'] = 1;
                        // fix problem with renew page
                        header('Location: '.$_SERVER['PHP_SELF']);
                   } else {
                        # set the error code so that we can display it
                        $error = $resp->error;
                        }
                }
echo recaptcha_get_html($publickey, $error);
echo '</br><input type="submit" value="submit" /></form></body></html>';
exit;
}}
?>

<HEAD>
<meta name="robots" content="noindex">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<TITLE>Pingtest</TITLE>
</HEAD>

<BODY BGCOLOR="WHITE">
<table border="3" bordercolor="#c86260" bgcolor="#ffffcc" width="50%" cellspacing="5" cellpadding="3">
        <tr><td><H1>A Simple Ping test</H1></td></tr>
</table>
<TABLE><TR><TD COLSPAN=2></TR></TABLE>

<table border="3" bordercolor="#c86260" bgcolor="#ffffcc" width="50%" cellspacing="5" cellpadding="3">

<tr><td align="center" colspan="2">MIJN MENU</td></tr>
<tr><td valign="top">
   <form method="post" action="handler.php">

        <p>Ping ip adres:</p>
	<input type="text" autocomplete="off" name="ping_servername"></p>
                <td class="auto-style5">
                        <p>Count:</p>
                        <input name="countvalue" type="range" min="1" max="100" value="4" onchange="CountshowValue(this.value)">
                        <span id="countval">4</span><span id="countval">
                        <script type="text/javascript">
                        function CountshowValue(newValue)
                        {
                                document.getElementById("countval").innerHTML=newValue;
                        }
                        </script>
                        <p>TTL:</p>
                        <input name="ttlvalue" type="range" min="20" max="248" value="128" onchange="TTLshowValue(this.value)" />
                        <span id="ttlval">128</span><span id="ttlval">
                        <script type="text/javascript">
                        function TTLshowValue(newValue)
                        {
                                document.getElementById("ttlval").innerHTML=newValue;
                        }
                        </script>
                        <p>Packetsize:</p>
                        <input name="packetvalue" type="range" min="1" max="100" value="56" onchange="PacketshowValue(this.value)" />
                        <span id="packetval">56</span><span id="packetval">
                        <script type="text/javascript">
                        function PacketshowValue(newValue)
                        {
                                document.getElementById("packetval").innerHTML=newValue;
                        }
                        </script>
         </td></tr>
                <td><input type="submit" name="Run test" value="Run Test" style="color:wheat;background-color:rosybrown"></td>
            </tr>
        </form>
</tr>
</html>
