<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>index</h1>
    <?php
        $x = 10;
        echo $x*$x;
        $number = 10;
        $pi = 3.14;
        echo $pi;
        $str = "hello world";
        
        $pi = "hello";
        echo $pi;

        $arr = [];
        $arr2 = array();

        $arr[] = 22;          // phan tu 0
        $arr[] = "number one";//phan tu 1

        $arr[5]=[1,2,3,4];

        $arr["name"]="Le van nam";

        $obj = new stdClass();

        $obj->name="haha";
        echo $obj->name;

        var_dump($arr); //Kiem tra kieu du lieu la gi

        $user = [
            "name" => "Nguyen van anh",
            "age"   => 18,
            "tel"   =>  "0978773293",
            "birth" =>  "22/03/1999"
        ];

        $rs = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Hanoi,vn&appid=09a71427c59d38d6a34f89b47d75975c&units=metric",true);
        $rs = json_decode($rs);
        //var_dump($rs);
    ?>
    <h1><?php echo $user["name"]; ?></h1>
    <h2><?php echo $user["age"]; ?></h2>
    <h2><?php echo $user["tel"]; ?></h2>
    <h2><?php echo $user["birth"]; ?></h2>

     <h1>Weather</h1>
     <h2>City: <?php echo $rs->name;?></h2>   
     <h2>Temp: <?php echo $rs->main->temp?></h2>   
</body>
</html>