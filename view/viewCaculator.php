<html>
<head>
<meta charset="UTF-8">
<meta name="title" content="Daily Coffeine Intake Planner">
<meta name="description" content="Use this planne to calculate your daily coffeine intake">
<meta name="keywords" content="Coffie,Coffeine,diet,Intake,Planner,drinks,health">
<meta name="author" content="Simon">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Daily Coffeine Intake Planner</title>
</head>
<body>  
  
<div class="container" id="main-content">
<div id="instruction" class="instruction">
<h3>Daily Coffeine Intake Planner</h3>
<span>
Use this planne to calculate your daily coffeine intake
<br>Click on the drink that you would like to add to your planner from the drink list below to see the total cofeine intake in mg.
</span>
</div>
<div class="counter">
<div id='total_intake_display' class="counterview">
<div id='total_intake' class='countervalue'>0
</div>
<div id='total_intake_unit' class='counterunit'>Total Cofeine(mg)
</div>
</div>

<div id='total_serving_display' class="counterview">
<div id='total_serving' class='countervalue'>0
</div>
<div id='total_serving_unit' class='counterunit'>Serving(s)
</div>
</div>

<div id='total_remiaing_display' class="counterview">
<div id='remaining_intake' class='countervalue'>500
</div>
<div id='remaining_unit' class='counterunit'>Remaining Limit(mg)
</div>
</div>

<div id='reset' class="counterview">
<div id='resetbutton' class='resetbutton'>Reset
</div>
</div>
</div>
<div id="drinklist" class="listview">
<?php
echo "<div id='0' class='row'>";
echo "<div id='list_header' class='drink_name'>";
echo "Drink Name";
echo "</div>";

echo "<div id='list_header' class='coffeine_in_mg'>";
echo "Coffeine in mg";
echo "</div>";

echo "<div id='list_header' class='serving'>";
echo "Serving(s)";
echo "</div>";

echo "<div id='list_header' class='intake_limit'>";
echo "Daily limit";
echo "</div>";

echo "<div id='list_header' class='serving_size'>";
echo "Serving Size";
echo "</div>";

echo "<div id='list_header' class='serving_unit'>";
echo "Unit";
echo "</div>";



echo "</div>";
echo "<hr>";
?>

    <?php

        $a=new Model();
        echo $a->printDrinkList();
    ?>
  
</div>
<hr>
Selected Drinks
<hr>
<div id="result" class="listview">
</div>
</div>
</body>
</html>

