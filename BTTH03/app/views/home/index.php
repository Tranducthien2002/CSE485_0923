<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sach Benh nhan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
    <div class="container">
        <h3>Danh sach benh nhan</h3>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Ma benh nhan</th>
      <th scope="col">Ten benh nhan</th>
      <th scope="col">Ngay Kham</th>
      <th scope="col">Trieu chung</th>
      <th scope="col">Ma Bac si</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach($patients as $patient){ ?>
        <tr>
      <th scope="row"><?= $patient->getID();?></th>
      <td><?= $patient->gettenBenhNhan();?></td>
      <td><?= $patient->getngayKham();?></td>
      <td><?= $patient->gettrieuChung();?></td>
      <td><?= $patient->getidBacSi();?></td>
    </tr>
    <?php
    }
    ?>
    
  </tbody>
</table>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>