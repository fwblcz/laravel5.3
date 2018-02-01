<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, yet powerful, providing tools needed for large, robust applications. A superb combination of simplicity, elegance, and innovation give you tools you need to build any application with which you are tasked.

## Learning Laravel

Laravel has the most extensive and thorough documentation and video tutorial library of any modern web application framework. The [Laravel documentation](https://laravel.com/docs) is thorough, complete, and makes it a breeze to get started learning the framework.

If you're not in the mood to read, [Laracasts](https://laracasts.com) contains over 900 video tutorials on a range of topics including Laravel, modern PHP, unit testing, JavaScript, and more. Boost the skill level of yourself and your entire team by digging into our comprehensive video library.

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).

1、增加了cache  helper  function

cache(['user.votes'=>[12,13]],30);

cache('user.votes');  [12,13,]



2、DB::table()  查找出来的数据是collection

5.3之前查找出来的是数组   DB::table('users')->get();返回数组

DB::table('users')->get();返回Collection
Illuminate\Support\Collection {#711

    all: [

      {#712

        +"id": 1,

        +"name": "Nora Jast",

        +"email": "ieffertz@example.net",

        +"password": "$2y$10$pFjPN4sHSGjtXOltrXup9.JEnvg5Mq3knm5NWV6glZJ4axjcZQ

g6i",

        +"remember_token": "nq8t4oOQVo",

        +"created_at": "2018-02-01 06:31:23",

        +"updated_at": "2018-02-01 06:31:23",

      },

      {#714

        +"id": 2,

        +"name": "Mrs. Katrina Schoen",

        +"email": "gaylord27@example.net",

        +"password": "$2y$10$pFjPN4sHSGjtXOltrXup9.JEnvg5Mq3knm5NWV6glZJ4axjcZQ

g6i",

        +"remember_token": "fifMmuGKPS",

        +"created_at": "2018-02-01 06:31:24",

        +"updated_at": "2018-02-01 06:31:24",

      },

      {#715

        +"id": 3,

        +"name": "Ms. Roslyn Gleason",

        +"email": "kayla.turner@example.org",

        +"password": "$2y$10$pFjPN4sHSGjtXOltrXup9.JEnvg5Mq3knm5NWV6glZJ4axjcZQ

g6i",

        +"remember_token": "i7QBV2VVWi",

        +"created_at": "2018-02-01 06:31:24",

        +"updated_at": "2018-02-01 06:31:24",

      },

    ],

  }

DB::table('users')->get()->all();返回数组
[

    {#713

      +"id": 1,

      +"name": "Nora Jast",

      +"email": "ieffertz@example.net",

      +"password": "$2y$10$pFjPN4sHSGjtXOltrXup9.JEnvg5Mq3knm5NWV6glZJ4axjcZQg6

i",

      +"remember_token": "nq8t4oOQVo",

      +"created_at": "2018-02-01 06:31:23",

      +"updated_at": "2018-02-01 06:31:23",

    },

    {#715

      +"id": 2,

      +"name": "Mrs. Katrina Schoen",

      +"email": "gaylord27@example.net",

      +"password": "$2y$10$pFjPN4sHSGjtXOltrXup9.JEnvg5Mq3knm5NWV6glZJ4axjcZQg6

i",

      +"remember_token": "fifMmuGKPS",

      +"created_at": "2018-02-01 06:31:24",

      +"updated_at": "2018-02-01 06:31:24",

    },

    {#716

      +"id": 3,

      +"name": "Ms. Roslyn Gleason",

      +"email": "kayla.turner@example.org",

      +"password": "$2y$10$pFjPN4sHSGjtXOltrXup9.JEnvg5Mq3knm5NWV6glZJ4axjcZQg6

i",

      +"remember_token": "i7QBV2VVWi",

      +"created_at": "2018-02-01 06:31:24",

      +"updated_at": "2018-02-01 06:31:24",

    },

  ]



3、loop 变量的使用（https://d.laravel-china.org/docs/5.3/blade）

当循环时，你可以在循环内访问 $loop 变量。这个变量可以提供一些有用的信息，比如当前循环的索引，当前循环是不是首次迭代，又或者当前循环是不是最后一次迭代：

@foreach($users as $user)

@if($loop->first)

This is the first iteration.

@endif

@if($loop->last)

This is the last iteration.

@endif

This is user{{$user->id}}

@endforeach

如果你是在一个嵌套的循环中，你可以通过使用 $loop 变量的 parent 属性来获取父循环中的 $loop 变量：

@foreach($usersas$user)@foreach($user->postsas$post)@if($loop->parent->first)This is first iteration of theparentloop.@endif@endforeach@endforeach

$loop 变量也包含了其它各种有用的属性：

属性描述

$loop->index   当前循环所迭代的索引，起始为 0。

$loop->iteration  当前迭代数，起始为 1。

$loop->remaining  循环中迭代剩余的数量。

$loop->count    被迭代项的总数量。

$loop->first    当前迭代是否是循环中的首次迭代。

$loop->last    当前迭代是否是循环中的最后一次迭代。

$loop->depth  当前循环的嵌套深度。

$loop->parent       当在嵌套的循环内时，可以访问到父循环中的 $loop 变量。



4、分页

默认情况下，渲染显示分页链接使用 Bootstrap CSS 框架。不过，如果你不使用 Bootstrap 你可以自由定义您自己的视图来呈现这些链接，当我们在分页实例中调用 links 方法，将视图名称传递给方法的第一个参数：

{{$paginator->links('view.name')}}

自定义分页视图的最简单的方法是通过 vendor:publish 命令创建到 resources/views/vendor 目录：

php artisan vendor:publish--tag=laravel-pagination

这个命令将会在 resources/views/vendor/pagination 目录中创建视图。default.blade.php 文件为默认的分页模板，你可以编辑这个模板以修改分页的 HTML 样式。

5、使用 mailable 发送邮件

使用   php artisan make:mail WelcomeToLaravel    生成mailables

在app/Mail  下生成class  WelcomeToLaravel      该类继承 Mailable

在class  WelcomeToLaravel  下的function  build()添加视图路径
public function build(){

         return $this->view('email.welcome');

}

在.env 文件中配置

MAIL_DRIVER=smtp

MAIL_HOST=smtp.qq.com

MAIL_PORT=25

MAIL_USERNAME=1964855183@qq.com

MAIL_PASSWORD=tsjlobixo

MAIL_ENCRYPTION=tls

MAIL_FROM_ADDRESS=1964855183@qq.com

MAIL_FROM_NAME=LaraBBS

路由文件：

Route::get('/sendMail',function(){ \Illuminate\Support\Facades\Mail::to('18950168892@163.com')->send(new \App\Mail\WelcomeToLaravel());

});

执行：http://localhost:8000/sendMail