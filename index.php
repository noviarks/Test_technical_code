<!DOCTYPE html>
<html>
<head>
<title>Test</title>
<style>
    
</style>
</head>
<body>

<form method="POST" action="">
    <input type="text" name="angka" placeholder="Input Angka">
    <br><br>
    
    <button type="submit" name="submit1">Generate Segitiga</button>
    <button type="submit" name="submit2">Generate Bilangan Ganjil</button>
    <button type="submit" name="submit3">Generate Bilangan Prima</button>
</form>

<br>
<h2>Result:</h2>
<?php
    if(isset($_POST['submit1'])){
        if(is_numeric($_POST['angka'])){
            $angka = $_POST['angka'];
            $panjang_angka  = strlen((string)$angka);

            $array_angka  = array_map('intval', str_split($angka));

            for($i = 0 ; $i < $panjang_angka ; $i++){
                echo $array_angka[$i];
                for($j = 1 ; $j <= $i+1 ; $j++){
                    echo 0;
                }
                echo "<br>";
            }

        }else{
            echo '<script language="javascript">';
            echo 'alert("Isi dengan angka!!")';
            echo '</script>';
        }
    }

    if(isset($_POST['submit2'])){
        if(is_numeric($_POST['angka'])){
            $angka = $_POST['angka'];

            for($i = 0 ; $i <= $angka ; $i++){
                if($i % 2 != 0){
                    echo $i." ";
                }
            }

        }else{
            echo '<script language="javascript">';
            echo 'alert("Isi dengan angka!!")';
            echo '</script>';
        }
    }

    if(isset($_POST['submit3'])){
        if(is_numeric($_POST['angka'])){
            $angka = $_POST['angka'];
            $prima = 0;

            for($i = 1 ; $i <= $angka ; $i++){
                for($j=1 ; $j <= $i ;$j++){
                    for($k=1; $k <= $j ; $k++){
                        if($j % 1 == 0 && $j % $k == 0){
                            $prima++;
                        }
    
                        if($prima == 2){
                            echo $i;
                            break;
                        }
                    }
                    
                }
            }

        }else{
            echo '<script language="javascript">';
            echo 'alert("Isi dengan angka!!")';
            echo '</script>';
        }
    }
?>

</body>
</html>