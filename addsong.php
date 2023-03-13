<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="master.css">
  </head>
  <body>
    <p>Voeg een nieuw nummer</p>
    <form action="insertsong.php" method="post">
      <label for="Artist">Artiest</label>
      <input type="text" id="artist" name="artist">
      <label for="Title">Titel</label>
      <input type="text" id="title" name="title">
      <input type="submit" name="submit" value="Toevoegen">
      <a href="index.php">Ga terug</a>
    </form>
  </body>
</html>
