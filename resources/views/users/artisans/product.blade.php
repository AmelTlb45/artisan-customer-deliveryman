<!DOCTYPE html>
<html lang="en">

<head>
    @include('users.artisans.sitefavicon')

    <!-- Global site tag (gtag.js) - Google Analytics -->
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
    @include('users.artisans.loader')

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
                                <h4> Add Product </h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="{{ url('/redirect') }}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page"style="color:  rgb(250, 206, 84);">
                                        Add Product
                                    </li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-md-6 col-sm-12 text-right">
                            <div class="dropdown">
                                <a class="btn btn-secondary dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown">
                                    January 2023
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Export List</a>
                                    <a class="dropdown-item" href="#">Policies</a>
                                    <a class="dropdown-item" href="#">View Assets</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Default Basic Forms Start -->
                <div class="pd-20 card-box mb-30">
                    <div class="clearfix">
                        <div class="pull-left">
                            <h4 class="text-gray h4">Add Product</h4>

                        </div>

                    </div>
                    <form action="{{ url('/add_product') }}" method="POST" enctype="multipart/form-data">

                        @csrf
                        <div class="form-group row">
                            <label for="name_prod"
                            class="col-md-4 col-form-label text-md-end input-label">{{ __('Name Product ') }}</label>

                            <div class="col-md-6">
                                <input class="form-control"id="name_prod" type="text"
                                    class="form-control @error('name_prod') is-invalid @enderror" name="name_prod"
                                    value="{{ old('name_prod') }}" required autocomplete="name_prod" autofocus>

                                @error('name_prod')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="image"
                            class="col-md-4 col-form-label text-md-end input-label">{{ __('Image') }}</label>
                            <div class="col-md-6">
                                <input id="image" type="file"
                                    class="form-control @error('image') is-invalid @enderror" name="image"
                                    autocomplete="image">
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="price"
                            class="col-md-4 col-form-label text-md-end input-label">{{ __('Price') }}</label>

                            <div class="col-md-6">
                                <input class="form-control" id="price" type="number" min="1"
                                    class="form-control @error('price') is-invalid @enderror" name="price"
                                    value="{{ old('price') }}" required autocomplete="price" autofocus>

                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>





                        <div class="form-group row">
                            <label for="quantity_min" class="col-md-4 col-form-label text-md-end input-label"
                                min="0">{{ __('Quantity Min') }}</label>

                            <div class="col-md-6">
                                <input id="quantity_min" class="form-control" min="1" type="number"
                                    class="form-control @error('quantity_min') is-invalid @enderror"
                                    name="quantity_min" value="{{ old('quantity_min') }}" required
                                    autocomplete="quantity_min" autofocus>

                                @error('quantity_min')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="name_type"
                            class="col-md-4 col-form-label text-md-end input-label">{{ __('Type') }}</label>
                            <div class="col-md-6">
                            <select name="type_id" class="custom-select col-12" required>
                                <option value="">choose...</option>

                                @foreach ($types as $type)
                                    <option value="{{ $type->id }}"
                                        {{ isset($data) && $data->type_id == $type->id ? 'selected' : '' }}>
                                        {{ $type->name_type }}
                                    </option>
                                @endforeach
                            </select>
                            </select>
                            </div>
                        </div>




                        <div class="form-group row">

                            <label for="name_category" class="col-md-4 col-form-label text-md-end input-label">Category Name</label>
                            <div class="col-md-6">
                                <select name="category_id" class="custom-select col-12" required>
                                    <option value="">Choose...</option>

                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ isset($data) && $data->category_id == $category->id ? 'selected' : '' }}>
                                            {{ $category->name_category }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>




                            <div class="form-group row">

                                <label for="description" class="col-md-4 col-form-label text-md-end input-label">{{ __('Description') }}</label>
                                <div class="col-md-6">
                                <textarea class="form-control" id="description" name="description" class="form-control"></textarea>

                            </div>
                        </div>
                        <div class="form-group row">
                        <div class="col-md-6 offset-md-6 text-right">
                            <button type="submit" class="btn btn-info" value="add_product">
                                {{ __('Add to the list Products') }}
                            </button>
                        </div>
                        </div>

                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    </form>

                </div>
            </div>
        </div>

    </div>

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('users.artisans.js')
</body>

</html>
