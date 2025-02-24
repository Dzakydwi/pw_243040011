<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2c</title>

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
        background-color: #ff8080;
        border: 1px solid #000;
    }

    .baris {
        display: flex;
    }
</style>

</head>
<body>
<div class="container">
    <?php
    for ($i = 10; $i >= 1; $i--) {
        echo '<div class="baris">';
        for ($j = 1; $j <= $i; $j++) {
            echo "<div class='box'>$j</div>";
        }
        echo '</div>'; 
    }
    ?>
</body>
</html>