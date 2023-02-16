# My own portfolio

This is my personal portfolio website, built using HTML, CSS, PHP, Laravel, MySQL, and a small amount of JavaScript. It showcases my work, skills, and experience in web development.

## Table of Contents

- [Getting Started](#getting-started)
- [Prerequisites](#prerequisites)
- [Installation](#installation)
- [Usage](#usage)
- [Contributing](#contributing)
- [Progress milestones](#progress-milestones)

## Getting Started

To get a copy of my portfolio website up and running on your local machine for development and testing purposes, follow the instructions below.

## Prerequisites

Before installing, make sure you have the following software installed on your system:

- PHP
- Composer
- Laravel
- MySQL

## Installation

Clone this repository to your local machine using:

```bash
git clone https://github.com/gollumeo/portfolio.git
```

Change into the project directory using:

```bash
cd [your_repo]
```

Install the required packages using: 

```bash
composer install
```

Create a .env file using the example .env.example and configure your database connection details.

```bash
cp .env.example .env
```

Generate an application key using:

```bash
php artisan key:generate
```

Run the database migrations using:


```bash
php artisan migrate
```

## Usage

To run the application on your local machine, use the command:

```bash
php artisan serve
```

Then open your web browser and go to [http://localhost:8000](http://localhost:8000) to see the website.

## Contributing

If you would like to contribute to this project, please follow these steps:

1. Fork this repository
2. Create a new branch for your changes
3. Make your changes and commit them
4. Push your changes to your forked repository
5. Open a pull request

## Progress Milestones

### February, 2nd

* Project initialization,
* Stated the project architecture,
* Established main controllers and models.
