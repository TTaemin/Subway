<?php
  $link = mysqli_connect('localhost', 'swinfo', 'swpw#t11', 'swinfo');
  if (isset($_GET['station'])) {
      $filtered_id = mysqli_real_escape_string($link, $_GET['station']);
  } else {
      $filtered_id = mysqli_real_escape_string($link, $_POST['station']);
  }

  $query = "
      SELECT month, number, station,
      qtime4_5, qtime5_6, qtime6_7, qtime7_8, qtime8_9, qtime9_10, qtime10_11, qtime11_12, qtime12_13,
      qtime13_14, qtime14_15, qtime15_16, qtime16_17, qtime17_18, qtime18_19, qtime19_20, qtime20_21,
      qtime21_22, qtime22_23, qtime23_24
      FROM time
      WHERE station like '{$filtered_id}%'
      ";

  $result = mysqli_query($link, $query);
  // $row = mysqli_fetch_array($result);

  $time_info_out = '';
  while ($row = mysqli_fetch_array($result)) {
      $time_info_out .= '<tr>';
      $time_info_out .= '<td>'.$row['month'].'</td>';
      $time_info_out .= '<td>'.$row['number'].'</td>';
      $time_info_out .= '<td>'.$row['station'].'</td>';
      $time_info_out .= '<td>'.$row['qtime4_5'].'</td>';
      $time_info_out .= '<td>'.$row['qtime5_6'].'</td>';
      $time_info_out .= '<td>'.$row['qtime6_7'].'</td>';
      $time_info_out .= '<td>'.$row['qtime7_8'].'</td>';
      $time_info_out .= '<td>'.$row['qtime8_9'].'</td>';
      $time_info_out .= '<td>'.$row['qtime9_10'].'</td>';
      $time_info_out .= '<td>'.$row['qtime10_11'].'</td>';
      $time_info_out .= '<td>'.$row['qtime11_12'].'</td>';
      $time_info_out .= '<td>'.$row['qtime12_13'].'</td>';
      $time_info_out .= '<td>'.$row['qtime13_14'].'</td>';
      $time_info_out .= '<td>'.$row['qtime14_15'].'</td>';
      $time_info_out .= '<td>'.$row['qtime15_16'].'</td>';
      $time_info_out .= '<td>'.$row['qtime16_17'].'</td>';
      $time_info_out .= '<td>'.$row['qtime17_18'].'</td>';
      $time_info_out .= '<td>'.$row['qtime18_19'].'</td>';
      $time_info_out .= '<td>'.$row['qtime19_20'].'</td>';
      $time_info_out .= '<td>'.$row['qtime20_21'].'</td>';
      $time_info_out .= '<td>'.$row['qtime21_22'].'</td>';
      $time_info_out .= '<td>'.$row['qtime22_23'].'</td>';
      $time_info_out .= '<td>'.$row['qtime23_24'].'</td>';
      $time_info_out .= '</tr>';
  }

?>


<!DOCTYPE html>
<html>

<head>
   <meta charset="UTF-8" />

   <title>Population</title>

</head>

     <body>


             <table border="1">
               <tr>
                 <th>month</th>
                 <th>line</th>
                 <th>station</th>
                 <th>04???-05???</th>
                 <th>05???-06???</th>
                 <th>06???-07???</th>
                 <th>07???-08???</th>
                 <th>08???-09???</th>
                 <th>09???-10???</th>
                 <th>10???-11???</th>
                 <th>11???-12???</th>
                 <th>12???-13???</th>
                 <th>13???-14???</th>
                 <th>14???-15???</th>
                 <th>15???-16???</th>
                 <th>16???-17???</th>
                 <th>17???-18???</th>
                 <th>18???-19???</th>
                 <th>19???-20???</th>
                 <th>20???-21???</th>
                 <th>21???-22???</th>
                 <th>22???-23???</th>
                 <th>23???-24???</th>
               </tr>
               <?= $time_info_out ?>
             </table>


     </body>
     </html>
