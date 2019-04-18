<?php 
   header("Content-Type: text/html; charset=utf-8");
   include('db.php');
   if (isset($_GET['id'])) {
	   $id = $_GET['id'];
	   $surov = "SELECT * FROM content WHERE id=".$id."";
	   $result = mysqli_query($db, $surov);
     
    $rows = mysqli_fetch_array($result);
      
   	$surov2 = "SELECT name FROM kategoriya WHERE id=".$rows['cat_id']."";

   	  $result2 =  mysqli_query($db, $surov2);
   	
   	  $rows2 = mysqli_fetch_array($result2);
   	  //echo($rows2);

   	  //echo "eski".$rows['keyss'],'<br>';
   	  $key = $rows['keyss']+1;
   	  //echo $key;
   	  $query = "UPDATE content SET keyss = '$key' WHERE id = ".$id."";

   	  $result3 = mysqli_query($db, $query);

   }
?>
 <!DOCTYPE html>
 <html lang="uzb">
 <head>
   <meta charset="utf-8">
   <title>MNews</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
   <link href="css/style.css" rel="stylesheet">
   <style type="text/css">
    .keys {
    text-align: right;
    font-size: 10px;
    }
  </style>
 </head>
 <body>
   <!-- Header start -->
   <?php 
      include_once('blocks/header.php');
    ?>
   <!-- !Header finish -->
   <div class="container">
   <!-- ====Malumotlar==== -->
     <!--PAGE TITLE-->

      <div class="page-header">
            <h1 class="theme">
            <?php echo $rows2['name']?> yangiliklari.
            </h1>
      </div>

  <!-- /. PAGE TITLE-->
  

     <div class="span12">
      
      <h2 class="">
         <?php echo $rows['name'];?>
      </h2>
      <div class="news">   
         <img class="pull-left" alt="" src="rasm/<?php echo $rows['img'];?>" style="margin-right:15px"/>
         <p><?php echo $rows['texts']; ?></p>
      
      </div>      
      <p class="keys"><span style="margin-right: 5px"><?=$rows['datee'];?></span>
      <i class="far fa-eye" style="margin-right:5px;color:#aaa"></i><?=$key;?></p>
   
      

   <!-- ====Malumotlar finish==== -->



   </div>
</div>

   <!-- Footer -->
   <?php 
      include_once('blocks/footer.php');
       ?>
      <!-- !Footer finished -->
       <script type="text/javascript" src="js/jquery.js"></script>
       <script type="text/javascript" src="js/main.js"></script>
 </body>
 </html>