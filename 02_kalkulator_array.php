<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Kalkulator Array</title>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: radial-gradient(circle at top left, #1a2a6c, #000, #000);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 0;
      overflow: hidden;
      position: relative;
    }
    /* efek bintang */
    body::before {
      content: "";
      position: absolute;
      width: 200%;
      height: 200%;
      background: transparent url('https://www.transparenttextures.com/patterns/stardust.png') repeat;
      animation: stars 120s linear infinite;
      opacity: 0.35;
    }
    @keyframes stars {
      from { transform: translateY(0); }
      to { transform: translateY(-1000px); }
    }
    .calc {
      position: relative;
      background: rgba(255,255,255,0.15);
      padding: 25px;
      border-radius: 20px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.6);
      text-align: center;
      width: 320px;
      backdrop-filter: blur(6px);
      z-index: 1;
    }
    .calc h2 {
      margin-bottom: 15px;
      color: #fff;
    }
    input[type=text] {
      width: 90%;
      padding: 10px;
      margin: 8px 0;
      border: 2px solid #666;
      border-radius: 10px;
      outline: none;
      text-align: center;
      font-size: 16px;
      background: rgba(255,255,255,0.2);
      color: #fff;
    }
    .operators {
      margin: 12px 0;
      display: flex;
      justify-content: space-around;
    }
    .operators label {
      display: flex;
      flex-direction: column;
      align-items: center;
      cursor: pointer;
      font-weight: 500;
      font-size: 18px;
      padding: 8px 12px;
      border-radius: 12px;
      transition: 0.3s;
      background: rgba(255,255,255,0.15);
      color: #fff;
    }
    .operators input { display: none; }
    .operators label:hover {
      background: #007bff;
      transform: scale(1.05);
    }
    .operators input:checked + span {
      color: #fff;
      background: #007bff;
      border-radius: 8px;
      padding: 2px 8px;
    }
    button {
      background: linear-gradient(135deg, #007bff, #00d4ff);
      border: none;
      color: white;
      padding: 12px 20px;
      border-radius: 15px;
      font-size: 16px;
      cursor: pointer;
      transition: 0.3s;
    }
    button:hover {
      transform: scale(1.05);
      opacity: 0.9;
    }
    .result {
      margin-top: 15px;
      font-size: 20px;
      font-weight: bold;
      color: #fff;
    }
  </style>
</head>
<body>
  <div class="calc">
    <h2>Kalkulator Array</h2>
    <form method="GET">
      <input type="text" required name="angka1" placeholder="Angka 1"><br>
      <input type="text" required name="angka2" placeholder="Angka 2"><br>
      <div class="operators">
        <label><input type="radio" value="+" name="op"><span>+</span></label>
        <label><input type="radio" value="-" name="op"><span>-</span></label>
        <label><input type="radio" value="*" name="op"><span>×</span></label>
        <label><input type="radio" value="/" name="op"><span>÷</span></label>
      </div>
      <button type="submit">Hitung</button>
    </form>
    <div class="result">
      <?php
        if(isset($_GET['angka1'])){
          $angka1 = $_GET['angka1'];
          $angka2 = $_GET['angka2'];
          $op = $_GET['op'];
          $ops = ["+" => $angka1+$angka2,
                  "-" => $angka1-$angka2,
                  "*" => $angka1*$angka2,
                  "/" => $angka1/$angka2];
          echo "Hasil: ".$ops[$op];
        }
      ?>
    </div>
  </div>
</body>
</html>
