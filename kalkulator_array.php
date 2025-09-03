<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator Array</title>
    <style>
        body {background: linear-gradient(135deg,#ff9966,#ff5e62);font-family: Arial;color:white;text-align:center;padding:50px;}
        .box {background: rgba(0,0,0,0.6);padding:20px;border-radius:15px;display:inline-block;}
        input,select,button {margin:5px;padding:10px;border:none;border-radius:10px;width:200px;}
        button {background:#222;color:#fff;cursor:pointer;}
    </style>
</head>
<body>
<div class="box">
    <h2>Kalkulator - Array</h2>
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
        $ops=[
            "+"=>$a+$b,
            "-" =>$a-$b,
            "*" =>$a*$b,
            "/" =>$b!=0?$a/$b:"Error ÷0"
        ];
        echo "<h3>Hasil: ".$ops[$op]."</h3>";
    }
    ?>
</div>
</body>
</html>
