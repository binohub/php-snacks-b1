<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    
    <div class="accesso">

        <?php
        $names= array(
            "John",
            "Andrew",
            "Daryl",
            "Xander",
            "Xavier",
            "Joshua",
        );

        $getName = $_GET['user_name'];
        ?>

        <h4>
            <?php
            if (in_array($getName, $names)) {
                echo "Ok";
            } else {
                echo "Ko";
            }
            ?>
        </h4>
    </div>
</body>

</html>