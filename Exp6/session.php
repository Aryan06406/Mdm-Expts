&lt;?php
session_start();
$_SESSION[&#39;user&#39;] = &quot;Admin&quot;;
?&gt;
//Cookie example
&lt;?php
setcookie(&quot;username&quot;, &quot;Student&quot;, time() + 3600);
?&gt;