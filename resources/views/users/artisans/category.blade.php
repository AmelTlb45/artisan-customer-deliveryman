<!DOCTYPE html>
<html lang="en">
  <head>
 @include('users.artisans.css')
  </head>
  <style>

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
    .input_color
    {
       color: black;
    }
    .center{
        margin: auto;
        width: 50%;
        text-align: center;
        margin-top: 30px;
        border: 3px solid white;
    }

        .modern-input {
          padding: 10px;
          border: 1px solid #555;
          background-color: #333;
          color: #fff;
          border-radius: 5px;
          width: 300px;
        }

        .modern-input::placeholder {
          color: #888;
        }

        .modern-button {
          padding: 10px 20px;
          background-color: #007bff;
          color: #fff;
          border: none;
          border-radius: 5px;
          cursor: pointer;
        }

        .modern-button:hover {
          background-color: #0056b3;
        }



        .modern-table {
          width: 100%;
          border-collapse:unset;
          position: center;
        }

        .modern-table th, .modern-table td {
          padding: 10px;
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
          background-color: #ddd;
          color: black;
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

  </style>
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
                @if (session()->has('message'))
              <div class="alert alert-success">
                   <button  type="button"   class="close"   data-dismiss="alert" aria-hidden="true">x</button>
                {{ session()->get('message') }}
              </div>
                @endif
            <div class="div_center">
                <h2 class="h2_font">Add Category</h2>
               <form action="{{ url('/add_category') }}" method="POST">
                @csrf
                <input class="modern-input" type="text" name="name_category" placeholder="Write a category...">
                <input type="submit" class="modern-button" name="submit" value="add_category">

               </form>

            </div>

            <table class="modern-table" class="center">
                <thead>
                  <tr>
                    <th>Category Name</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($data as $item)
                  <tr>
                    <td>{{ $item->name_category }}</td>
                    <td>
                      <a class="btn btn-danger" href="{{ url('/delete_category', $item->id) }}" onclick="return confirm('Are you sure to delete this?')">Delete</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>



            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('users.artisans.js')
  </body>
</html>
