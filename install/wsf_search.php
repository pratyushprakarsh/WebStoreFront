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
		<form id="form_429179" class="appnitro"  method="post" action="wsf_search.php">
					<div class="form_description">
			<h2 align="center">WEB STORE FRONT </h2>
			</div>	
						<?php
						// textfield is passed in form and taken into variable.
						$inp_mvi = $_POST['textfield'];
						// DB connection initiated 						
						mysql_connect('localhost',"root","");
						@mysql_select_db("WSF") or die("Unable to select database");
						$query="SELECT * FROM wsf_details where MovieTitle='$inp_mvi'";
						$result=mysql_query($query);
						$num=mysql_numrows($result);
						// If search string matches movie name in db and has more than 1 entry display success.
						if ($num > 0 )
						{
						?>
		            <div class="form_description" >
	                  <p>&nbsp;</p>
	                  <p>&nbsp;</p>
	                  <p>&nbsp;</p>
	                  <p>
	                    <label><strong>MOVIE NAME</strong> :-
	                    <input name="textfield" type="text" />
	                    </label>
	                  </p>
	                  <p>
	                    <input name="Submit" type="submit" id="Submit" value="SEARCH" />
	                  </p>
	                  <p>&nbsp;</p>
	                  <p><br />
                        <br />			
                        </p>
	                  <p>&nbsp;</p>
</div>
          <?php
		  /* Sucess displayed and link given to movie name for details page
		  	 Movie Name found is passed as session variable to the PHP page where details are to be shown.
		  */
		  echo "$num matches found for ";
		  print "<html>";
		  print "<a href=\"wsf_details.php?mvi=$inp_mvi\"> $inp_mvi <a/>";
	print "</html>";
		 } 
		  else 
		  // If search results do not find a match then display try again.
		   { 
		    ?>
		   <div class="form_description" >
	                  <p>&nbsp;</p>
	                  <p>&nbsp;</p>
	                  <p>&nbsp;</p>
	                  <p>
	                    <label><strong>MOVIE NAME</strong> :-
	                    <input name="textfield" type="text" />
	                    </label>
	                  </p>
	                  <p>
	                    <input name="Submit" type="submit" id="Submit" value="SEARCH" />
	                  </p>
	                  <p>&nbsp;</p>
	                  <p><br />
                        <br />			
                        </p>
	                  <p>&nbsp;</p>
</div>
 <?php
 echo "No results founds. Try searching other movies..";
 }
 //DB connections closed.
 mysql_close();
 ?>
      </form>	
		
</div>
</body>
</html>