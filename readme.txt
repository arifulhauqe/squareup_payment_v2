1. Create an account/developer account on squareup https://docs.connect.squareup.com/
2. First go to you project directory from command line
3. Run "composer dump-autoload"
4. Run "composer update"
5. Put access token, application id and location id on .env file from squareup account dashboard. Squareup also provide sandbox credentials for developers for testing.

************ Here is a example*****************************

C:\Users\arif>cd..

C:\Users>cd..

C:\>cd xampp

C:\xampp>cd htdocs

C:\xampp\htdocs>cd payments
The system cannot find the path specified.

C:\xampp\htdocs>cd payment

C:\xampp\htdocs\payment>composer dump-autoload
Generated autoload files containing 0 classes

C:\xampp\htdocs\payment>composer update
Loading composer repositories with package information
Updating dependencies (including require-dev)
Package operations: 4 installs, 0 updates, 0 removals
  - Installing square/connect (2.20190327.1): Loading from cache
  - Installing symfony/polyfill-ctype (v1.11.0): Downloading (100%)
  - Installing phpoption/phpoption (1.5.0): Downloading (100%)
  - Installing vlucas/phpdotenv (v3.3.3): Downloading (100%)
Writing lock file
Generating autoload files

C:\xampp\htdocs\payment>
