<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Moj prvi sajt</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
 
  <div class="container">
    <div class="row">
        <div class="col-6 offset-3">
        <img src="https://wallpapercave.com/wp/wp7502354.png" width="200" height="350" alt="naruto" >
      <form action="validate.php" method="post">
          <b>Vas omiljeni lik iz Naruta?</b><br>
          <select name="lik">
                   <?php $imena=array("Naruto","Sasuke","Hinata","Sakura","Sikamaru","Gara","Kakasi");
                   for($i=0; $i<count($imena);$i++): ?>
                <option value="<?php echo $imena[$i]; ?>"><?php echo $imena[$i]; ?></option>
            <?php endfor; ?>
            </select>
        </br></br>
          <div>
          <p>Da li ste odgledali sve epizode naruta</p>
          <input type="radio" name="gl" value="da">Da
          <input type="radio" name="gl" value="ne">Ne
          <br><button type="submit" class="btn btn-success" name="btn">Potvrdi</button>
</div>
</div>
</div>


      </form>
 
  </body>
</html>