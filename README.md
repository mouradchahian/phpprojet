# PHP Structure Project
PHP Project 

1. Install dependencies
   ```sh
   composer install
   ```
2. Creating database, check bootstrap.php to configure your DB 
   ```sh
   php bin/doctrine orm:schema-tool:create
   ```

3. Run application
   ```sh
   PHP -S localhost:8000 -t public
   ```