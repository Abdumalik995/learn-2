<?php 
	//header("Content-Type: text/html; charset=utf-8");
	include "db.php";

	$query = "SELECT * FROM content ORDER BY keyss desc limit 4";
	$result =  mysqli_query($db, $query);

	$massivs = array();
  	while($row = mysqli_fetch_assoc($result)) {
    $massivs[] = $row;
	}
	
 ?>
<h1 style="text-align: center;margin-top: 50px">Eng ko`p o`qilgan.</h1>
 <div class="cards">
	<?php foreach ($massivs as $value) { ?>
	<div class="card">
		<img src="rasm/<?=$value['img']?>" style="">
		<div>
			<h4><?=$value['name']; ?></h4>
			<p class="lead"><?=$value['anons']?></p>
			<p class="keys"><span style="margin-right: 5px"><?=$value['datee'];?></span>
			<i class="far fa-eye" style="margin-right:5px;color:#aaa"></i><?=$value['keyss'];?></p>
			<a class="btn" href="contentmore.php?id=<?=$value['id']?>">Batafsil</a>
		</div>
	</div>
	<?php } ?>
</div>