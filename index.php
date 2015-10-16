<?php include_once("/var/www/analyticstracking.php"); ?>
<html>
<HEAD>
<meta name="robots" content="noindex">
<TITLE>Pingtest</TITLE>
</HEAD>

<BODY BGCOLOR="WHITE">
<table border="3" bordercolor="#c86260" bgcolor="#ffffcc" width="50%" cellspacing="5" cellpadding="3">
        <tr><td><H1>A Simple Ping test</H1></td></tr>
</table>
<TABLE><TR><TD COLSPAN=2> </TD></TR></TABLE>

<table border="3" bordercolor="#c86260" bgcolor="#ffffcc" width="50%" cellspacing="5" cellpadding="3">

<tr><td align="center" colspan="2">MIJN MENU</td></tr>
<tr><td valign="top">
   <form method="post" action="handler.php">

        <p>Ping ip adres:</p>
<input type="text" name="ping_servername"></p>
                <td class="auto-style5">
                        <p>Count:</p>
                        <input name="countvalue" type="range" min="1" max="100" value="4" onchange="CountshowValue(this.value)" />
                        <span id="countval">4</span><span id="countval"></span>
                        <script type="text/javascript">
                        function CountshowValue(newValue)
                        {
                                document.getElementById("countval").innerHTML=newValue;
                        }
                        </script>
                        <p>TTL:</p>
                        <input name="ttlvalue" type="range" min="20" max="248" value="128" onchange="TTLshowValue(this.value)" />
                        <span id="ttlval">128</span><span id="ttlval"></span>
                        <script type="text/javascript">
                        function TTLshowValue(newValue)
                        {
                                document.getElementById("ttlval").innerHTML=newValue;
                        }
                        </script>
                        <p>Packetsize:</p>
                        <input name="packetvalue" type="range" min="1" max="100" value="56" onchange="PacketshowValue(this.value)" />
                        <span id="packetval">56</span><span id="packetval"></span>
                        <script type="text/javascript">
                        function PacketshowValue(newValue)
                        {
                                document.getElementById("packetval").innerHTML=newValue;
                        }
                        </script>
         </td></tr>
               </td>
                <td><input type="submit" name="Run test" value="Run Test" style="color:wheat;background-color:rosybrown" /></td>
            </tr>
        </form>
</tr>
</HEAD>
</html>
