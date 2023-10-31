<!DOCTYPE html>
<html>
<head>
    <title>Главная страница</title>
</head>
<body>
    <?php if ($_SERVER['REQUEST_METHOD'] === 'GET') { ?>
    <form action="index.php" method="post">
        <label for="user_name"><b>Введите имя</b></Label>
        <input type="text" placeholder="Ваше имя" maxlength="12" name="user_name"><br><br>
        <label for="user_gender"><b>Выберите пол</b></Label><br><br>
        <label for="user_gender_w">Женский</Label>
        <input type="radio" name="user_gender" id = "user_gender_w" value="Женский"><br>
        <label for="user_gender_m">Мужской</Label>
        <input type="radio" name="user_gender" id = "user_gender_m" value="Мужской">
        <input type="submit" value="Сохранить">
        <?php
        }
        ?>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') 
        {
            echo 'Имя пользователя = '. $_POST['user_name'] . '<br>';
            // echo 'Имя пользователя = '. $_POST['user_gender']
            if (isset($_POST['user_gender'])) 
            {
                $user_gender = $_POST['user_gender'];
                echo 'Пол пользователя = '. $user_gender;
            }
        }
        ?>
    </form>
</body>
</html>