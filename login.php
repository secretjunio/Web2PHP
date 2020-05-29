<?php 
        include("Connect.php");
        
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>WEB BAN LAPTOP</title>
    <script src="../js/Login.js"></script>
    <link href="../css/Dangky.css" rel="stylesheet" />
	 <link rel="icon" type="image/png" href="../images/500_F_75344936_xbCdtBxSiBStABhDyAneJIsCB5lQlrjZ.jpg">
</head>
<body align="center">
<a href="../index.php" align="center" class="logo_signup"><img title="Home" src="../images/500_F_75344936_xbCdtBxSiBStABhDyAneJIsCB5lQlrjZ.jpg"/></a>
    <form align="center" onsubmit="return checkValidate()" action="../index.php" method="POST">
        <table align="center">
            <tr>
                <td colspan="2">Sign In</td>
            </tr>
            <tr>
                <td>Account<b>*</b></td><td><input id="acc" name="acc" type="text" /></td>
            </tr>
            <tr>
                <td>Password<b>*</b></td><td><input id="pass" name="pass" type="password" /></td>
            </tr>
            <tr align="center">
                <td colspan="2"><button type="submit" name="signin">Sign in</button></td>
            </tr>
            <tr align="center"><td colspan="2" id="err"></td></tr>
        </table>
        
    </form>
</body>
   
</html>