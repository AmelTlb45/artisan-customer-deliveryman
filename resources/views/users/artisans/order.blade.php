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
  /* Table Styles for Product Presentation */
.modern-table {
    width: 80%;
    border-collapse: unset;
    margin: auto; /* Center the table horizontally */
}

.modern-table th,
.modern-table td {
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
    color: #000; /* Change font color to black on hover */
}



/* Add more styles based on your specific requirements */

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

        /* Delivery button style */
.btn-delivery {
    background-color: #28a745; /* Adjust background color for delivery */
    color: #fff; /* Adjust text color for delivery */
    border-radius: 10px; /* Adjust border-radius for rounded corners */
    display: inline-block;
    padding: 8px 16px; /* Adjust padding as needed */
    text-align: center;
    text-decoration: none;
    cursor: pointer;
    transition: background-color 0.3s, color 0.3s, transform 0.3s;
}

/* Hover effect for the Delivery button */
.btn-delivery:hover {
    background-color: #218838; /* Adjust hover background color */
    color: #fff; /* Adjust hover text color */
    transform: scale(1.05); /* Adjust scale for a slight zoom effect */
}
/* Style for the search input */
input[type="text"] {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    outline: none; /* Remove the border highlight on focus */
    color: #333; /* Set text color to black */
  }

  /* Style for the search button */
  input[type="submit"] {
    padding: 10px 15px;
    background-color: #3498db; /* Blue color, you can change it to your preference */
    color: #fff; /* White text color */
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }

  /* Hover effect for the search button */
  input[type="submit"]:hover {
    background-color: #2980b9; /* Darker blue color on hover */
  }

  </style>
  <body class="body">
    @include('users.artisans.loader')

    @include('users.artisans.header')

    @include('users.artisans.sidebar-right')

    @include('users.artisans.sidebar-left')




    <div class="main-container">
        <div class="pd-20 card-box mb-30">
            <div class="clearfix">
                <div class="pull-left">
                    <h4 class="text-gray h4">List Of Orders</h4>

                </div>
                @if (session()->has('message'))
              <div class="alert alert-success">
                   <button  type="button"   class="close"   data-dismiss="alert" aria-hidden="true">x</button>
                {{ session()->get('message') }}
              </div>
                @endif
            </div>
            <table class="data-table table stripe hover nowrap">
                <thead>
                    <tr>
                        <th class="table-plus datatable-nosort">Order Number</th>
                        <th>Customer Name</th>
                        <th>Ordered At</th>
                        <th>Total Amount</th>
                        <th>Delivery statu</th>
                        <th class="datatable-nosort">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($orders as $prod)
                        <tr>
                            <td class="table-plus">{{ $prod->id }}</td>
                            <td>{{ $prod->name }}</td>
                            <td>{{ $prod->created_at ->format('M d, Y')}}</td>
                            <td>{{ $prod->price }}</td>
                            <td>{{ $prod->delivery_status }}</td>
                            <td>
                                <button class="btn btn-success"  >
                                    <a href="{{ url('/show_order', $prod->id) }}" style="color:white"><i class="dw dw-eye white" style="color:white" ></i> View</a>

                                </button>
                            </td>
                        </tr>
                        @empty
                        <tr>
                          <td colspan="16">Data Not Found</td>
                        </tr>
                      @endforelse
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- plugins:js -->
    @include('users.artisans.js')
  </body>
</html>

