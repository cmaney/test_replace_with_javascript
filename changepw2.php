
<script src="../javascript/jquery-1.7.min.js" type="text/javascript" language="javascript"></script>
<script src="changepw.js" type="text/javascript" language="javascript"></script>
<style type="text/css">
.top {
	margin-bottom: 15px;
}
.buttondiv {
	margin-top: 10px;
}
.messagebox{
	position:absolute;
	width:100px;
	margin-left:30px;
	border:1px solid #c93;
	background:#ffc;
	padding:3px;
}
.messageboxok{
	position:absolute;
	width:auto;
	margin-left:30px;
	border:1px solid #349534;
	background:#C9FFCA;
	padding:3px;
	font-weight:bold;
	color:#008000;
	
}
.messageboxerror{
	position:absolute;
	width:auto;
	margin-left:30px;
	border:1px solid #CC0000;
	background:#F7CBCA;
	padding:3px;
	font-weight:bold;
	color:#CC0000;
}
</style>

 
<br>
<div class="top">
This is the same as the normal changepw.php but it includes the javascript at the top
</div>
<br>
<form method="" action="" id="changepw_form">
<fieldset>
<legend>Password change</legend>
<div align="center">

<div style="margin-top:5px" >
   Current Password :
    &nbsp;&nbsp;
    <input name="password" type="password" id="password" value="" maxlength="60" />
   
</div>
<div style="margin-top:5px" >
   New password :
    &nbsp;&nbsp;
    <input name="newpassword" type="password" id="newpassword" value="" maxlength="60" />
   
</div>
<div style="margin-top:5px" >
   Re-enter new password :
    &nbsp;&nbsp;
    <input name="newpassword2" type="password" id="newpassword2" value="" maxlength="60" />
   
</div>

    <input name="Submit" type="submit" id="submit" value="Change Password" class="pwbutton" style="margin-left:-10px; height:23px"  /> <span id="msgbox" style="display:none"></span>
   

</div>
</fieldset>
</form>
