<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If/else statement</title>
</head>
<body>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
         .container{
    max-width: 80%;
    background-color:grey;
    margin: auto;
    padding: 23px;

 }
    </style>



    <div class="container">
        <h1> Lets learn about php</h1>
        <p>Your party satus is here</p>

      <?php
      $age= 34 ;
      if($age>18){
        echo "You can go to the party";
      }
      else if ($age==7){
        echo "You are 7 years old";
      }
      else{
        echo "You can not go to the party";
      }
      echo "</br>";
      // Arrays in php
      $languages =array("Python" ,"C++","php","NodeJs");
      echo count($languages);
      echo"</br>";
      echo $languages[3];
      //Loops in php
      //=pari na
      // function
      function print5(){
        echo "FIVE";
      }
        print5();
        print5();
        print5();
        print5();
        function print_number($number){
          echo "<br>Your number is ";
          echo $number;
        }
        print_number(-1)
        ?>
    </div>
</body>
</html>