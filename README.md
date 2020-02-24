## Laravel Nagpur Anniverary Meetup

### Basic Code Challenge 

This code-repository contains a very basic todo application built using Laravel's latest version. This app contains the default authentication features provided by Laravel and a single model named Task along with the resource controller.

The CRUD contains a few errors and some part with missing implementation. 

Whoever gets the following done fastest wins this challenge.

**Create Task**

* Fix the Exception MassAssignmentException on create task

**Show All Tasks**

* User should only be able to see the task that belongs to him
* Show the Difference for Humans date instead of the date on which task is created (Eg created 10 mins ago)

**Edit Task**

* Edit form should be populated with original task values. 

**Delete Task**

* Write the controller code to delete the task and also redirect the user to tasks page with appropriate message. 


If you are new to Laravel, it would be a great practice to get started with Laravel and see how simple is to install Laravel and implement a CRUD with it.

Following are the installation steps.

1. Make sure you have php 7.2+ and mysql 5.7+ installed on your system. Please refer [Laravel requirements](https://laravel.com/docs/6.x/installation#server-requirements).
1. Clone the git repo anywhere on your machine
1. Navigate into the project directory
1. Copy `.env.example` to `.env`
1. Run command `composer install` (This will install all the required dependencies)
1. Create a new database and connect your project to it by changing environment property values in `.env` file.
1. Run `php artisan key:generate`
1. Run command `php artisan migrate` (This will create all the database tables asscociated with the project)
1. Run the project with command `php artisan serve`
1. App should now be running at http://localhost:8000
