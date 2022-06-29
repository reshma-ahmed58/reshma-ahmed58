<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculator.php</title>
    <style>
        h1{
            font-size:40px; 
            font-weight:bold; /*css part of header file*/
            color: black;
        }

        input[type="text"]{
            width: 170px;
            height: 40px;
        }

        input[type="submit"]{
            font-weight:bold; /*css part of input button*/
            padding:3px 9px;
            color: white; 
            width: 170px; 
            height: 40px;
        }

        div{
            background:whitesmoke;
            font-size:40px;
            font-weight:bold;
            color: black;
            margin-left: 480px;
            width: 380px;
            height: 250px;
        }
    </style>
</head>
<body style="background:cornflowerblue">
<h1 align = "center"><p>Emoji-Based Calculator &#128151;</p></h1>
<form action="calculator.php" method="post" align = "center">
    <input type="text" name="num1" placeholder="Enter Your Desired Number"><br><br>
    <input type="text" name="num2" placeholder="Enter Your Desired Number"><br><br>
    <!--Taking input from user-->
    <select name="operation" style="background: white; font-weight:bold; padding:3px 9px; width: 170px; height: 30px">
    <option value="">---Select Any Emoji---</option>
    <option value="add"><p>&#128125;</p></option>
    <option value="substract"><p>&#128128;</p></option>
    <option value="multiple"><p>&#128123;</p></option>
    <option value="divide"><p>&#128561;</p></option>
    </select><br><br> 
    <!--Creating the drop down menue for options-->

    <input type="submit" name="sub" value="Submit" style="background:darkgreen;"> <!--submition and Clear button-->
    <input type="submit" name="clear" value="Clear" style="background:blue;">
</form>
<div align="center">
    <h1><p>Result&#9989;</p></h1>
    <?php
    if(isset($_POST['sub'])){
        $val1 = $_POST['num1'];
        $val2 = $_POST['num2'];
        $action = $_POST['operation'];
        switch($action){
            case "add":
                $val = $val1+$val2;
                echo "$val1 &#128125; $val2 = " .$val." !"; //showing the addition value
                break;

                case "substract":
                    $val =$val1-$val2;
                    echo "$val1 &#128128; $val2 = " .$val." !"; //calculation Sum
                    break;

                    case "multiple":
                        $val =$val1*$val2;
                        echo "$val1 &#128123; $val2 = " .$val." !"; //multiplication
                        break;

                        case "divide":
                            $val =$val1/$val2;
                            echo "$val1 &#128561; $val2 = " .$val." !"; //division
                            break;
                        
                            case "clear":
                                $val =0;
                                echo "" .$val; //cleaning the screen
                                break;

        }
       
    }
    
    ?>
</div>
</body>
</html>
