<?php 
   include "db.php";
   $query = "SELECT * FROM kategoriya";
   $result = mysqli_query($db, $query);

 ?>
 <header>
 	<p class="havo"> 		
 		<img src="" alt="temp" id="icon" style="">
 		<span id="city" style=""></span> 		
		
 	</p>
 	
 	<ul class="navblock">
 		<li class=""><a href="index.php" style="color: #000">Bosh sahifa</a></li>
 		<?php while($row = mysqli_fetch_assoc($result)) { ?>  
            <li><a href="content.php?id=<?=$row['id']?>"><?=$row['name']?></a></li>
        <?php } ?> 
 	</ul>
 </header>
 	<div class="search">
 		<form action="search.php" method="GET" autocomplete="off">
 			<input type="text" name="search" placeholder="Izlash...">
 			<input type="submit" name="Izlash" value="Izlash">
 		</form>
 	</div>
