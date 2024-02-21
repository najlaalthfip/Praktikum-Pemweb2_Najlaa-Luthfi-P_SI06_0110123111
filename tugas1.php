<?php
//Membuat Nilai 1
$nilai1 = ["ID"=>1, "NIM"=> "0110120", "UAS"=>"90", "UTS"=>"100", "Tugas"=>"90"];
$nilai2 = ["ID"=>2, "NIM"=> "0110121", "UAS"=>"80", "UTS"=>"86", "Tugas"=>"89"];
$nilai3 = ["ID"=>3, "NIM"=> "0110122", "UAS"=>"100", "UTS"=>"79", "Tugas"=>"100"];
$nilai4 = ["ID"=>4, "NIM"=> "0110123", "UAS"=>"87", "UTS"=>"88", "Tugas"=>"95"];

//Membuat array multi
$kumpulan_nilai = [$nilai1, $nilai2, $nilai3, $nilai4];
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Tugas Praktikum 1</title>
  </head>
  <body>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">NIM</th>
      <th scope="col">UAS</th>
      <th scope="col">UTS</th>
      <th scope="col">Tugas</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($kumpulan_nilai as $nilai): ?>
        <tr>
            <td> <?php echo $nilai["ID"]; ?> </td>
            <td> <?php echo $nilai["NIM"]; ?> </td>
            <td> <?php echo $nilai["UAS"]; ?> </td>
            <td> <?php echo $nilai["UTS"]; ?> </td>
            <td> <?php echo $nilai["Tugas"]; ?> </td>
        </tr>
    <?php endforeach; ?>
  </tbody>
</table>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>
