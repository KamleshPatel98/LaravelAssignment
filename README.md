Laravel Assignment
Project Details

This project is a Laravel-based e-commerce web application developed for managing and displaying products.

The application consists of a public website and an admin panel. Visitors can browse products, view products by category, and see individual product details. Authenticated administrators can manage products through the admin panel.

The project is developed using the Laravel MVC architecture and uses Laravel's authentication, Eloquent ORM, resource controllers, middleware, named routes, and dynamic dependent dropdown functionality.

Main Features
User Authentication
User registration and login.
Secure logout functionality.
Admin routes are protected using Laravel authentication middleware.
Admin Dashboard
Dedicated dashboard for authenticated users.
Admin functionality is accessible only after login.
Product Management
Complete product CRUD functionality.
Create, view, update, and delete products.
Laravel Resource Controller is used for product management.
Category & Subcategory
Products can be associated with categories and subcategories.
Subcategories are loaded dynamically according to the selected category.
Product Listing
Public product listing page.
Products can be displayed according to their category.
Product Details
Individual product detail page.
SEO-friendly product URLs using product slugs.
Dependent Location Dropdowns
Dynamic Country → State → City → Area selection.
States are loaded based on the selected country.
Cities are loaded based on the selected state.
Areas are loaded based on the selected city.
Laravel MVC Architecture
Controllers handle application logic.
Models handle database operations using Eloquent ORM.
Blade templates are used for the frontend views.
Routing
Named routes are used for easy URL generation.
Resource routes are used for product CRUD operations.
Middleware is used to protect admin routes.