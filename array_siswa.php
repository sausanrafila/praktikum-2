<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    <title></title>
    <style>
        
        table{
            margin: 50px;
        }
        

       
    </style>

</head>
<body>



<table class="table mt-5 " >
<?php
function grade($nilai)
{
 if($nilai <= 100 ) {
       $grade = "A";
  } if($nilai <  80 )  {
      $grade = "B";
  } if($nilai <  70 )  {
      $grade = "C";
  } if($nilai <  60 )  {
      $grade = "D";
  } if($nilai <  50 )  {
      $grade = "E";
    }

 return $grade;
}


?>
    <?php
    
    $nama_siswa = ($_POST['namalengkap_']);
    $mata_kuliah = ($_POST['matakuliah_']);
    $nilai_uts = ($_POST['nilaiuts_']);
    $nilai_uas = ($_POST['nilaiuas_']);
    $nilai_tugas = ($_POST['nilaitugas_']);
    

    $nilai = (30 * $nilai_uts / 100) + (35 * $nilai_uas / 100) + (35 * $nilai_tugas/100);
    $grade = grade($nilai);

    ?>

<thead>
    <tr>
        <th scope='col'>No</th>
        <th scope='col'>Nama lengkap</th>
        <th scope='col'>Mata kuliah</th>
        <th scope='col'>Nilai UTS</th>
        <th scope='col'>Nilai UAS</th>
        <th scope='col'>Nilai Tugas</th>
        <th scope='col'>Grade Nilai</th>

    </tr>
</thead>
<tbody>
    <th scope='row'>1</th>
    <th><?php echo $nama_siswa ?></th>
    <th><?php echo $mata_kuliah ?></th>
    <th><?php echo $nilai_uts ?></th>
    <th><?php echo $nilai_uas ?></th>
    <th><?php echo $nilai_tugas ?></th>
    <th><?php echo $grade ?></th>

</tbody>

  
</body>
</html>