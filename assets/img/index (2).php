<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
        <!-- Applying Internal Styles: -->
        <style>
            form {
                width: 80%;
                margin: auto;
                background-color: #ADC6CF;
                color: #080743;
                border: 2px solid #080743;
                padding: 5px;
            }

            form h3 {
                text-align: center;
                border-bottom: 2px solid #080743;
                margin-top: 0;
            }
        </style>
</head>

<body>
<!--
  method="POST" ==> either "POST" or "GET"
  in PHP, we have two global arrays one for post and one for get

  action="" ==> to specify the target file or the target PHP code 
  to handle the user input
-->
<form method="POST" action="/“PHP-Assignment2/index.php">
<h3>Simple Calculator</h3>
  <!-- 
    Task:
    1. Using HTML form to ask the user to enter all his/her numeric values.
    2. Using PHP to take these values and remove the white spaces before and after 
    3. find the total, multiplication of these values based on the user choice.
  --> 
  <label for="numbers">Enter your all numeric values with spaces:</label>
  <!-- 
    inside the php block for "value" attribute
    We can write this code: 
    
    if (isset($finalNumbersArr)) { 
      echo $finalNumbersArr; 
    }
    
    So using the ternary operator might be a better choice in this case:
     
    echo (our condition)? the code if it's true : the code if it's false
    echo isset($numberString) ?  $numberString : ""
   -->
  <input type="text" name="numbers" id="numbers" value="
    ">
  <br>
  <!-- we can set the value of "value" attribute to any simple value -->
  <input type="radio" name="operation" checked value="1" id="add">
  <label for="add">Add all the numbers</label>
  <br>

  <input type="radio" name="operation" value="2" id="mul">
  <label for="mul">Multiply all the numbers</label>
  <br>

  <input type="radio" name="operation" value="3" id="max">
  <label for="max">The maximum number</label>
  <br>

  <input type="radio" name="operation" value="4" id="min">
  <label for="min">The minimum number </label>
  <br>
  <br>
  <!-- we need to add name attribute for the submit button
		to check if the form is submitted or not
	-->
  <input type="submit" name="submit" value="The result">
  <br>
  <br>
  <!-- 
        Below we are outputting (echo statement) the value of $answer,
        When the page is opened for the first time, $answer var has no value
        So it will give us an error "Undefined variable".

        We can repeat the same function "isset()" to check:
        if the variable has any value => then echo it
    --> 
  The result:
  <!-- 
    using php block with if condition to print the value of the variable answer if it's available 
    value=" writing our PHP code here "
  -->
  <input type="text" name="result" readonly value="
    ">
</from>
</body>
</html>