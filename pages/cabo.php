<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
?>
 <table id="example2" class="table table-bordered table-striped">
 <thead>
     <tr>
         <th>Testados</th>
         <th>Recuperado</th>
         <th>Negativo</th>
         <th>Possetivo</th>
         <th>Quarentena</th>
         <th>Obitos</th>
         <th>Atualizado em:</th>
     </tr>
 </thead>
 <tbody>
     <tr>
         <?php
         $tabela=mysqli_query($conexao, "SELECT * FROM `tete` ");
          while($array=mysqli_fetch_array($tabela)) {
              ?>
         <td><?= $array['3']+$array['4'] ?></td>
         <td><?= $array['1'] ?></td>
         <td><?= $array['2'] ?></td>
         <td><?= $array['3'] ?></td>
         <td><?= $array['4'] ?></td>
         <td><?= $array['5'] ?></td>
         <td><?= $array['6'] ?></td>

     </tr>
     <?php
          }
           ?>
 </tbody>
 <tfoot>
     <tr>
         <th>Testados</th>
         <th>Recuperado</th>
         <th>Negativo</th>
         <th>Possetivo</th>
         <th>Quarentena</th>
         <th>Obitos</th>
         <th>Atualizado em:</th>
     </tr>
 </tfoot>
</table>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>