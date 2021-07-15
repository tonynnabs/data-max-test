
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

## Usage

```python
import foobar

# returns 'words'
foobar.pluralize('word')

# returns 'geese'
foobar.pluralize('goose')

# returns 'phenomenon'
foobar.singularize('phenomena')
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](https://choosealicense.com/licenses/mit/)
