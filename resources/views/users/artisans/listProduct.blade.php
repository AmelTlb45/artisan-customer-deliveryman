<!DOCTYPE html>
<html lang="en">
  <head>
    @include('users.artisans.sitefavicon')

    <!-- Global site tag (gtag.js) - Google Analytics -->
    @include('users.artisans.script')
  </head>
  <style>
    .div_center
    {
       text-align: center;
       padding-top: 40px;
    }
    .h2_font
    {
       font-size: 40px;
       padding-bottom: 40px;
    }
    .main-panel {
        background-color: #20232a; /* Dark background color */
        color: #ffffff; /* Light text color */
        padding: 20px;
      }

      /* Content Wrapper */
      .content-wrapper {
        background-color: #2d323c; /* Slightly lighter background for content */
        padding: 20px;
        border-radius: 2px;
      }
        .modern-table {
          width: 80%;
          border-collapse:unset;
          position: center;
        }

        .modern-table th, .modern-table td {
          padding: 8px;
          text-align: center;

        }

        .modern-table th {
          background-color: gray;
          color: #fff;
        }

        .modern-table tr:nth-child(even) {
          background-color: gray;
        }

        .modern-table tr:hover {
            background-color: #e0e0e0;
          transition: background-color 0.3s;
          color: #000;
        }

        .btn-danger {
          background-color: #ff6666;
          color: #fff;
          border: none;
          padding: 8px 12px;
          border-radius: 4px;
          text-decoration: none;
          cursor: pointer;
        }

        .btn-danger:hover {
          background-color: #ff3333;
        }
        .body{
          background-color: #f7f7f7;
        }
        /* Common styles for all buttons */
.btn {
    display: inline-block;
    padding: 8px 16px; /* Adjust padding as needed */
    text-align: center;
    text-decoration: none;
    cursor: pointer;
    border-radius: 10px; /* Adjust border-radius for rounded corners */
    transition: background-color 0.3s, color 0.3s, transform 0.3s;
}

/* Danger button style */
.btn-danger {
    background-color: #dc3545; /* Adjust background color for danger */
    color: #fff; /* Adjust text color for danger */
}

/* Primary button style */
.btn-primary {
    background-color: #007bff; /* Adjust background color for primary */
    color: #fff; /* Adjust text color for primary */
}

/* Success button style */
.btn-success {
    background-color: #28a745; /* Adjust background color for success */
    color: #fff; /* Adjust text color for success */
}

/* Hover effect for all buttons */
.btn:hover {
    background-color: #555; /* Adjust hover background color */
    color: #fff; /* Adjust hover text color */
    transform: scale(1.05); /* Adjust scale for a slight zoom effect */
}

  </style>
  <body class="body">
    @include('users.artisans.loader')

    @include('users.artisans.header')

    @include('users.artisans.sidebar-right')

    @include('users.artisans.sidebar-left')


    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="title">
                                <h4>Products</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="{{ url('/redirect') }}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page" style="color:  rgb(250, 206, 84);">
                                        Products
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="product-wrap">
                    <div class="product-list">
                        <ul class="row">
                            @foreach ($data as $prod)
                            <li class="col-lg-4 col-md-6 col-sm-12">
                                <div class="product-box">
                                    <div class="producct-img">
                                        <img src="{{ asset($prod->image) }}" alt="{{ $prod->name_prod }}"/>
                                    </div>
                                    <div class="product-caption">
                                        <h4><a href="#">{{ $prod->name_prod }}</a></h4>
                                        <div class="price"><ins>{{ $prod->price }}.DA</ins></div>

                                            <div class="dropdown">
                                                <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                                    href="#" role="button" data-toggle="dropdown">
                                                    <i class="dw dw-more"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                                    <a class="dropdown-item" href="{{ url('/show_product1', $prod->id) }}"><i class="dw dw-eye"></i> View</a>
                                                    <a class="dropdown-item" href="{{ url('/update_product', $prod->id) }}"><i class="dw dw-edit2"></i> Edit</a>
                                                    <a class="dropdown-item" href="{{ url('/delete_product', $prod->id) }}"
                                                        onclick="return confirm('Are you sure to delete this?')"><i
                                                            class="dw dw-delete-3"></i> Delete</a>
                                                </div>
                                            </div>

                                    </div>
                                </div>
                            </li>

                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- plugins:js -->
    @include('users.artisans.js')
  </body>
</html>

