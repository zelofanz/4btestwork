<?php
include("insert.php");
error_reporting();
$stmt = $pdo->prepare("SELECT * FROM country");
$stmt->execute(); // Execute on server
?>

<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>

<div class="justify-content-center">
	<table class="table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Страна</th>
				<th></th>
			</tr>
		</thead>
		
		<?php while ($row = $stmt->fetch()): ?>
			<tr>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['name']; ?></td>
				<td>
					<a href="delete.php?delete=<?php echo $row['id']; ?>"
						class="btn btn-danger">Delete</a>
				</td>
			</tr>
		<?php endwhile; ?>
	</table>
</div>

<div style="text-align:center;">
<form action="insert.php" method="">
<div class="form-group">
<label>Название страны</label>
<input type="text" name="country" class="form-control" style="text-align:center;" value=""/>
</div>
<div class="form-group">
<input type="submit" name="submit" class="form-control" value="Добавить новую страну"/>
</form>
</div>
</body>
</html>