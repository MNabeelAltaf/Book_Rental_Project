
This ReadMe file has instructions of installation and setting up laravel project.

============|| Installation Process of Laravel ||============

1- Open the terminal by enter "cmd" at search option

2- Install composer (dependency manager) by typing following command on terminal
   curl -sS https://getcomposer.org/installer | php

3- Type the following command to install laravel	
   composer global require laravel/installer

4- After sucessfully executing the above commands, laravel has sucessfuly installed.

5- Now install XAMPP for running Laravel project on local server and establishing it's connection to Database.
   XAMPP official website ->	https://www.apachefriends.org/download.html

6- After installation of XAMPP, Start the Apache Server and MySQL.

7- Now, use laravel project and establish connection with Database. 


============|| Setup Process of Laravel Project ||============

1- Select folder where you want to create laravel project 

2- Open Selected Folder in VS Code (or any code editor).

3- Open terminal of that code editor.

4- Run the command to create project, 
   laravel new project_name	

5- Type cd and project_name to enter project directory.
   i.e. cd my_project

6- Type the following command and press enter,
   php artisan serve
   (if you downloaded an existing project and it has a migration   
    file then run the migration file first by typing php artisan migrate)

7- Your project will be started sucessfully.

-------------------------------------------------------------------------

==========|| You've successfully installed and set up Laravel ||========== 

NOTE:  If you are facing any issues, consider Laravel Official Documentation and you can also post in laravel community called laracast.

Laravel Official Documentation link:  https://laravel.com/docs/10.x

Laracast Link: https://laracasts.com/


================================================================================== 




   