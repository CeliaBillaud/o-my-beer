# O'MyBeer

## Project Overview

O'MyBeer is a web application dedicated to the world of beer, developed as my final school project (2024). It allows users to explore beers and brands from around the world, helping beer enthusiasts discover new products while providing detailed information about the beer universe.

### Key Features

Users can:
* Browse beers (filtered by type, country, etc.)
* Explore different brands
* Create a user account
* Save beers to try later
* Add beers to favorites
* Post beer reviews

## Technologies Used

### Frontend
* HTML5 (semantic markup)
* CSS3
* Bootstrap
* JavaScript

### Backend
* PHP 8
* Symfony 7
* MySQL/MariaDB

## Installation (For Review Purposes Only)

### Prerequisites
* PHP 8 or higher
* Composer
* MySQL/MariaDB
* Symfony CLI

### Setup Steps

1. Install dependencies
```bash
composer install
```

2. Configure your environment:
   * Create and update `.env.local`
   ```bash
   touch .env.local
   ```

3. Create the database
```bash
php bin/console doctrine:database:create
```

4. Run migrations
```bash
php bin/console doctrine:migrations:migrate
```

5. Load fixtures (sample data)
```bash
php bin/console doctrine:fixtures:load
```

## Project Status

This project was created as part of my end-of-studies program. It is now archived and no longer maintained. Please note that dependencies might be outdated and security updates are not provided.

## Contact

Feel free to reach out if you have any questions:

- Email: celiabillaud.dev@gmail.com
- LinkedIn: Célia Billaud
