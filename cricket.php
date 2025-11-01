<?php
$cricket=array("virat","dhoni","sachin","sehwag");
echo"<br>Displaying names in table format <br/>";
echo"<br>============================<br/>";
echo"<br>Names pf cricket players as stored in an array:<br/>";
print_r($cricket);
echo"<br><br>Names of cricket players as stored in an table:<br/>";
echo"<br><table border=2><tr><th>player Names</th></tr><br/>";
echo"<tr><td>$cricket[0]</td></tr>";
echo"<tr><td>$cricket[1]</tr></td>";
echo"<tr><td>$cricket[2]</tr></td>";
echo"<tr><td>$cricket[3]</tr></td>";
echo"</table>";
?>