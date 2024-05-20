**HTML**

_Webpage Class Documentation_

# Overview:
    The Webpage class is a PHP class designed to facilitate the generation of HTML content for webpages. It provides methods to easily create various HTML elements and structures, making it convenient for developers to generate dynamic web content programmatically.

***

## Class Declaration:
    class Webpage {
        // Class properties and methods...
    }

## Properties:
    $content - A public property to store the generated HTML content of the webpage.

## Methods:

##### getContent()
        Description: Retrieves the generated HTML content of the webpage.
        Return Type: string
        Usage: $webpage->getContent()


#####    link_css($filename)
        Description: Adds a CSS stylesheet link to the webpage.
        Parameters:
            $filename: The filename of the CSS file.
        Return Type: Webpage (for method chaining)
        Usage: $webpage->link_css('styles.css')

#####    header_tag($val, $text, $class)
        Description: Generates an HTML header tag (<h1> to <h6>).
        Parameters:
            $val: The header level (1 to 6).
            $text: The text content of the header.
            $class: Optional CSS class for styling.
        Return Type: Webpage (for method chaining)
        Usage: $webpage->header_tag(1, 'Heading', 'header-class')

#####    paragraph_tag($text, $class)
        Description: Generates an HTML paragraph tag (<p>).
        Parameters:
            $text: The text content of the paragraph.
            $class: Optional CSS class for styling.
        Return Type: Webpage (for method chaining)
        Usage: $webpage->paragraph_tag('Paragraph text', 'paragraph-class')

#####    break_tag()
        Description: Generates an HTML line break tag (<br>).
        Return Type: Webpage (for method chaining)
        Usage: $webpage->break_tag()

#####    anchor_tag($link, $text, $class)
        Description: Generates an HTML anchor tag (<a>).
        Parameters:
            $link: The URL to link to.
            $text: The text content of the anchor.
            $class: Optional CSS class for styling.
        Return Type: Webpage (for method chaining)
        Usage: $webpage->anchor_tag('https://example.com', 'Link', 'link-class')

#####    image_tag($link, $alt, $class)
        Description: Generates an HTML image tag (<img>).
        Parameters:
            $link: The URL of the image.
            $alt: The alternative text for the image.
            $class: Optional CSS class for styling.
        Return Type: Webpage (for method chaining)
        Usage: $webpage->image_tag('image.jpg', 'Image', 'image-class')

#####    span_tag($text, $class)
        Description: Generates an HTML span tag (<span>).
        Parameters:
            $text: The text content of the span.
            $class: Optional CSS class for styling.
        Return Type: Webpage (for method chaining)
        Usage: $webpage->span_tag('Span text', 'span-class')

#####    ordered_list_tag($items, $class)
        Description: Generates an HTML ordered list tag (<ol>).
        Parameters:
            $items: An array of list items.
            $class: Optional CSS class for styling.
        Return Type: Webpage (for method chaining)
        Usage: $webpage->ordered_list_tag(['Item 1', 'Item 2'], 'list-class')

#####    table_tag($data, $class)
        Description: Generates an HTML table tag (<table>).
        Parameters:
            $data: A 2-dimensional array representing table data.
            $class: Optional CSS class for styling.
        Return Type: Webpage (for method chaining)
        Usage: $webpage->table_tag([['Row 1 Cell 1', 'Row 1 Cell 2'], ['Row 2 Cell 1', 'Row 2 Cell 2']], 'table-class')

#####    form_tag($action, $method, $class)
        Description: Generates an HTML form tag (<form>).
        Parameters:
            $action: The URL to submit the form data to.
            $method: The HTTP method for form submission (e.g., 'GET' or 'POST').
            $class: Optional CSS class for styling.
        Return Type: Webpage (for method chaining)
        Usage: $webpage->form_tag('submit.php', 'POST', 'form-class')

#####    input_tag($type, $name, $placeholder, $class)
        Description: Generates an HTML input tag (<input>).
        Parameters:
            $type: The type of input (e.g., 'text', 'password', 'checkbox').
            $name: The name attribute of the input.
            $placeholder: The placeholder text for the input.
            $class: Optional CSS class for styling.
        Return Type: Webpage (for method chaining)
        Usage: $webpage->input_tag('text', 'username', 'Enter your username', 'input-class')

#####    button_tag($text, $type, $class)
        Description: Generates an HTML button tag (<button>).
        Parameters:
            $text: The text content of the button.
            $type: The type of button (e.g., 'submit', 'reset').
            $class: Optional CSS class for styling.
        Return Type: Webpage (for method chaining)
        Usage: $webpage->button_tag('Submit', 'submit', 'button-class')

#####    end_form_tag()
        Description: Closes the HTML form tag (</form>).
        Return Type: Webpage (for method chaining)
        Usage: $webpage->end_form_tag()

#####    div_tag($content, $class)
        Description: Generates an HTML div tag (<div>).
        Parameters:
            $content: The content within the div.
            $class: Optional CSS class for styling.
        Return Type: Webpage (for method chaining)
        Usage: $webpage->div_tag('Content', 'div-class')

#####    checkbox_tag($name, $checked, $class)
        Description: Generates an HTML checkbox input tag (<input type="checkbox">).
        Parameters:
            $name: The name attribute of the checkbox.
            $checked: Whether the checkbox should be checked initially (boolean).
            $class: Optional CSS class for styling.
        Return Type: Webpage (for method chaining)
        Usage: $webpage->checkbox_tag('agree', true, 'checkbox-class')

#####    textarea_tag($name, $id, $placeholder, $class)
        Description: Generates an HTML textarea tag (<textarea>).
        Parameters:
            $name: The name attribute of the textarea.
            $id: The id attribute of the textarea.
            $placeholder: The placeholder text for the textarea.
            $class: Optional CSS class for styling.
        Return Type: Webpage (for method chaining)
        Usage: $webpage->textarea_tag('message', 'message', 'Enter your message', 'textarea-class')

#####    section_tag($content, $class)
        Description: Generates an HTML section tag (<section>).
        Parameters:
            $content: The content within the section.
            $class: Optional CSS class for styling.
        Return Type: Webpage (for method chaining)
        Usage: $webpage->section_tag('Content', 'section-class')

#####    dt_tag($text, $class)
        Description: Generates an HTML definition term tag (<dt>).
        Parameters:
            $text: The text content of the term.
            $class: Optional CSS class for styling.
        Return Type: Webpage (for method chaining)
        Usage: $webpage->dt_tag('Definition Term', 'dt-class')

#####    dd_tag($text, $class)
        Description: Generates an HTML definition description tag (<dd>).
        Parameters:
            $text: The text content of the description.
            $class: Optional CSS class for styling.
        Return Type: Webpage (for method chaining)
        Usage: $webpage->dd_tag('Definition Description', 'dd-class')

***

## Example Usage:
    $webpage = new Webpage();
    $webpage->header_tag(1, 'Welcome to my website', 'header');
    $webpage->paragraph_tag('This is a paragraph.', 'paragraph');
    $webpage->link_css('styles.css');
    $htmlContent = $webpage->getContent();
    echo $htmlContent;

## This will output:
    <h1 class='header'>Welcome to my website</h1>
    <p class='paragraph'>This is a paragraph.</p>
    <link rel='stylesheet' type='text/css' href='styles.css'>

---
---

# Conclusion:
The Webpage class simplifies the process of generating HTML content dynamically in PHP, providing methods for creating various HTML elements and structures with ease. Developers can leverage this class to build dynamic webpages programmatically.

