<?php 
    header("Content-Type: text/html; charset=utf-8");
    
    if (isset($_GET['search'])) {
        $search = $_GET['search'];
        include('db.php');
        if (!empty($_GET['search'])) {
            $surov = "SELECT * FROM content WHERE anonss LIKE '%".$search."%' ORDER BY id DESC";
            $results = mysqli_query($db, $surov);
            $massiv = array();
            while ($rows = @mysqli_fetch_assoc($results)) {
                $massiv[] = $rows;
            }
        //print_r($massiv);
        } else {
            header("Location: index.php");
        }
        
	 } else {
        header("Location: index.php");
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
        color: #555;
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

      
    <!-- ====Malumotlar==== -->
        
             
      
        <?php foreach ($massiv as $value) { ?>
            <div class="news">
                <img src="rasm/<?=$value['img']?>">
                <div>
                    <h2><?=$value['name']?></h2>
                    <p>
                    <?=$value['anons']?>
                    </p>
                    <p class="keys"><span style="margin-right: 5px"><?=$value['datee'];?></span>
                    <i class="far fa-eye" style="margin-right:5px;color:#aaa"></i><?=$value['keyss'];?></p>
                    <a href="contentmore.php?id=<?=$value['id']?>">Batafsil</a>
                </div>
            </div>
      <?php } ?>
     
  
      
   
      

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