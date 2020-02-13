<p align="center">
	<img src="https://laravel.com/assets/img/components/logo-laravel.svg">
	<h1 align="center">Fogstream-web</h1>
    <h2 align="center">Тестовое задание</h2>
</p>


### Техническое задание

1. Создать форму авторизации и регистрации с использованием reCaptcha 
2. Добавить страницу "Профиль" с полями ФИО, дата рождения, фото 
3. Создать страницу "Новости" (заголовок, сокращенный текст новости, маленькое фото для превью, дата создания новости). Добавить 30 записей, по 10 записей на странице
4. Реализовать RESTful api для авторизации, регистрации, профиля и новостей

### Стек технологий

1. PHP-7.1+
2. Laravel Framework v5.4
3. MySQL
4. Swagger v2

### Документация API

Документация RESTful API расположена по адресу:
```
hostname/api/documentation
```

### Установка

1. Скачиваем проект из репозитория:
```
git clone https://github.com/JOKER-THE/Fogstream-web.git
```
2. Конфигурируем сервер в публичный каталог проекта:
```
Fogstream-web\public
```
3. Устанавливаем все зависимости через composer:
```
composer install
```
4. Копируем содержимое файла ```.env.example``` и сохраняем его в файл ```.env```
5. Конфигурируем файл ```.env```:
```
APP_KEY= Уникальный ключ проекта
...
DB_DATABASE= Имя базы данных MySQL
DB_USERNAME= Имя пользователя БД
DB_PASSWORD= Пароль пользователя БД
...
CAPTCHA_KEY= Публичный ключ Captcha от Google
CAPTCHA_SECRET= Секретный ключ Captcha от Google
```
6. Создаем пустую базу данный MySQL
7. Выполняем миграции в базу данных:
```
php artisan migrate
```
8. Даем права доступа к хранилищу данных:
```
chmod -R 0777 storage
```
9. Создаем символьную ссылку в хранилище данных:
```
php artisan storage:link
```
10. Заполняем базу данных тестовыми данными:
```
php artisan db:seed
```