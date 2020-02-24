## Laravel Nagpur Anniverary Meetup

### Basic Code Challenge 

This code-repository contains a very basic todo application built using Laravel's latest version. This app contains the default authentication features provided by Laravel and a single model named Task alsong with the resource controller.

The CRUD contains a few errors and some part with missing implementation. 

Whoever gets the following done fastest wins this challenge.

**Create Task**

* Fix the Exception MassAssignmentException on create task

**Show All Tasks**

* 1. User should only be able to see the task that belongs to him
* 2. Show the Difference for Humans date instead of the date on which task is created (Eg created 10 mins ago)

**Edit Task**

* Edit form should be populated with original task values. 

**Delete Task**

* Write the controller code to delete the task and also redirect the user to tasks page with appropriate message. 


If you are new to Laravel, it would be a great practice to get started with Laravel and see how simple is to install Laravel and implement a CRUD with it.

Following are the installation steps.

1. Make sure you have php and mysql installed in your system.
2. Clone the git repo.
3. Navigate into the project and run command `composer install` (This will install all the required dependencies)
4. Create a new database and connect your project to it by changing environment property values in `.env` file.
5. Run command `php artisan migrate` (This will create all the database tables asscociated with the project)
6. Run the project with command `php artisan serve`
