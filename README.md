# Laravel Assignment

## Project Details

Laravel Assignment is a Laravel-based product management and e-commerce web application.

The project provides a public website for browsing products and an authenticated admin panel for managing products. It includes product CRUD operations, category and subcategory selection, and location-based dependent dropdowns.

The application is built using Laravel's MVC architecture with controllers, models, Blade views, Eloquent ORM, middleware, named routes, and resource routes.

## Main Features

- User Registration & Login
  - User registration and login functionality
  - Authentication-based access for admin features
  - Logout functionality

- Admin Panel
  - Authenticated admin dashboard
  - Admin routes are protected using Laravel auth middleware

- Product Management
  - Add new products
  - View product list
  - View product details
  - Edit existing products
  - Update products
  - Delete products
  - Product CRUD is implemented using Laravel Resource Controller

- Category & Subcategory
  - Products can be assigned to categories and subcategories
  - Subcategories are dynamically loaded according to the selected category

- Product Listing
  - Public product listing
  - Products can be browsed by category

- Product Details
  - Individual product detail pages
  - Product URLs use slugs

- Dependent Location Selection
  - Country → State → City → Area hierarchy
  - States are loaded based on the selected country
  - Cities are loaded based on the selected state
  - Areas are loaded based on the selected city

- Public Website
  - Homepage
  - Product listing
  - Category-wise products
  - Individual product details

- Laravel Features
  - MVC architecture
  - Eloquent ORM
  - Authentication middleware
  - Resource controllers
  - Named routes
  - Dynamic route parameters
  - Blade templates