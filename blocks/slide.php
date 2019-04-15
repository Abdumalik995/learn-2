<?php

  include "db.php";

  $query = "SELECT * FROM content order by id desc limit 1";
  $result = mysqli_query($db, $query);
  $query2 = "SELECT * FROM content order by id desc limit 4";
  $result2 = mysqli_query($db, $query2);

  
   $row = mysqli_fetch_assoc($result);
  

 	$anons = array();
  	while($row2 = mysqli_fetch_assoc($result2)) {
    $anons[] = $row2;
	}
	//print_r($anons);
 ?>

<div class="caption">
	<div style="padding:20px">
	    <h1><?=$row['name']?></h1>
	    <p class="lead"><?=$row['anons']?></p>
	    <a class="btn" href="contentmore.php?id=<?=$row['id']?>">Batafsil</a>
    </div>
	<div class="span" style="">
		<img src="rasm/<?=$row['img']?>" style="height:400px">
	</div>
</div>
<div class="cards">
	<?php foreach ($anons as $value) { ?>
	<div class="card">
		<img src="rasm/<?=$value['img']?>" style="">
		<div>
			<h4><?=$value['name']; ?></h4>
			<p class="lead"><?=$value['anons']?></p>
			<a class="btn" href="contentmore.php?id=<?=$value['id']?>">Batafsil</a>
		</div>
	</div>
	<?php } ?>
</div>