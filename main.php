<!DOCTYPE html>
<html>
<head>
    <title>Personal site</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div class="nav_menu">
        <?php include 'nav_menu.php' ?>
    </div>
    
    <div class="about_me">

        <div class="may_name_is">
            <strong>Немного обо мне:</strong>
            <br>
            <?php
            echo "Меня зовут $name $surname <br>";
            echo "На текущий момент мне $age<br>";
            echo "И я из города $city<br>";
            echo "$p<br>";
            ?>
        </div>

        <div class="knowlege">
            <?php
            $currentData = time();
            $myData = strtotime("1981-01-21");
            $timeInDay = round(($currentData - $myData) / (60*60*24));
            echo "<br>Немного занятной статистики, <br> вот например сейчас мне исполнилось ", 
                $timeInDay, " дней. <br>";
            ?>
        </div>
    </div>

    <div class="tip_of_day">
        <p> Маленькие лайфхаки: <br> Если Вы собрались бухать в серверной, то перед началом процесса имеет смысл закрыть все стойки, и убрать ключи подальше, и тогда утро начнется с банального похмелья ))</p>
    </div>

</body>

<footer>
    <?php include 'footer.php' ?>
</footer>
</html>