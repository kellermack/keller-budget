




<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cash Money</title>
    </head>
    <body>
        
        <h1>2019 Spending database (not including January 2019)</h1>
        <br>
        
        <p>Enter amount spent, select type of expenditure then click submit.</p>
        
        <div id="data">
                <label>Amount Spent:</label>
                <input type="text" name="Amount Spent">
                    
                <br>
                <form method="POST">
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
                <input type="submit" name="search"><br>
                    </div>

                </form>
            
<?php

require ('databaseconnection.php');

$amount = filter_input(INPUT_POST, 'amount',
        FILTER_VALIDATE_FLOAT);
$category = filter_input(INPUT_POST, 'category');
$date = date('Y-m-d', strtotime($_POST['date'])); 

$query = "INSERT INTO budget2019 (amount, category, date) VALUE (:amount, :category, :date)";

$statement = $db->prepare($query);
$statement->bindValue(':amount', $amount);
$statement->bindValue(':category', $category);
$statement->bindValue(':date', $date);
$statement->execute();
$statement->closeCursor();

if ( $amount <= 0 ) {
    $message = 'Amount must be greater than zero';
    echo $message; 
}


?>
       
    </body>
</html>
