<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Web Store Front</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>
<!--Link the Spry Manu Bar JavaScript library-->
<script src="SpryMenuBar.js" type="text/javascript"></script>
<!--Link the CSS style sheet that styles the menu bar. You can select between horizontal and vertical-->
<link href="SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css"/>
<style type="text/css">
<!--
div {
	clear: both;

	}
#menubar1 a{

			background-color:#4B75B3;
		}


#menubar1 ul li a{

	background-color:#11BBFF;

}

#menubar1 ul li ul li a{

	background-color:#11BBFF;
}
-->
</style>

</head>

<body id="main_body" >
<div id="form_container">
	
		<h1><a>Web Store Front</a></h1>
		<form id="form_429179" class="appnitro"  method="post" action="wsf_details.php">
					<div class="form_description">
			<h2 align="center">WEB STORE FRONT </h2>
			</div>	
						<div class="form_description" >
	                  <p>&nbsp;</p>
	                   <table border="" cellspacing="1" cellpadding="1">
						<tr>
							<th><font face="Arial, Helvetica, sans-serif">Product ID</font></th>
							<th><font face="Arial, Helvetica, sans-serif">Movie Title</font></th>
							<th><font face="Arial, Helvetica, sans-serif">Store</font></th>
							<th><font face="Arial, Helvetica, sans-serif">Category</font></th>
							<th><font face="Arial, Helvetica, sans-serif">SubCategory</font></th>
							<th><font face="Arial, Helvetica, sans-serif">Price</font></th>
							<th><font face="Arial, Helvetica, sans-serif">Shipping Duration</font></th>
						</tr>
					  <?php
					  	// Session varibale Movie name has been taken to a local variable.
					  	$mvi = $_GET['mvi'];
						// DB connection initaited
					    mysql_connect('localhost',"root","");
						@mysql_select_db("WSF") or die("Unable to select database");
						$query="SELECT * FROM wsf_details where MovieTitle='$mvi'";
						$result=mysql_query($query);
						$num=mysql_numrows($result);
						//Number of rows containing different versions of Movie searched has been taken in the result set and displayed in tabular format.
						$i=0;
							while ($i < $num) 
							{
									$f1=mysql_result($result,$i,"GroupId");
									$f2=mysql_result($result,$i,"ProductId");
									$f3=mysql_result($result,$i,"MovieTitle");
									$f4=mysql_result($result,$i,"Store");
									$f5=mysql_result($result,$i,"Category");
									$f6=mysql_result($result,$i,"SubCategory");
									$f7=mysql_result($result,$i,"Price");
									$f8=mysql_result($result,$i,"ShippingDuration");
									?>
									<tr>
										<td><font face="Arial, Helvetica, sans-serif"><?php echo $f2 ?></font></td>
										<td><font face="Arial, Helvetica, sans-serif"><?php echo $f3 ?></font></td>
										<td><font face="Arial, Helvetica, sans-serif"><?php echo $f4 ?></font></td>
										<td><font face="Arial, Helvetica, sans-serif"><?php echo $f5 ?></font></td>
										<td><font face="Arial, Helvetica, sans-serif"><?php echo $f6 ?></font></td>
										<td><font face="Arial, Helvetica, sans-serif"><?php echo $f7 ?></font></td>
										<td><font face="Arial, Helvetica, sans-serif"><?php echo $f8 ?></font></td>
										</tr>
								<?php
								$i++;
						}
						//DB connection closed
						mysql_close();
			
						?>
					</table>	
	
	                  
</div>
				<?php
								 print "<html>";
		  print "<a href=\"index.html\"> HOME <a/>";
	print "</html>";
	?>
          
      </form>	
		
</div>
</body>
</html>




