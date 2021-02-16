# Web-BeeFlix

COMP6051 Web Programming<br/>
2020-2021 Odd Semester<br/>
Final Exam mini project


## Brief

A simple website-based tourism blog to share users travelling experience when enjoying Indonesia tourism. User blogs are grouped in few categories.


## Creative Thinking

  * Separate components (such as header, footer, and movie card) into several blade files.
  * Filter articles using `CategoryController@show` so that each categories have an exclusive link.
  * Use faker to seed random data.


## Deployment

  * Create MySQL database named `wonderfuljourney` on `127.0.0.1:3306` with `root` username and no password. You can customize the ip address, port, database username or password based on your own machine setup.
  * Run `composer install` to download all dependencies needed.
  * Run `cp .env.example .env && php artisan key:generate` to prepare all important data.
  * Run `php artisan storage:link` to create symbolic link to public storage directory.
  * Run `composer dump-autoload` to autoload seeder files.
  * Run `php artisan migrate --seed` to create and fill the database.
  * Run `php artisan serve` and access the webapp on localhost port 8000.


## Verified Account

  * Use `admin@google.com` with password `adminadmin` to login as an admin.
  * Use `user_a@google.com` with password `useruser` to login as the first user.
  * Use `user_b@google.com` with password `useruser` to login as the second user.


## References

Here is a list of accessed references during the development phase

  * [Laravel Blade Documentation](https://laravel.com/docs/7.x/blade)
  * [Bootstrap Full Documentation](https://getbootstrap.com/docs/4.5/getting-started/introduction/)
  * [`mb_strimwidth` Documentation](https://www.php.net/manual/en/function.mb-strimwidth.php)
  * [Bootstrap Icons](https://icons.getbootstrap.com/)
  * [Faker Documentation](https://github.com/fzaninotto/Faker)
  * [Call controller method from another controller](https://stackoverflow.com/questions/30365169/access-controller-method-from-another-controller-in-laravel-5/38837104#38837104)
  * [Catatan Laravel :: Upload Image Via Laravel Storage](https://alfinchandra4.medium.com/catatan-laravel-upload-imagevia-laravel-storage-379a1dc9373)
  * [Laravel factory states](https://laravel-news.com/laravel-model-factory-states)


Here is a list of content (article and/or pictures) sources that are crawled from another website

  * [Article 0](https://www.indonesia-tourism.com/blog/raja-ampat-regency/)
  * [Article 1](https://www.indonesia-tourism.com/blog/mount-kelud-today/)
  * [Article 2](https://www.indonesia-tourism.com/blog/karampuang-island-tourism-in-mamuju/)
  * [Article 3](https://www.indonesia-tourism.com/blog/larat-island-the-island-of-the-light/)
  * [Article 4](https://www.indonesia-tourism.com/blog/2205/)
  * [Article 5](https://www.indonesia-tourism.com/blog/tanjung-lesung-pandeglang-banten/)
  * [Article 6](https://www.indonesia-tourism.com/blog/gunung-leuser-national-park-aceh-north-sumatra/)
  * [Article 7](https://www.indonesia-tourism.com/blog/the-hidden-treasure-is-here/)
  * [Article 8](https://www.indonesia-tourism.com/blog/kemujan-island/)
  * [Article 9](https://www.indonesia-tourism.com/blog/badung-where-the-famous-are-settle/)

  * [Random Image 0](https://www.coffeewithasliceoflife.com/2016/04/07/top-5-places-to-go-in-indonesia/)
  * [Random Image 1](https://www.bucketlistly.blog/posts/one-month-indonesia-itinerary)
  * [Random Image 2](https://blog.airpaz.com/en/how-much-do-you-know-about-indonesia/)
  * [Random Image 3](https://traveltriangle.com/blog/indonesia-in-october/)
  * [Random Image 4](https://www.pinterest.com/pin/399131585735551185/)

<hr/>

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
