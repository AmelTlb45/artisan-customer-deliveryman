<!DOCTYPE html>
<html lang="en">
  <head>
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
                    <h1>Add Products</h1>
                    <form action="{{ url('/add_product') }}" method="POST" enctype="multipart/form-data">

                          @csrf
                        <div class="product-form">
                      <div class="row mb-3 ">
                        <label for="name_prod" class="col-md-4 col-form-label text-md-end">{{ __('Name Product ') }}</label>

                        <div class="col-md-6 custom-checkbox mb-3">
                            <input  class="input"id="name_prod" type="text" class="form-control @error('name_prod') is-invalid @enderror" name="name_prod" value="{{ old('name_prod') }}" required autocomplete="name_prod" autofocus>

                            @error('name_prod')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                       </div>
                    </div>

                    <div class="row mb-3">
                        <label for="image" class="col-md-4 col-form-label text-md-end">{{ __('Image') }}</label>
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

                    <div class="row mb-3">
                         <label for="price" class="col-md-4 col-form-label text-md-end">{{ __('Price') }}</label>

                        <div class="col-md-6">
                            <input  class="input" id="price" type="number" min="1"  class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price" autofocus>

                            @error('price')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                      <div class="row mb-3">
                        <label for="quantity_min" class="col-md-4 col-form-label text-md-end" min="0">{{ __('Quantity Min') }}</label>

                        <div class="col-md-6">
                            <input id="quantity_min" class="input" min="1" type="number" class="form-control @error('quantity_min') is-invalid @enderror" name="quantity_min" value="{{ old('quantity_min') }}" required autocomplete="quantity_min" autofocus>

                            @error('quantity_min')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>


                    <div class="row mb-3">
                        <label for="name_category" class="col-md-4 col-form-label text-md-end">{{ __('Category') }}</label>
                        <select name="category_id" required>
                            <option value="" >---Enter Category ---</option>

                            @foreach ($categories  as $category )
                            <option value="{{ $category->id }}" {{ isset($data) && $data->category_id == $category->id ? 'selected' : '' }}>
                                {{ $category->name_category }}
                            </option>
                                            @endforeach</select>
                        </select>
                    </div>


                    <div class="row mb-3 ">
                        <label for="name_type" class="col-md-4 col-form-label text-md-end">{{ __('Type') }}</label>
                    <select name="type_id" required>
                        <option value="" >---Enter Type ---</option>

                        @foreach ($types  as $type )
                        <option value="{{ $type->id }}" {{ isset($data) && $data->type_id == $type->id ? 'selected' : '' }}>
                            {{ $type->name_type }}
                        </option>
                                        @endforeach</select>
                    </select>
                    </div>

             </div>

                      <div class="form-group">
                        <label for="description" class="inline-flex items-left">{{ __('Description') }}</label>
                        <textarea class="input" id="description" name="description" class="form-control"></textarea>
                      </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit"  class="btn btn-primary" value="add_product">
                                {{ __('Enregistrer') }}
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
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('users.artisans.js')
  </body>
</html>
