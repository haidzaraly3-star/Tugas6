<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator Eval</title>
    <style>
        body {background:#000;font-family:"Courier New",monospace;color:#0f0;text-align:center;padding:50px;}
        .box {padding:20px;border:1px solid #0f0;border-radius:10px;display:inline-block;box-shadow:0 0 15px #0f0;}
        input,select,button {margin:5px;padding:10px;width:200px;border:1px solid #0f0;background:black;color:#0f0;}
        button {cursor:pointer;}
    </style>
</head>
<body>
<div class="box">
    <h2>Kalkulator - eval()</h2>
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
        $expr=$_POST['a'].$_POST['op'].$_POST['b'];
        @eval("\$hasil=$expr;");
        echo "<h3>Hasil: $hasil</h3>";
    }
    ?>
</div>
</body>
</html>
