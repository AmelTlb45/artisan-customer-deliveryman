<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
 @include('users.artisans.css')
 <style type="text/css">

  /* Main Panel */
  .main-panel {
    background-color: #20232a; /* Dark background color */
    color: #ffffff; /* Light text color */

  }

  /* Content Wrapper */
  .content-wrapper {
    background-color: #2d323c; /* Slightly lighter background for content */


  }
  .input
  {
    color: #2a2120;
  }
  /* Centered Content */
  .div-center {
    text-align: center;
    padding-top: 80px;
  }


  /* Heading Styles */
  h1 {
    color: white; /* Accent color for headings */
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
      border: 12px solid  #ccc;
      border-radius: 20%;
      margin-bottom: 15px;
      font-size: 16px;
    }

    /* Style for textarea (Description) */
    textarea.form-control {
      height: 150px;
    }

        .product-form {
          background-color: #333; /* Dark background color */
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
          font-weight:normal;

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
    width: 20px; /* Adjust the width to your preference */
    height: 20px; /* Adjust the height to your preference */
    margin-right: 15px;
    border: 3px solid #000000f6; /* Adjust the margin to create space between the checkbox and label */
}

/* Style for the label associated with the checkbox */
.form-check-label {
    display: inline-block; /* Make the label inline with the checkbox */
    vertical-align: middle; /* Align label text vertically with the checkbox */
}

/* Style for the disabled checkbox */
.form-check-input[type="checkbox"]:disabled + .form-check-label {
    color: #b8aeae; /* Change text color for disabled checkbox label */
}


input.input{

    border-radius: 16px;
    color: #1949bb;
    border: 9px;
}


.user-details-table {
    width: 100%;
    background-color: rgba(255, 255, 255, 0.2); /* Transparent white background */
}

.user-details-table td {
    padding: 15px;
    vertical-align: top;
    color: white; /* White text color */
}

.custom-image {
    max-width: 100%;
    height: auto;
}


 </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
     @include('users.artisans.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('users.artisans.header')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="div-center">

                    <form action="{{ url('/show_order',$data->id) }}" method="POST" enctype="multipart/form-data">
                        @if ($data)
                        <div class="card">
                            <div class="card-header">
                                <h3>{{ $data->product_title }}</h3>
                            </div>
                            <div class="card-body">
                                <table class="user-details-table">
                                    <tbody>
                                        <tr>
                                            <td class="col-md-4">
                                                <img src="{{ asset($data->image) }}" alt="{{ $data->product_title }}" class="img-fluid custom-image">
                                            </td>
                                            <td class="col-md-8">
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td><strong>Name:</strong></td>
                                                            <td>{{ $data->name }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>Email:</strong></td>
                                                            <td>{{ $data->email }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>Name Product:</strong></td>
                                                            <td>{{ $data->product_title }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>Quantity:</strong></td>
                                                            <td>{{ $data->quantity }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>Price:</strong></td>
                                                            <td>{{ $data->price }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>Payment status:</strong></td>
                                                            <td>{{ $data->payment_status }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>Delivery status:</strong></td>
                                                            <td>{{ $data->delivery_status }}</td>
                                                        </tr>
                                                        <!-- Add more details as needed -->
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    @else
                        <p>Product not found.</p>
                    @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('users.artisans.js')
  </body>
</html>
