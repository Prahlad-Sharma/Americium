
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excel Functions</title>
       
    <style>
      body{
        background-color: red;
      }
        form {
            width: 85%;

            text-align: center;
  border: 3px solid black;
            margin: 100px;
            background-color: red;
            color: black;
            padding: 10px;
        }
        input #add{
            width: 400px;
            height: 20px;
        }

        form h2 {
          text-align: center;
  border: 3px solid black;
          color: black;
            text-align: center;
            margin-top: 5px;
        }
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
    margin: 5px;
    padding:5px;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
html,body{
  display: grid;
  height: 100%;
  place-items: center;
}

    </style>
</head>

<body>

<form method="POST" action="/“PHP-Assignment2/index.php">
    <h2> Excel Functions</h2>
  
    <!-- Input for user to enter numeric values -->
    <label for="numbers">Enter your all numeric values with spaces:</label>
  
    <!-- Display the input field with previous values or empty string if submitted -->
    <input type="text" name="numbers" id="numbers" value="
    <br />
<b>Warning</b>:  Undefined variable $numberString in <b>C:\xampp\htdocs\“PHP-Assignment2\index.php</b> on line <b>118</b><br />
">
    <br>
 
    <!-- Radio buttons for selecting the operation -->
    <input type="radio" name="operation" checked value="1" id="add">
    <label for="add">AutoSum</label>
    <br>

    <input type="radio" name="operation" value="2" id="avg">
    <label for="avg">Average</label>
    <br>

    <input type="radio" name="operation" value="3" id="max">
    <label for="max">Maximum</label>
    <br>

    <input type="radio" name="operation" value="4" id="min">
    <label for="min">Minimum </label>
    <br>
    <br>
            
    <!-- Submit button to perform the calculation -->
    <input type="submit" name="submit" value="Calculate">
    <br>
    <br>
 
    <!-- Display the result of the calculation -->
    Result:
    <input type="text" name="result" readonly value="
    ">
</form>
</body>
</html>