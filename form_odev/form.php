<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mod3</title>
</head>
<body>
<form action="form.php" method="post">
    <input type="number" name="number" placeholder="sayı gir">
    <button type="submit"> bul </button>
</form>
<?php
    function mod3($number){
        if($number==""){
            return "Değer giriniz!";
        }

        if($number%3==0){
            return "$number 3'e bölünür.";
        }
        else {
            $val=$number+3-($number%3);
            return "$number 3'e bölünemez. Bölünebilecek ilk sayı ${val}";
        }
    }
if($_POST!=NULL)
     print htmlspecialchars(mod3($_POST["number"])); ?>
</body>
</html>
