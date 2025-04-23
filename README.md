1.first Install Composer dependencies:

composer install

2. Then copy .env example  file and creat .env file

cp .env.example .env
3. chage db details in .env
 DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=newblogtask
DB_USERNAME=root
DB_PASSWORD=

4.Generate the app key:

php artisan key:generate

5.upload sql file with db name newblogtask

6.then run by php artisan serve

admin id- a@gmail.com 
password - a@gmail.com

super admin login id- s@gmail.com
  password- s@gmail.com
