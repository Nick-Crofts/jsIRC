<?php
$user = $_GET["user"];
?>
<html>
<head>
<?php
if(!empty($user))
{
?>
<title>Dialog mit <?php echo $user; ?></title>
<?php
}
?>
<style type = "text/css">
body{
background-color:black;
color:white;
}
input{
background-color:#CCCCCC;
border:1px solid;
}
	.chatcolor0
	{
		color:#FFFFFF;
	}
	.chatcolor1
	{
		color:#FFFFFF;
	}
	.chatcolor2
	{
		color:#000099;
	}
	.chatcolor3
	{
		color:#009900;
	}
	.chatcolor4
	{
		color:#FF0000;
	}
	.chatcolor5
	{
		color:#993300;
	}
	.chatcolor6
	{
		color:#9900FF;
	}
	.chatcolor7
	{
		color:#FF9900;
	}
	.chatcolor8
	{
		color:#FFFF00;
	}
	.chatcolor9
	{
		color:#00FF00;
	}
	.chatcolor10
	{
		color:#009999;
	}
	.chatcolor11
	{
		color:#00FFFF;
	}
	.chatcolor12
	{
		color:#0000FF;
	}
	.chatcolor13
	{
		color:#FF00FF;
	}
	.chatcolor14
	{
		color:#999999;
	}
	.chatcolor15
	{
		color:#666666;
	}

a:link,a:visited { color:#666666; text-decoration:none;}
a:hover,a:active { color:#717890; text-decoration:none; cursor:pointer;}

</style>
<script type="text/javascript">
function sendIt(){
	var winname = document.getElementById('chatwith').value;
	window.opener.sendDiaMsg(winname);
}

	function getKey(e) {
		var code;
		if (!e) var e = window.event;
		if (e.keyCode) code = e.keyCode;
		else if (e.which) code = e.which;
		if(code == 13)
		{
			sendIt();
		}
	}

</script>
</head>
<body>
<div id = "result" style = "width:100%;height:90%;overflow:auto;border:1px solid white;background-color:#666666;">
</div>
<input id = "usertext" name = "usertext"  type = "text" style = "width:78%"/>
<button style = "width:20%" onclick = "sendIt();">Send</button>
<input type = "hidden" name = "chatwith" id = "chatwith" value = "<?php echo $user; ?>" />
<script type="text/javascript">
	document.onkeydown = getKey;
</script>
</body>
</html>