<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <title>Latihan PHP</title>
</head>

<body>
   <h1> Belajar PHP </h1>
   <h2>Latihan PHP</h2>

   <?php
   // Variable PHP
   $nim = "31220525";
   $nama = 'Nova Restina';
   echo "NIM : " . $nim . "<br>";
   echo "Nama : $nama <br><br>";

   // Predefine Variable $_GET
   if (isset($_GET['nama'])) {
      echo 'Selamat Datang ' . $_GET['nama'] . "<br><br>";
   }

   // Membuat Form Input
   echo '<h3>Form Input</h3>';
   echo '<form method="post">';
   echo '<label>Nama: </label>';
   echo '<input type="text" name="nama">';
   echo '<input type="submit" value="Kirim">';
   echo '</form>';
   if (isset($_POST['nama'])) {
      echo 'Selamat Datang ' . $_POST['nama'] . "<br><br>";
   }

   // Operator
   $gaji = 1000000;
   $pajak = 0.1;
   $thp = $gaji - ($gaji * $pajak);
   echo "Gaji sebelum pajak = Rp. $gaji <br>";
   echo "Gaji yang dibawa pulang = Rp. $thp <br><br>";

   // Kondisi IF
   $nama_hari = date("l");
   if ($nama_hari == "Sunday") {
      echo "Minggu";
   } elseif ($nama_hari == "Monday") {
      echo "Senin";
   } else {
      echo "Selasa";
   }
   echo "<br><br>";

   // Kondisi Switch
   switch ($nama_hari) {
      case "Sunday":
         echo "Minggu";
         break;
      case "Monday":
         echo "Senin";
         break;
      case "Tuesday":
         echo "Selasa";
         break;
      default:
         echo "Sabtu";
   }
   echo "<br><br>";

   // Perulangan for
   echo "Perulangan 1 sampai 10 <br />";
   for ($i = 1; $i <= 10; $i++) {
      echo "Perulangan ke: " . $i . '<br />';
   }
   echo "Perulangan Menurun dari 10 ke 1 <br />";
   for ($i = 10; $i >= 1; $i--) {
      echo "Perulangan ke: " . $i . '<br />';
   }
   echo "<br>";

   // Perulangan while
   echo "Perulangan 1 sampai 10 <br />";
   $i = 1;
   while ($i <= 10) {
      echo "Perulangan ke: " . $i . '<br />';
      $i++;
   }
   echo "<br>";

   // Perulangan dowhile
   echo "Perulangan 1 sampai 10 <br />";
   $i = 1;
   do {
      echo "Perulangan ke: " . $i . '<br />';
      $i++;
   } while ($i <= 10);
   ?>

</body>

</html>