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
    background-color: #151a24; /* Slightly lighter background for content */


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
          border-radius: 30px;
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
/* Style for the form */
.form-container {
    max-width: 600px;
    margin: auto;
}

/* Style for form labels */
.form-label {
    font-weight: bold;
    margin-bottom: 5px;
}

/* Style for form inputs and selects */
.form-control {
    width: 100%;
    padding: 8px;
    margin-bottom: 15px;
    box-sizing: border-box;
}

/* Style for the select dropdown */
select.form-control {
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    padding-right: 30px;
    background: url('https://image-url.com/arrow-down.png') no-repeat right center;
    background-size: 20px;
}

/* Style for form rows */
.form-row {
    display: flex;
    flex-direction: column;
    margin-bottom: 20px;
}

/* Style for submit button */
.btn-submit {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
}

/* Style for the submit button on hover */
.btn-submit:hover {
    background-color: #0056b3;
}



input.input{

    border-radius: 30px;
    color: #fff;
    border: 30px;
}


/* Style for the input fields */
.input-container {
    display: flex;
    align-items: center;
}

.input-label {
    font-weight: bold;
    margin-right: 10px;
}

.input {
    width: 100%;
    padding: 8px;
    box-sizing: border-box;
}

/* Style for error messages */
.invalid-feedback {
    color: #dc3545;
    font-size: 0.875rem; /* Adjust the font size as needed */
    margin-top: 4px;
}

/* Optional: Style for the entire form */
.form-container {
    max-width: 600px;
    margin: auto;
}
/* Style for the input fields */
.input-container {
    display: flex;
    align-items: center;
}

.input-label {
    font-weight: bold;
    margin-right: 10px;
}

.input {
    width: 100%;
    padding: 8px;
    box-sizing: border-box;
}

/* Style for error messages */
.invalid-feedback {
    color: #dc3545;
    font-size: 0.875rem; /* Adjust the font size as needed */
    margin-top: 4px;
}

/* Optional: Style for the entire form */
.form-container {
    max-width: 600px;
    margin: auto;
}

/* Style for file input */
.file-input-label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
}

.file-input {
    display: none;
}

.file-input + label {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
}

.file-input + label:hover {
    background-color: #0056b3;
}
/* Style for the textarea */
.textarea-container {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}

.textarea-label {
    font-weight: bold;
    margin-bottom: 5px;
}

.textarea {
    width: 100%;
    padding: 8px;
    box-sizing: border-box;
    resize: vertical; /* Allow vertical resizing of the textarea */
    min-height: 100px; /* Set a minimum height */
}

/* Style for error messages */
.invalid-feedback {
    color: #dc3545;
    font-size: 0.875rem; /* Adjust the font size as needed */
    margin-top: 4px;
}

/* Optional: Style for the entire form */
.form-container {
    max-width: 600px;
    margin: auto;
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
                    <h1>Update  Products</h1>
                    <form action="{{ url('/update_product_confirm', $data->id) }}" method="POST" enctype="multipart/form-data">

                          @csrf
                        <div class="product-form">
                            <div class="form-container">
                                <div class="row mb-3">
                                    <label for="name_prod" class="col-md-4 col-form-label text-md-end input-label">{{ __('Name Product') }}</label>
                                    <div class="col-md-6 input-container">
                                        <input id="name_prod" type="text" class="input form-control @error('name_prod') is-invalid @enderror" name="name_prod" value="{{ $data->name_prod }}" required autocomplete="name_prod" autofocus>
                                        @error('name_prod')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="image" class="col-md-4 col-form-label text-md-end file-input-label">{{ __('Image') }}</label>
                                    <div class="col-md-6">
                                        <input id="image" type="file" class="file-input form-control @error('image') is-invalid @enderror" name="image" autocomplete="image">
                                        <label for="image" class="btn-submit">Choose File</label>
                                        @error('image')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                            </div>


                    <div class="form-container">
                        <div class="row mb-3">
                            <label for="price" class="col-md-4 col-form-label text-md-end input-label">{{ __('Price') }}</label>
                            <div class="col-md-6 input-container">
                                <input id="price" type="number" min="1" class="input form-control @error('price') is-invalid @enderror" name="price" value="{{ $data->price }}" required autocomplete="price" autofocus>
                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="quantity_min" min="1" class="col-md-4 col-form-label text-md-end input-label" min="0">{{ __('Quantity Min') }}</label>
                            <div class="col-md-6 input-container">
                                <input id="quantity_min" type="number" class="input form-control @error('quantity_min') is-invalid @enderror" name="quantity_min" value="{{ $data->quantity_min }}" required autocomplete="quantity_min" autofocus>
                                @error('quantity_min')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                    </div>



                    <div class="form-container">
                        <div class="form-row">
                            <label for="name_category" class="form-label">{{ __('Category') }}</label>
                            <select name="category_id" class="form-control" required>
                                <option value="" >---Select Category---</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{ isset($data) && $data->category_id == $category->id ? 'selected' : '' }}>
                                        {{ $category->name_category }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-row">
                            <label for="name_type" class="form-label">{{ __('Type') }}</label>
                            <select name="type_id" class="form-control" required>
                                <option value="" >---Select Type---</option>
                                @foreach ($types as $type)
                                    <option value="{{ $type->id }}" {{ isset($data) && $data->type_id == $type->id ? 'selected' : '' }}>
                                        {{ $type->name_type }}
                                    </option>
                                @endforeach
                            </select>
                        </div>


                        <div class="form-container">
                            <div class="row mb-3">
                                <label for="description" class="col-md-4 col-form-label text-md-end textarea-label">{{ __('Description') }}</label>
                                <div class="col-md-6 textarea-container">
                                    <textarea id="description" name="description" class="textarea form-control @error('description') is-invalid @enderror">{{ $data->description }}</textarea>
                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                    </div>


             </div>


                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit"  class=" btn-submit" value="update_product">
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
