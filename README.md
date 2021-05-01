<p align="center">
    <a href="https://github.com/laravel" target="_blank">
        <img src="https://i.imgur.com/mbQzMkn.png" height="100px">
    </a>
    <h1 align="center">Tiếng Việt cho Laravel</h1>
    <br>
    <p align="center">
    <a href="https://packagist.org/packages/nhamtphat/laravel-vietnamese"><img src="https://img.shields.io/packagist/v/nhamtphat/laravel-vietnamese.svg?style=flat-square" alt="Latest version"></a>
    <a href="https://packagist.org/packages/nhamtphat/laravel-vietnamese"><img src="https://img.shields.io/packagist/dt/nhamtphat/laravel-vietnamese.svg?style=flat-square" alt="Total download"></a>
    <a href="https://packagist.org/packages/nhamtphat/laravel-vietnamese"><img src="https://img.shields.io/packagist/l/nhamtphat/laravel-vietnamese.svg?style=flat-square" alt="License"></a>
    </p>
</p>

## Hỗ trợ các phiên bản

- Laravel 6
- Laravel 7
- Laravel 8

### Cài đặt thông qua Composer

```
composer require nhamtphat/laravel-vietnamese --dev
```

Publish thư viện tiếng Việt

```
php artisan vendor:publish --provider="NhamtPhat\Laravel\Vietnamese\ServiceProvider"
```

Để cấu hình ngôn ngữ, mở file `config/app.php`:

```
'locale' => 'vi',
```

### Cài đặt thủ công

Tải về tất cả của thư viện. Giải nén vào sao chép tất cả file `package/resources/vi` vào thư mục `/resources/lang/vi` trên dự án của bạn.