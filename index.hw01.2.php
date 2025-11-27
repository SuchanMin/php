<style>
    .loop-section {
        width: 90%;
        max-width: 600px;
        margin: 40px auto;
        padding: 25px;
        background: #ffe6f0;
        border-radius: 18px;
        border: 2px solid #ffccd9;
        box-shadow: 0 4px 15px rgba(255, 150, 180, 0.25);
        font-family: "Kanit", sans-serif;
    }

    .loop-section h2, .loop-section h3, .loop-section h4, .loop-section h5, .loop-section h6, .loop-section h1 {
        color: #c75b87;
        margin-top: 20px;
        margin-bottom: 10px;
    }

    .loop-output {
        background: #ffffff;
        padding: 15px;
        border-radius: 12px;
        border: 1px solid #ffd9e6;
        font-size: 18px;
        color: #7a4b63;
        margin-bottom: 20px;
        box-shadow: inset 0 0 5px rgba(255, 180, 200, 0.25);
        white-space: pre-line;
    }
</style>

<div class="loop-section">

    <h2>ลูป 1</h2>
    <div class="loop-output">
    <?php
    for($i=1; $i<=4; $i++){
        for($j=1; $j<=$i; $j++){
            echo "*";
        }
        echo "<br>";
    }
    ?>
    </div>

    <h2>ลูป 2</h2>
    <div class="loop-output">
    <?php
    for($i=1; $i<=3; $i++){
        for($j=1; $j<=4; $j++){
            echo $i . " ";
        }
        echo "<br>";
    }
    ?>
    </div>

    <h2>ลูป 3</h2>
    <div class="loop-output">
    <?php
    for($i=1; $i<=3; $i++){
        for($j=1; $j<=$i; $j++){
            echo $i . " ";
        }
        echo "<br>";
    }
    ?>
    </div>

    <h2>ลูป 4</h2>
    <div class="loop-output">
    <?php
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
    ?>
    </div>

    <h2>ลูป 5</h2>
    <div class="loop-output">
    <?php
    for($i=3; $i>=1; $i--){
        for($j=1; $j<=$i; $j++){
            echo $i . " ";
        }
        echo "<br>";
    }
    ?>
    </div>

</div>
