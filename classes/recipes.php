<?php

//Create Class
class Recipe
{
    //Add property to our recipe class
    private $title;
    public $ingredients =array();
    public $instructions = array();
    public $yeild;
    public $tag = array();
    public $source = "Alina Holligan";

    //Define measurments
    private $measurements = array( 
        "tsp",
        "tbsp",
        "cup",
        "oz",
        "fl oz",
        "pint",
        "quart",
        "gallon"
    );

    //Add $title setter
    public function setTitle($title)
    {
    //Object property / argument 
       $this->title = ucwords($title); 
    }

    public function getTitle()
    {
        return $this->title;      
    }

    //Add ingredient method
    public function addInggredient($item, $amount = null, $measure = null)
    {   
        //if $amount != null !=float !=int exit and display type and user input
        if($amount != null && !is_float($amount) && !is_int($amount)){
            exit("The amount must be a float: " . gettype($amount) . " $amount given");
        }
        //if $measure != null != values in array $measure exit display values
        if($measure != null && !in_array(strtolower($measure), $this->measurements)){
            exit("Please enter a valid measurement: " . implode(",", $this->measurements));
        }
        //Add $item, $amount, $measure to array
        $this->ingredients[] = array(
            "item" => ucwords($item),
            "amount" => $amount,
            "measure" => strtolower($measure),
        );
    }

    public function getIngredients()
    {
        return $this->ingredients;
    }

    //Create functiont hat will display recipe title and source
    public function displayRecipe()
    {   //$this->title is one variable 
       return $this->title . " by " . $this->source;
    }

}
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