<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo "Welcome to PHP-- Selamat Datang di php;?><h1> " 

   <?php
   //variabel
   $jam = 12;
   if($jam < 12) {
     echo "<h3>Selamat Pagi</h3>";
   } else {
    echo "<h3>Selamat siang";
   }
  // variabel array
  $hoby = ['Makan,'Minum,'Tidur'];
  var_dump(value : $hoby);
  if(is_array(value: $hoby)){
       echo "Hoby Saya ada".count (value: $hoby);
  }


  echo "<br/>";
  //Type data null
  $nilaiuts = NULL;
  if(is_null(value:$nilaiuts)){
     echo "Nilai UTS BELUM KELUAR"
  }
  ?>
</body>
</html>