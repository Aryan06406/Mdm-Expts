<?php include &quot;db.php&quot;; ?>
<html>
<body>
<h2>User List</h2>

<table border=&quot;1&quot;>
<tr>
<th>ID</th><th>Name</th><th>Email</th><th>Action</th>
</tr>

<?php

35

$result = mysqli_query($conn, &quot;SELECT * FROM users&quot;);
while ($row = mysqli_fetch_assoc($result)) {
?>
<tr>
<td><?= $row[&#39;id&#39;]; ?></td>
<td><?= $row[&#39;name&#39;]; ?></td>
<td><?= $row[&#39;email&#39;]; ?></td>
<td>
<a href=&quot;edit.php?id=<?= $row[&#39;id&#39;]; ?>&quot;>Edit</a> |
<a href=&quot;delete.php?id=<?= $row[&#39;id&#39;]; ?>&quot;>Delete</a>
</td>
</tr>
<?php } ?>
</table>
</body>
</html>