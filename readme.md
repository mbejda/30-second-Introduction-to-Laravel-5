This tutorial will get you up and running with Laravel 5 under 30 seconds. I will cover Laravel 5 installation along with adding controllers and views to your project. This tutorial was made to be simple and straight forward. **Lets get started.**


#Installing Laravel
Lets get the necessary Laravel 5 environment stuff out of the way : 

Install Composer
`curl -sS https://getcomposer.org/installer | sudo php -- --install-dir=/usr/local/bin --filename=composer`

Install Laravel Installer
`composer global require "laravel/installer=~1.1"`

Add Composer Vendors to Global Path
`echo "export PATH=$PATH:'~/.composer/vendor/bin'" > ~/.bash_profile`


Create your first Laravel 5 project.
`laravel new HelloWorld`
 
Laravel 5 will automatically download and structure the project for you. Your directory structure should look similarity to the following.

![](/content/images/2015/10/Screen-Shot-2015-10-03-at-12-04-20-PM.png)
You can goto the Laravel5 [website](http://laravel.com/docs/master/structure) to learn more about Laravel 5 root directory structure. 

#Creating A View
Navigate to `resources/views` and create a new view. 
I called my view `hello.php`. Add the following html code to the view

```
<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Laravel 5</div>
            </div>
        </div>
    </body>
</html>

```
#Creating A Controller
We need to create a controller to serve our new view. Navigate to `app/Http/Controllers` and create a new controller file. I named my controller file `helloController.php`. Then add the following php code into the controller file. If you want to learn more about how controllers work checkout I suggest taking a peek at [Larvel 5 documentation ](http://laravel.com/docs/5.1/controllers) on controllers.

```
<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class helloController extends Controller
{

    public function hello()
    {
        return view('hello');
    }
}


```
#Configure Routing
Routes glue controllers and views together. Lets configure a route to tell Laravel 5 we want our helloController to serve our hello view. 

Navigate to `/app/Http` and open the `routes.php` file and add the following route snippet: 

```
Route::get('/hello', 'helloController@hello');
```

Lets see our new view in action. Navigate to the root of the project and execute the following : 


`php artisan serve`

Navigate to http://localhost:8000/hello and you should see something like this : 

![](/content/images/2015/10/Screen-Shot-2015-10-03-at-12-54-19-PM.png)