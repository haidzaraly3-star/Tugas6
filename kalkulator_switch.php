<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator Switch</title>
    <style>
        body {background:linear-gradient(135deg,#6a11cb,#2575fc);font-family:'Segoe UI',sans-serif;color:white;text-align:center;padding:50px;}
        .box {background:rgba(0,0,0,0.4);padding:25px;border-radius:15px;display:inline-block;}
        input,select,button {margin:8px;padding:12px;width:200px;border:none;border-radius:10px;}
        button {background:white;color:#2575fc;font-weight:bold;cursor:pointer;}
    </style>
</head>
<body>
<div class="box">
    <h2>Kalkulator - switch</h2>
    <form method="POST">
        <input type="number" name="a" placeholder="Angka 1" required><br>
        <input type="number" name="b" placeholder="Angka 2" required><br>
        <select name="op">
            <option value="+">+</option><option value="-">-</option>
            <option value="*">×</option><option value="/">÷</option>
        </select><br>
        <button type="submit">Hitung</button>
    </form>
    <?php
    if(isset($_POST['a'],$_POST['b'],$_POST['op'])){
        $a=$_POST['a']; $b=$_POST['b']; $op=$_POST['op'];
        switch($op){
            case "+": $hasil=$a+$b; break;
            case "-": $hasil=$a-$b; break;
            case "*": $hasil=$a*$b; break;
            case "/": $hasil=$b!=0?$a/$b:"Error ÷0"; break;
        }
        echo "<h3>Hasil: $hasil</h3>";
    }
    ?>
</div>
</body>
</html>
