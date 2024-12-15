<?php

include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM barangmainan ORDER BY Bil DESC");
?>

<html>
    <head>
          <title>Senarai Barangan Kedai Dulu-Dulu</title>
    </head>
    <body>
    <center>
        <h2>SENARAI BARANGAN DAN HARGA</h2> 
        <fieldset>
            <table witdh='80%'border=0>
                <tr bgcolor='#CCCCCC'>
                    <td>Bil.</td>
                    <td>Nama Produk</td>
                    <td>Harga</td>
                    <td>Tindakan</td>
                </tr>

<?php
      $no=1;
      $result = mysqli_query($mysqli,"SELECT * FROM barangmainan");
      while($res = mysqli_fetch_array($result)) {
          echo "<tr>";  
          echo "<td>".$no; 
          echo "<td>".$res['Nama_Produk']."</td>"; 
          echo "<td>".$res['Harga']."</td>"; 
          echo "<td><a href=\"delete.php?Bil=$res[Bil]\" onClick=\return confirm('Adakah anda pasti?')
                    \">hapus</a></td>";
          $no++;
      }
         ?>
            </table>
            <br><a href="add.php">Daftar Barang Baru</a>
    </center>
  </fieldset>
    </body>
</html>

