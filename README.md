# moneta-captive-portal
-----------
Description
-----------

The captive portal running on Moneta's onboard Raspberry Pi Access Point. Well, it was designed as a captive portal. For now you have to manually navigate to the page once you have connected to the Access Point. Captive portal functionality coming in the future hopefully.

This is the web page hosted locally on Moneta, a Raspberry Pi powered smarthome device designed and constructed at GHP Engineering 2016. 

The web page is based on the [Solid State template](https://html5up.net/solid-state) from [HTML5 UP](html5up.net)

-----------
Overview
-----------

An HTML5 form is implemented to take user input via a radio button selection of color and a text field for task name and information. A short and sweet PHP script is used to take the form input and output to a text file, `data.txt` in the case of Moneta, for later parsing and interpretation with Python (see [MonetaGHP/Moneta](https://github.com/MonetaGHP/Moneta) for more about that).

###Web Design

The website's design is nearly perfectly responsive. The template is responsive by default, but since most of the original template has been stripped out, some quick fixes were made. For instance, a `<br>` is used between the header and page content to avoid overlap. For no reason other than laziness, the radio button images are static size, `64x64`. Regardless of this, the design still looks good on just about every screen we have tested, including mobile. Oh, and if you're running Android, we have `theme-color` support!

###PHP Script

The PHP script is rather straightforward. First, variable `$myfile` is initialized to inlclude the form data, sent via HTTP POST request, in a specific format designed for the Python parser. The next line outputs `$myfile` into `data.txt`. If you filled out the task name "Take out the dog" with color blue, the resulting file would contain `Take out the dog^0 0 100`. The `^` is included for easier parsing with Python, and the color value is given as an RGB value. Each time the form is submitted, `data.txt` is overwritten entirely. This is intentional, as it is necessary for the Python program to properly interpret it.

###Security Warning
Due to the extremely brief amount of time during which this project was created, this is a security nightmare and should never be used on anything more than a demo such as Moneta. PHP's `file_put_contents` combined with very liberal file permissions and a Raspberry Pi running an unsecured Access Point is a recipe for disaster if someone who knew what they were doing was attempting an attack. If you've stumbled upon this code while attempting your own project, THIS IS YOUR WARNING.