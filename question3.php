<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-3">Question 3</h1>
            <form method="post">  <!--a submit form for the user. -->
            Enter your plan (in GigaBytes): <input type="text" name="input2"><br><br>  
            <input type="submit" class= "btn btn-primary" name="submit2" value="Calculate">  
            </form>  
        <hr class="my-2">
        <p>The awnser will be shown below: </p>
    </div>
    <div>

    <?php 
    $num = $_POST['submit2']; //connecting the submited number to a veriable.
    function subcriptipnPlan(){
    if ($_POST){
        $plan = $_POST['input2'];
        $moms_sats = 1.25;

        if ($plan <= 100) {
            $expence = $plan * 5;
            $total_moms = $expence * $moms_sats;
        }
        elseif ($plan <=200) {
            $expence = (($plan - 100)* 3) + 500;
            $total_moms = $expence * $moms_sats;
        }
        elseif ($plan <=300) {
            $expence3 = (($plan - 200) *2 + 800);
            $total_moms = $expence * $moms_sats;
        }
        elseif ($plan >300) {
            $expence = (($plan - 300) *1) + 1000;
            $total_moms = $expence * $moms_sats;
        }

        echo "Your monthly expences will be: $expence SEK";
        echo "<br>";
        echo "<br>";
        echo "With moms it will be: $total_moms SEK";
    }
}
    //gets an error befor a number is submited.
    subcriptipnPlan($num);

    ?>
</div>
</div>




