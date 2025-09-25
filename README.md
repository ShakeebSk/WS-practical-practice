WS - Web Services Practice Code
This repository contains the code practice multiple questions related to SOAP and REST Web Services programs.

📚 Core Practical Questions
The files named practica{n}.php correspond to the questions from the practical journal:

To develop a simple SOAP web service in PHP that returns the temperature of a city.

To create a SOAP service and display its XML request and response.

To write a SOAP-based web service in PHP for currency conversion.

To implement a SOAP service for calculating factorial of a number.

To design a SOAP service that calculates the area of a rectangle.

To create a SOAP service that returns student grade based on marks.

To demonstrate SOAP Fault handling in PHP.

To consume a public SOAP weather API and display temperature details.

✨ Extra SOAP Practical Aims
The files named extra-pract-server.php and extra-pract-client.php cover these additional questions:

To implement a SOAP web service that returns simple interest based on principal, rate, and time.

To design a SOAP service for converting temperature from Celsius to Fahrenheit.

To create a SOAP-based calculator service that performs addition, subtraction, multiplication, and division.

To develop a SOAP service that provides today’s date and time.

To demonstrate consumption of a SOAP service in a PHP client program.

To create a SOAP web service for employee details (id, name, salary).

To develop a SOAP service that generates Fibonacci series up to N terms.

To implement a SOAP service for library system: input book ID, return book name & author.

▶️ How to Run the Codes
Follow these steps to successfully run the web service programs:

Copy Files: Copy both the Server and Client files for the program you wish to run.

Rename (Optional): You may rename them to follow this pattern: __yourfilename__-server.php and __yourfilename__-client.php.

Configure Client: In the __yourfilename__-client.php file, make sure to update the $options variable to match your local server path:

PHP

$options = [
    'location'  => 'http://localhost/Your-folder-name/Your-file-name.php',
    'uri'       => 'http://localhost/Your-folder-name',
];
(Alternatively, you can just name your folder and files exactly as they are in the repository.)

Execute: Open your web browser and enter the URL pointing to the Client file.

Format: http://localhost/Your-folder-name/Your-file-name-client.php

Example (My Case): http://localhost/WS-practical-practice/extra-pract8-client.php

Output: The output of the web service will now be displayed on your screen.

📝 Note on File Count
As per the main practical aims, there are 8 questions, but I have only uploaded 6 server/client pairs. This is because multiple programs have been combined into a single file to optimize the project structure. For example:

The Factorial and Area of a Rectangle programs are in one file.

The getTemperature and lastRequest/lastResponse programs are in one single file.
