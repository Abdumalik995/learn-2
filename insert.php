<?php 
	include "db.php";

	if(isset($_POST['sub'])) {

      if(empty($_POST['name'])) {
        header("Location: admin.php");
      }else {
        $name = mysqli_escape_string($db, test_input($_POST["name"]));
      }
      if(empty($_POST['anons'])) {
        header("Location: admin.php");
      }else {
        $anonss = mysqli_escape_string($db, test_input($_POST["anonss"]));
      }
      if (empty($_POST["text"])) {
        header("Location: admin.php");
      } else {
        $text = mysqli_escape_string($db, test_input($_POST["text"]));
      }
      if (empty($_POST["nomer"])) {
        header("Location: admin.php");
      } else {
        $fayl = $_POST["fayl"];
      }
      if (empty($_POST["datee"])) {
        header("Location: admin.php");
      } else {
        $datee = $_POST["datee"];
      }
      if (empty($_POST["cat_id"])) {
        header("Location: admin.php");
      } else {
        $cat_id = $_POST["cat_id"];
      }

      $avtor = $_POST['avtor'];
    }
	    if($_FILES['fayl']['error'] == 0) {
	 	// fayl nomini uzgarivchiga tenglab olish
	 	$faylNomi = $_FILES['fayl']['name'];
	 	//fayl yuklanishi kerak bulgan serverdagi joy.
	 	$papka = dirname(_FILE_)."/rasm/".$faylNomi;
	 	//vaqtinchalk joy
	 	$kesh = $_FILES['fayl']['tmp_name'];
	 	// faylni yuklash funksiyasi
	 	$a = move_uploaded_file($kesh, $papka);
	 	
 }
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
	if(empty($name) and empty($surname)) {
        $query = '';
       } else {
         $query = "INSERT INTO content (`name`, `anonss` , `texts` , `img` , `datee` , `avtor`, `cat_id`) VALUES ('$name', '$anonss', '$text', '$img', '$datee', '$avtor', '$cat_id')";
       }
       
       $result1 = @mysqli_query($db, $query);

       if($result1) {
        header("Location: index.php");
       } else {
        echo "Ro'yhatga olishda xatolik yuzaga keldi!";
       } 
 ?>