<p align="center"><a href="#" target="_blank"><img src="https://static.vecteezy.com/system/resources/previews/019/051/622/original/gold-coin-money-symbol-icon-png.png" width="400" alt="MoneyValue Coin logo"></a></p>
<p align="center">Welcome to MoneyValue, the money conversion platform designed specifically for developers. Access our powerful and free REST API to perform currency conversions with ease.</p>


## Installation Guide

- Make a clone of the repository on the local machine: `git clone https://github.com/LowReward/MoneyValue.git`
- Make a copy of `.example.env` and rename the file to `.env`.
- Create a new database with the name moneyvalue and add the information in the .env file
- Type : `composer install`
- `php artisan key:generate`
- `php artisan migrate`
- `php artisan db:seed`
- Launch with `php artisan serve` to then consult the project at the address indicated

you will only have to place the

## Admin user:
- You can access the administrator page directly via /admin

Login credentials:
```
Email : philippe@admin.com
Password: password
```
