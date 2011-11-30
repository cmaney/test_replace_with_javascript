<html>
<link href="document_setup.css" rel="stylesheet" type="text/css" media="screen" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<script src="../javascript/jquery-1.7.min.js" type="text/javascript" language="javascript"></script>
<script src="changepw.js" type="text/javascript" language="javascript"></script>
<script type="text/javascript">
$(document).ready(function()
{
// Nothing currently here in this test file
});
function UpdateMainContent(id,content) {
	var container = document.getElementById(id);
	if (content == 'change_pass') {
		var oRequest = new XMLHttpRequest();
		var sURL = "http://" + self.location.hostname + "/appr/ben/changepw.php";
		oRequest.open("GET",sURL,false);
		oRequest.setRequestHeader("User-Agent",navigator.userAgent);
		oRequest.send(null)

		if (oRequest.status==200) content = oRequest.responseText;
		else alert("Error executing XMLHttpRequest call!");
	}
	else if (content == 'disp_announce') {
		var oRequest = new XMLHttpRequest();
		var sURL = "http://" + self.location.hostname + "/appr/ben/announcements";
		oRequest.open("GET",sURL,false);
		oRequest.setRequestHeader("User-Agent",navigator.userAgent);
		oRequest.send(null)

		if (oRequest.status==200) content = oRequest.responseText;
		else alert("Error executing XMLHttpRequest call!");
	}
	container.innerHTML = content;
}
function addClickHandlers() {
	$("a.remote", this).click(function() {
		$("#target").load(this.href, addClickHandlers);
	});
	}
$(document).ready(addClickHandlers);
</script>
<body>
<div id="container">
<div id="top">
Username goes here
</div>
<div id="left-nav">
<div style="float: left" id="my_menu" class="sdmenu">
	<div>
		<a href="javascript:UpdateMainContent('content','change_pass')" class="remote">Change Current Password</a><p>
		<a href="javascript:UpdateMainContent('content','disp_announce')" class="remote">Announcements</a><p>
		<a href="changepw2.php">Password change on separate page</a><p>
	</div>
</div>
</div>
<div id="content">
This is the default text.  I have removed all of the logic from the changepw.js page so now it just pops up an alert.  There is no login at all in this incarnation because I wanted to make the file as simple as possible.
</div>
</body>
</html>
