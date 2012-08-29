<?php
$pageOn = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
	<title>openEHR - ADL Workbench</title>
	<?php include '../../panel/headpanel.php' ?>
</head>


<body>

<div id="MainFrame">
	
	<div id="TopPanel">
	<?php include 'http://www.openehr.org/new-ws/site/panel/toppanel.php' ?>
	</div>
	
	<div id="TopMenu" style="text-align:left">
		<div class="nav">
   		 <?php include 'http://www.openehr.org/new-ws/site/menu/topmenu.php' ?>
		</div>
	</div> 

	<div id="MainArea">
		
		<div id="SideMenu">
		<?php include 'menu/adlmenu.php' ?>
		</div>

		<div id="TextArea">
			<h1>ADL WB Home</h1>
			<h2>ADL 1.5 Workbench beta release 8, 2 August 2012</h2>
			<p><a href="releasenotes">Release notes</a> - <a href="http://www.openehr.org/issues/browse/AWBPR">Report an issue (Jira)</a> - <a href="http://www.openehr.org/issues/browse/AWB">Development Project (Jira)</a></p>
         

			<h2>News</h2>
			<ul>
				<li>This release includes numerous bug-fixes and UI improvements;</li>
				<li>Final release before editing capability is included.</li>
			</ul>
          
		  
			<h2>Learn how the workbench works</h2>
			<script src="http://www.gmodules.com/ig/ifr?url=http://www.google.com/ig/modules/youtube.xml&amp;up_channel=openehr&amp;synd=open&amp;w=290&amp;h=350&amp;title=&amp;border=%23ffffff%7C3px%2C1px+solid+%23999999&amp;output=js"></script>
          
		  
			<h2>Download</h2>
			
			<h3>Executables</h3>
            <table class="TableMain">
				<tbody>
                <tr>
					<th class="TableMainT"> Platform </th>
					<th class="TableMainT"> Build</td>
					<th class="TableMainT"> Executable</th>
					<th class="TableMainT"> Installation Notes</th>
                </tr>
                <tr>
					<td class="TableMainC"> Windows</td>
					<td class="TableMainC"> beta 8</td>
					<td class="TableMainC"> <a href="http://www.openehr.org/svn/oe_distrib/windows/tools/ADLWorkbenchInstall.exe">.exe installer</a></td>
                    <td class="TableMainC"><br/> </td>
                </tr>
                <tr>
					<td class="TableMainC"> Mac OS X 10.7 (Lion)<br/></td>
					<td class="TableMainC"> beta 8</td>
					<td class="TableMainC"> <a href="http://www.openehr.org/svn/oe_distrib/mac_osx/tools/ADL Workbench for Lion i386.dmg">.dmg installer</a></td>
					<td class="TableMainC"> <a href="installationnotes#mac">here</a> <br/></td>
                </tr>
                <tr>
					<td class="TableMainC">Linux (32-bit Intel)<br/></td>
					<td class="TableMainC">beta 8</td>
					<td class="TableMainC"> <a href="http://www.openehr.org/svn/oe_distrib/linux/tools/adl_workbench-linux.tar.bz2">.tar bz2 archive</a></td>
					<td class="TableMainC"> <a href="installationnotes#linux">here</a></td>
                </tr>
				</tbody>
            </table>
			<br/>
			
			<h3>Source Code</h3>
			<p>The source code can be accessed from the <a href="http://www.openehr.org/projects/eiffel.html">openEHR project page</a>.</p>
		
		</div>

	</div>

	<div id="BottomMenu">
	<?php include 'http://www.openehr.org/new-ws/site/menu/bottommenu.php' ?>
	</div>

	<div id="BottomPanel">
	<?php include 'http://www.openehr.org/new-ws/site/panel/bottompanel.php' ?>
	</div>

</div>

<script type="text/javascript">
var dropdown=new MENU.dropdown.init("dropdown", {id:'menu', active:'menuhover'});
</script>

</body>
</html>