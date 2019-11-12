<?php
include("classes/recipes.php");

//Instantiate object
$recipe1 = new Recipe();
$recipe1->source = "Grandma Holligan ";
//Call setTitle and pass in lowercase title 
$recipe1->setTitle("my first recipe ");
$recipe1->addInggredient("egg", 1);


//Instantiate second object
$recipe2 = new Recipe();
$recipe2->source = "Bettery Crocker";
$recipe2->setTitle("my second recipe");

//Call display recipe method on both recipe objects
echo $recipe1->getTitle();
echo $recipe1->displayRecipe();
echo $recipe2->displayRecipe();

?>