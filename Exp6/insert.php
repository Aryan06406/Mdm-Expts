&lt;?php
include &quot;db.php&quot;;

if (isset($_POST[&#39;submit&#39;])) {

34

$name = trim($_POST[&#39;name&#39;]);
$email = trim($_POST[&#39;email&#39;]);
$pass = password_hash($_POST[&#39;password&#39;], PASSWORD_DEFAULT);

if (!empty($name) &amp;&amp; !empty($email)) {
$query = &quot;INSERT INTO users(name,email,password) VALUES(&#39;$name&#39;,&#39;$email&#39;,&#39;$pass&#39;)&quot;;
mysqli_query($conn, $query);
header(&quot;Location: index.php&quot;);
}
}
?&gt;