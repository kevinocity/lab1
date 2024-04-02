<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вычислить куб разности двух чисел</title>
</head>
<body>
    <h2>Вычислить куб разности двух чисел</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Первое число: <input type="number" name="num1"><br>
        Второе число: <input type="number" name="num2"><br>
        <input type="submit" name="submit" value="Вычислить">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Проверяем, были ли введены оба числа
        if (isset($_POST["num1"]) && isset($_POST["num2"])) {
            // Получаем значения из формы
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            
            // Вычисляем разность и ее куб
            $difference = $num1 - $num2;
            $cube = $difference ** 3;
            
            // Выводим результат
            echo "Куб разности чисел $num1 и $num2 равен: $cube";
        } else {
            // Выводим сообщение об ошибке, если не введены оба числа
            echo "Пожалуйста, введите оба числа.";
        }
    }
    ?>
</body>
</html>
