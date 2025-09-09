<?php
if (isset($_GET['angka1'])) {
    $a = $_GET['angka1'];
    $b = $_GET['angka2'];
    $op = $_GET['op'];

    switch ($op) {
        case "+": $hasil = $a + $b; break;
        case "-": $hasil = $a - $b; break;
        case "*": $hasil = $a * $b; break;
        case "/": $hasil = $b != 0 ? $a / $b : "Error: bagi 0"; break;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Kalkulator Switch</title>
<style>
body {
  font-family: "Poppins", sans-serif;
  background: linear-gradient(135deg, #1e3c72, #2a5298);
  display: flex; justify-content: center; align-items: center;
  height: 100vh; margin: 0;
}
.box {
  background: #fff; padding: 2rem; border-radius: 20px;
  box-shadow: 0 15px 25px rgba(0,0,0,0.2);
  width: 360px; text-align: center;
  transition: transform 0.3s;
}
.box:hover { transform: translateY(-10px) scale(1.03); }
h2 { color: #1e88e5; margin-bottom: 1rem; }
input[type="text"] {
  width: 90%; padding: 12px; margin: 10px 0;
  border: 2px solid #90caf9; border-radius: 10px;
  font-size: 1rem; outline: none;
}
input[type="text"]:focus { border-color: #1e88e5; }
.opsi {
  display: flex; justify-content: space-between;
  margin: 12px 0;
}
.opsi input[type="radio"] { display: none; }
.opsi label {
  flex: 1; margin: 0 4px; padding: 10px;
  background: #bbdefb; border-radius: 8px;
  cursor: pointer; transition: 0.3s;
  font-weight: bold; color: #0d47a1;
}
.opsi input[type="radio"]:checked + label {
  background: #1e88e5; color: white;
  box-shadow: 0 0 10px rgba(30,136,229,0.7);
}
input[type="submit"] {
  margin-top: 12px;
  width: 100%; padding: 12px;
  border: none; border-radius: 12px;
  background: #1e88e5; color: white;
  font-weight: bold; font-size: 1rem;
  cursor: pointer; transition: 0.3s;
}
input[type="submit"]:hover {
  background: #1565c0; transform: scale(1.05);
}
h3 { margin-top: 1rem; color: #0d47a1; }
</style>
</head>
<body>
<div class="box">
  <h2>Kalkulator - Switch</h2>
  <form method="GET">
    <input type="text" required name="angka1" placeholder="Angka 1"><br>
    <input type="text" required name="angka2" placeholder="Angka 2"><br>
    <div class="opsi">
      <input type="radio" id="plus" value="+" name="op"><label for="plus">+</label>
      <input type="radio" id="minus" value="-" name="op"><label for="minus">-</label>
      <input type="radio" id="kali" value="*" name="op"><label for="kali">×</label>
      <input type="radio" id="bagi" value="/" name="op"><label for="bagi">÷</label>
    </div>
    <input type="submit" value="Hitung">
  </form>
  <?php if (isset($hasil)) echo "<h3>🌊 Hasil: $hasil</h3>"; ?>
</div>
</body>
</html>
