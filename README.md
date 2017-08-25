# Laravel-5.4-Shopping-Cart
A shopping cart developed using Laravel 5.4
<p align="center"><img src="https://github.com/henrymbuguak/Laravel-5.4-Shopping-Cart/blob/master/public/Screenshot.png"></p>

### How to set up the project

<p>To clone the project, navigate to the folder you want to use for this project and launch your terminal. On your terminal enter the following command: <b>git clone https://github.com/henrymbuguak/Laravel-5.4-Shopping-Cart.git </b> </p>

<p>After cloning the project, enter the following command on your terminal: <b>cd Laravel-5.4-Shopping-Cart</b>After navigating inside the project, run the following command to install dependencies: <b>composer update</b></p>

The next step is to configure database connection, open the project on your favourite text editor and locate .env.example file and rename it to .env Enter the database connection in this file. After creating the db connection run the migration by running the following command: <b>php artisan migrate</b>. <br>

The last thing we need to do is to seed our database. To do that, just run the following command: <b>php artisan db:seed</b>. Now we are ready to start our development serve by running the following command: <b>php artisan serve</b>. Navigate to browser at http://localhost:8000/ 


# The goal of the project

The goal of this project is to help you get started in creating a shopping cart using laravel 5.4. Ecommerce is going to be a huge deal in 21st century. Here are the goals we have accomplished:

- We created project from ground up.
- We created custom authentication for customer to sign in.
- We created database seeder to seed our products.
- We added ability for user add products to their shopping cart.
- We connected our application with stripe online payment services.
- We also implemented the use of guest and auth middleware.
- Customers are able to buy items from our application.
- We store the orders in the database, we also get payment id from stripe.

# Challenge for you

What we did not implement in this project is the admin dashboard for managing the shopping cart. This could be a good challenge for you to implement.

# Conclusion

To become better at software development, you need to set new challenges for yourself. In the process you will always learn new concept.
