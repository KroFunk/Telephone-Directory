
<?php

//This is the location of your directory, it can be a complete path (e.g $location = "C:\Directory\directory.csv";) or a relative path (e.g $location = "../../directory.csv";)
$location = "directory.csv";

//#0C2D4E
$bannerColour = "green";
$headerColour = "#4A4A49";

?>

<!--
######################################################################################################################################
####################################   DO NOT EDIT BELOW THIS LINE UNLESS YOU KNOW WHAT YOUR UPTO!   #################################
######################################################################################################################################
################# Parts of this software (Data tables http://www.datatables.net/) are released under the MIT license #################
######################################################################################################################################
-->
<!DOCTYPE html>
<html>
<head>
<link href="/favicon.ico" rel="icon" type="image/x-icon" />
<meta http-equiv="X-UA-Compatible" content="IE=9" />
<title>Telephone Directory</title>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <script src="JScript/jquery.min.js" type="text/javascript"></script>
        <script src="JScript/jquery.dataTables.min.js" type="text/javascript"></script>
        <script src="JScript/jquery-ui.js" type="text/javascript"></script>
        <script src="JScript/jquery.dataTables.rowGrouping.js" type="text/javascript"></script>
<LINK href="JScript/jquery.dataTables.css" rel="stylesheet" type="text/css">
<script>
<?php
if (isset($_GET['scroll'])) {?>
$(document).ready(function() {
   $('#table').dataTable({ "bLengthChange": false, "bPaginate": false, "bAutoWidth": false, "sScrollY": "<?php echo $_GET['scroll']; ?>",
    "bScrollCollapse": true})
						.rowGrouping({bExpandableGrouping: true});
} );
<?PHP }
else if (isset($_GET['auto'])) {?>
$(document).ready(function() {

var h = Math.max(document.documentElement.clientHeight, window.innerHeight || 0);
var bestGuess = (h - 250);

   $('#table').dataTable({ "bLengthChange": false, "bPaginate": false, "bAutoWidth": false, "sScrollY": bestGuess,
    "bScrollCollapse": true})
						.rowGrouping({bExpandableGrouping: true});
} );
<?PHP }
else { ?>
$(document).ready(function() {
   $('#table').dataTable({ "bLengthChange": false, "bPaginate": false, "bAutoWidth": false})
						.rowGrouping({bExpandableGrouping: true});
} );
<?php } ?>
</script>
<script>
window.onscroll = function() {showHideHeader()};

function showHideHeader() {
	var headerTable = document.getElementById("headerTable")
    if (document.body.scrollTop > 25 || document.documentElement.scrollTop > 25) {
        headerTable.style.display = 'block';
    } else {
		headerTable.style.display = 'none';
    }
}

function starThis(star,identifier) {
	theStar = document.getElementById(star);
	var str = theStar.src;
	var subStr = str.substring(str.length - 5, str.length)
	//alert(subStr);
	if(subStr == '0.png'){
		theStar.src = '1.png';
		document.cookie = identifier.replace(' ','') + ' = fav ; expires=Fri, 31 Dec 2999 23:59:59 GMT; path=/ ;';
	}
	else {
		theStar.src = '0.png';
		document.cookie = identifier.replace(' ','') + ' = fav ; expires=Fri, 31 Dec 1970 23:59:59 GMT; path=/ ;';
	}
	location.reload();
}
</script>
<style type="text/css" title="currentStyle">
			@import "JScript/demo_table.css";
			@import "JScript/jquery-ui.css";
			@import "JScript/jquery-ui-1.7.2.custom.css";
			html, body {
			font-family: 'Open Sans', sans-serif;
			}
			.dataTables_filter {
			position:fixed;
			top:25px;
			left:50%;
			width:250px;
			margin-left:240px;
			z-index:9999;
			color:white
			}
			.dataTables_filter label {
				
			}
			.dataTables_filter input {
				border:0px;
				border-radius:10px;
				color:black;
				outline:0px;
			}
			.dataTables_info {
				padding:10px;
			}
			.searchBox {
				background:url('search.png') left center white no-repeat;
				padding:5px;
				padding-left:20px;
			}
		</style>
</head>
<body style='background:#ECECEC;'>
<div style="width:1000px; border-bottom-right-radius:10px; border-bottom-left-radius:10px; position:fixed; background:<?php echo $bannerColour; ?>; left:50%; top:0px; margin-left:-500px; z-index:9998;">
<img style="padding:10px;" src="logo.png" style='display:inline-block;'> <h1 style='color:white; white-space:nowrap; font-size:28px;display:inline-block;margin-top:0px;padding-top:12px; vertical-align: top;'>Telephone Directory</h1>

<div style>
<table id="headerTable" class="datatable display hover" style='width:100%;background:<?php echo $headerColour; ?>;color:white;display:none;'>
<tr>
<td style='width:275px;'>Description</td><td style='width:424px;'>Name</td><td style='width:122px' class='center'>EXT</td><td style='width:109px' class='center '>TEL</td>
</tr>
</table>
</div>

</div>
<div style="width:1000px; margin:0 auto; margin-top:85px; border:1px solid #ccc; border-radius:10px; background:white;">

<?php //print_r($_COOKIE); ?>

<table id="table" class="display hover">
<thead>
<td>Group</td><td style='width:275px;'>Description</td><td style='width:438px;'>Name</td><td style='width:98px' class='center'>EXT</td><td style='width:109px' class='center'>TEL</td>
</thead>
<?php if (!isset($_GET['scroll']) && !isset($_GET['auto'])) {?>
<tfoot>
<td>Group</td><td>Description</td><td>Name</td><td class='center'>EXT</td><td class='center'>TEL</td>
</tfoot>
<?php } ?>
<tbody>
<?PHP
$Foo=0;
$Star = 0;
$file = fopen($location,"r");
while(! feof($file))
	{
	@$field = fgetcsv($file);
	if($Foo>0){
			$CookieName = str_replace(" ","",$field[3].$field[4]);
			if(isset($_COOKIE[$CookieName])) {
			echo "<tr>";
			echo "<td><span style='display:none;'>AAA</span>Favourites</td><td><img src='1.png' onclick='starThis(this.id,".'"'.$field[3].$field[4].'"'.")' id='favestar".$Foo."'/>&nbsp;&nbsp;".$field[1]."</td><td>".$field[2]."</td><td class='center'>".$field[3]."</td><td class='center'>".$field[4]."</td>";
			echo "</tr>";
			$Star = 1;
			}


			echo "<tr>";
			echo "<td>".$field[0]."</td><td><img src='".$Star.".png' onclick='starThis(this.id,".'"'.$field[3].$field[4].'"'.")' id='star".$Foo."'/>&nbsp;&nbsp;".$field[1]."</td><td>".$field[2]."</td><td class='center'>".$field[3]."</td><td class='center'>".$field[4]."</td>";
			echo "</tr>";
			$Star = 0;
			}
	$Foo++;
	}
fclose($file);
?>
</tbody>
</table>
</div>
<center>
<div style="font-size:12px;background:<?php echo $headerColour; ?>;border-radius:10px;margin:10px;color:#ccc;width:980px; padding:10px;">Telephone Directory by Robin Wright &copy; 2013 -  <?php echo @date(Y); ?>. For more information and updates, check the <a href="https://github.com/KroFunk/Telephone-Directory" target="_new" style="color:#ccc;">GitHub page</a>.</div>
</center>
</body>
</html>