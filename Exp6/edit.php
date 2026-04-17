<?php
include "db.php";
$id = $_GET['id'];

36

if (isset($_POST[&#39;update&#39;])) {
$name = $_POST[&#39;name&#39;];
$email = $_POST[&#39;email&#39;];

mysqli_query($conn, &quot;UPDATE users SET name=&#39;$name&#39;, email=&#39;$email&#39; WHERE id=$id&quot;);
header(&quot;Location: index.php&quot;);
}

$data = mysqli_fetch_assoc(mysqli_query($conn, &quot;SELECT * FROM users WHERE id=$id&quot;));
?>
<form method=&quot;post&quot;>
<input type=&quot;text&quot; name=&quot;name&quot; value=&quot;<?= $data[&#39;name&#39;]; ?>&quot;>
<input type=&quot;email&quot; name=&quot;email&quot; value=&quot;<?= $data[&#39;email&#39;]; ?>&quot;>
<button name=&quot;update&quot;>Update</button>
</form>