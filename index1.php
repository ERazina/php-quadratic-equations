
<!doctype html>
<html>
<head>

    <meta charset="utf-8">
    <title>Сервис для решения квадратных уравнений через дискриминант и по теореме Виета</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<h1>Сервис для решения квадратных уравнений через дискриминант и по теореме Виета</h1>
    <form method="get">
        <input type="text" name="a" class="equation" placeholder="Введите занчение а" required>x<sup>2</sup> +
        <input type="text" name="b" class="equation" placeholder="Введите занчение b" required>x +
        <input type="text" name="c" class="equation" placeholder="Введите занчение c" required>= 0</br>
        <p>Система рассчета:</p>
        <input type="radio" name="radio" value="discriminant" checked>Дискриминант
        <input type="radio" name="radio" value="viet">Формула Виетта</br>
        <input type="submit" id="button" value="Рассчитать">
    </form>


<?php

if(isset($_GET['a'])){
$a=(int)$_GET["a"];
$b=(int)$_GET["b"];
$c=(int)$_GET["c"];

$teorema = $_GET['radio'];

if($teorema == 'discriminant'){
    $d=pow($b, 2)-4*$a*$c;
    $x1=(-$b+pow($d, 1/2))/2*$a;
    $x2=(-$b-pow($d, 1/2))/2*$a;


    if($d==0){
      echo "дискриминант равен $d</br>"
          . "Оба корня вещественны и равны</br>"
          . "корень x1 = $x1";
    }

    elseif($d>0){
      echo "дискриминант равен $d</br>"
          . "2 разных вещественных корня</br>"
          . "корень x1 = $x1"
          ."корень x2 = $x2";
    }
    else {
      echo "дискриминант равен $d</br>Нет корней!";
        }
    }


if($teorema == 'viet'){
    for ($x1=-10; $x1<10; $x1++){
        for($x2=-10; $x2<10; $x2++){
            if($x1+$x2==-($b/$a) && $x1*$x2==$c/$a) {
                exit("x1=$x1, x2=$x2");
            }
        }
    }

    echo "Корней нет";
}
}
?>
</body>
</html>
