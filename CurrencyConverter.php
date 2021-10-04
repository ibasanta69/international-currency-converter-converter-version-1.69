<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>Currency App</title>
    <style>
        h2 {
            margin-left: 23.5%;
            color: whitesmoke;
            margin-top: 6%;
            font-weight: lighter;
            font-family: 'Courier New', Courier, monospace;
        }

        body {
            background-image: url("/Currency project/pics/wall.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }

        input,
        select {
            text-align: center;
            padding: 1%;
            background-color: rgba(107, 176, 185, 0.363);
            transition-duration: 0.5s;
            outline: none;
            display: inline;
            border-color: white;
            color: white;
            font-weight: bolder;
            margin-left: 0%;

        }

        input {
            padding: 1%;
            border: 1px solid white;
        }

        form {
            margin-left: 25%;
            margin-top: 5%;
        }

        .size {
            width: 10%;
            color: white;
            word-spacing: 10%;
        }

        .size1 {
            width: 4%;

        }

        hr {
            margin-right: 25.5%;
        }


        .iconLink:hover {
            box-shadow: rgba(77, 0, 219, 0.801) 0px 5px 15px;
            transform: rotate(360deg);
            margin-left: 20%;
        }

        p {
            margin-left: 11%;
            color: white;
            background-color: rgba(216, 191, 216, 0.233);
            margin-right: 36.5%;
            border-radius: 5%;
            font-family: 'Courier New', Courier, monospace;
            font-weight: lighter;
            font-size: 25px;
            margin-bottom: 6%;
        }

        .changeColor {
            transition-duration: 1.2s;
            background-color: lightgreen;
        }

        .changeColor:hover {
            background-color: lightblue;
        }

        .hr1 {
            margin-left: 18%;
            margin-right: 45%;
        }

        .iconLink {
            border-radius: 50%;
            box-shadow: rgba(209, 209, 209, 0.5) 24px 2px 30px;
            transition-duration: 5.5s;
            width: 20%;

            text-decoration: none;
            height: 20%;
        }

        a {
            text-decoration: none;
            margin-left: 7%;
            margin-top: 60%;
        }

        .icon1:hover {
            transform: rotateY(360deg);
            box-shadow: rgba(52, 213, 241, 0.61) 2px 4px 6px 15px;
        }

        .icon1 {
            border-radius: 50%;
            box-shadow: rgba(146, 140, 140, 0.404) 2px 4px 6px 15px;
            transition-duration: 5.5s;
            width: 150px;
            margin-left: 28.5%;
            height: 150px;
        }

        .iconLink {
            border-radius: 50%;
            width: 60px;
            margin: 2%;
            text-decoration: none;
            height: 60px;
        }
    </style>
</head>

<body>
    <form action="" method="POST">
        <img src="/Currency project/pics/basant14ry.jpg" class="icon1">
        <p>Developed By @Basanta chaudhary</p>
        <hr>
        <select name="First_Currency">
            <option value="USD">US Dollors</option>
            <option value="EUR">Euro</option>
            <option value="GBP">British Pounds</option>
            <option value="AUD">Australian Dollors</option>
            <option value="NRS">Nepali Rupees</option>
            <option value="INR">Indian Rupees</option>
            <option value="CHF">Swiss Francs</option>
            <option value="CAD">Canadian Dollors</option>
            <option value="SGD">Singapore</option>
        </select>
        <input type="number" name="First_Value" placeholder="Currency" class="size">
        <input type="submit" value="Calculate" name="login" class="changeColor">
        <select name="Last_Currency">
            <option value="USD">US Dollors</option>
            <option value="NRS">Nepali Rupees</option>
            <option value="EUR">Euro</option>
            <option value="INR">Indian Rupees</option>
            <option value="GBP">British Pounds</option>
            <option value="AUD">Australian Dollors</option>
            <option value="CHF">Swiss Francs</option>
            <option value="CAD">Canadian Dollors</option>
            <option value="SGD">Singapore</option>
        </select>

        <?php
        $symbol = "";
        $result = "";
        if (isset($_POST['login'])) {

            $getValueFrom_User = (float) $_POST['First_Value'];
            $getChhose1 = $_POST['First_Currency'];
            $getChoose2 = $_POST['Last_Currency'];
            //---------------------NEpali Ruppes Into US Dollors Condition
            if ($getChhose1 == 'USD' && $getChoose2 == 'NRS') {
                $result = $getValueFrom_User * 116.14;
                $symbol = "NRS";

                //-------------------------US Dollors Into NEpali Ruppes Condition
            } else if ($getChhose1 == 'NRS' && $getChoose2 == 'USD') {
                $result = $getValueFrom_User / 116.14;
                $symbol = "USD";
            } else if ($getChhose1 == "EUR" && $getChoose2 == "NRS") {
                $result = $getValueFrom_User * 142.10;
                $symbol = "NRS";
            } else if ($getChhose1 == "NRS" && $getChoose2 == "EUR") {
                $result = $getValueFrom_User / 142.10;
                $symbol = "EURO";
            } else if ($getChhose1 == "GBP" && $getChoose2 == "NRS") {
                $result = $getValueFrom_User * 164.50;
                $symbol = "NRS";
            } else if ($getChhose1 == "NRS" && $getChoose2 == "GBP") {
                $result = $getValueFrom_User / 164.50;
                $symbol = "GBP";
            } else if ($getChhose1 == "AUD" && $getChoose2 == "NRS") {
                $result = $getValueFrom_User * 90.37;
                $symbol = "NRS";
            } else if ($getChhose1 == "NRS" && $getChoose2 == "AUD") {
                $result = $getValueFrom_User / 90.37;
                $symbol = "AUD";
            } else if ($getChhose1 == "CHF" && $getChoose2 == "NRS") {
                $result = $getValueFrom_User * 129.72;
                $symbol = "NRS";
            } else if ($getChhose1 == "NRS" && $getChoose2 == "CHF") {
                $result = $getValueFrom_User / 129.72;
                $symbol = "CHF";
            } else if ($getChhose1 == "CAD" && $getChoose2 == "NRS") {
                $result = $getValueFrom_User * 96.19;
                $symbol = "NRS";
            } else if ($getChhose1 == "NRS" && $getChoose2 == "CAD") {
                $result = $getValueFrom_User / 96.19;
                $symbol = "CAD";
            } else if ($getChhose1 == "SGD" && $getChoose2 == "NRS") {
                $result = $getValueFrom_User * 87.76;
                $symbol = "NRS";
            } else if ($getChhose1 == "NRS" && $getChoose2 == "SGD") {
                $result = $getValueFrom_User / 87.76;
                $symbol = "SGD";
            } else if ($getChhose1 == "USD" && $getChoose2 == "EUR") {
                $result = $getValueFrom_User / (142.40 / 116.14);
                $symbol = "EURO";
            } else if ($getChhose1 == "EUR" && $getChoose2 == "USD") {
                $result = ($getValueFrom_User * (142.40 / 116.14));
                $symbol = "USD";
            } else if ($getChhose1 == "USD" && $getChoose2 == "GBP") {
                $result = $getValueFrom_User / (164.50 / 116.14);
                $symbol = "GBP";
            } else if ($getChhose1 == "GBP" && $getChoose2 == "USD") {
                $result = ($getValueFrom_User * (164.50 / 116.14));
                $symbol = "USD";
            } else if ($getChhose1 == "USD" && $getChoose2 == "AUD") {
                $result = $getValueFrom_User / (90.37 / 116.14);
                $symbol = "AUD";
            } else if ($getChhose1 == "AUD" && $getChoose2 == "USD") {
                $result = ($getValueFrom_User * (90.37 / 116.14));
                $symbol = "USD";
                //-----------------------------------------------------------
            } else if ($getChhose1 == "USD" && $getChoose2 == "CHF") {
                $result = $getValueFrom_User / (129.72 / 116.14);
                $symbol = "CHF";
            } else if ($getChhose1 == "CHF" && $getChoose2 == "USD") {
                $result = ($getValueFrom_User * (129.72 / 116.14));
                $symbol = "USD";
            } else if ($getChhose1 == "USD" && $getChoose2 == "CAD") {
                $result = $getValueFrom_User / (96.19 / 116.14);
                $symbol = "CAD";
            } else if ($getChhose1 == "CAD" && $getChoose2 == "USD") {
                $result = ($getValueFrom_User * (96.19 / 116.14));
                $symbol = "USD";
            } else if ($getChhose1 == "USD" && $getChoose2 == "SGD") {
                $result = $getValueFrom_User / (87.76 / 116.14);
                $symbol = "SGD";
            } else if ($getChhose1 == "SGD" && $getChoose2 == "USD") {
                $result = ($getValueFrom_User * (87.76 / 116.14));
                $symbol = "USD";
            } else if ($getChhose1 == "EUR" && $getChoose2 == "GBP") {
                $result = $getValueFrom_User / (164.50 / 142.10);
                $symbol = "GBP";
            } else if ($getChhose1 == "GBP" && $getChoose2 == "EUR") {
                $result = ($getValueFrom_User * (164.50 / 142.10));
                $symbol = "EURO";
                //----------------------------------------------------------
            } else if ($getChhose1 == "EUR" && $getChoose2 == "AUD") {
                $result = $getValueFrom_User / (90.37 / 142.10);
                $symbol = "AUD";
            } else if ($getChhose1 == "AUD" && $getChoose2 == "EUR") {
                $result = ($getValueFrom_User * (90.37 / 142.10));
                $symbol = "EURO";
            } else if ($getChhose1 == "EUR" && $getChoose2 == "CHF") {
                $result = $getValueFrom_User / (129.72 / 142.10);
                $symbol = "CHF";
            } else if ($getChhose1 == "CHF" && $getChoose2 == "EUR") {
                $result = ($getValueFrom_User * (129.72 / 142.10));
                $symbol = "EURO";
            } else if ($getChhose1 == "EUR" && $getChoose2 == "CAD") {
                $result = $getValueFrom_User / (96.19 / 142.10);
                $symbol = "CAD";
            } else if ($getChhose1 == "CAD" && $getChoose2 == "EUR") {
                $result = ($getValueFrom_User * (96.19 / 142.10));
                $symbol = "EURO";
            } else if ($getChhose1 == "EUR" && $getChoose2 == "SGD") {
                $result = $getValueFrom_User / (87.76 / 142.10);
                $symbol = "SGD";
            } else if ($getChhose1 == "SGD" && $getChoose2 == "EUR") {
                $result = ($getValueFrom_User * (87.76 / 142.10));
                $symbol = "EURO";
            }
            //-------------------------------------------------------------
            else if ($getChhose1 == "GBP" && $getChoose2 == "AUD") {
                $result = $getValueFrom_User / (90.37 / 164.50);
                $symbol = "AUD";
            } else if ($getChhose1 == "AUD" && $getChoose2 == "GBP") {
                $result = ($getValueFrom_User * (90.37 / 164.50));
                $symbol = "GBP";
            } else if ($getChhose1 == "GBP" && $getChoose2 == "CHF") {
                $result = $getValueFrom_User / (129.72 / 164.50);
                $symbol = "CHF";
            } else if ($getChhose1 == "CHF" && $getChoose2 == "GBP") {
                $result = ($getValueFrom_User * (129.72 / 164.50));
                $symbol = "GBP";
            } else if ($getChhose1 == "GBP" && $getChoose2 == "CAD") {
                $result = $getValueFrom_User / (96.19 / 164.50);
                $symbol = "CAD";
            } else if ($getChhose1 == "CAD" && $getChoose2 == "GBP") {
                $result = ($getValueFrom_User * (96.19 / 164.50));
                $symbol = "GBP";
            } else if ($getChhose1 == "GBP" && $getChoose2 == "SGD") {
                $result = $getValueFrom_User / (87.76 / 164.50);
                $symbol = "SGD";
            } else if ($getChhose1 == "SGD" && $getChoose2 == "GBP") {
                $result = ($getValueFrom_User * (87.76 / 164.50));
                $symbol = "GBP";
            }
            //-----------------------------------------------------------
            else if ($getChhose1 == "AUD" && $getChoose2 == "CHF") {
                $result = $getValueFrom_User / (129.72 / 90.37);
                $symbol = "CHF";
            } else if ($getChhose1 == "CHF" && $getChoose2 == "AUD") {
                $result = ($getValueFrom_User * (129.72 / 90.37));
                $symbol = "AUD";
            } else if ($getChhose1 == "AUD" && $getChoose2 == "CAD") {
                $result = $getValueFrom_User / (96.19 / 90.37);
                $symbol = "CAD";
            } else if ($getChhose1 == "CAD" && $getChoose2 == "AUD") {
                $result = ($getValueFrom_User * (96.19 / 90.37));
                $symbol = "AUD";
            } else if ($getChhose1 == "AUD" && $getChoose2 == "SGD") {
                $result = $getValueFrom_User / (87.76 / 90.37);
                $symbol = "SGD";
            } else if ($getChhose1 == "SGD" && $getChoose2 == "AUD") {
                $result = ($getValueFrom_User * (87.76 / 90.37));
                $symbol = "AUD";
            }
            //-----------------------------------------------------------------
            else if ($getChhose1 == "CHF" && $getChoose2 == "CAD") {
                $result = $getValueFrom_User / (96.19 / 129.72);
                $symbol = "CAD";
            } else if ($getChhose1 == "CHF" && $getChoose2 == "CHF") {
                $result = ($getValueFrom_User * (96.19 / 129.72));
                $symbol = "CHF";
            } else if ($getChhose1 == "CHF" && $getChoose2 == "SGD") {
                $result = $getValueFrom_User / (87.76 / 129.72);
                $symbol = "SGD";
            } else if ($getChhose1 == "SGD" && $getChoose2 == "CHF") {
                $result = ($getValueFrom_User * (87.76 / 129.72));
                $symbol = "CHF";
            }
            //-----------------------------------------------------------------
            else if ($getChhose1 == "CAD" && $getChoose2 == "SGD") {
                $result = $getValueFrom_User / (87.76 / 96.19);
                $symbol = "SGD";
            } else if ($getChhose1 == "SGD" && $getChoose2 == "CHF") {
                $result = ($getValueFrom_User * (87.76 / 96.19));
                $symbol = "CHF";
            }
            //-------------------------------------------------------------
            else if ($getChhose1 == "INR" && $getChoose2 == "NRS") {
                $result = $getValueFrom_User * 1.6;
                $symbol = "Rs";
            } else if ($getChhose1 == "NRS" && $getChoose2 == "INR") {
                $result = ($getValueFrom_User / 1.6);
                $symbol = "INR";
            }
        }
        ?>
        <input type="text" value="<?php echo $symbol; ?>" placeholder="USD" class="size1">
        <input type="text" value="<?php echo $result; ?>" placeholder="$" class="size">
        <hr>
        <h2>Currency Converter</h2>
        <hr class="hr1">

        <a href="https://www.facebook.com/basanta.chaudhary.7509"> <img src="/Currency project/pics/fav.png" class="iconLink"> </a>
        <a href="https://www.youtube.com/channel/UCF0bo_siMzdjxY_yMVrMypA"> <img src="/Currency project/pics/tube.png" class="iconLink" /></a>
        <a href="https://www.facebook.com/basanta.chaudhary.7509"> <img src="/Currency project/pics/insta.png" class="iconLink"> </a>
        <a href="https://www.youtube.com/channel/UCF0bo_siMzdjxY_yMVrMypA"> <img src="/Currency project/pics/twitter.png" class="iconLink" /></a>

    </form>
</body>

</html>