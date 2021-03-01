<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-3">Question 2</h1>
    <!--a submit form for the user.-->
    <form method="post"> 
    Enter a Number: <input type="text" name="input"><br><br>  
    <input type="submit" name="submit" class="btn btn-info" value="Submit">  
    </form> 
    <hr class="my-2">
    <p>The anwser will be shown below: </p>
  </div>
  <div>
  <?php 

$num = $_POST['submit']; //connecting the submited number to a veriable.
function isPrime(){
    if($_POST)  
    {  
    $input=$_POST['input'];  
    for ($i = 2; $i <= $input-1; $i++) {  
      if ($input % $i == 0) {  
      $value= True;  
      }  
    }  
    if (isset($value) && $value) {  
     echo 'The Number '. $input . ' is not prime';  
    }  else {  
        echo 'The Number '. $input . ' is prime';  
    }   
    }  
} 
//gets an error befor a number is submited.
isPrime($num); //calling function to calculate if the submited number is a prime or not. 
?>  

  </div>
</div>
 


