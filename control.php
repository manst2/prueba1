<?php $user=$_POST['user'];
      $pass= $_POST['password'];
      $perfil=$_POST['perfil'];
    $array = array("admin","123","1" );
    if ($user==$array[0] and $pass ==$array[1]) {
      if ($array[2]=='1') {
        header("Location: principal.php");
      }
    }else {
      echo "incorrectoooo :-(";
    }
?>
