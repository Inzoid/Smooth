<?php
	session_start();
?>
<form action="finish.php" method="post" >
<table>
	<tr> 
		<td> Total </td>
		<td> = </td>
	    <td> <input type="hiden" name="total" value="<?php echo $_SESSION['checkout'] ; ?>">
	</td>
</tr>
   <tr>
   	<td> Bayar </td>
   	<td> = </td>
   	<td> <input type="number" name="bayar"> </td>
   </tr>
 <tr> <td> <input type="submit" value="finish"> </td></tr>
</table>