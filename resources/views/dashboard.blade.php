<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Webmin - Bootstrap 4 & Angular 5 Admin Dashboard Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    @include('layouts.head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <div class="wrapper">
        <div id="pre-loader">
            <img src="assets/images/pre-loader/loader-01.svg" alt="">
        </div>

        @include('layouts.main-header')

        @include('layouts.main-sidebar')
        <!-- main-content -->
        <div class="content-wrapper">
            <div class="page-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h4 class="mb-0"> Dashboard</h4>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right">
                        </ol>
                    </div>
                </div>
            </div>
            <!-- widgets -->
            <div class="row" id="wawa">
                <div class="col"><a href="{{url('/teacher')}}" ><x-cards name="teacher " total="655" icon="fa-solid fa-chalkboard-user"/> </a> </div>
                <div class="col"><a href="{{url('/students')}}" ><x-cards name="Students " total="100" icon="fa-solid fa-graduation-cap"/></a></div>
                <div class="col"><a > <x-cards name="classes " total="100" icon="fa fa-address-book"/></a></div>
                <div class="col"><a > <x-cards name="classes " total="100" icon="fa fa-address-book"/></a></div>
            </div><!-- main content wrapper end-->
        </div>
    </div>

    @include('layouts.footer-scripts')
    
</body>


</html>