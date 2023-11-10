<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Forum o psach</title>
        <link rel="stylesheet" href="styl4.css">
    </head>
    <body>
        <header>
            <h1>Forum wielbicieli psów</h1>
        </header>

        <div id="lewy">
            <img src="obraz.jpg" alt="foksterier">
        </div>

        <div id="prawy1">
            <h2>Zapisz się</h2>
            <form action="logowanie.php" method="post">
                <label for="login">login:</label> <input type="text" name="login" id="login"><br>
                <label for="haslo">hasło:</label> <input type="password" name="haslo" id="haslo"><br>
                <label for="haslo2">powtórz hasło:</label> <input type="password" name="haslo2" id="haslo2"><br>
                <button type="submit">Zapisz</button>
            </form>
            <?php
                $pol = mysqli_connect("localhost",'root','','psy');

                if($_SERVER['REQUEST_METHOD']==='POST'){
                    
                    $wszystkiePolaWypelnione = true;

                    if(isset($_POST['login']) and $_POST['login']==""){
                       $wszystkiePolaWypelnione = false; 
                    }
                    if(isset($_POST['haslo']) and $_POST['haslo']==""){
                        $wszystkiePolaWypelnione = false; 
                    }
                    if(isset($_POST['haslo2']) and $_POST['haslo2']==""){
                        $wszystkiePolaWypelnione = false; 
                    }

                    

                    if($wszystkiePolaWypelnione){




                    } else {
                        echo '<p>wypełnij wszystkie pola</p>';
                    }



                    
                }
                mysqli_close($pol);
            ?>
        </div>

        <div id="prawy2">
            <h2>Zapraszamy wszystkich</h2>
            <ol>
                <li>właścicieli psów</li>
                <li>weterynarzy</li>
                <li>tych, co chcą kupić psa</li>
                <li>tych, co lubią psy</li>
            </ol>
            <a href="regulamin.html">Przeczytaj regulamin forum</a>
        </div>

        <footer>
            Stronę wykonał: <a href="https://ee-informatyk.pl/" target="_blank" style="color: unset;text-decoration: none;">EE-Informatyk.pl</a>
        </footer>
    </body>
</html>