&lt;?php
include &quot;db.php&quot;;
$id = $_GET[&#39;id&#39;];

36

if (isset($_POST[&#39;update&#39;])) {
$name = $_POST[&#39;name&#39;];
$email = $_POST[&#39;email&#39;];

mysqli_query($conn, &quot;UPDATE users SET name=&#39;$name&#39;, email=&#39;$email&#39; WHERE id=$id&quot;);
header(&quot;Location: index.php&quot;);
}

$data = mysqli_fetch_assoc(mysqli_query($conn, &quot;SELECT * FROM users WHERE id=$id&quot;));
?&gt;
&lt;form method=&quot;post&quot;&gt;
&lt;input type=&quot;text&quot; name=&quot;name&quot; value=&quot;&lt;?= $data[&#39;name&#39;]; ?&gt;&quot;&gt;
&lt;input type=&quot;email&quot; name=&quot;email&quot; value=&quot;&lt;?= $data[&#39;email&#39;]; ?&gt;&quot;&gt;
&lt;button name=&quot;update&quot;&gt;Update&lt;/button&gt;
&lt;/form&gt;