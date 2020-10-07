<?php
                while($row = mysqli_fetch_assoc($result)){?>
                <tr>
                    <td><?php echo $row['name']?></td>
                    <td><?php echo $row['sub1']; ?></td>
                    <td><?php echo $row['sub2']?></td>
                    <td><?php echo $row['sub3']; ?></td>
                    <td><?php echo $row['totalobtained'];?></td>
                    <td><?php echo $row['percentage']; ?></td>
                    <td><a href="edit.php">Edit</a> | <a href="delete.php">Delete</a></td>";
                <tr>
                <?php } ?>
                <!-- \"delete.php?id=$row['student_id']\"\ -->


<?php

$sql = "SELECT Lastname FROM Persons ORDER BY LastName;";
$sql .= "SELECT Country FROM Customers";
if (mysqli_multi_query($con, $sql)) {
  do {
    // Store first result set
    if ($result = mysqli_store_result($con)) {
      while ($row = mysqli_fetch_row($result)) {
        printf("%s\n", $row[0]);
      }
      mysqli_free_result($result);
    }
    // if there are more result-sets, the print a divider
    if (mysqli_more_results($con)) {
      printf("-------------\n");
    }
     //Prepare next result set
  } while (mysqli_next_result($con));
}

?>