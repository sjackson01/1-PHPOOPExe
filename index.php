<?php
include("classes/recipes.php");

//Instantiate object
$recipe1 = new Recipe();
$recipe1->source = "Grandma Holligan ";
//Call setTitle and pass in lowercase title 
$recipe1->setTitle("my first recipe ");
$recipe1->addInggredient("egg", 1);
$recipe1->addInggredient("flour", 2, "cup");


//Instantiate second object
$recipe2 = new Recipe();
$recipe2->source = "Bettery Crocker";
$recipe2->setTitle("my second recipe");


echo $recipe1->getTitle();
//Display values stored in $recipe1 object
foreach ($recipe1->getIngredients() as $ing){
    echo "\n" 
    . $ing["amount"] . " " 
    . $ing["measure"] . " " 
    . $ing["item"];
}

?>