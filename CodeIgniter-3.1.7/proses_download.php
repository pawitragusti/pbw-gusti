

<?php  
//export.php  
$connect = mysqli_connect("localhost", "root", "", "daftar");
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM daftar_nama";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>nama</th>  
                         <th>alamat</th>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                         <td>'.$row["nama"].'</td>  
                         <td>'.$row["alamat"].'</td> 
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }
}
?>
