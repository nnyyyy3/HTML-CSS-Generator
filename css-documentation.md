**CSS**

_CSS Generator Class Documentation_

# Overview:
    The CssGenerator class is a PHP class designed to facilitate the generation of CSS content for webpages. It provides methods to easily create various HTML elements and structures, making it convenient for developers to generate dynamic web content programmatically.

# Class Declaration:	
	```class CssGenerator { 
		// class properties and methods 
	}```

# Properties:
**$cssFilePath** - a private property that stores the file path of the css file being manipulated.

# Methods:
* &nbsp; &nbsp; **add_css_rule($class, $property, $value)**<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Description:** Adds a CSS rule to the stylesheet.<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Parameters:**<br>
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; **$class:** the CSS class to which the rule applies.<br>
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; **$property:**  the CSS property to set.<br>
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; **$value:** the value of the CSS property.<br>
&nbsp; &nbsp; &nbsp; &nbsp;**Return Type:** CssGenerator(for method chaining) <br>
&nbsp; &nbsp; &nbsp; &nbsp;**Usage:** $css->add_css_rule('.main-paragraph', 'color', 'pink')

* &nbsp; &nbsp; **background($class, $value)**<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Description:** These methods are shorthand functions that call add_css_rule() for specific properties like background, position, and color.<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Parameters:**<br>
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; **$class:** the CSS class.<br>
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; **$value:** the value for the CSS property.<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Return Type:** CssGenerator(for method chaining)<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Usage:** $css->background('.header-class', 'blue')<br>

* &nbsp; &nbsp; **position($class, $value)**<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Description:** Sets the position CSS property for the specified class.<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Parameters:**<br>
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; **$class:** the CSS class target.<br>
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; **$value:** the position value.<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Return Type:** CssGenerator(for method chaining)<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Usage:** $css->position('.header-class', 'relative')<br>

* &nbsp; &nbsp; **color($class, $color)**<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Description:** Sets the color property for text within the specified class.<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Parameters:**<br>
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; **$class:** The CSS class to target.<br>
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; **$color:** The color value (e.g., #ff0000, blue).<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Return Type:** CssGenerator(for method chaining)<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Usage:** $css->color('.text', '#ff0000')<br>

* &nbsp; &nbsp; **background_color($class, $color)**<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Description:** Sets the background-color property for the specified class.<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Parameters:**<br>
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; **$class:** The CSS class to target.<br>
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; **$color:** The background color value.<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Return Type:** CssGenerator(for method chaining)<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Usage:** $css->background_color('.header-class', 'lightblue')<br>

* &nbsp; &nbsp; **margin($class, $value)**<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Description:** Sets the margin property for the specified class.<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Parameters:**<br>
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; **$class:** The CSS class to target.<br>
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; **$value:** The margin value.<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Return Type:** CssGenerator(for method chaining)<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Usage:** $css->margin('.header-class', '20px')<br>

* &nbsp; &nbsp; **font_size($class, $size)**<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Description:** Sets the font-size property for the specified class.<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Parameters:**<br>
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; **$class:** The CSS class to target.<br>
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; **$size:** The font size.<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Return Type:** CssGenerator(for method chaining)<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Usage:** $css->font_size('.header-class', '10px')<br>

* &nbsp; &nbsp; **padding($class, $value)**<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Description:** Sets the padding property for the specified class.<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Parameters:**<br>
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; **$class:** The CSS class to target.<br>
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; **$value:** The padding value.<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Return Type:** CssGenerator(for method chaining)<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Usage:** $css->padding('.header-class', '10px')<br>

* &nbsp; &nbsp; **border($class, $value)**<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Description:** Sets the border property for the specified class.<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Parameters:**<br>
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; **$class:** The CSS class to target.<br>
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; **$value:** The border value (e.g., 1px solid black).<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Return Type:** CssGenerator(for method chaining)<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Usage:** $css->border('.header-class', '2px solid red')<br>

* &nbsp; &nbsp; **text_align($class, $value)**<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Description:** Sets the text-align property for the specified class.<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Parameters:**<br>
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; **$class:** The CSS class to target.<br>
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; **$value:** The alignment type (left, right, center).<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Return Type:** CssGenerator(for method chaining)<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Usage:** $css->text_align('.header-class', 'center')<br>

* &nbsp; &nbsp; **width($class, $value)**<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Description:** Sets the width property for the specified class.<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Parameters:**<br>
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; **$class:** The CSS class to target.<br>
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; **$value:** The width value (e.g., 100px, 50%).<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Return Type:** CssGenerator(for method chaining)<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Usage:** $css->width('.header-class', '100%')<br>

* &nbsp; &nbsp; **cursor($class, $value)**<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Description:** Sets the cursor property for the specified class.<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Parameters:**<br>
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; **$class:** The CSS class to target.<br>
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; **$value:** The cursor style (pointer, default).<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Return Type:** CssGenerator(for method chaining)<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Usage:** $css->cursor('.header-class', 'pointer')<br>

* &nbsp; &nbsp; **height($class, $value)**<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Description:** Sets the height property for the specified class.<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Parameters:**<br>
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; **$class:** The CSS class to target.<br>
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; **$value:** The height value.<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Return Type:** CssGenerator(for method chaining)<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Usage:** $css->height('.header-class', '200px')<br>

* &nbsp; &nbsp; **overflow_y($class, $value)**<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Description:** Sets the overflow-y property for the specified class.<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Parameters:**<br>
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; **$class:** The CSS class to target.<br>
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; **$value:** The overflow behavior (scroll, hidden).<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Return Type:** CssGenerator(for method chaining)<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Usage:** $css->overflow_y('.header-class', 'auto')<br>

* &nbsp; &nbsp; **display($class, $value)**<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Description:** Sets the display property for the specified class.<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Parameters:**<br>
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; **$class:** The CSS class to target.<br>
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; **$value:** The display style (block, flex).<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Return Type:** CssGenerator(for method chaining)<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Usage:** $css->display('.header-class', 'flex')<br>

* &nbsp; &nbsp; **flex_direction($class, $value)**<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Description:** Sets the flex-direction property for the specified class.<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Parameters:**<br>
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; **$class:** The CSS class to target.<br>
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; **$value:** The flex direction (row, column).<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Return Type:** CssGenerator(for method chaining)<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Usage:** $css->flex_direction('.header-class', 'row')<br>

* &nbsp; &nbsp; **scroll_snap_type($class, $value)**<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Description:** Sets the scroll-snap-type property for the specified class.<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Parameters:**<br>
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; **$class:** The CSS class to target.<br>
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; **$value:** The scroll snap type (x mandatory, none).<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Return Type:** CssGenerator(for method chaining)<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Usage:** $css->scroll_snap_type('.header-class', 'x mandatory')<br>

* &nbsp; &nbsp; **scroll_snap_align($class, $value)**<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Description:** Sets the scroll-snap-align property for the specified class.<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Parameters:**<br>
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; **$class:** The CSS class to target.<br>
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; **$value:** The scroll snap alignment (start, end).<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Return Type:** CssGenerator(for method chaining)<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Usage:** $css->scroll_snap_align('.header-class', 'start')<br>

* &nbsp; &nbsp; **justify_content($class, $value)**<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Description:** Sets the justify-content property for the specified class.<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Parameters:**<br>
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; **$class:** The CSS class to target.<br>
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; **$value:** The justification style (flex-start, space-between).<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Return Type:** CssGenerator(for method chaining)<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Usage:** $css->justify_content('.header-class', 'space-between')<br>

* &nbsp; &nbsp; **align_items($class, $value)**<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Description:** Sets the align-items property for the specified class.<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Parameters:**<br>
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; **$class:** The CSS class to target.<br>
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; **$value:** The alignment style (flex-start, center).<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Return Type:** CssGenerator(for method chaining)<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Usage:** $css->align_items('.header-class', 'center')<br>

* &nbsp; &nbsp; **flex_wrap($class, $value)**<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Description:** Sets the flex-wrap property for the specified class.<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Parameters:**<br>
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; **$class:** The CSS class to target.<br>
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; **$value:** The flex wrap style (wrap, nowrap).<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Return Type:** CssGenerator(for method chaining)<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Usage:** $css->flex_wrap('.header-class', 'wrap')<br>

* &nbsp; &nbsp; **flex_basis($class, $value)**<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Description:** Sets the flex-basis property for the specified class.<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Parameters:**<br>
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; **$class:** The CSS class to target.<br>
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; **$value:** The basis of the flex item (e.g., 100px, 30%).<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Return Type:** CssGenerator(for method chaining)<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Usage:** $css->flex_basis('.header-class', '100px')<br>

* &nbsp; &nbsp; **border_radius($class, $value)**<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Description:** Sets the border-radius property for the specified class.<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Parameters:**<br>
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; **$class:** The CSS class to target.<br>
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; **$value:** The radius value (e.g., 10px, 50%).<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Return Type:** CssGenerator(for method chaining)<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Usage:** $css->border_radius('.header-class', '10px')<br>

* &nbsp; &nbsp; **top($class, $value)**<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Description:** Sets the top property for the specified class.<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Parameters:**<br>
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; **$class:** The CSS class to target.<br>
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; **$value:** The top position value.<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Return Type:** CssGenerator(for method chaining)<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Usage:** $css->top('.header-class', '20px')<br>

* &nbsp; &nbsp; **right($class, $value)**<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Description:** Sets the right property for the specified class.<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Parameters:**<br>
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; **$class:** The CSS class to target.<br>
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; **$value:** The right position value.<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Return Type:** CssGenerator(for method chaining)<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Usage:** $css->right('.header-class', '10px')<br>

* &nbsp; &nbsp; **left($class, $value)**<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Description:** Sets the left property for the specified class.<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Parameters:**<br>
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; **$class:** The CSS class to target.<br>
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; **$value:** The left position value.<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Return Type:** CssGenerator(for method chaining)<br>
&nbsp; &nbsp; &nbsp; &nbsp; **Usage:** $css->left('.header-class', '5px')<br>

		

**Example Usage:**<br>

	$css = new CssGenerator('path/to/styles.css')
	$css->background_color('.background', '#f0f0f0')
	$css->font_size('.text-size', '18px')
	$css->margin('.container', '20px auto')
	$css->padding('.content', '15px')

**This will output:**<br>
	```.background { background-color: #f0f0f0; }```<br>
	```.text-size { font-size: 18px; }```<br>
	```.container { margin: 20px auto; }```<br>
	```.content { padding: 15px; }```<br>

<br>

_**The CssGenerator class enhances the ability to manage CSS dynamically through PHP. By providing methods to programmatically set various CSS properties, it allows developers to build and maintain stylesheets efficiently.**_