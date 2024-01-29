<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
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
           color: rgb(0, 0, 0);
        }
        .center{
            margin: auto;
            width: 100%;
            text-align: center;
            margin-top: 30px;
            border: 3px solid rgb(19, 18, 18);
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
              width: 10%;
              border-collapse:unset;
              position: center;
            }

            .modern-table th, .modern-table td {
              padding: 6px;
              text-align: center;
              color: rgb(9, 9, 9);

            }

            .modern-table th {
              background-color: rgb(124, 119, 119);
              color: #fff;
            }

            .modern-table tr:nth-child(even) {
              background-color: gray;
            }

            .modern-table tr:hover {
              background-color: #ddd;
              color: rgb(9, 9, 9);
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
            .th_color{
                background:skyblue;

            }
.text_color{
    color: #20232a;
};
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
                {{-- <h2 class="h2_font">Edite Products </h2>
<table class="modern-table" class="center">
                 <tr>

                    <td>{{ $product->name_prod }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->quantity_min }}</td>
                    <td>{{ $product->category->name_category }}</td>
                    <td>{{ $product->type->name_type }}</td>
                    <td>{{ $product->description }}</td>
                    <td><img class="img_size" src="public/artisan/assets/images/Product/{{ $product->image }}"></td>
                    <label>
                </tr></table>



               <form action="{{ url('/update_product') }}" method="POST" >  </form>
            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('users.artisans.js') --}}



    <h1>Edit Products</h1>
    <form action="{{ url('/update_product') }}" method="POST" >  </form>


          @csrf
        <div class="product-form">
      <div class="row mb-3 ">
        <label for="name_prod" class="col-md-4 col-form-label text-md-end">{{ __('Name Product ') }}</label>
        <div class="col-md-6 custom-checkbox mb-3">
            <input class="text_color"  class="input"id="name_prod" type="text" class="form-control @error('name_prod') is-invalid @enderror" name="name_prod" value="{{ $product->name_prod }}" required autocomplete="name_prod" autofocus>

            @error('name_prod')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

       </div>
    </div>

    <div class="row mb-3 ">
        <label for="image" class="col-md-4 col-form-label text-md-end">{{ __('Image') }}</label>
        <div class="col-md-6 custom-checkbox mb-3">
            <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" accept="image/*" autofocus>

            @error('image')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

       </div>
    </div>
    </form>
    {{-- <div class="row mb-3">
        <label for="image" class="col-md-4 col-form-label text-md-end">{{ __('Image') }}</label>
        <div class="col-md-6">
            <input class="text_color" id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" autocomplete="image">
            <label for ="image" type="file" class="file-input from-control @error('image') is invalid @enderror"></label>


            @error('image')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            {{-- <label>change image </label>
            <img height="100" width="100"   src="Product/{{$product->image}}">




        </div>
    </div> --}}

    <div class="row mb-3 ">
        <label for="price" class="col-md-4 col-form-label text-md-end">{{ __('Price ') }}</label>
        <div class="col-md-6 custom-checkbox mb-3">
            <input  class="text_color" class="input"id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ $product->price }}" required autocomplete="price" autofocus>

            @error('price')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

       </div>
    </div>
    <div class="row mb-3 ">
        <label for="quantity_min" class="col-md-4 col-form-label text-md-end">{{ __('Quantity Min ') }}</label>
        <div class="col-md-6 custom-checkbox mb-3">
            <input  class="text_color" class="input"id="quantity_min" type="text" class="form-control @error('quantity_min') is-invalid @enderror" name="price" value="{{ $product->quantity_min }}" required autocomplete="quantity_min" autofocus>

            @error('quantity_min')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

       </div>
    </div>

    <div class="row mb-3">
        <label for="name_category" class="col-md-4 col-form-label text-md-end">{{ __('Category') }}</label>
        <div class="col-md-6 custom-checkbox mb-3">
        <select class="text_color" name="category_id" required="">
            <option class="text_color" value="  {{ $product->category_id }}" selected="" >  {{ $product->name_category }}</option>


         </select>
        </select>
    </div>
    </div>

    <div class="row mb-3 ">
        <label for="name_type" class="col-md-4 col-form-label text-md-end">{{ __('Type') }}</label>
        <div class="col-md-6 custom-checkbox mb-3">
        <select class="text_color" name="type_id" required>
        <option value="" >---Enter Type ---</option>


          <option class="text_color" value="{{ $product->name_type }}" {{ isset($data) && $data->type_id == $type->id ? 'selected' : '' }}>
            {{ $product->name_type }}
          </option>

       </select>
    </select>
    </div>
    </div>






{{--
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
            <input  class="input" id="price" type="number" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price" autofocus>

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
            <input id="quantity_min" class="input" type="number" class="form-control @error('quantity_min') is-invalid @enderror" name="quantity_min" value="{{ old('quantity_min') }}" required autocomplete="quantity_min" autofocus>

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
      </div> --}}



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
