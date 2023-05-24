<p align="center"><a href="#" target="_blank"><img src="https://static.vecteezy.com/system/resources/previews/019/051/622/original/gold-coin-money-symbol-icon-png.png" width="400" alt="Wefashion logo"></a></p>
<p align="center">Bienvenue sur MoneyValue, la plateforme de conversion monétaire conçue spécialement pour les développeurs. Accédez à notre API REST puissante et gratuite pour effectuer des conversions de devises en toute simplicité.</p>


## Guide d'installation

- Faire un clone du repository sur la machine en local : `git clone https://github.com/LowReward/MoneyValue.git`
- Faire une copie de `.exemple.env` et renommer le fichier en `.env`
- Créer une nouvelle base de données sous le nom de moneyvalue et y ajouter les informations dans le fichier .env
- saisir : `composer install`
- `php artisan key:generate`
- `php artisan migrate`
- `php artisan db:seed`
- lancer `php artisan serve` pour ensuite consulter le projet à l'adresse indiqué

## Utilisateur admin :
- Vous pouvez accéder à la page administrateur directement via /admin

Les identifiants de connexion :
```
Email : philippe@admin.com
Mot de passe : password
```
