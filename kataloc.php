<?php
      $dbUser = 'root';
      $dbName = 'skazka';
      $dbPass = '';
      $mysqli = new mysqli('localhost', $dbUser, $dbPass, $dbName);
      $query = "set names utf8";
      $mysqli->query($query);
      $query = "select * from product";
      $results = $mysqli->query($query);
      while($row = $results->fetch_assoc()){
        echo '
        <table class="product1">
          <tr>
            <th><h3>'.$row["name"].' <br> '.$row["type"].'<h3></th>
          </tr>
          <tr>
            <td class="product-img"><img src="'.$row["img"].'" height="25%" width="65%" /></td>
          </tr>
          <tr>
            <td class="days1"><h4>'.$row["datе_start"].' <br> '.$row["datе_1"].'</h4></td>
          </tr>
          <tr>
          <td class="days2"><h4>'.$row["datе_end"].' <br> '.$row["datе_2"].'</h4></td>
        </tr>
          <tr>
            <td class="inform">'.$row["info"].'</td>
          </tr>
          <tr>
            <td class="price">'.$row["price"].'</td>
          </tr>
        </table>
        ';
      }
?>