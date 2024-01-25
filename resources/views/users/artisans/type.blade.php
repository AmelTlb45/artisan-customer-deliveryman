<!DOCTYPE html>
<html lang="en">
  <head>
    @include('users.artisans.sitefavicon')

    <!-- Global site tag (gtag.js) - Google Analytics -->
    @include('users.artisans.script')
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
          color: #20232a;
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
    @include('users.artisans.loader')

    @include('users.artisans.header')

    @include('users.artisans.sidebar-right')

    @include('users.artisans.sidebar-left')

    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        @if (session()->has('message'))
              <div class="alert alert-success">
                   <button  type="button"   class="close"   data-dismiss="alert" aria-hidden="true">x</button>
                {{ session()->get('message') }}
              </div>
                @endif
                        <div class="col-md-6 col-sm-12">
                            <div class="title">
                                <h4>Type Management</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="{{ url('/redirect') }}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page"style="color:  rgb(250, 206, 84);">
                                        Type Management
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
                            <h4 class="text-gray h4">Add Type</h4>

                        </div>

                    </div>
                    <form action="{{ url('/add_type') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="neme_type" class="col-sm-12 col-md-2 col-form-label">Text</label>
                            <div class=" col-md-4">
                                <input class="form-control" type="text" name="name_type" placeholder="Write a Type...">
                            </div>
                        </div>



                        <div class="form-group row">

                            <label  for="name_category" class="col-sm-12 col-md-2 col-form-label">Category Name</label>
                            <div class="col-sm-12 col-md-4">
                            <select name="category_id"  class="custom-select col-12" required>
                                <option value="" >Choose...</option>

                                @foreach ($categories  as $category )
                                <option value="{{ $category->id }}" {{ isset($data) && $data->category_id == $category->id ? 'selected' : '' }}>
                                    {{ $category->name_category }}
                                </option>
                                                @endforeach
                            </select>
                            </div>
                        </div>
                        <div class="form-group row">

                            <div class="col-md-6 offset-md-6 text-right">
                                <input class="btn btn-success" type="submit" value="Add" />
                            </div>
                        </div>
                    </form>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                </div>
            </div>
        </div>
        <!-- Default Basic Forms End -->

        <div class="pd-20 card-box mb-30">
            <div class="clearfix">
                <div class="pull-left">
                    <h4 class="text-gray h4">List Of Type</h4>

                </div>
            </div>
            <table class="data-table table stripe hover nowrap">
                <thead>
                    <tr>


                  </tr>
                        <th class="table-plus datatable-nosort">Type Name</th>

                        <th>Category Name</th>

                        <th class="datatable-nosort">Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($types as $type)
                            <tr>
                                <td class="table-plus">{{ $type->name_type }}</td>
                                <td>{{ $type->category->name_category }}</td>


                            <td>

                                <div class="dropdown">
                                    <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                        href="#" role="button" data-toggle="dropdown">
                                        <i class="dw dw-more"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">

                                        <a class="dropdown-item"  href="{{ url('delet_type', $type->id) }}"
                                            onclick="return confirm('Are you sure to delete this?')"><i
                                                class="dw dw-delete-3"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('users.artisans.js')
  </body>
</html>
