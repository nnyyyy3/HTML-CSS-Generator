<?php
class CssGenerator {
    private $cssFilePath;

    function __construct($filename) {
        $this->cssFilePath = $filename;
    }

    function add_css_rule($class, $property, $value) {
        $cssRule = "$class { $property: $value; }\n";
        file_put_contents($this->cssFilePath, $cssRule, FILE_APPEND);
        return $this;
    }

    function add_css_nested_rule($parentClass, $pseudoClass, $property, $value) {
        $cssRule = "$parentClass:$pseudoClass { $property: $value; }\n";
        file_put_contents($this->cssFilePath, $cssRule, FILE_APPEND);
        return $this;
    }

    function background($class, $value) {
        return $this->add_css_rule($class, "background", $value);
    }  
    
    function position($class, $value) {
        return $this->add_css_rule($class, "position", $value);
    } 
    
    function float($class, $value) {
        return $this->add_css_rule($class, "float", $value);
    } 

    function color($class, $color) {
        return $this->add_css_rule($class, "color", $color);
    }

    function background_color($class, $color) {
        return $this->add_css_rule($class, "background-color", $color);
    }

    function margin($class, $value) {
        return $this->add_css_rule($class, "margin", $value);
    }

    function margin_right($class, $value) {
        return $this->add_css_rule($class, "margin-right", $value);
    }

    function margin_bottom($class, $value) {
        return $this->add_css_rule($class, "margin-bottom", $value);
    }


    function font_size($class, $size) {
        return $this->add_css_rule($class, "font-size", $size);
    }

    function padding($class, $value) {
        return $this->add_css_rule($class, "padding", $value);
    }

    function padding_top($class, $value){
        return $this->add_css_rule($class, "padding-top","$value");
    }

    function padding_left($class, $value){
        return $this->add_css_rule($class, "padding-left","$value");
    }


    function border($class, $value) {
        return $this->add_css_rule($class, "border", $value);
    }

    function text_align($class, $value) {
        return $this->add_css_rule($class, "text-align", $value);
    }

    function width($class, $value) {
        return $this->add_css_rule($class, "width", $value);
    }

    function cursor($class, $value) {
        return $this->add_css_rule($class, "cursor", $value);
    }

    function height($class, $value) {
        return $this->add_css_rule($class, "height", $value);
    }

    function overflow_y($class, $value) {
        return $this->add_css_rule($class, "overflow-y", $value);
    }

    function overflow($class, $value) {
        return $this->add_css_rule($class, "overflow", $value);
    }


    function display($class, $value) {
        return $this->add_css_rule($class, "display", $value);
    }

    function flex_direction($class, $value) {
        return $this->add_css_rule($class, "flex-direction", $value);
    }

    function scroll_snap_type($class, $value) {
        return $this->add_css_rule($class, "scroll-snap-type", $value);
    }

    function scroll_snap_align($class, $value) {
        return $this->add_css_rule($class, "scroll-snap-align", $value);
    }

    function justify_content($class, $value) {
        return $this->add_css_rule($class, "justify-content", $value);
    }

    function align_items($class, $value) {
        return $this->add_css_rule($class, "align-items", $value);
    }
    
    function flex_wrap($class, $value) {
        return $this->add_css_rule($class, "flex-wrap", $value);
    }

    function flex_basis($class, $value) {
        return $this->add_css_rule($class, "flex-basis", $value);
    }
    
    function border_radius($class, $value) {
        return $this->add_css_rule($class, "border-radius", $value);
    }

    function top($class, $value) {
        return $this->add_css_rule($class, "top", $value);
    }

    function right($class, $value) {
        return $this->add_css_rule($class, "right", $value);
    }

    function left($class, $value) {
        return $this->add_css_rule($class, "left", $value);
    }

    public function border_bottom($class, $value) {
        return $this->add_css_rule($class, "border-bottom", $value);
    }

    public function font_family($class, $value) {
        return $this->add_css_rule($class, "font-family", $value);
    }

    public function font_weight($class, $value) {
        return $this->add_css_rule($class, "font-weight", $value);
    }

    public function z_index($class, $value) {
        return $this->add_css_rule($class, "z-index", $value);
    }
    
    function flex($class, $value){
        return $this->add_css_rule($class, "flex", $value);
    }

    function bottom($class, $value){
        return $this->add_css_rule($class, "bottom", $value);
    }

    function min_height($class, $value){
        return $this->add_css_rule($class, "min-height", $value);
    }

    function border_top_left_radius($class,$value){
        return $this->add_css_rule($class, "border-top-left-radius", $value);
    }

    function border_top_right_radius($class,$value){
        return $this->add_css_rule($class, "border-top-right-radius", $value);
    }

    function border_bottom_left_radius($class,$value){
        return $this->add_css_rule($class, "border-bottom-left-radius", $value);
    }

    function border_bottom_right_radius($class,$value){
        return $this->add_css_rule($class, "border-bottom-right-radius", $value);
    }

    public function hover($class, $value) {
        $hoverRule = "$class:hover { $value; }\n";
        file_put_contents($this->cssFilePath, $hoverRule, FILE_APPEND);
        return $this;
    }

    public function add_nested_rule($parentClass, $childClass, $property, $value) {
        $cssRule = "$parentClass $childClass { $property: $value; }\n";
        file_put_contents($this->cssFilePath, $cssRule, FILE_APPEND);
        return $this;
    }

    public function add_nested_pseudo_rule($parentClass, $pseudoClass, $childClass, $property, $value) {
        $cssRule = "$parentClass:$pseudoClass $childClass { $property: $value; }\n";
        file_put_contents($this->cssFilePath, $cssRule, FILE_APPEND);
        return $this;
    }

    function add_hover_rule($parentClass, $childClass, $property, $value) {
        $cssRule = "$parentClass:hover $childClass { $property: $value; }\n";
        file_put_contents($this->cssFilePath, $cssRule, FILE_APPEND);
        return $this;
    }



    function getCssFilePath() {
        return $this->cssFilePath;
    }

    function removeClass($class) {
        $currentContent = file_get_contents($this->cssFilePath);
        $updatedContent = preg_replace("/\.$class\s*\{[^\}]*\}/", "", $currentContent);
        file_put_contents($this->cssFilePath, $updatedContent);
        return $this;
    }
}
?>
