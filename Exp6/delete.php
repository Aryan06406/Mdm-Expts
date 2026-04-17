&lt;?php
include &quot;db.php&quot;;
$id = $_GET[&#39;id&#39;];

mysqli_query($conn, &quot;DELETE FROM users WHERE id=$id&quot;);
header(&quot;Location: index.php&quot;);
?&gt;