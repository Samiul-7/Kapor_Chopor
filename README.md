# Kapor_Chopor

Project OverView:
     We are creating an online store called Kapor_Chopor to sell clothes and related items. Our goal is to make shopping easy by allowing people to buy what they need with just a few clicks.
     This website is for everyone who wants a simple and convenient way to shop from home. We will offer a variety of stylish and affordable clothes, along with a smooth shopping experience. 
     Users will be able to search for products easily, make secure payments, and get fast delivery.With Kapor_Chopor, we want to connect buyers and sellers in one place, making online shopping easy, fun, and hassle-free.

Tech Stack:
    
     Backend: Laravel
     Frontend: pHp(using blade) & Bootstrap (css)
     Database: My SQL

Rendering Method:
    
    Server-Side Rendering (SSR)

UI Design:

     Here is the demo ui design for our app. Our is intended to look like this.
     Figma Link: https://www.figma.com/design/9qh1bzitaHaZ40DTtM8KHn/Untitled?node-id=8-30&t=xdJUmRyvACXx2qLs-1

Project Features:

     USERS:

          •	Multiuser Authentication
          •	CRUD operations
          •	Search Functionality
          •	Add to cart
          •	Checkout Page
          •	Place Orders

     ADMIN:
          •	Admin Authentication
          •	Admin Panel
          •	CRUD operations on products
          •	Search Functionality
          •	CRUD operations on categories
          •	Manage Orders
          •	See Statistics

Api Endpoints:

     Public Routes:
          These routes can be accessed without authentication.

          Method	Endpoint	               Description

          GET	     /	                           Displays the home page.
          GET	     /shop	                   Shows all available products.
          GET	     /product_details/{id}	   Displays details of a product.
          GET	     /searchProducts	           Searches for products.
________________________________________
     User Authentication & Profile Management
          These routes require authentication and allow users to manage their accounts.

          Method	Endpoint	          Description

          GET	     /dashboard	          Displays the user dashboard.
          GET	     /myorders	          Shows the user's orders.
          GET	     /profile	          Opens the profile edit page.
          PATCH          /profile	          Updates the user profile.
          DELETE         /profile	          Deletes the user profile.
________________________________________
     Cart & Order Management
          These routes handle cart operations and order confirmation.

          Method	Endpoint	          Description

          GET	     add_cart/{id}	     Adds a product to the cart.
          GET	     mycart	             Displays the user's cart.
          GET	     delete_cart/{id}	     Removes a product from the cart.
          POST	     confirm_order	     Confirms the user's order.
________________________________________
     Admin-Specific Routes

          These routes require admin authentication and allow management of categories, products, and orders.
          Category Management

          Method	Endpoint	                Description

          GET	     view_category	          Displays all product categories.
          POST	     add_category	          Adds a new product category.
          GET	     delete_category/{id}	  Deletes a product category.
          GET	     edit_category/{id}	          Opens category edit page.
          POST	     update_category/{id}	  Updates category details.
________________________________________
     Product Management

          Method	     Endpoint	               Description

          GET	     add_product	          Opens the product addition page.
          POST	     upload_product	          Uploads a new product.
          GET	     view_product	          Displays all products.
          GET	     delete_product/{id}	  Deletes a product.
          GET	     update_product/{id}	  Opens the product update page.
          POST	     edit_product/{id}	          Updates product details.
          GET	     product_search	          Searches for products (admin).     
________________________________________
     Order Management

          Method	Endpoint	               Description

          GET	     view_orders	          Displays all orders (admin).
          GET	     on_the_way/{id}	          Marks an order as "on the way".
          GET	     delivered/{id}	          Marks an order as "delivered".
          GET	     delete_order/{id}	          Deletes an order.
________________________________________
     Admin Dashboard

          These routes provide access to the admin panel.

          Method	Endpoint	          Description

          GET	     admin/dashboard	Displays the admin dashboard.


Milestone:

    1st Checkpoint: Home Page + Catagory page + Cart Page + Admin Page(If possible)
    2nd Checkpoint: Sign in + Sign up + Checkout + Admin
    3rd Checkpoint: Finishing + Others.

Setup Instruction:

     Follow the steps below to set up the project on your local system:

     1.	Prerequisites
               Before proceeding, ensure you have the following installed:
               •	PHP (>=8.0)
               •	Composer (PHP Dependency Manager)
               •	Laravel (Latest version)
               •	MySQL (or any preferred database)
               •	Node.js & npm (for frontend dependencies)
               •	Git (optional, but recommended)
          
     2.	Clone the Repository
               git clone https://github.com/Samiul-7/Kapor_Chopor.git
               cd kapor_chopor
     
     3.	Install dependencies
               composer install

               Copy the .env.example file and rename it to .env

               Open the .env file and update the following:
               APP_NAME= Laravel
               APP_ENV=local
               APP_KEY=
               APP_DEBUG=true
               APP_URL=http://localhost
               DB_CONNECTION=mysql
               DB_HOST=127.0.0.1
               DB_PORT=3306
               DB_DATABASE=ecommerce_app
               DB_USERNAME=root
               DB_PASSWORD=

     4.	Install Frontend Dependencies

          npm install
          npm run build
          npm run dev
          Lastly run “php artisan serve” to run the project
	


Team Members:

    Samiul Bashar ------------------Lead--------------------- samiul.cse.20220104079@aust.edu
    Parbani Majumder Turna ---------Frontend+Backend--------- parbani.cse.20220104082@aust.edu
    Shafin Ferdous -----------------Frontend+Backend--------- shafin.cse.20220104092@aust.edu
    Abdullah Al Fahim --------------Frontend----------------- abdullah.cse.20210104087@aust.edu
     
