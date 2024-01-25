<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
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


        .user-details-table {
            width: 100%;
            background-color: rgba(255, 255, 255, 0.2);
            /* Transparent white background */
        }

        .user-details-table td {
            padding: 15px;
            vertical-align: top;
            color: rgb(19, 18, 18);
            /* White text color */
        }

        .custom-image {
            max-width: 100%;
            height: auto;
        }

        <style>.modern-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .modern-table th,
        .modern-table td {
            padding: 6px;
            /* Further reduced padding */
            text-align: center;
            border: 1px solid #fff;
            color: #fff;
            /* Text color */
        }

        .modern-table th {
            background-color: #333;
            /* Header background color */
        }

        .modern-table tbody tr:nth-child(even) {
            background-color: #444;
            /* Even row background color */
        }

        .modern-table tbody tr:nth-child(odd) {
            background-color: #555;
            /* Odd row background color */
        }

        .btn {
            color: #fff;
            text-decoration: none;
            padding: 4px 8px;
            /* Further reduced padding for buttons */
            border-radius: 4px;
            display: inline-block;
            transition: background-color 0.3s;
        }

        .btn-primary {
            background-color: #3498db;
        }

        .btn-delivery {
            background-color: #27ae60;
        }

        /* Add more styling as needed */
    </style>


    /* Add more styling as needed */


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
            <form action="{{ url('/show_product1', $data->id) }}" method="POST" enctype="multipart/form-data">
                @if ($data)
                    <div class="card">
                        <div class="card-header">
                            <h3>{{ $data->name_prod }}</h3>
                        </div>
                        <div class="card-body">
                            <table class="user-details-table">
                                <tbody>
                                    <tr>
                                        <td class="col-md-4">
                                            <img src="{{ asset($data->image) }}" alt="{{ $data->name_prod }}"
                                                class="img-fluid custom-image">
                                        </td>
                                        <td class="col-md-8">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td><strong>Name Product:</strong></td>
                                                        <td>{{ $data->name_prod }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Quantity:</strong></td>
                                                        <td>{{ $data->quantity_min }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Name Category:</strong></td>
                                                        <td>{{ $data->category->name_category }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Name Type:</strong></td>
                                                        <td>{{ $data->type->name_type }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Price:</strong></td>
                                                        <td>{{ $data->price }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Description:</strong></td>
                                                        <td>{{ $data->description }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                                <table class="table table-bordered">
                                            <thead>
                                                <tr>

                                                    <th>Name Customer</th>
                                                    <th>Email Customer</th>
                                                    <th>Name Product</th>
                                                    <th>Quantity</th>
                                                    <th>Price</th>
                                                    <th>Payment_status</th>
                                                    <th>Delivery_status</th>
                                                    <th>Date</th>
                                                    <th>Actions</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse($orders as $order)
                                                    <tr>

                                                        <td>{{ $order->name }}</td>
                                                        <td>{{ $order->email }}</td>
                                                        <td>{{ $order->product_title }}</td>
                                                        <td>{{ $order->quantity }}</td>
                                                        <td>{{ $order->price }}</td>
                                                        <td>{{ $order->payment_status }}</td>
                                                        <td>{{ $order->delivery_status }}</td>
                                                        <td>{{ $order->created_at->format('M d, Y') }}</td>
                                                        <td>
                                                                <a  class="btn btn-primary"href="{{ url('/show_order', $order->id) }}" style="color:white"><i class="dw dw-eye white" style="color:white" ></i> View</a>
                                                        </td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td colspan="16">Data Not Found</td>
                                                    </tr>
                                                @endforelse
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


    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('users.artisans.js')
</body>

</html>
