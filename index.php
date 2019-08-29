<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Budget</title>
    </head>
    <body>
        
        <h1>2019 Spending database </h1>
        <br>
        
        <p>Enter amount spent, select type of expenditure then click submit.</p>
        
        <div id="data">
                <label>Amount Spent:</label>
               <form action="index.php" method="post">
                   <input type="number" name = "amount"
                          value=""
                          min="0">
                
                    <input type="date" id="date" name="date"
                           value = "2019-08-27"
                           min="2019-01-01"
                           max="2030-01-01">
                    
                <br>
                
                    
                <input type="radio" name="category" value="groceries"> Groceries<br>
                <input type="radio" name="category" value="gas"> Gas<br> 
                <input type="radio" name="category" value="restaurant"> Restaurant<br>
                <input type="radio" name="category" value="cell phone"> Cell Phone<br>
                <input type="radio" name="category" value="television/internet"> Television/Internet<br>
                <input type="radio" name="category" value="entertainment"> Entertainment<br>
                <input type="radio" name="category" value="clothing"> Clothing<br>
                <input type="radio" name="category" value="make up"> Make Up<br>
                <input type="radio" name="category" value="home improvement"> Home Improvement<br>
                <input type="radio" name="category" value="mortgage"> Mortgage<br>
                <input type="radio" name="category" value="other"> Other<br>
                
               
              <div id="buttons">
                  <input type="submit" value="submit"><br>
                    </div>
                
                

<?php

include 'databaseconnection.php';

$stmt = $mysqli->prepare("INSERT INTO housebudget (amount, category, date) "
        . "VALUES (?,?,?)");

$stmt->bind_param('sss', $amount, $category, $date);


$amount = filter_input(INPUT_POST, 'amount',
        FILTER_VALIDATE_FLOAT);


$category = filter_input(INPUT_POST, 'category');


if(isset($_POST['date'])) {
    $date = date('Y-m-d', strtotime($_POST['date']));

}


?>                 
                                
                
                
                

                </form>


       
    </body>
</html>
