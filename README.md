# Group34-Project
E-commerce website called RetroXchange, selling second-hand games.

All views connected via Laravel with blade, and the project code uses a Model-View-Controller structure.

Views are named according to their function.
Models are named after the table they represent in the database.
Controllers are named after the functionalities they provide.
Pre-existing data is inserted within the database using the database seeder file

Product images are stored in the database by an image code which is inserted into a link to display it on the website.

The website allows customers to signup, login and view the products listed. They can add products to their basket, which is then viewable on the basket page with their quantity and total price. The user can then checkout these items, which stores them into the database. Previous purchase information can be viewed on the Previous Purchases page, which is accessible by logged-in users. Customers can return specific items from their past orders, which updates their status within the database. They can also leave product reviews for items they have previously bought.

The navigation bar at the top of the website has a searchbar to search for products by their title or price, and includes icons that redirect to the login or basket page. There is also a drop-down sidebar with Settings and a way to filter products by their category.

Admins can also log in and use the website as a customer, and in addition to this they can access admin pages within the drop-down sidebar:

Admin Inventory Page:
    Displays the details of all the products within the inventory, along with their stock level and an option to either edit or delete specific products.

Admin Customer Management Page:
    Displays the relevant details of all registered users, with the option to view/update details, and an option to delete customer details.

Admin Order Management Page:
    Displays the details of all current orders, along with the status of the item, and an option to process an order (update the status) and an option to delete orders.

Views: retroXchange\resources\views

Models: retroXchange\app\Models

Controllers: retroXchange\app\Http\Controllers

Routes: retroXchange\routes\web.php

Database migrations: retroXchange\database\migrations

Database seeder file: retroXchange\database\seeders

JS and CSS files: retroXchange\public

To allow connection to a locally hosted database, rename .env.example to .env, if .env is not already available

Ensure a vendor folder is installed within the local copy of the retroXchange folder by doing the 'composer install' command

To locally run the website, do the command 'php artisan serve'

Admin user login:

admin@gmail.com

password
