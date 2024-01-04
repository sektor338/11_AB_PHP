<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Véradás</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

  <div class="container">

  <p style="text-align:center;"><img src="mv.png" alt="Magyar Vöröskereszt logó" class="m-auto "></p>

     <form action="veradasinfo.php"<?php ?> method="POST">  
    <div class="mb-5">
        <label for="exampleInputEmail1" class="form-label">Név</label>
        <input required name="nev" type="input" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Teljes név">
    </div>

    <div class="mb-5">
        <label for="exampleInputEmail1" class="form-label">Email cím</label>
        <input required name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
        <div id="emailHelp" class="form-text"></div>
    </div>

    <div class="mb-5">
        <label>Telefonszám</label>
        <input required type="tel" name="telefon" placeholder="Telfonszám">
    </div>

    <div class="mb-5">
        <label for="exampleInputPassword1" class="form-label">Lakcím</label>
        <input required name="lakcim" type="input" class="form-control" id="exampleInputPassword1" placeholder="Lakcím">
    </div>

    <div class="mb-5">
        <label>Születési dátum</label>
        <input type="date" name="szuletesidatum">
    </div>

    <div>
    <select class="form-select mb-5" required name="vercsop">
      <option selected value="" disabled>Vércsoport választása</option>
      <option value="0-">0-</option>
      <option value="0+">0+</option>
      <option value="A-">A-</option>
      <option value="A+">A+</option>
      <option value="B-">B-</option>
      <option value="B+">B+</option>
      <option value="AB-">AB-</option>
      <option value="AB+">AB+</option>
      <option value="Nem tudom">Nem tudom</option>
    </select>
    </div>

    <div>
    <fieldset class="row mb-5" required>
    <legend class="col-form-label col-sm-2 pt-0">Fogyaszt-e alkoholt</legend>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="igen">
        <label class="form-check-label" for="gridRadios1">Igen</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="nem">
        <label class="form-check-label" for="gridRadios2">Nem</label>
      </div>
      </fieldset>
    </div>

    <div>
      <fieldset class="row mb-5" required>
    <legend class="col-form-label col-sm-2 pt-0">Dohányzik-e</legend>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="b" id="gridRadios1" value="igen">
        <label class="form-check-label" for="gridRadios1">Igen</label>
      </div>
    
    <div class="form-check">
        <input class="form-check-input" type="radio" name="b" id="gridRadios2" value="nem">
        <label class="form-check-label" for="gridRadios2">Nem</label>
    </div>
    </fieldset>
    </div>

    <div>
      <fieldset class="row mb-5">
    <legend class="col-form-label col-sm-2 pt-0">Feliratkozik-e a Magyar Vöröskereszt hírlevelére</legend>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="a" id="gridRadios1" value="igen" checked>
        <label class="form-check-label" for="gridRadios1">Igen</label>
      </div>
    
    <div class="form-check">
        <input class="form-check-input" type="radio" name="a" id="gridRadios2" value="nem">
        <label class="form-check-label" for="gridRadios2">Nem</label>
    </div>
    </fieldset>
    </div>

    <button type="submit" class="btn btn-primary">Jelentkezés</button>
</form>
</div> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>   
</body>
</html>