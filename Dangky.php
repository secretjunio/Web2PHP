<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>LAPTOP STORES</title>
	<script src="../js/Dangky.js"></script>
    <link href="../css/Dangky.css" rel="stylesheet" />
	<link rel="icon" type="image/png" href="../images/500_F_75344936_xbCdtBxSiBStABhDyAneJIsCB5lQlrjZ.jpg">
</head>
<body align="center">

<?php
        include("Connect.php");
        if(isset($_POST["submit"])){
               $query=$connect->query("SELECT * from quanlykhachhang where Taikhoan='$_POST[Taikhoan]'");
               $dem=0;
               while($row=$query->fetch_assoc()){
                    $dem++;
		}
               if($dem>0){
                       echo "<script>alert('Account or Email is already exist!')</script>";
		        }else{
                            $qry=  $connect->query("INSERT into quanlykhachhang  VALUES ('".$_POST["Taikhoan"]."','".$_POST["Matkhau"]."','".$_POST["Hoten"]."',".$_POST["Dienthoai"].",'".$_POST["Email"]."','".$_POST["Diachi"]."')");
		        }
        }
        
?>   
<a href="../index.php" align="center" class="logo_signup"><img title="Home" src="../images/500_F_75344936_xbCdtBxSiBStABhDyAneJIsCB5lQlrjZ.jpg"/></a>
<div class="frm">
    <form class="frmSignUp"  method="POST" action="Dangky.php" onsubmit="return testValidate()">

    <table align="center">
       
        <tr><td style="text-align:center" colspan="2"><p style="font-weight:bold">SIGN UP</p></td></tr>
        <tr>
            <td>Full Name<b>*</b></td><td><input id="name" placeholder="Fullname" type="text" name="Hoten"/></td>
        </tr>
         <tr>
            <td>Account<b>*</b></td><td><input id="acc" placeholder="Account" type="text" name="Taikhoan"/></td>
        </tr>
         <tr>
            <td>Password<b>*</b></td><td><input id="pass" placeholder="Password" type="password" name="Matkhau"/></td>
        </tr>
         <tr>
            <td>Email<b>*</b></td><td><input id="email" placeholder="email" type="text" name="Email"/></td>
        </tr>
         <tr>
            <td>Address</td><td><input id="address"placeholder="Address" type="text" name="Diachi"/></td>
        </tr>
         <tr>
            <td>Phone Number</td><td><input id="phone" placeholder="Phone number" type="text" name="Dienthoai"/></td>
        </tr>
        <tr align="center"><td colspan="2"><button type="submit" name="submit">Xac nhan</button></td></tr>
    </table>
     <div align="center" id="err" style="display:none"></div>
</form>
<form class="btnSignin" align="center" action="login.php">
    <button>SIGN IN</button>
</form>
</div>
</br>
</br>
</br>
</br>
</br>
</br>
    <a style="text-decoration:none;text-align:center" href="termOfService.php">TERM OF SERVICE</a>
</body>
</html>