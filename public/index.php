<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Check If The Application Is Under Maintenance
|--------------------------------------------------------------------------
|
| If the application is in maintenance / demo mode via the "down" command
| we will load this file so that any pre-rendered content can be shown
| instead of starting the framework, which could cause an exception.
|
*/

if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| this application. We just need to utilize it! We'll simply require it
| into the script here so we don't need to manually load our classes.
|
*/

require __DIR__.'/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request using
| the application's HTTP kernel. Then, we will send the response back
| to this client's browser, allowing them to enjoy our application.
|
*/

$app = require_once __DIR__.'/../bootstrap/app.php';

$kernel = $app->make(Kernel::class);

$response = $kernel->handle(
    $request = Request::capture()
)->send();

$kernel->terminate($request, $response);






//creat a star riting

//<?php   ?>
<?php   ?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>Rting sys && review</titel>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="fpnttawesesome/css/all.css">
<script src="jquery/jquery.js"></script>
</head>

<body>

<div class="container">

<div class="rating-view">
    <div class="tri table-flex">
<table>
<tbody>
    <tr>
        <td>
            <div class="rbn rv1"><h3>1.5/5.0</h3></div>
            <div class="pdt-rat">
                <div class="pro-rating">
                    <div class="clearfix rating mart8">
                        <div class="rating-star">
                            <div class="grey-star" style="width:60%"></div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="rnrn">
                <p class="rars">No review</p>
            </div>
        </td>
        <td>
            <div class="rpb">
                <div class="rnpb">
                    <label> 5 <i class="fa fa-star"></label>
                    <div class="ropb">
                        <div class="ripb" style="width:20%"></div>
                    </div>
                    <div class="lable">(1)</div>
                </div>


                <div class="rpb">
                <div class="rnpb">
                    <label> 4 <i class="fa fa-star"></label>
                    <div class="ropb">
                        <div class="ripb" style="width:50%"></div>
                    </div>
                    <div class="lable">(1)</div>
                </div>


                <div class="rpb">
                <div class="rnpb">
                    <label> 3 <i class="fa fa-star"></label>
                    <div class="ropb">
                        <div class="ripb" style="width:80%"></div>
                    </div>
                    <div class="lable">(15)</div>
                </div>


                <div class="rpb">
                <div class="rnpb">
                    <label> 2 <i class="fa fa-star"></label>
                    <div class="ropb">
                        <div class="ripb" style="width:30%"></div>
                    </div>
                    <div class="lable">(11)</div>
                </div>


                <div class="rpb">
                <div class="rnpb">
                    <label> 1 <i class="fa fa-star"></label>
                    <div class="ropb">
                        <div class="ripb" style="width:15%"></div>
                    </div>
                    <div class="lable">(13)</div>
                </div>
            </div>
        </td>
<td>
<div class="rrb">
    <p>Please Review</p>
    <button class="rbyn ompd">ADD review</button>
</div>

</td>
    </tr>
</tbody>

</table>
<div class="review-moda">
    <div class="review-bg">
    </div>
    <div class="rmp">
        <div class="rpc">
            <span><i class="far fa-times"></i></span>
        </div>
        <div class="rps" align="center">
            <i class="fa fa-star" data-index="0" style="display: none"></i>
            <i class="fa fa-star" data-index="1"></i>
            <i class="fa fa-star" data-index="2"></i>
            <i class="fa fa-star" data-index="3"></i>
            <i class="fa fa-star" data-index="4"></i>
            <i class="fa fa-star" data-index="5"></i>
        </div>
     <input type="hidden" value="" class="starRateV">
     <input type="hidden" value="" class="starDate">
     <div class="rptf" align="center">
        <input type="text" class="raterName"  placeholder="Enter your name ..." >
     </div>
     <div class="rptf" align="center">
     <textarea name="rateMsg"  placeholder="Describe your experience"></textarea>
     </div>
     <div class="rate-error"></div>
     <div class="rpsb" align="center">
        <button class="rpbtn">Post review</button>
     </div>
    </div>
</div>
    </div>
    <div class="bri">
        <div class="uscm">
            <div class="uscm-secs">
                <div class="us-img">
                    <p>B</p>
                </div>
                <div class="uscms">
                    <div class="us-rate">
                      <div class="pdt-rat">
                         <div class="pro-rating">
                           <div class="clearfix rating mart8">
                             <div class="rating-star">
                                <div class="grey-star" style="width:60%"></div>
                             </div>
                          </div>
                         </div>
                       </div>
                    </div>
                    <div class="us-cmt">
                        <p>Lorem ipsum dolor , sit amet constumer</p>
                    </div>
                    <div class="us-nm">
                        <p><i>By <span class="cmnm">Bright</span>on <span class="cmdt">jan 21 2020</span></i></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<script src="main.js"></script>
</body>






