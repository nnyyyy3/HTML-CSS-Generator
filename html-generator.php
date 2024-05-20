<?php

    //Authors: 
            // @Lance Mathew Abella
            // @Cleverson Rey Sucalit

class Webpage {
    private $htmlFilePath;
    public $content = '';

    function __construct($filename) {
        $this->htmlFilePath = $filename;
    }


    // Functions for managing the file
    function saveToFile() {
        file_put_contents($this->htmlFilePath, $this->content);
    }
    
    function getContent(){
        return $this->content;
    }

    function link_css($filename) {
        $this->content .= "<link rel='stylesheet' type='text/css' href='$filename'>";
        return $this;
    }

    function setup($title){
        $this->content.= 
        "<!DOCTYPE html>
        <html>
            <head>
                <meta charset='UTF-8'/>
                <meta name='author' content='Roderick A. Bandalan'/>
                <title>$title</title>
            </head>            
        </html>";
        return $this;
    }


    // Functions for containers
    function start_section($class) {
        $this->content .= "<section class='$class'>";
        return $this;
    }

    function end_section(){
        $this->content .= "</section>";
        return $this;
    }

    function start_div($class){
        $this->content .= "<div class='$class'>";
        return $this;
    }

    function end_div(){
        $this->content .= "</div>";
        return $this;
    }


    // Functions for form
    function start_form($action, $method, $class){
        $this->content .= "<form action='$action' method='$method' class='$class'>";
        return $this;
    }

    function end_form(){
        $this->content .= "</form>";
        return $this;
    }


    // Functions for table
    function start_table($class){        
        $this->content .= "<table class='$class'>";
        return $this;
    }

    function end_table(){        
        $this->content .= "</table>";
        return $this;
    }

    function start_row($class){
        $this->content .= "<tr class='$class'>";
        return $this;
    }

    function end_row(){
        $this->content .= "</tr>";
        return $this;
    }

    function table_data($class, $data){
        $this->content .= "<td class='$class'>$data</td>";
    }


    // Functions for list
    function start_ol($class){      
        $this->content .= "<ol class='$class'>";
        return $this;
    }

    function end_ol(){      
        $this->content .= "</ol>";
        return $this;
    }

    function start_ul($class){        
        $this->content .= "<ul class='$class'>";
        return $this;
    }

    function end_ul(){        
        $this->content .= "</ul>";
        return $this;
    }

    function start_li($class){
        $this->content .= "<li class='$class'>";
        return $this;
    }

    function end_li(){
        $this->content .= "</li>";
        return $this;
    }

    function anchor($link, $data, $class){
        $this->content .= "<a href='$link' class='$class'>$data</a>";
        return $this; 
    }


    // Functions for html tags
    function header($val, $text, $class){
        switch ($val) {
            case "1":
                $this->content .= "<h1 class='$class'>$text</h1>";
                break;
            case "2":
                $this->content .= "<h2 class='$class'>$text</h2>";
                break;
            case "3":
                $this->content .= "<h3 class='$class'>$text</h3>";
                break;
            case "4":
                $this->content .= "<h4 class='$class'>$text</h4>";
                break;
            case "5":
                $this->content .= "<h5 class='$class'>$text</h5>";
                break;
            case "6":
                $this->content .= "<h6 class='$class'>$text</h6>";
                break;
            default:
                $this->content .= "<h1 class='$class'>$text</h1>";
        }
        return $this; 
    }

    function paragraph($text, $class){
        $this->content .= "<p class='$class'>" . "$text" . "</p>";
        return $this; 
    }
    

    function break(){
        $this->content .= "<br>";
        return $this; 
    }

    function horizontal_line(){
        $this->content .="<hr>";
        return $this;
    }

    

    function image($link, $text, $class){
        $this->content .= "<img src='$link' alt='$text' class='$class'>";
        return $this; 
    }

    function span($text, $class){
        $this->content .= "<span class='$class'>$text</span>";
        return $this; 
    }

    function input($type, $name, $placeholder, $class){
        $this->content .= "<input type='$type' name='$name' placeholder='$placeholder' class='$class'>";
        return $this;
    }
    
    function button($text, $type, $class){
        $this->content .= "<button type='$type' class='$class'>$text</button>";
        return $this;
    }

    function checkbox($name, $checked, $class){
        $checkedAttr = $checked ? "checked" : "";
        $this->content .= "<input type='checkbox' name='$name' class='$class' $checkedAttr>";
        return $this;
    }
    
    function textarea($name, $id, $placeholder, $class) {
        $this->content .= "<textarea name='$name' id='$id' placeholder='$placeholder' class='$class'></textarea>";
        return $this;
    }
    
    function dt($text, $class) {
        $this->content .= "<dt class='$class'>$text</dt>";
        return $this;
    }

    function dd($text, $class) {
        $this->content .= "<dd class='$class'>$text</dd>";
        return $this;
    }
    
    public function rtrim_content($charlist) {
        $this->content = rtrim($this->content, $charlist);
        return $this;
    }
}
?>
