
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "budget";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$conn->close();

$category = filter_input(INPUT_POST, 'category');


    $groceries = $_POST['category'];
    $gas = $_POST['gas'];
    $restaurant = $_POST['resturant'];
    $cellPhone = $_POST['cellPhones'];
    $televisionInternet = $_POST['televisionInternet'];
    $entertainment = $_POST['entertainment'];
    $clothing = $_POST['clothing'];
    $makeUp = $_POST['makeUp'];
    $homeImprovement = $_POST['homeImprovement'];
    $mortgage = $_POST['mortgage'];
    $other = $_POST['other'];
  
    
$sql = "INSERT INTO kellerbudget2019 (amount, category) VALUES ('$groceries', '$gas',
    '$restaurant', '$cellPhone', '$televisionInternet', '$entertainment', '$clothing',
        '$makeUp', '$homeImprovement', '$mortgage', '$other');";
mysqli_query($conn, $sql);
            




?>



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


       
    </body>
</html>
