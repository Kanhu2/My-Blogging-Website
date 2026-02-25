# 📝 Programming Blog Website (Laravel Project)

A dynamic and responsive **Blogging Website** built using **Laravel**, **Laravel Breeze**, **MySQL**, **Blade**, **Bootstrap** and **Tailwind**.  
This project allows users to register, login, create blog posts about programming languages, and interact through comments.

--------------------------------------------

## 🚀 Features

- 🔐 Authentication System using Laravel Breeze  
- 📝 Add, Update, Delete Blog Posts (CRUD)  
- 👤 User-based Post Management  
- 💬 Comment System (Only Logged-in Users Can Comment)  
- 📰 Programming Language Focused Blog Content
- 🏠 Home Page with Blog Listing  
- 📝 Blog Page
- 📄 About Page  
- 📞 Contact Page
- 📱 Fully Responsive UI  
- 🛡️ Secure Routes with Middleware Protection
- 🏛️ MVC Architecture Implementation

--------------------------------------------

## 🛠️ Technologies Used

| Technology                   | Purpose                              |
|------------------------------|--------------------------------------|
| Laravel                      | Backend Framework                    |
| Laravel Breeze               | Authentication System                |
| PHP                          | Server-side scripting                |
| MySQL                        | Database                             |
| Blade                        | Templating Engine                    |
| HTML and CSS                 | UI Structure & Styling               |
| Bootstrap and Tailwind       | Responsive UI Design                 |
| Eloquent ORM                 | Database Relationship Handling       |

--------------------------------------------

## 📂 Project Modules

### 🔐 Authentication
- User Registration  
- Login / Logout  
- Password Reset  
- Protected Dashboard  
- Middleware Route Protection  

### 📝 Blog Management
- Create New Post  
- Edit Existing Post  
- Delete Post  
- View All Posts  
- View Single Post Details  

### 💬 Comment System
- Add Comment (After Login)  
- Display Post-wise Comments  
- Store Comments in Database  
- Store Comments Likes in Database  

### 📄 All Pages
- Home Page  (Dynamic Page)
- Blog Page  
- About Page  
- Contact Page  

-------------------------------------------

## 🗄️ Database Structure

### users Table
- id  
- name  
- email  
- password  
- usertype  
- remember_token  
- created_at 
- updated_at

### posts Table
- id    
- title  
- description  
- image
- user_name
- user_id
- created_at 
- updated_at

### comments Table
- id  
- user_id  
- is_approved  
- commentable_type  
- commentable_id
- created_at 
- updated_at

### comment_likes Table
- id  
- user_id  
- comment_id
- created_at 
- updated_at

-------------------------------------------

## ⚙️ Installation Guide

```bash
# Clone the repository
git clone https://github.com/your-username/your-repository-name.git

# Navigate to project directory
cd your-repository-name

# Install dependencies
composer install

# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate

# Configure database in .env file

# Run database migrations
php artisan migrate

# Start development server
php artisan serve
