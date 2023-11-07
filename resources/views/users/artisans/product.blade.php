<!DOCTYPE html>
<html lang="en">
  <head>
 @include('users.artisans.css')
 <style type="text/css">

  /* Main Panel */
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
                    <div class="product-form">

                      <div class="row mb-3 ">
                        <label for="title" class="col-md-4 col-form-label text-md-end">{{ __('Title') }}</label>

                        <div class="col-md-6 custom-checkbox mb-3">
                            <input  class="input"id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>

                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                    </div>
                        </div>

                    <div class="row mb-3">
                        <label for="image"
                            class="col-md-4 col-form-label text-md-end">{{ __('Photo') }}</label>
                        <div class="col-md-6">
                            <input id="image" type="file"
                                class="form-control @error('photo') is-invalid @enderror" name="image"
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
                            <input  class="input" id="price" type="number" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price" autofocus>

                            @error('price')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                      <div class="row mb-3">
                        <label for="quantity" class="col-md-4 col-form-label text-md-end">{{ __('Quantity') }}</label>

                        <div class="col-md-6">
                            <input id="quantity" class="input" type="number" class="form-control @error('quantity') is-invalid @enderror" name="quantity" value="{{ old('quantity') }}" required autocomplete="name_category" autofocus>

                            @error('quantity')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>


                      <div class="row mb-3 ">
                        <label for="name_category" class="col-md-4 col-form-label text-md-end">{{ __('Category') }}</label>

                        <div class="col-md-3">



                          <div class="mt-2">
                            <label for="sugare" class="inline-flex items-left">
                                <input type="radio" id="sugare" name="name_category" value="sugare" {{ old('name_category') == 'sugare' ? 'checked' : '' }} required autofocus autocomplete="name_category" class="form-radio">
                                <span class="ml-2">{{ __('Sugare') }}</span>
                            </label>
                        </div>

                        <div class="mt-2">
                            <label for="salt" class="inline-flex items-left">
                                <input type="radio" id="salt" name="name_category" value="salt" {{ old('name_category') == 'salt' ? 'checked' : '' }} required autofocus autocomplete="name_category" class="form-radio">
                                <span class="ml-2">{{ __('Salt') }}</span>
                            </label>
                        </div>

                        <div class="mt-2">
                            <label for="both" class="inline-flex items-left">
                                <input type="radio" id="both" name="name_category" value="name_category" {{ old('name_category') == 'both' ? 'checked' : '' }} required autofocus autocomplete="name_category" class="form-radio">
                                <span class="ml-2">{{ __('Both') }}</span>
                            </label>
                        </div>


                    </div>

                      </div>

                      <div class="form-group">
                        <label for="description" class="inline-flex items-left">{{ __('Description') }}</label>
                        <textarea class="input" id="description" name="description" class="form-control"></textarea>
                      </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit"  class="btn btn-primary" >
                                {{ __('Enregistrer') }}
                            </button>
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
