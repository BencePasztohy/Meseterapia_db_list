<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
	<table>
		<tr>
			<td>Név:</td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td>Lakhely:</td>
			<td><input type="text" name="address"></td>
		</tr>
		<tr>
			<td>Email:</td>
			<td><input type="text" name="email"></td>
		</tr>
		<tr>
			<td>Telefon:</td>
			<td><input type="text" name="tel"></td>
		</tr>
		<tr>
			<td>Kép:</td>
			<td></td>
		</tr>
	</table>
</form>
<?php

?>