<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>CTF CDC | Level 2</title>

<style type="text/css">
<link href="amber.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="java.js"></script>
<script type="text/javascript" src="script.js"></script>

<!--
-->

<!--  -->

</style>

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
<div id="center">
<h1><font color="white">CTF CDC</font></h1>
<h3><p><u><font color="white">Selamat Datang di CTF CYBER DEFENCE COMPETITION LEVEL 2</font></u></p><h3>
<font color="orange">Stage 1: Temukan Flag yang terdapat di Level 2</font> <br><br>
<font color="orange">Stage 2: Flag adalah Jawaban yang di Submit ke Web Scoring</font> <br><br>
<font color="orange">Stage 3: Jika Flag Benar Lanjut ke Level 3</font> <br><br>
<font color="red"><b>Di Setiap Level CTF CYBER DEFENCE COMPETITION, Jawaban yang di Submit adalah Flag di Tiap Level !!!</b></font> <br><br>

<script src="jquery-1.10.1.min.js">
</script>
<script>
$(document).ready(function(){
$("#loaddata").click(function(){ 
txtname=$("#true").val();
txtlocation=$("#txtlocation").val();
$.post("post.php",{ name:txtname, location: txtlocation },function(ajaxresult){
$("#postrequest").html(ajaxresult);
});
});
});
</script>
</head>
<body>
<div id="postrequest"></div>
<font color="green">Answer :</font> <input type="text" id="true"><br /><br><br>
<button id="loaddata">Enter</button>
</body>
</script>

</script>
