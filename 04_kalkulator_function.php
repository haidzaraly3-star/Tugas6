<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Kalkulator Function</title>
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background: linear-gradient(to top, #0f2027, #203a43, #2c5364);
    }
    .calc {
      background: rgba(255,255,255,0.12);
      padding: 25px;
      border-radius: 20px;
      box-shadow: 0 15px 30px rgba(0,0,0,0.5);
      text-align: center;
      width: 320px;
      backdrop-filter: blur(8px);
    }
    .calc h2 {
      color: #fff;
      margin-bottom: 15px;
    }
    input[type=text] {
      width: 90%;
      padding: 10px;
      margin: 8px 0;
      border: 1px solid #bbb;
      border-radius: 10px;
      outline: none;
      text-align: center;
      font-size: 16px;
      background: rgba(255,255,255,0.2);
      color: #fff;
    }
    .operators {
      margin: 15px 0;
    }
    .operators label {
      margin: 0 10px;
      font-size: 18px;
      cursor: pointer;
      color: #fff;
    }
    button {
      background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
      border: none;
      color: white;
      padding: 12px 20px;
      border-radius: 15px;
      font-size: 16px;
      cursor: pointer;
      transition: 0.3s;
    }
    button:hover {
      opacity: 0.9;
      transform: scale(1.05);
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
    <h2>Kalkulator Function</h2>
    <form method="GET">
      <input type="text" required name="angka1" placeholder="Angka 1"><br>
      <input type="text" required name="angka2" placeholder="Angka 2"><br>
      <div class="operators">
        <label><input type="radio" value="+" name="op"> + </label>
        <label><input type="radio" value="-" name="op"> - </label>
        <label><input type="radio" value="*" name="op"> × </label>
        <label><input type="radio" value="/" name="op"> ÷ </label>
      </div>
      <button type="submit">Hitung</button>
    </form>
    <div class="result">
      <?php
        function hitung($a, $b, $op){
          if($op=="+") return $a+$b;
          if($op=="-") return $a-$b;
          if($op=="*") return $a*$b;
          if($op=="/") return $a/$b;
        }
        if(isset($_GET['angka1'])){
          echo "Hasil: ".hitung($_GET['angka1'], $_GET['angka2'], $_GET['op']);
        }
      ?>
    </div>
  </div>
</body>
</html>
