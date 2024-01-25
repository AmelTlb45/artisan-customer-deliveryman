

<!DOCTYPE html>
<html lang="en">

<head>


    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    @include('users.artisans.sitefavicon')
    @include('users.artisans.script')
    <style type="text/css">
        /* Main Panel */
        .main-panel {
            background-color: #20232a;
            /* Dark background color */
            color: #ffffff;
            /* Light text color */

        }

        /* Content Wrapper */
        .content-wrapper {
            background-color: #2d323c;
            /* Slightly lighter background for content */


        }

        .input {
            color: #2a2120;
        }

        /* Centered Content */
        .div-center {
            text-align: center;
            padding-top: 80px;
        }


        /* Heading Styles */
        h1 {
            color: white;
            /* Accent color for headings */
            font-size: 80%;
        }


        /* Style for labels */
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;


        }

        /* Style for input fields */
        .form-control {
            width: 100%;
            padding: 10px;
            border: 12px solid #ccc;
            border-radius: 20%;
            margin-bottom: 15px;
            font-size: 16px;
        }

        /* Style for textarea (Description) */
        textarea.form-control {
            height: 150px;
        }

        .product-form {
            background-color: #333;
            /* Dark background color */
            /* Light text color */
            padding: 30px;
            border-radius: 20px;
            margin: 0 auto;
            width: 400px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-weight: normal;

        }

        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        textarea.form-control {
            height: 50px;
        }

        /* Style for the default checkbox */
        .form-check-input[type="checkbox"] {
            width: 20px;
            /* Adjust the width to your preference */
            height: 20px;
            /* Adjust the height to your preference */
            margin-right: 15px;
            border: 3px solid #000000f6;
            /* Adjust the margin to create space between the checkbox and label */
        }

        /* Style for the label associated with the checkbox */
        .form-check-label {
            display: inline-block;
            /* Make the label inline with the checkbox */
            vertical-align: middle;
            /* Align label text vertically with the checkbox */
        }

        /* Style for the disabled checkbox */
        .form-check-input[type="checkbox"]:disabled+.form-check-label {
            color: #b8aeae;
            /* Change text color for disabled checkbox label */
        }


        input.input {

            border-radius: 16px;
            color: #1949bb;
            border: 9px;
        }
    </style>
</head>

<body>

   
    @include('users.artisans.header')

    @include('users.artisans.sidebar-right')

    @include('users.artisans.sidebar-left')

    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="title">
                                <h4> Charts </h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="{{ url('/redirect') }}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active"
                                        aria-current="page"style="color:  rgb(250, 206, 84);">
                                        Charts
                                    </li>
                                </ol>
                            </nav>
                        </div>

                    </div>
                </div>


                <div class="pd-20 card-box mb-30">
                    <div class="clearfix">
                        <div class="pull-left">
                            <h4 class="text-gray h4">Products By Category </h4>

                        </div>

                    </div>

                    <div class="container px-2 mx-auto center">
                        <div class="p-6 m-200 bg-gray rounded shadow" style="width: 300px; height: 320px;">
                            <h1>{{ $chart1->options['chart_title'] }}</h1>
                            {!! $chart1->renderHtml() !!}
                        </div>
                    </div>

                    <style>
                        canvas {
                            width: 100% !important;
                            height: auto !important;
                        }
                    </style>

                    {!! $chart1->renderChartJsLibrary() !!}
                    {!! $chart1->renderJs() !!}

                </div>


                <div class="pd-20 card-box mb-30">
                    <div class="clearfix">
                        <div class="pull-left">
                            <h4 class="text-gray h4">Number of orders Per Month</h4>

                        </div>

                    </div>

                    <div class="container px-4 mx-auto">
                        <div class="p-6 m-20 bg-white rounded shadow">
                            <h1>{{ $chart2->options['chart_title'] }}</h1>
                            {!! $chart2->renderHtml() !!}
                        </div>

                    </div>
                    {!! $chart2->renderChartJsLibrary() !!}
                    {!! $chart2->renderJs() !!}
                </div>


                <div class="pd-20 card-box mb-30">
                    <div class="clearfix">
                        <div class="pull-left">
                            <h4 class="text-gray h4">Products Sold Per Month</h4>

                        </div>

                    </div>

                    <div class="container px-4 mx-auto">
                        <div class="p-6 m-20 bg-white rounded shadow">
                            <h1>{{ $chart3->options['chart_title'] }}</h1>
                            {!! $chart3->renderHtml() !!}
                        </div>

                    </div>
                    {!! $chart3->renderChartJsLibrary() !!}
                    {!! $chart3->renderJs() !!}

                </div>


                <div class="pd-20 card-box mb-30">
                    <div class="clearfix">
                        <div class="pull-left">
                            <h4 class="text-gray h4">Revenu of Product Per year (D.A)</h4>

                        </div>

                    </div>

                    <div class="container px-4 mx-auto">
                        <div class="p-6 m-20 bg-white rounded shadow">
                            <h1>{{ $chart4->options['chart_title'] }}</h1>
                            {!! $chart4->renderHtml() !!}
                        </div>

                    </div>
                    {!! $chart4->renderChartJsLibrary() !!}
                    {!! $chart4->renderJs() !!}
                </div>
            </div>
        </div>
    </div>
</body>


</html>
