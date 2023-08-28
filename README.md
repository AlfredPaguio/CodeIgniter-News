# CodeIgniter News Project

Welcome to the CodeIgniter News project repository! This repository serves as a platform for me to learn CodeIgniter, document my experience, and share my insights with the community. Through this project, I aim to showcase my progress as I explore the CodeIgniter framework and build a news-related application.

## Motivation

As a passionate developer, I've been eager to dive into the CodeIgniter framework and harness its capabilities. This project provides me with an opportunity to not only learn and experiment but also to contribute back to the developer community by providing a firsthand account of my learning journey.

## Project Goals

- **Learn CodeIgniter:** My primary goal is to gain a deep understanding of the CodeIgniter framework's concepts, features, and best practices.
- **Build a News Application:** I'll be building a news application using CodeIgniter, applying what I learn in a real-world context.
- **Share Knowledge:** By sharing my experiences, I hope to assist others who are also learning CodeIgniter and provide valuable insights to developers in the community.

Your feedback, suggestions, and contributions are highly encouraged and appreciated!

## Technologies and Tools Used

In the pursuit of my coding journey and project development, I used a range of technologies:

- **Back-End Framework:** CodeIgniter 4
- **Front-End Framework:** Bootstrap 5
- **Programming Language:** PHP
- **Icon Library:** FontAwesome
- **Database Management:** MySQL

These core technologies formed the backbone of this project.


# Table of Contents <!-- omit from toc -->
- [CodeIgniter News Project](#codeigniter-news-project)
  - [Motivation](#motivation)
  - [Project Goals](#project-goals)
  - [Technologies and Tools Used](#technologies-and-tools-used)
- [Installation](#installation)
- [Learning Experience with Codeigniter](#learning-experience-with-codeigniter)
  - [Database Migrations](#database-migrations)
  - [Package Management](#package-management)
- [Acknowledgments](#acknowledgments)
- [Tools](#tools)


# Installation
Follow these steps to install and set up the project:
1. **Clone this repository:**
    ```sh
    git clone https://github.com/AlfredPaguio/CodeIgniter-News.git
    ```
2. **Navigate to the project root directory:**
    ```sh
    cd codeigniter-news
    ```
3. **Install project dependencies using Composer:**
    ```sh
    composer install
    ```
4. **Create the Database:**
    Before running the migrations, make sure to create a database named "`ci4news`" in your database server.

5. **Run database migrations:**
   To set up the database schema, use the following command:
    ```sh
    php spark migrate
    ```
6. **Start the development server:**
    To preview your application, run the following command:
    ```sh
    php spark serve
    ```
By following these steps, you'll have the project up and running with all the necessary dependencies and database migrations applied.

# Learning Experience with Codeigniter

During my learning experience, I found that using Codeigniter requires more manual effort, especially when compared to Laravel and Laravel Livewire. In Codeigniter, I noticed that I had to create views and controllers manually. In contrast, with Laravel, I could quickly generate Livewire components using the command `php artisan make:livewire Navbar`, or create controllers with `php artisan make:controller Navbar`.

## Database Migrations

Laravel and CodeIgniter both offer robust database migration capabilities as part of their development frameworks:

- **Laravel Migration:** In Laravel, You can initiate a fresh migration using the `php artisan migrate:fresh` command. This command efficiently re-creates your entire database schema from scratch. For detailed information, consult the [Laravel documentation on migrations](https://laravel.com/docs/10.x/migrations).

- **CodeIgniter Migration:** Similarly, CodeIgniter provides database migration support through the `php spark migrate:refresh` command. This command allows you to refresh your database schema using migrations. For a deeper understanding of CodeIgniter's migration process, you can refer to their [official documentation](https://codeigniter4.github.io/userguide/dbmgmt/migration.html).

Both frameworks empower developers to manage database schema changes systematically, ensuring seamless version control and collaboration within development teams.


## Package Management

When it comes to package management, Laravel offers a more user-friendly experience compared to CodeIgniter. In Laravel, I find it incredibly easy to install packages like Bootstrap, FontAwesome, and various other libraries. The integration is seamless, allowing me to enhance my projects with these tools effortlessly.

On the other hand, CodeIgniter's package management, while improved in CodeIgniter 4, doesn't provide the same level of convenience. Integrating packages like Bootstrap or FontAwesome requires a bit more manual effort. While CodeIgniter certainly has its strengths, package installation and management might be an area where it could offer more streamlined solutions.

In summary, Laravel's package management significantly simplifies the process of adding and using external libraries, giving it an edge in terms of user-friendliness.

# Acknowledgments

I wish to express my gratitude to the following individuals and resources that have been instrumental in my journey:

- **My Family:** I want to express my gratitude to my family for their support. Their financial assistance, providing me with funds to rent a PC at the Pisonet, has been instrumental in allowing me to pursue my coding endeavors.

- **Online Documentation:** A special appreciation goes out to the vast ocean of online documentation. Countless tutorials, guides, and resources have played a pivotal role in shaping my understanding of various concepts. The online community's willingness to share knowledge has been an immense source of inspiration.

- **Stack Overflow Community:** I cannot forget to acknowledge the Stack Overflow community. The platform's wealth of solutions and insights has often come to my rescue, turning my stumbling blocks into stepping stones in my coding journey.

- **Pisonet for PC Access:** I'd like to acknowledge Pisonet for providing me access to a working PC since my personal computer is currently broken. This access has allowed me to continue coding and learning despite the technical challenges.

My journey in the world of coding has been made possible by the collective efforts of these entities and individuals. With their support, I've been able to overcome obstacles and continue my exploration of the digital realm.


# Tools

I used the following grammar checker tools to enhance the quality of this document:

- [Grammarly](https://www.grammarly.com/grammar-check)
- [Reverso Online Spell Checker](https://www.reverso.net/spell-checker/english-spelling-grammar/)
