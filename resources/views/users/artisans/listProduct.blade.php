<!DOCTYPE html>
<html lang="en">
  <head>
    
 @include('users.artisans.css')
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
          background-color: #ff3333;
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
                @if (session()->has('message'))
              <div class="alert alert-success">
                   <button  type="button"   class="close"   data-dismiss="alert" aria-hidden="true">x</button>
                {{ session()->get('message') }}
              </div>
                @endif
            <div class="div_center">
                <h2 class="h2_font">ALL Products </h2>
               <form action="{{ url('/show_product') }}" method="GET" >


            <table class="modern-table" class="center">
                <thead>
                  <tr>
                    <th>Product Image</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Quantity_Min</th>
                    <th>Category Name</th>
                    <th>Type Name</th>
                    <th>Description</th>
                    <th>Delete</th>
                    <th>Show</th>
                    <th>Update</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($data as $prod)
                    <tr>
                        <td>
                            <!-- Display the image -->
                            <img src="{{ asset($prod->image) }}" alt="{{ $prod->name_prod }}" style="max-width: 100px;">
                        </td>
                        <td>{{ $prod->name_prod }}</td>
                        <td>{{ $prod->price }}</td>
                        <td>{{ $prod->quantity_min }}</td>
                        <td>{{ $prod->category->name_category }}</td>
                        <td>{{ $prod->type->name_type }}</td>
                        <td>{{ $prod->description }}</td>
                        <td><a class="btn btn-danger" href="{{ url('/delete_product', $prod->id) }}" onclick="return confirm('Are you sure to delete this?')">Delete</a></td>
                        <td> <a class="btn btn-primary" href="{{ url('/show_product1', $prod->id) }}">Show</a></td>
                        <td>
                            <a class="btn btn-success" href="{{ url('/update_product', $prod->id) }}">Update</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
              </table>

               </form>

            </div>
        </div>
    <!-- container-scroller -->
 
    

    <!-- plugins:js -->
    @include('users.artisans.js')
  </body>
</html>

