<?php
if (isset($_GET['angka1'])) {
    $a = $_GET['angka1'];
    $b = $_GET['angka2'];
    $op = $_GET['op'];
    $exp = "$a $op $b";
    $hasil = eval("return $exp;");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Kalkulator Eval</title>
<style>
body {
  font-family: "Poppins", sans-serif;
  background: url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e') no-repeat center/cover;
  display: flex; justify-content: center; align-items: center;
  height: 100vh; margin: 0;
}
.box {
  backdrop-filter: blur(15px);
  background: rgba(255,255,255,0.1);
  border: 1px solid rgba(255,255,255,0.3);
  padding: 2rem; border-radius: 25px;
  box-shadow: 0 8px 32px rgba(31,38,135,0.37);
  width: 340px; text-align: center; color: white;
}
h2 { margin-bottom: 1rem; font-weight: 600; }
input[type="text"] {
  width: 90%; padding: 12px; margin: 10px 0;
  border-radius: 12px; border: none;
  background: rgba(255,255,255,0.2);
  color: white; font-size: 1rem; outline: none;
}
input[type="text"]::placeholder { color: #ddd; }
label { margin: 0 5px; font-weight: bold; }
input[type="radio"] { margin: 0 8px; }
input[type="submit"] {
  margin-top: 12px;
  width: 100%; padding: 12px;
  border: none; border-radius: 15px;
  background: linear-gradient(90deg, #00c6ff, #0072ff);
  color: white; font-weight: bold; font-size: 1rem;
  cursor: pointer; transition: 0.3s;
}
input[type="submit"]:hover {
  background: linear-gradient(90deg, #0072ff, #00c6ff);
  transform: scale(1.05);
  box-shadow: 0 0 15px #00c6ff;
}
h3 {
  margin-top: 1rem; font-size: 1.2rem;
  color: #00e6ff; text-shadow: 0 0 8px #0072ff;
}
</style>
</head>
<body>
<div class="box">
  <h2>Kalkulator - Eval</h2>
  <form method="GET">
    <input type="text" required name="angka1" placeholder="Angka 1"><br>
    <input type="text" required name="angka2" placeholder="Angka 2"><br>
    <label>+</label><input type="radio" value="+" name="op">
    <label>-</label><input type="radio" value="-" name="op">
    <label>*</label><input type="radio" value="*" name="op">
    <label>/</label><input type="radio" value="/" name="op"><br>
    <input type="submit" value="Hitung">
  </form>
  <?php if (isset($hasil)) echo "<h3>✨ Hasil: $hasil ✨</h3>"; ?>
</div>
</body>
</html>
