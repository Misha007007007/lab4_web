<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="main.css">
    <title>Андрейцев Михаил 211-361 Лаб_3</title>
    
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Antonio:wght@100&display=swap" rel="stylesheet">
</head>
<body>
    <header id = "header" class="header">
        <ul class = "menu">
            <li>
                
            </li>
        </ul>
    </header>

    <section id = "about" class="about">
        <div class="connection" id = "connection">

            <?php 
                
                echo '<p> Здравствуйте, '.$_POST['login'].'</p>'; 
                if ($_POST['category'] == '1'){ 
                    echo '<p>Спасибо за ваше предложение:</p>';
                    echo '<textarea>'.$_POST['message'].'</textarea>';
                }else{
                    echo '<p>Мы рассмотрим Вашу жалобу:</p>';
                    echo '<textarea rows="10" cols = "100">'.$_POST['message'].'</textarea>';
                }
            ?>
            <br>
            <?php
                $file;
                if (isset($_POST['file']) & $_POST['file'] != '') 
                echo 'Вы приложили следующий файл: '.$_POST['file'];
            ?>
            <br>
            
            <?php
                echo '<a 
                class="btn" href="index.php?N='.$_POST['login'].'&E='.$_POST['email'].'&S='.$_POST['contact'].'">Заполнить снова
                </a>';
                
            
            ?>        

        </div>
    </section>

    <footer id = "footer1" class="footer1">
        <div class="container">
            <li>
                <?php
                    echo date('Сформировано d.m.Y в G:i:s', time()+3600*3);
                ?>
            </li>
        </div>
    </footer>
</body>
</html>