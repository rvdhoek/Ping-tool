<html>
<HEAD>
<meta name="robots" content="noindex">

<TITLE>Ping test</TITLE>
</HEAD>

<BODY BGCOLOR="WHITE">
<H1>A simple Ping test</H1>

<table border="3" bordercolor="#c86260" bgcolor="#ffffcc" width="50%" cellspacing="5" cellpadding="3">

<tr><td align="center" colspan="2">MIJN MENU</td></tr>
<tr><td valign="top">
   <form method="post" action="handler.php">

        <p>Ping ip adres:</p>
        <input type="text" name="ping_servername"></p>

                <td class="auto-style5">
                        <p>Count:</p>
                        <!-- <input name="countvalue" type="number" value="1" min="1" max="1000" style="color:red"> -->


                        <input name="countvalue" type="range" min="1" max="100" value="1" onchange="showValue(this.value)" />
                        <span id="range">1</span><span id="range"></span>
                        <script type="text/javascript">
                        function showValue(newValue)
                        {
                                document.getElementById("range").innerHTML=newValue;
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



