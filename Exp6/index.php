&lt;?php include &quot;db.php&quot;; ?&gt;
&lt;html&gt;
&lt;body&gt;
&lt;h2&gt;User List&lt;/h2&gt;

&lt;table border=&quot;1&quot;&gt;
&lt;tr&gt;
&lt;th&gt;ID&lt;/th&gt;&lt;th&gt;Name&lt;/th&gt;&lt;th&gt;Email&lt;/th&gt;&lt;th&gt;Action&lt;/th&gt;
&lt;/tr&gt;

&lt;?php

35

$result = mysqli_query($conn, &quot;SELECT * FROM users&quot;);
while ($row = mysqli_fetch_assoc($result)) {
?&gt;
&lt;tr&gt;
&lt;td&gt;&lt;?= $row[&#39;id&#39;]; ?&gt;&lt;/td&gt;
&lt;td&gt;&lt;?= $row[&#39;name&#39;]; ?&gt;&lt;/td&gt;
&lt;td&gt;&lt;?= $row[&#39;email&#39;]; ?&gt;&lt;/td&gt;
&lt;td&gt;
&lt;a href=&quot;edit.php?id=&lt;?= $row[&#39;id&#39;]; ?&gt;&quot;&gt;Edit&lt;/a&gt; |
&lt;a href=&quot;delete.php?id=&lt;?= $row[&#39;id&#39;]; ?&gt;&quot;&gt;Delete&lt;/a&gt;
&lt;/td&gt;
&lt;/tr&gt;
&lt;?php } ?&gt;
&lt;/table&gt;
&lt;/body&gt;
&lt;/html&gt;