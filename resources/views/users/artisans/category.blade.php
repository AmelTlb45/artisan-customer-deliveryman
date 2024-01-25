<!DOCTYPE html>
<html lang="en">

<head>
    @include('users.artisans.sitefavicon')

    <!-- Global site tag (gtag.js) - Google Analytics -->
    @include('users.artisans.script')
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
                        @if (session()->has('message'))
              <div class="alert alert-success">
                   <button  type="button"   class="close"   data-dismiss="alert" aria-hidden="true">x</button>
                {{ session()->get('message') }}
              </div>
                @endif
                        <div class="col-md-6 col-sm-12">
                            <div class="title">
                                <h4>Category Management</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="{{ url('/redirect') }}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page" style="color:  rgb(250, 206, 84);">
                                        Category Management
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
                            <h4 class="text h4" style="color:  rgb(250, 206, 84);">Add Category</h4>

                        </div>

                    </div>



                    <form action="{{ url('add_category') }}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Category Name </label>
                            <div class=" col-md-4">
                                <input class="form-control" type="text" name="name_category"
                                    placeholder="Write a category...">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Number of Products </label>
                            <div class="col-md-4">
                                <input class="form-control" type="number" name="nbr_prod"
                                    placeholder="Number  of products ...">
                            </div>
                        </div>
                        <div class="form-group row">

                            <div class="col-md-6 offset-md-6 text-right">
                                <input class="btn btn-secondary" type="submit" value="Add" />
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <!-- Default Basic Forms End -->

        <div class="pd-20 card-box mb-30">
            <div class="clearfix">
                <div class="pull-left">
                    <h4 class="text-gray h4">List Of Category</h4>

                </div>
            </div>
            <table class="data-table table stripe hover nowrap">
                <thead>
                    <tr>
                        <th class="table-plus datatable-nosort">Category Name</th>

                        <th>Product Number</th>

                        <th class="datatable-nosort">Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($data as $item)
                        <tr>
                            <td class="table-plus">{{ $item->name_category }}</td>
                            <td>{{ $item->nbr_prod }}</td>
                            <td>

                                <div class="dropdown">
                                    <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                        href="#" role="button" data-toggle="dropdown">
                                        <i class="dw dw-more"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                        
                                        <a class="dropdown-item" href="{{ url('/delete_category', $item->id) }}"
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
