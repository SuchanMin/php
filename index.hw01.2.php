<h> ลูป 1 </h>
for($i=1; $i<=4; $i++){
    for($j=1; $j<=$i; $j++){
        echo "*";
    }
    echo "<br>";
}

<h2> ลูป 2 </h2>
for($i=1; $i<=3; $i++){
    for($j=1; $j<=4; $j++){
        echo $i . " ";
    }
    echo "<br>";
}

<h3> ลูป 3 </h3>
for($i=1; $i<=3; $i++){
    for($j=1; $j<=$i; $j++){
        echo $i . " ";
    }
    echo "<br>";
}

<h4> ลูป 4 </h4>
$rows = 5;
$cols = 7;

for($i=1; $i<=$rows; $i++){
    for($j=1; $j<=$cols; $j++){

        if($i==1 || $i==$rows || $j==1 || $j==$cols){
            echo "*";
        } else {
            echo $i-1;
        }

    }
    echo "<br>";
}

<h5> ลูป 5</h5>
for($i=3; $i>=1; $i--){
    for($j=1; $j<=$i; $j++){
        echo $i . " ";
    }
    echo "<br>";
}
