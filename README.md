WS-- Web Services 
this file containe the code to practice multiple questions of SOAP and Rest Programs programs 


The Files With the Name like practica{n}.php are the question that from the practical Quetion/Journal
SOAP Web Services – Practical
 
1. : To develop a simple SOAP web service in PHP that returns the temperature of a city.
2. : To create a SOAP service and display its XML request and response.
3. : To write a SOAP-based web service in PHP for currency conversion.
4. : To implement a SOAP service for calculating factorial of a number.
5. : To design a SOAP service that calculates the area of a rectangle.
6. : To create a SOAP service that returns student grade based on marks.
7. : To demonstrate SOAP Fault handling in PHP.
8.  To consume a public SOAP weather API and display temperature details.
 
the Files With the name like extra-pract-server/client.php are the extra question
Extra SOAP Practical Aims
1: To implement a SOAP web service that returns simple interest based on principal, rate, and time.
2: To design a SOAP service for converting temperature from Celsius to Fahrenheit.
3: To create a SOAP-based calculator service that performs addition, subtraction, multiplication, and division.
4: To develop a SOAP service that provides today’s date and time.
5: To demonstrate consumption of a SOAP service in a PHP client program.
6: To create a SOAP web service for employee details (id, name, salary).
7: To develop a SOAP service that generates Fibonacci series up to N terms.
8: To implement a SOAP service for library system: input book id, return book name & author.


=========================To Run The Codes Follow The Steps====================================
1.Copy the File with same name but copy both Server and Client
2.Make to file __yourfilename__-server.php  and __yourfilename__-client.php
3.in the client.php file make the changes in the option variablle that contain 2 sub variables with name location and uri
$options = ['location'  => 'http://localhost/Your-folder-name/Your-file-name.php',
            'uri'       => 'http://localhost/Your-folder-name',];

or else you can just name the folder and file same as me 


4.Now go to any web browser of your choice and put this url in the search box
http://localhost/Your-folder-name/Your-file-name.php --remember u have to run the client File 
for my case it is some thing like this 
http://localhost/WS-practical-practice/extra-pract8-client.php

and enjoy you will now have your output on your screen 

======================End=====================================

Note:: as of the question in main practicval aims there are 8 quetion and i have only uploaded 6 servers/clients file because i have put multiple program in one place like i have put the factorial and area of the rectangle program in one file only and gettemperature and lastRequest & lastResponse in one single file...


