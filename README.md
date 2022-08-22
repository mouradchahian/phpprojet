# phpprojet
PHP Project

1. Install dependencies
   ```sh
   composer install
   ```
2. Creating database
   ```sh
   php bin/doctrine orm:schema-tool:create
   ```

3. Run application
   ```sh
   PHP -S localhost:8000 -t public
   ```