<!DOCTYPE html>
<html>

<head>
    <title>

    </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="css/bootstrap.min.css">
    <style>
        h1 {
            color: purple;
        }

    </style>

</head>

<body>
    <div class="container-fluid">
        <h1>Datatypes</h1>
        <div>
            <?php>
    $car =array("Audi","BMw");
                echo "<p>car:</p>";
            print_r($car);
            echo $car[1];
            $shopping = array("bread","milk","eggs");
            
    ?>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
