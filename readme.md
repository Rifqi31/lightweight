# Laravel LightWeight
![GitHub](https://img.shields.io/github/license/Rifqi31/lightweight.svg?style=popout-square) ![Author](https://img.shields.io/badge/Author-Rifqi%20Muttaqin-blueviolet.svg) ![Coding](https://img.shields.io/badge/Coding-Underconstruction-critical.svg)
#### Laravel Project with less package and configurations
This is alternative for creating traditional package for your project with less config and creating basic **CRUD** in your controller. This Project file have such functions to help creating generallly web application which include :

- CRUD (Cread, Read, Update, Delete)
- Upload Image Function
- Paginations Function
- Export to documents
- Filter Functions
- Ajax Validations
- Sweet Alert

So your job is changing name variable and only config *.env*, for front-end this project using bootstrap library for the css, if you wanna make clean just using command 
> php artisan preset none

for starting project, be sure using this spells:
> composer update
> npm update

those spell for download available package requirements from *composer.json* and *package.json*

for identify your project, just edit *composer.json* where at :
`` "name": "rifqi/lightweight_project",``
``"description": "Laravel Package with less config and lightweight",``

and here to
``"keywords": ["lightweight","rifqi31"],``
``"authors": [{"name": "Rifqi Muttaqin","email": "muttaqinrifqi31@gmail.com"}],``

don't forget to configure your *.env* file just like this :
``APP_NAME=YourAppName``
``APP_ENV=local``
``APP_KEY=base64:``
``APP_DEBUG=true``
``APP_URL=http://localhost``

``DB_CONNECTION=mysql``
``DB_HOST=127.0.0.1``
``DB_PORT=3306``
``DB_DATABASE=YourDbName``
``DB_USERNAME=root``
``DB_PASSWORD=YourPassword``

for fill the ``APP_KEY`` just use this spell :
> php artisan key:generate

Is time to make laravel project from traditional way to less and instant. Doing more and fast, simple with your project, get some benefit and more improve your productivity.