<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About

This project is purposed for Oauth Learning, and it was created by using Laravel 9 since my device support till this version. Then I install sail for docker-compose support. Then I migrate this project each version from Laravel 9 to 10 to 11 (latest version).

After that I add mysql to docker-compose, and still found issue for MYSQL_ROOT_HOST setting could be error if root user already exists so I have to comment it out.

## What's Inside

-   Laravel 11
-   Docker Compose
-   Sail
-   Mysql
-   Oauth (Passport)
-   Breeze
-   Makefile

## How To Use

-   Prepare another apps for testing Oauth, or you can clone from my repository of https://github.com/kevinbowie/laravel-resend and use brach feat-oauth.
-   Clone this project as usual and prepare the .env.
-   If you already have root user in mysql, comment out the MYSQL_ROOT_HOST else uncomment it. After that, run ./vendor/bin/sail up.
-   You can set your shortcut for bin since you will use it frequently. I also create Makefile for easier shortcut.
-   Run migration to start your oauth project.
-   Run todos seeder if you want.
-   Register, Login, then create Client inside Settings tab.
-   If you use Laravel too, copy the code from other-route-web.php to your web.php of your another apps.
-   Match the client_id, redirect_uri, client_secret.
-   Hit /redirect from your another apps, add scope params if you want.
-   Don't worry if you find that css is not work, since Breeze support for Tailwind but the authorize page using Bootstrap.
-   After you authorize, you will be redirect to your /auth/callback route and auto redirect to /todos to get Todos list.
-   You also can add route post todos if you want to try the scope.

-   Since between local machine not support connection each other, then you will need POSTMAN to pretend hit this test.
-   If you use POSTMAN, copy the code from query params after click authorize, and add required params like in /auth/callback and hit oauth/token to get your access token and refresh token.
-   Now you grant access for get and create todos.
