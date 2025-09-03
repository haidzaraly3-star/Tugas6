<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator If Else</title>
    <style>
        body {background:#ffeaa7;font-family:Tahoma;text-align:center;padding:50px;}
        .box {background:white;padding:20px;border-radius:10px;display:inline-block;border:2px dashed #d63031;}
        input,select,button {margin:6px;padding:10px;width:200px;border:1px solid #d63031;border-radius:5px;}
        button {background:#d63031;color:white;cursor:pointer;}
    </style>
</head>
<body>
<div class="box">
    <h2>Kalkulator - if else</h2>
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
        if($op=="+") $hasil=$a+$b;
        else if($op=="-") $hasil=$a-$b;
        else if($op=="*") $hasil=$a*$b;
        else if($op=="/") $hasil=$b!=0?$a/$b:"Error ÷0";
        echo "<h3>Hasil: $hasil</h3>";
    }
    ?>
</div>
</body>
</html>
