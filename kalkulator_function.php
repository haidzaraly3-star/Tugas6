<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator Function</title>
    <style>
        body {background:#f1f1f1;font-family:Verdana;text-align:center;padding:50px;}
        .box {background:white;padding:25px;border-radius:15px;display:inline-block;box-shadow:0 5px 15px rgba(0,0,0,0.2);}
        input,select,button {margin:7px;padding:12px;width:200px;border:1px solid #ccc;border-radius:8px;}
        button {background:#007bff;color:white;border:none;cursor:pointer;}
    </style>
</head>
<body>
<div class="box">
    <h2>Kalkulator - Function</h2>
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
    function kalkulator($a,$b,$op){
        if($op=="+") return $a+$b;
        if($op=="-") return $a-$b;
        if($op=="*") return $a*$b;
        if($op=="/") return $b!=0?$a/$b:"Error ÷0";
    }
    if(isset($_POST['a'],$_POST['b'],$_POST['op'])){
        echo "<h3>Hasil: ".kalkulator($_POST['a'],$_POST['b'],$_POST['op'])."</h3>";
    }
    ?>
</div>
</body>
</html>
