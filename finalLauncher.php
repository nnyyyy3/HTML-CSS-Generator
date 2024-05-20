<?php
        //Authors:
                // @Lance Mathew Abella
                // @Cleverson Rey Sucalit
                // @Angel Niña Doyohim
                // @Mariane Historia

require "html-generator.php";
require "css-generator.php"; 

//Creating files for html and css
$webpage = new Webpage("libretto_books.html");
$css = new CssGenerator("libretto.css");

$sectionNames = ['Home', 'Reading', 'Featured', 'Orders', 'Deals & Offers'];


// CSS Styles
$css->background_color("body", "#ccc")
    ->font_family("body", "arial, verdana, tahoma, sans-serif")

    ->width(".container", "1000px")
    ->margin(".container", "auto")
    ->background_color(".container", "white")
    ->border_radius(".container", "50px")
    ->display(".container", "block")
    ->overflow(".container", "hidden") 
    ->justify_content(".container", "space-between") 

    ->margin(".logo", "auto")
    ->display(".logo", "flex")
    ->border_radius(".logo", "100px")
    ->justify_content(".logo", "center")
    ->align_items(".logo", "center")
    ->border_radius(".logo img", "30%")

    ->height(".full-width-div", "35px")
    ->margin(".full-width-div", "0 0 0 0")
    ->display(".full-width-div", "flex")
    ->border_bottom(".full-width-div", "1px solid black")

    ->margin(".section-link", "0 35px")
    ->font_size(".section-link", "16px")
    ->font_weight(".section-link", "bold")
    ->cursor(".section-link", "pointer")
    ->hover(".section-link", " background-color: aqua; ")

    ->display(".advertisement-holder", "flex")

    ->flex(".left-advertisement", "1")
    ->margin_right(".right-advertisement", "40px")

    ->color(".blue_text", "blue")
    ->font_size(".blue_text", "45px")
    ->font_weight(".blue_text", "normal")
    ->font_family(".blue_text", "tahoma, sans-serif")

    ->color(".red_text", "red")
    ->font_size(".red_text", "30px")
    ->font_family(".red_text", "arial, verdana, sans-serif")
    ->font_weight(".red_text", "normal")
    ->margin(".red_text", "-20px 0 0 0")

    ->margin(".image3", "0 0 0 20px")

    // Dropdown menu styles
    ->position(".dropdown-content", "absolute")
    ->background_color(".dropdown-content", "#f9f9f9")
    ->width(".dropdown-content", "160px")
    ->padding(".dropdown-content", "12px 16px")
    ->display(".dropdown-content", "none")
    ->z_index(".dropdown-content", "1")
    ->add_nested_rule(".dropdown-content", "a", "color", "black")
    ->add_nested_rule(".dropdown-content", "a", "padding", "12px 16px")
    ->add_nested_rule(".dropdown-content", "a", "text-decoration", "none")
    ->add_nested_rule(".dropdown-content", "a", "display", "block")
    ->add_nested_rule(".dropdown-content", "a:hover", "background-color", "#ddd")
    ->add_hover_rule(".dropdown", ".dropdown-content", "display", "block")

    ->hover(".drop", " background-color: #237291; ");

//cards (booknews right)
$css    -> float(".right", "right")
        -> color(".title", "#f9f9f9")
        -> background(".title","#65A9D6")
        -> font_family(".title","arial narrow")
        -> font_weight(".title", "normal")
        -> padding_left(".title","5px")
        -> font_size(".title","30px")
        -> margin(".title","5px 5px 10px 5px")

        -> width(".right", "700px")
        -> right(".right", "1000px")

//cards
        -> float(".card", "left") 
        -> display(".card", "flex")
        -> flex_wrap(".card", "wrap")
        
//sub title
        -> color(".title_card","#f9f9f9")
        -> background(".title_card","rgb(101, 169, 214)")
        -> font_family(".title_card","Arial Narrow")
        -> border_top_left_radius(".title_card","10px")
        -> border_top_right_radius(".title_card","10px")
        -> font_size(".title_card", "30px")
        -> width(".title_card","220px")

        -> font_size(".literature, .arts, .drama, .science, .horror, .love", "30px")
        -> margin(".literature, .arts, .drama, .science, .horror, .love", "auto")
        -> padding(".literature, .arts, .drama, .science, .horror, .love", "0.3rem")
        -> font_family(".literature, .arts, .drama, .science, .horror, .love", "arial narrow")
        -> font_weight(".literature, .arts, .drama, .science, .horror, .love", "normal")

// bodycard
        -> padding(".body_card", "2px")
        -> margin(".body_card", "0px 0px 50px 50px")
        -> font_size(".body_card","12px" )
        -> text_align(".body_card p", "justify")
        -> border(".body_card", "1px solid #ccc")
        -> border_top_left_radius(".body_card","10px")
        -> border_top_right_radius(".body_card","10px")
        -> width(".body_card","220px");
        

$css    -> color(".footer", "#f9f9f9")
        -> background_color(".footer", "#000")
        -> min_height(".footer", "180px")
        -> width(".footer", "100%")
        -> margin(".footer", "820px 0 0 0")
        -> padding(".footer", "5px")
        -> text_align(".footer", "center")
        -> border_bottom_left_radius(".footer","25px")
        -> border_bottom_right_radius(".footer", "25px");


$css    -> display(".copyright", "block")
        -> text_align(".copyright","right")
        -> font_size(".copyright", "13px")
        -> margin(".copyright", "150px 30px 0 0");

$css    -> margin(".paragraph1, .paragraph2, .paragraph3, .paragraph4, .paragraph5, .paragraph6", "0 0 0 0");

        
// Html Content
$webpage->start_div("container"); 

// header images
$webpage->start_div("logo")
        ->image("images/libretto2_200px.png", "Image", "image1")
        ->image("images/libretto_banner.png", "Image", "image2")
        ->end_div()
        ->break();

$webpage->start_div("full-width-div");

foreach ($sectionNames as $name) {
        if ($name == 'Reading') {
        $webpage->start_div("dropdown")
                ->span("$name", "section-link")
                ->start_div("dropdown-content");

        $webpage->paragraph("Novels", "drop")
                ->paragraph("Hardbound", "drop")
                ->paragraph("Paperback", "drop")
                ->paragraph("Comics", "drop")
                ->paragraph("Categories", "drop");

        $webpage->end_div() 
                ->end_div(); 
        } else {
        $webpage->span("$name", "section-link");
        }
}

$webpage->end_div(); 
        

// advertisement
$webpage->break()
        ->break()
        ->start_div("advertisement-holder")
        ->start_div("left-advertisement")
        ->image("images/hunger_games_trilogy.jpg", "The Hunger Games Trilogy", "image3")
        ->end_div()
        
        ->start_div("right-advertisement")        
        ->header("2", "Special Offer!!!", "blue_text")
        ->header("2", "Limited stocks only!!!", "red_text")        
        ->end_div()

        ->end_div()

        ->break();

//section left  
$webpage->start_div("left")
        ->end_div();

//title
$webpage->start_div("right")
        ->start_div("title")
        ->header("1", "Book News", "title")
        ->end_div()
        
        ->break();

// cards
$webpage->start_div("card")
        ->start_div("body_card")
        ->start_div("title_card")
        ->header("2", "Literature", "literature")
        ->end_div()

        ->paragraph("Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.", "paragraph1")
        ->end_div()

        ->end_div();

$webpage->start_div("card")

->start_div("body_card")
        ->start_div("title_card")
        ->header("2", "Arts", "arts")
        ->end_div()

        ->paragraph("Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.", "paragraph2")
        ->end_div()

        ->end_div();

$webpage->start_div("card")

->start_div("body_card")
        ->start_div("title_card")
        ->header("2", "Drama", "drama")
        ->end_div()

        ->paragraph("Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.", "paragraph3")
        ->end_div()

        ->end_div();

$webpage->start_div("card")

->start_div("body_card")
        ->start_div("title_card")
        ->header("2", "Science/Fiction", "science")
        ->end_div()

        ->paragraph("Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.", "paragraph4")
        ->end_div()

        ->end_div();

$webpage->start_div("card")

->start_div("body_card")
        ->start_div("title_card")
        ->header("2", "Horror", "horror")
        ->end_div()

        ->paragraph("Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.", "paragraph5")
        ->end_div()

        ->end_div();

$webpage->start_div("card")

->start_div("body_card")
        ->start_div("title_card")
        ->header("2", "Love Story", "love")
        ->end_div()

        ->paragraph("Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.", "paragraph6")
        ->end_div()

        ->end_div()

        // End div for mother-card
        ->end_div()
        ->break();

// footer
$webpage->start_div("footer")
        ->paragraph("Copyright © International Web Development, All rights reserved 2013", "copyright")
        ->end_div();

// Closing container div
$webpage->end_div();

// Displaying
$webpage->getContent();

// Creating an external file for html
$webpage->saveToFile();

// Retrieve CSS filename and link it to the webpage
$cssFilename = $css->getCssFilePath();
echo "<link rel='stylesheet' type='text/css' href='$cssFilename'>";

echo $webpage->content;

?>

