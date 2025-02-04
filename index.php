<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Kalkulator BMI</h1>
<form method="post">
    <input type="number" step="any" name="bb" placeholder="Berat Badan (Kilogram)">
    <input type="number" step="any" name="tb" placeholder="Tinggi Badan (Meter)">
    <button type="submit" name="submit" value="submit">Hitung</button>
</form>

    <?php 
    if(isset($_POST['submit'])) {
        $bb = $_POST['bb'];
        $tb = $_POST['tb'];
        if($bb != 0 && $tb!= 0){
        $bmi = $bb / ($tb * $tb);
        echo"<h1>BB : $bb & TB : $tb</h1>";

    echo"<h1>BMI anda adalah: $bmi</h1>";
    if($bmi < 17){
    echo"<h1>Kurus, Kekurangan berat badan berat</h1>";
    } if ($bmi >= 17 && $bmi <= 18.4){
        echo"<h1>Kurus, Kekurangan berat badan ringan</h1>";
    } if ($bmi > 18.4 && $bmi <= 25){
        echo"<h1>Normal</h1>";
    } if ($bmi > 25 && $bmi <= 27){
        echo"<h1>Gemuk, Kelebihan berat badan tingkat ringan</h1>";
    }  if ($bmi > 27){
        echo"<h1>Gemuk, Kelebihan berat badan tingkat berat</h1>";
    }
        } else {
            echo"<h1>Tolong Input Data Yang Benar</h1>";
        }
    
    }
    ?>
</body>
</html>