<?xml version=&quot;1.0&quot; encoding=&quot;UTF-8&quot;?>

<xsl:stylesheet version=&quot;1.0&quot;
xmlns:xsl=&quot;http://www.w3.org/1999/XSL/Transform&quot;>

<xsl:template match=&quot;/&quot;>
<html>
<head>
<title>Book Details</title>
<style>
table {
border-collapse: collapse;
width: 60%;
}
th, td {

41

border: 1px solid black;
padding: 8px;
text-align: center;
}
th {
background-color: #dddddd;
}
</style>
</head>

<body>
<h2 align=&quot;center&quot;>Book Information</h2>

<table align=&quot;center&quot;>
<tr>
<th>Title</th>
<th>Author</th>
<th>Price</th>
</tr>

<xsl:for-each select=&quot;books/book&quot;>
<tr>
<td><xsl:value-of select=&quot;title&quot;/></td>
<td><xsl:value-of select=&quot;author&quot;/></td>
<td><xsl:value-of select=&quot;price&quot;/></td>

42

</tr>
</xsl:for-each>

</table>
</body>
</html>
</xsl:template>

</xsl:stylesheet>