<section class ="product_section layout_padding">
    <div class="container">
        <div class ="heading_container heading_center" style="center">
            <h2>Our products</h2>
        </div>
        <div class="row">

            @foreach ( $product as  $product )

            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="box">
                    <div class="option_container">
                        <div class="options">
                            <a href="{{url('product_details',$product->id)}}" class="option1">Détail</a></br>
                            <a href="" class="option2"> Buy Now </a>
                        </div>
                    </div>
                    <div class="img-box">
                        <img src="Product/{{$product->image}}" alt=""> 
                    </div>
                    <div class="detail-box">
                        <h5>{{$product->name_prod}}</h5>
                        <h6>{{$product->price}}</h6>
                    </div>
                </div>
            </div>

        </br> </br></br> </br></br></br></br>

            @endforeach
           {{-- <span style="padding-top::20">
                {!!$product->withQueryString()->links('pagination::boostrap-5')!!}
                </span> --}}
        </div>
    </section>



