<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2d</title>

<style>

    .container {
        display: flex;
        flex-direction: column;
    }

    .box {
        width: 50px;
        height: 50px;
        text-align: center;
        align-content: center;
        border: 1px solid #000;
    }

    .baris {
        display: flex;
    }

    .warnahitam {
        background-color: #343433;
        color: white;
    }

    .warnaputih {
        background-color: white;
        color: black;
    }
</style>

</head>
<body>
<div class="container">
    <?php
    for ($i = 0; $i < 5; $i++) {
        echo '<div class="baris">';
        for ($j = 0; $j < 5; $j++) {
            $class = ($i + $j) % 2 == 0 ? 'warnahitam' : 'warnaputih';
            echo "<div class='box $class'></div>";
        }
        echo '</div>'; 
    }
    ?>
</body>
</html>