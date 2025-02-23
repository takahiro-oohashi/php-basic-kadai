<?php
function sort_2way($array, $order) {
        if ($order) {
          sort($array);
          echo "昇順にソートします。<br>";
        } else {
          rsort($array);
          echo "降順にソートします。<br>";
        }
        
     
        foreach ($array as $value) {
          echo $value . "<br>";
        }
      }

      $nums = [15, 4, 18, 23, 10];

      sort_2way($nums, true);

      echo "<br>";

      sort_2way($nums, false);
      ?>
    <?php
