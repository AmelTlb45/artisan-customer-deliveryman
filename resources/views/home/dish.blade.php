
<section class="top_dish_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main_title position-relative">
                    <h1>Our  Dishes</h1>
                    <hr>
                    <div class="round-planet planet">
                        <div class="round-planet planet2">
                            <div class="shape shape1"></div>
                            <div class="shape shape2"></div>
                        </div>
                    </div>
                </div>
                <form action="{{ url('product_search') }}" method="GET">
                    @csrf
                 <input style="width: 500px;" type="text" name="search" placeholder="Search for Diche ...">
                  <input type="submit" value="search">
                </form>
            </div>
        </div>
        <style>
            .row {
                display: flex;
                justify-content: space-around; /* Adjust as needed */
                flex-wrap: wrap;
            }

            .single_dish {
                width: 30%; /* Adjust as needed, this is an example */
                margin: 10px; /* Adjust as needed */
            }

            .thumb img {
                width: 50%; /* Make the images fill the container */
                height: auto; /* Maintaicn aspect ratio */
            }

            input[type="text"] {
                width: 500px;
                padding: 10px; /* Adjust padding as needed */
                border-radius: 10px; /* Set border-radius for rounded corners */
                border: 1px solid #ced4da; /* Border color */
            }

        </style>
        <div class="row">
            @foreach ($product as $prod)

            <div class="single_dish col-lg-4 col-md-6 text-center" >
              <a href="{{url('/product_details',$prod->id)}}">
                <div class="thumb">

                    <img class="img-fluid" src="{{ asset($prod->image) }}" alt="{{ $prod->name_prod }}" >

                </div>
                <h4>{{ $prod->name_prod }}</h4>
                <p>
                    {{ $prod->description }}
                </p>
                <h5 class="price">  {{ $prod->price }}.D.A</h5>
            </a>
            </div>

            @endforeach
             {{-- Display Artisan Profiles --}}
             @foreach ($artisan as $artisa)
             <div class="single_dish col-lg-4 col-md-6 text-center">
                 <a href="{{ url('/artisan_profile', $artisa->id) }}">
                     <div class="thumb">
                         {{-- You may want to replace this with the artisan's profile image --}}

                     </div>
                     <h4>{{ $artisa->name }}</h4>
                     {{-- Add other artisan details as needed --}}
                 </a>
             </div>
         @endforeach
        </div>
    </div>
</section>
