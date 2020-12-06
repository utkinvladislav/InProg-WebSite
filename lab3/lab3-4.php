<HTML>
    <BODY>
    <meta charset = "UTF-8">
    <title>Уткин Владислав - лаба3</title>
    <p> Уткин Владислав
    <p> Работа с проверкой логина и пароля пользователя
        <H1> Проверка логина: </H1>
        <FORM action="<?php print $PHP_SELF ?>" method="post">
            Ваш логин:
            <INPUT type="text" name="userName" maxlength="40">
            <INPUT type="submit" name="obr" value="Войти">
        </FORM>
        <?php
            $a = ["Алексей", "Мистер сер сер мистер", "PRO100CHERT", "admin", "И горь"];
            $passed = false;
            if (isset($_POST["obr"])){
                $user_name = trim($_POST["userName"]);
                for ($c = 0; $c < count($a); $c++){
                    if ($user_name == $a[$c]){
                        echo "Здравствуйте, $a[$c]!";
                        $passed = true;
                        break; }}
                if (!$passed){
                    echo "Вы незарегистрированный пользователь!"; }}?>
                    <p><a href="http://f0476784.xsph.ru/lab3/lab3.php"> Вернуться в меню</a>
    </BODY>
</HTML>

