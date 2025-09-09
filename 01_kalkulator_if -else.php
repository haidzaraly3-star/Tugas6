<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Kalkulator IF-ELSE — M3 GTR Edition</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: url("m3gtr.jpg") no-repeat center center fixed;
      background-size: cover;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 400px;
      margin: 120px auto;
      padding: 25px;
      border-radius: 15px;
      background: rgba(0, 0, 0, 0.6);
      color: #fff;
      text-align: center;
      box-shadow: 0 0 20px rgba(0, 153, 255, 0.3);
    }

    h2 {
      margin-bottom: 10px;
      text-shadow: 0 0 8px #00e1ff;
    }

    input {
      width: 80%;
      padding: 10px;
      margin: 10px 0;
      border: none;
      border-radius: 8px;
      text-align: center;
      font-size: 16px;
      background: rgba(255, 255, 255, 0.2);
      color: #fff;
    }

    input::placeholder {
      color: #ddd;
    }

    .btn {
      padding: 12px 25px;
      margin: 10px 5px;
      border: none;
      border-radius: 8px;
      font-size: 18px;
      font-weight: bold;
      cursor: pointer;
      color: #fff;
      background: linear-gradient(90deg, #0077ff, #00e1ff);
      box-shadow: 0 0 12px #00e1ff;
      transition: 0.3s;
    }

    .btn:hover {
      transform: scale(1.05);
      box-shadow: 0 0 20px #00e1ff, 0 0 30px #0077ff;
    }

    .result {
      margin-top: 20px;
      font-size: 20px;
      text-shadow: 0 0 8px #00e1ff;
    }
  </style>
</head>
<body>
  <!-- Suara Engine -->
  <audio id="engine-sound" autoplay>
    <source src="engine-m3gtr.mp3" type="audio/mpeg">
  </audio>

  <div class="container">
    <h2>M3 GTR IF-ELSE Calculator</h2>
    <p>Street Racing Edition 🚗💨</p>
    <form method="post">
      <input type="number" name="angka1" placeholder="Angka 1" required><br>
      <input type="number" name="angka2" placeholder="Angka 2" required><br>
      <button class="btn" type="submit" name="operator" value="+">+</button>
      <button class="btn" type="submit" name="operator" value="-">-</button>
      <button class="btn" type="submit" name="operator" value="*">×</button>
      <button class="btn" type="submit" name="operator" value="/">÷</button>
    </form>
    <div class="result">
      <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $a = $_POST['angka1'];
          $b = $_POST['angka2'];
          $op = $_POST['operator'];

          if ($op == "+") {
            echo "Hasil: " . ($a + $b);
          } elseif ($op == "-") {
            echo "Hasil: " . ($a - $b);
          } elseif ($op == "*") {
            echo "Hasil: " . ($a * $b);
          } elseif ($op == "/") {
            echo $b != 0 ? "Hasil: " . ($a / $b) : "Tidak bisa dibagi 0!";
          } else {
            echo "Operator tidak valid!";
          }
        }
      ?>
    </div>
  </div>

  <script>
    window.addEventListener("load", () => {
      const audio = document.getElementById("engine-sound");
      audio.volume = 0.2; // mulai pelan
      audio.play();

      // Naikkin volume dikit-dikit (biar berasa revving)
      let vol = 0.2;
      const interval = setInterval(() => {
        if (vol < 0.6) {
          vol += 0.05;
          audio.volume = vol;
        } else {
          clearInterval(interval);
        }
      }, 500);
    });
  </script>
</body>
</html>
