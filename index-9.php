<!DOCTYPE html>
<html>

<head>
    <title>Форма для регистрации</title>
</head>

<body>
    <h2>Регистрационная форма</h2>
    <form method="POST" action="">
        <label>Имя: <input type="text" name="name" required oninvalid="this.setCustomValidity('Поле имя не заполнено!')" oninput="setCustomValidity('')"></label><br><br>
        <label>Группа: <input type="text" name="group" required oninvalid="this.setCustomValidity('Поле группа не заполнено!')" oninput="setCustomValidity('')">
        </label><br><br>
        <label>Пол: <input type="radio" name="gender" value="male" required>Мужской</label>
        <input type="radio" name="gender" value="female">Женский<br><br>
        <label>День рождения:</label>
        <select name="day">
            <?php
            for ($i = 1; $i <= 31; $i++) {
                echo "<option value='$i'>$i</option>";
            }
            ?>
        </select>
        <select name="month">
            <option value="january">Январь</option>
            <option value="february">Февраль</option>
            <option value="march">Март</option>
            <option value="april">Апрель</option>
            <option value="may">Май</option>
            <option value="june">Июнь</option>
            <option value="july">Июль</option>
            <option value="august">Август</option>
            <option value="september">Сентябрь</option>
            <option value="october">Октябрь</option>
            <option value="november">Ноябрь</option>
            <option value="december">Декабрь</option>
        </select>
        <select name="year">
            <?php
            for ($i = 2024; $i >= 1900; $i--) {
                echo "<option value='$i'>$i</option>";
            }
            ?>
        </select><br><br>
        <label>Наличие водительского удостоверения: <input type="checkbox" name="driver_license"></label><br><br>
        <input type="submit" value="Отправить">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $birth_year = $_POST['year'];
        $current_year = date("Y");
        $age = $current_year - $birth_year;

        $gender = $_POST['gender'];
        $years_to_retirement = ($gender == "male") ? 65 - $age : 63 - $age;

        echo "<br>Возраст: $age года<br>";
        echo "Лет до пенсии: $years_to_retirement лет";
    }
    ?>
</body>

</html>