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
            
            <form action="home.php" method="post">
                
                <p><b>Обратная связь</b></p>
                
                <p><b>ФИО:</b>
                    <input type="text" maxlength="30" size="40" name="login">
                </p>
                <p><b>Email:</b>
                    <input type="text" maxlength="30" size="40" name="email" placeholder="Введите Ваш Email!">
                </p>
                <p><b>Откуда вы узнали о нас</b></p>
                <input type="radio" id="contactChoice1"
                name="contact">
                <label for="contactChoice1">Рассказали друзья</label>
            
                <input type="radio" id="contactChoice2"
                name="contact">
                <label for="contactChoice2">Реклама из интернета</label>
                            
                <p><b>Тип обращения</b></p>
                <select size="1" style="width: 100px;" name = "category">
                    <option disabled>Выберети один вариант</option>
                    <option value="1" name = "one">Предложение</option>
                    <option value="2" name = "two">Жалоба</option>
                </select>
            

            
                <p><b>Введите текст обращения</b></p>
                <p><textarea rows="10" cols = "100" name = "message"></textarea></p>

            
                <p><b>Прикрепите файл</b></p>
                <input type="file" name="file">
                          
                <fieldset>  
                    <legend>
                        <input type="checkbox" checked> Даю согласие на обработку перональных данных <br>
                    </legend>
                <input type="submit">

                <?php 
                if(isset($_GET['name'])){
                    $name=$_GET['name'];
                    $email=$_GET['email'];
                    $source=$_GET['source'];
                    echo 'yes';
                }else{
                    echo 'no';
                }
                ?>


        
                
            </form>
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