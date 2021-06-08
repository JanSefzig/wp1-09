<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Prodej Aut - Volkswagen</h1>


    <label for="cars">Vyberte model auta</label> 
<br>
<select name="cars" id="cars">
<option value="other"></option>
  <option value="model1">Amarok</option>
  <option value="model2">Arteon</option>
  <option value="model3">Caddy</option>
  <option value="model4">Crafter</option>
  <option value="model5">Golf</option>
  <option value="model6">Passat</option>
</select>

<label for="cars"> <h3>Vyberte barvu vašeho vozidla</h3> </label> 
<select name="colors" id="colors">
  <option value="other1"></option>
  <option value="color1">Tmavě modrá</option>
  <option value="color2">Černá</option>
  <option value="color3">Šedivá</option>
  <option value="color4">Červená</option>
  <option value="color5">Růžová</option>
  <option value="color6">Žlutá</option>
</select>

    <br>
    <h2> Vyber palivo</h2>
    <input type="radio" id="male" name="gender" value="male">
    <label for="Diesel">Diesel</label><br>
    <input type="radio" id="female" name="gender" value="female">
    <label for="Benzin">Benzin</label><br>
    <input type="radio" id="other" name="gender" value="other">
    <label for="LPG">LPG</label>
    <br>

    <input type="radio" id="female" name="gender" value="female">
    <label for="Elektro">Elektro</label><br>
    <input type="radio" id="other" name="gender" value="other">
    <label for="hybrid">Hybrid</label>
    <br>

    <h2>Zaškrtni vybavení, které chceš mít v automobilu</h2>

    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
<label for="vehicle1"> Náhradní žárovky a pojistky </label><br>
<input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
<label for="vehicle2"> Tažné lano </label><br>
<input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
<label for="vehicle3"> Hasicí přístroj </label><br>
<input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
<label for="vehicle1"> Výstražný trojúhelník </label><br>
<input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
<label for="vehicle2"> Reflexní vesta </label><br>
<input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
<label for="vehicle3"> Lékárnička </label><br>
<br>
<input type="submit" value="Odeslat">
    
</body>
</html>