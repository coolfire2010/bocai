<?php
session_start();
header("Expires: Mon, 26 Jul 1970 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); 
header("Cache-Control: no-cache, must-revalidate");      
header("Pragma: no-cache");
header("Content-type: text/html; charset=utf-8");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link href="images/login.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="wrap">
    <div id="content-wrap">
    	<div class="space"> </div>
   	    <form action="agent_L.php" method="post"><div class="content">
        <div class="field"><label>账　户：</label><input class="username" name="A" type="text" /></div>
		<div class="field"><label>密　码：</label><input class="password" name="B" type="password" /><br /></div>
        <div class="fieldyzm"><label>验证码：</label><input name="C" type="text" size="4" maxlength="4" /><img id='yzm' src="yzm.php" class="imgyzm" border="0"/><br /></div>
        <div class="btn"><input name="" type="submit" class="login-btn" value="" /></div>

      </div></form>
    </div>
    <div id="footer"> </div>
</div>

</body>
</html>
