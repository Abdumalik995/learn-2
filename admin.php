<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="ckeditor/ckeditor.js"></script>
</head>
<!DOCTYPE html>
<html>
<head>
	<title>bazap php</title>
    <link rel="stylesheet" type="text/css" href="css/astyle.css">
</head>

<body>

	<div id="mail">
        <div></div>
			<h1>Ma'lumot <span> qo'shish </span></h1>
            <p><span class="red"></span><span style="color:blue"></span></p>       
			<form id="form" action="insert.php" method="post" autocomplete="off" enctype="multipart/form-data">
            <input type="text" name="name"  placeholder="name here">
            <span class="red"> <?php ?></span>
            <br>			
			<input type="text" name="anonss" placeholder="anons here">
            <span class="red"> <?php ?></span>
            <br>
            <textarea type="text" name="texts"></textarea>
            <br>
            <input type="file" name="fayl" accept=".jpg, .jpeg, .png">
            <br>	
            <br>
            <input type="date" name="datee" placeholder="Date here">            
            <br>
            <br>
          	<input type="text" name="avtor" placeholder="author  here">
            <span class="red"> <?php ?></span>
            <br>
            <input type="number" name="cat_id" placeholder="cat_id here">
            <span class="red"> <?php ?></span>
            <br>
            
			<input id="sub" type="submit" name="sub" value="Qushish">
		</form>
        
		</div>
   
          
    </div>
    <script src="ckeditor/ckeditor.js"></script>
    <script>
		CKEDITOR.replace('texts');
	</script>
</body>
</html> 