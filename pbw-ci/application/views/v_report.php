<html>
<head>
    <title>Laporan</title>
</head>
    <a href="<?php echo site_url('welcome'); ?>">Kembali ke Halaman Utama</a>
    <br>
    <br>
    <a href="<?php echo site_url('report/download'); ?>">
      <input class="more_btn" type="submit" name="tombol" value="Unduh Laporan"></a>
<body>
    <h1 align="center">Laporan</h1>
    
    <div align="center">
    <table width='80%' border=1>

    <tr>
        <th>Name</th> <th>Email</th> <th>Telepon</th>  <th>Pesan</th>
    </tr>
    <?php
        foreach($user as $c){
        ?>
        <tr>
          <td><?php echo $c->name ?></td>
          <td><?php echo $c->email ?></td>
          <td><?php echo $c->subject ?></td>
          <td><?php echo $c->message ?></td>
        </tr>
        <?php } ?>
    </table>
        </div>
    
</body>
</html>