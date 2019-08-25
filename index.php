<form action="action.php" method="post">
	<table border="1" cellspacing="0">
		<tr>
			<td>Username</td>
			<td>: <input type="text" name="username">
		</tr>
		<tr>
			<td>Password</td>
			<td>: <input type="password" name="password">
		</tr>
		<tr>
			<td colspan="2">
				<input type="hidden" name="action" value="login" />
				<button type="submit" name="submit">Login</button>
			</td>
		</tr>
	</table>
</form>