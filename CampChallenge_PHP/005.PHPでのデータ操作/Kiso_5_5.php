<?php
session_start();
if($_SERVER['REQUEST_METHOD'] ==='POST'){//データの入力がされた時に代入を行う
  $id = $_POST['txtName'];
  $gender = $_POST['txtGender'];
  $hobby = $_POST['txtHobby'];
}
if(isset($_POST['txtName'])){
  $_SESSION['personaldata1'] = $id;
  $_SESSION['personaldata2'] = $gender;
  $_SESSION['personaldata3'] = $hobby;
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
    <title>パーソナルフォーム</title>
  </head>
  <body>
    <form action=" " method="POST">
    Name:<input type="text" name="txtName">
    Gender: Man<input type="radio"  name="txtGender" value="Man" >
    Woman<input type="radio"  name="txtGender" value="Woman" >
    Hobby: <select name="txtHobby">
           <option>movie appreciation</option>
           <option>music appreciation</option>
           <option>play sports</option>
           <option>shopping</option>
           </select>
       <input type="submit" name="btnSubmit" value="Check!">
     </form>
   </body>
   </html>

   <?php
   echo '<br>Welcome Back!<br> Mr.'.$_SESSION['personaldata1'].'！<br>';
   echo 'Last log in data <br>'
   .'ID:'.$_SESSION['personaldata1'].'<br>性別:'
   .$_SESSION['personaldata2'].'<br>趣味:'.$_SESSION['personaldata3'];
    ?>
