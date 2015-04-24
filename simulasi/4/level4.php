<html><head><title>Simulasi CTF | Level 4</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<style>
body {
	text-align: center;
	font-family: 'courier new';
	background: #000;
	color: #444444;
}

#center {
	padding: 10px;
	border: 1px solid #777777;
	width: 800px;
	margin: 10px auto;
	font-size: 12px;
}

input {
	border: 1px solid #777777;
	background: none;
	color: #444444;
}
</style>
<body>
<?php
if(!isset($_REQUEST["name"])) {
?>
<pre>
printf("
89
88
66
121
97
87
120
116
98
51
65
61
");
</pre>
<form action="level4.php" method="GET">
  Key: <input type="text" name="name"><br>
  <input type="submit" value="Submit">
</form>
<?php
}
if(isset($_REQUEST["name"])) {
if(!$_POST["name"] == "aprilmop")
{
	echo "Anda Kurang beruntung. POST ulang key anda!";
} else {
	echo "Flag: Bedakan_Method_POST_dan_GET";
}
}
?>
</body>
</html>