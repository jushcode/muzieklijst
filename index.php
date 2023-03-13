<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/master.css">
    <title>Your Playlist</title>
</head>
<body>
 <!-- bestand van php -->
 <a href="addsong.php">Toevoegen</a>
 <?php
      //Add config
      include 'config.php';

      // Create a query connection
      $sql = "SELECT id, artist, title from songs";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        // output data of each row
        echo"<table>";
        echo "<tr>
          <th>Id</th>
          <th>Artiest</th>
          <th>Titel</th>
          <th>Wijzig</th>
        </tr>";
          while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["artist"] . "</td>";
            echo "<td>" . $row["title"] . "</td>";
        echo "<td>" . "<a href=\"updatesong.php?id=$row[id]\"><input type='submit' value='Wijzig'></a>" . "</td>";
            echo "</tr>\n";
          }
          echo"</table>";
        } else {
          echo "0 results";
        }

      $conn->close();
      ?>
</body>
</html>