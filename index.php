<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div class="snack">

        <?php
        $matches = [
            [
                'homeTeam' => 'Black Horses',
                'guestTeam' => 'Dominators',
                'homeTeamPoints' => 4,
                'guestTeamPoints' => 2,
            ],
            [
                'homeTeam' => 'Dark Cry',
                'guestTeam' => 'Little Liars',
                'homeTeamPoints' => 4,
                'guestTeamPoints' => 3,
            ],
            [
                'homeTeam' => 'Aliens',
                'guestTeam' => 'Little Giants',
                'homeTeamPoints' => 2,
                'guestTeamPoints' => 4,
            ],
            [
                'homeTeam' => 'Babies',
                'guestTeam' => 'Warriors',
                'homeTeamPoints' => 1,
                'guestTeamPoints' => 5,
            ],
        ];
        ?>

        <h1>Snack 1:</h1>
        <p>
            Creiamo un array contenente le partite di scacchi.
            Ogni array avrà una squadra di casa, una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
            Stampiamo a schermo la partita giocta con i corrispondenti risultati
        </p>

        <?php
        for ($i = 0; $i < count($matches); $i++) {
        ?>
            <h4>
                <?php
                echo "Match ID: " . $i;
                ?>
            </h4>
            <h4>
                <?php
                echo $matches[$i]['homeTeam'] . "   Vs   " . $matches[$i]['guestTeam'];
                ?>
            </h4>
            <h6>
                <?php
                echo $matches[$i]['homeTeamPoints'] . "-" . $matches[$i]['guestTeamPoints'];
                ?>
            </h6>

            <hr>

        <?php
        }
        ?>


    </div>

    <div class="snack">

        <?php
            $getName = $_GET['name'];
            $getMail = $_GET['mail'];
            $getAge = $_GET['age'];
        ?>

        <h1>Snack 2:</h1>
        <p>Passare come parametri GET name, mail e age e verificare che name sia più lungo di 3 caratteri,
            che mail contenga un punto e una chiocciola e che age sia un numero.
            Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato"</p>



        <div class="info">
            <h4>
                <?php
                echo 'Nome' . " => " .  $getName;
                ?>
            </h4>
            <h4>
                <?php
                echo 'Email' . " => " .  $getMail;
                ?>
            </h4>
            <h4>
                <?php
                echo 'Età' . " => " .  $getAge;
                ?>
            </h4>
        </div>
        <div class="accesso">
            <h4>
                    <?php

                        if (     (strlen($getName) > 3 )     ){
                            if (     (is_numeric($getAge))     ){
                                if (     (strpos($getMail, '@') > 3 ) && (strpos($getMail, '.') > 8)     ){
                                    echo "Accesso consentito!";
                                } else {
                                    echo "Aaaccesso negato! riscontro errori nella mail";
                                }
                            } else {
                                echo "Aaaccesso negato! assicurati di aver inserito la tua età";
                            }
                        } else {
                            echo "Aaaccesso negato! assicurati che il nome contenga più di 3 caratteri";
                        }
                    ?>
                </h4>
        </div>

    </div>

    <div class="snack">
        <h1>Snack 3:</h1>
        <p>Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta </p>
    </div>

</body>

</html>