<?php require_once('Connections/conn.php'); ?>

<?php

if (!function_exists("GetSQLValueString")) {

function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 

{

  if (PHP_VERSION < 6) {

    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;

  }



  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);



  switch ($theType) {

    case "text":

      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";

      break;    

    case "long":

    case "int":

      $theValue = ($theValue != "") ? intval($theValue) : "NULL";

      break;

    case "double":

      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";

      break;

    case "date":

      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";

      break;

    case "defined":

      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;

      break;

  }

  return $theValue;

}

}



mysql_select_db($database_conn, $conn);

$query_Catagories = "SELECT id, EnName, ArName FROM coursecategory";

$Catagories = mysql_query($query_Catagories, $conn) or die(mysql_error());

$row_Catagories = mysql_fetch_assoc($Catagories);

$totalRows_Catagories = mysql_num_rows($Catagories);



$query_thisMonth = "SELECT c.EnName,cc.Cost, cc.StartDate,cc.EndDate,cc.EnLocation,cc.id as sid,c.id as cid FROM coursesschedule cc,courses c  WHERE c.id=cc.FK_Course and StartDate > Now()";

$thismonthCourses = mysql_query($query_thisMonth, $conn) or die(mysql_error());

$row_thismonthCourses = mysql_fetch_assoc($thismonthCourses);

$totalRows_thismonthCourses = mysql_num_rows($thismonthCourses);







$query_News = "SELECT * FROM news order by id desc limit 5";

$thisNews = mysql_query($query_News, $conn) or die(mysql_error());

$row_News = mysql_fetch_assoc($thisNews);

$totalRows_News = mysql_num_rows($thisNews);

?>

<!DOCTYPE html>

<html dir="ltr" lang="en-US"><head>

    <meta charset="utf-8">

    <title>Home</title>

    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">



    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

    <link rel="stylesheet" href="styles/style.css" media="screen">

    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->

    <link rel="stylesheet" href="styles/style.responsive.css" media="all">





    <script src="scripts/jquery.js"></script>

    <script src="scripts/script.js"></script>

    <script src="scripts/script.responsive.js"></script>







<style>.art-content .art-postcontent-0 .layout-item-0 { vertical-align: bottom;  }

.art-content .art-postcontent-0 .layout-item-1 { border-top-width:1px;border-top-style:solid;border-top-color:#AEA593;  }

.art-content .art-postcontent-0 .layout-item-2 { color: #2F2B23; background: ;  }

.art-content .art-postcontent-0 .layout-item-3 { color: #2F2B23; padding-top: 0px;padding-right: 15px;padding-bottom: 0px;padding-left: 15px;  }

.art-content .art-postcontent-0 .layout-item-4 { padding: 15px;  }

.ie7 .post .layout-cell {border:none !important; padding:0 !important; }

.ie6 .post .layout-cell {border:none !important; padding:0 !important; }



</style></head>

<body>

<div id="art-main">

<header class="art-header clearfix">

<div class="art-shapes">
<!--
<h1 class="art-headline" data-left="68.88%">

    <a href="#">Grow With Us</a>

</h1>
<h2 class="art-slogan" data-left="70.25%">education center</h2>



<div class="art-textblock art-object1817555355" data-left="5.7%">

        <div class="art-object1817555355-text">Education center</div>
</div>
-->
</div>
                <div id="art-flash-area">

                    <div id="art-flash-container">

                      <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="904" height="175" id="art-flash-object">

                        <param name="movie" value="container.swf">

                        <param name="quality" value="high">

                        <param name="scale" value="default">

                        <param name="wmode" value="transparent">

                        <param name="flashvars" value="color1=0xFFFFFF&amp;alpha1=.30&amp;framerate1=24&amp;loop=true&amp;wmode=transparent&amp;clip=images/flash.swf&amp;radius=20&amp;clipx=0&amp;clipy=-26&amp;initalclipw=900&amp;initalcliph=225&amp;clipw=906&amp;cliph=226&amp;width=904&amp;height=175&amp;textblock_width=0&amp;textblock_align=no&amp;hasTopCorners=true&amp;hasBottomCorners=true">

                        <param name="swfliveconnect" value="true">

                        <!--[if !IE]>-->

                        <object type="application/x-shockwave-flash" data="container.swf" width="904" height="175">

                          <param name="quality" value="high">

                          <param name="scale" value="default">

                          <param name="wmode" value="transparent">

                          <param name="flashvars" value="color1=0xFFFFFF&amp;alpha1=.30&amp;framerate1=24&amp;loop=true&amp;wmode=transparent&amp;clip=images/flash.swf&amp;radius=20&amp;clipx=0&amp;clipy=-26&amp;initalclipw=900&amp;initalcliph=225&amp;clipw=906&amp;cliph=226&amp;width=904&amp;height=175&amp;textblock_width=0&amp;textblock_align=no&amp;hasTopCorners=true&amp;hasBottomCorners=true">

                          <param name="swfliveconnect" value="true">

                          <!--<![endif]-->

                          <div class="art-flash-alt"><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player"></a></div>

                          <!--[if !IE]>-->

                        </object>

                        <!--<![endif]-->

                      </object>

                    </div>

  </div>

                    

</header>

<nav class="art-nav clearfix">

      <ul class="art-hmenu">

    <li><a href="home.php"  class="active">Home</a></li>

    <li><a href="#" <?php if(isset($thispage) && $thispage == 'training'){ echo "class='active'";}  ?>>Training Courses</a>

     <ul>

     <?php do{?>

      <li><a href="training-course.php?categid=<?php echo $row_Catagories['id']; ?>"><?php echo $row_Catagories['EnName']; ?></a></li> 

      <?php }while($row_Catagories = mysql_fetch_assoc($Catagories));?>

    </ul>

   </li>

   

    

    <li><a href="news.php">News</a></li><li><a href="gallery.php">Gallery</a></li><li><a href="Contactus.php">Contact Us</a></li><li><a href="about-us.php">About Us</a></li>

    

        </ul>

     

     

       </nav>

<div class="art-sheet clearfix">

            <div class="art-layout-wrapper clearfix">

                <div class="art-content-layout">

                    <div class="art-content-layout-row">

                        <div class="art-layout-cell art-sidebar1 clearfix"><div class="art-block clearfix">

        <div class="art-blockheader">

            <h3 class="t">Welcome to our center</h3>

        </div>

        <div class="art-blockcontent"> 

 Training contributes to solving the problems passes by the employee or likely to face in the future as well as its contributing to development of the behavior of the trainee. <a href="about-us.php"  > more »</a>

 </div>

</div><div class="art-block clearfix">

        <div class="art-blockheader">

            <h3 class="t">Search</h3>

        </div>

        <div class="art-blockcontent">

         <form action="search-results.php" method="get">

       <input name="search" type="text" id="search" size="20" value=" Search..." onBlur="if (this.value == '') {this.value = ' Search...';}" onFocus="if (this.value == ' Search...') {this.value = '';}"/>

  </form> </div>

</div><div class="art-block clearfix">

        <div class="art-blockheader">

            <h3 class="t">Latest News</h3>

        </div>

      

        <marquee   scrollamount="2" direction="up" loop="true"  height="90%"> 

        <strong>

        <?php do{?>

        </MM:DECORATION></MM_REPEATEDREGION>

        </strong>

        <MM_REPEATEDREGION SOURCE="@@rs@@"><MM:DECORATION OUTLINE="Repeat" OUTLINEID=2>

          <p style="font-weight:100;"><strong><?php echo $row_News["EnTitle"]; ?></strong></p> 

          <strong><br>





        <?php }while($row_News = mysql_fetch_assoc($thisNews));?>

       

        </marquee>

        

  

</div></div>

                        <div class="art-layout-cell art-content clearfix"><article class="art-post art-article">

                                

                                                

                <div class="art-postcontent art-postcontent-0 clearfix"><div class="art-content-layout">

    <div class="art-content-layout-row">

    <div class="art-layout-cell" style="width: 36%" >

        <p style="text-align: left;"><img width="241" height="155" alt="" src="images/contnt-image-02.jpg" class=""></p>

        <h4 style="text-align: left;padding-left:10px;">OUR Training &amp; Courses</h4>

        <p style="text-align: left;"><a href="training-course.php?categid=2" class="art-button">Learn more »</a></p>

    </div><div class="art-layout-cell layout-item-0" style="width: 64%" >

        <img width="437" height="285" alt="" src="images/contnt-image-01.jpg" style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px;" class="">

    </div>

    </div>

</div>

<div class="art-content-layout-br layout-item-1">

</div><div class="art-content-layout layout-item-2">

    

</div>

 

<div class="art-content-layout">

    <div class="art-content-layout-row">

    <div class="art-layout-cell" style="width: 100%" >

          <h3>Upcoming Courses</h3>

       <?php if($totalRows_thismonthCourses > 0)

{

?>

 



 <table width="100%" border="1" cellpadding="1" cellspacing="1">

  <tr style="color:#069; font-weight:bold">

    <td >Course</td>

    <td >Start Date</td>

    <td>End Date</td>

    <td> Location</td>

    <td bgcolor="#CCCCCC">Price</td>

     <td bgcolor="#CCCCCC">Register</td>

    </tr>

  <?php do { ?>

    <tr bgcolor="#D2FFE9">

      <td><?php echo $row_thismonthCourses['EnName'];  ?>&nbsp;</td>

      <td><?php echo $row_thismonthCourses['StartDate']; ?></td>

      <td><?php echo $row_thismonthCourses['EndDate']; ?></td>

      <td><?php echo $row_thismonthCourses['EnLocation']; ?></td>

      <td><?php echo $row_thismonthCourses['Cost']; ?> L.E</td>

        <td><a href="registeration.php?cid=<?php echo $row_thismonthCourses["cid"];?>&scaduleID=<?php echo $row_thismonthCourses["sid"]; ?>">Register</a></td>

  

      </tr>

    <?php } while ($row_thismonthCourses = mysql_fetch_assoc($thismonthCourses)); ?>

</table>

<?php }else{?>



<div align="center" class="alert" style="margin-top:50px;">There are no upcoming courses.</div>

<?php }?>

</p>

    <br>

    <br>

    <br>

    <br>

    </div>

    </div>

</div>

</div>

                                

                </article></div>

                    </div>

                </div>

            </div>
			
<footer class="art-footer clearfix">
<div class="art-content-layout">
	
		<div class="art-content-layout-row">
		Address: 474, Alhorrya Av., Bolkly, Alexandria, Egypt, Tel  : +2 03 54 62 721, Fax : +2 03 54 28 161
<br/>
Copyright © 2013. All Rights Reserved.
		</div>
</div>



<!--
	<div class="art-content-layout">
	
		<div class="art-content-layout-row">
		
			<div class="art-layout-cell layout-item-0" style="width: 5%">
			
				<p style="text-align: left;"><a title="RSS" class="art-rss-tag-icon" href="#" style="line-height: 30px;"></a></p>
			
			</div>
			
			<div class="art-layout-cell layout-item-1" style="width: 95%">						
			
			<p style="text-align: left;">Copyright © 2011. All Rights Reserved.</p>
			
			</div>
		
		</div>
	
	</div>
	-->
</footer>



 





</body></html>