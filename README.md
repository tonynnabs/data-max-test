
# Datamax Code Test

Creating a table from the provided Ice and Fire REST API.

## Installation

Cloning the git repo

```bash
git clone https://github.com/tonynnabs/data-max-test.git
```

Navigate into the created folder, then install composer

```bash
composer install
```

Copy ``` .env.example ```  file to ``` .env  ```  on the root folder. 

```bash
cp .env.example .env
```

Open the ``` .env  ```  file and add database information. 

Generate Application Key. 

```bash
php artisan key:generate
```

Migrate database. 

```bash
php artisan migrate
```

Start Server. 

```bash
php artisan serve
```

