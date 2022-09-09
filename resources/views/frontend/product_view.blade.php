@include('frontend.include.header')
<link rel="stylesheet" href="css/product.css">
    <h3>{{ $product->name }}</h3>
    <div class="row">
        <div class="col-md-4 border-right">
            <img src="/{{ $product->image }}" style="height: 300px" alt="">
        </div>
        <div class="col-md-8">
            <h2 class="mb-0">{{ $product->name }}
                <label for="" class="float-end badge bg-danger">Trading</label>
            </h2>
            <hr>
            <label for="" class="me-3"> Original Price:<s>{{ $product->original_price }}</s></label>
            <label for="" class="me-3"> Selling Price:<s>{{ $product->selling_price }}</s></label>
            <p class="mt-3">{{ $product->small_descriptin }}</p>
s
        <hr>
        @if ($product->qty>0)
           <label class="badge bg-success">In Stack</label>
        @else
        <label class="badge bg-success">Out Stack</label>
        @endif
        <hr>

        <div class="row mt-2" id="qty">
            <div class="col-md-2">
                <label for="">Quantity</label>


                    <form action="/addToCart" method="post">
                        @csrf
                        <div class="input-group mb-3 text-center">
                        <span class="input-group-text">-</span>
                        <input type="number" name="qty" value="1" pattern="[0-9]*" class="form-control">
                        <span class="input-group-text" >+</span>
                      </div>
            </div>
            <div class="col-md-10">
                <br/>

                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                   <button class="btn btn-primary me-3 float-start addToCart">Add To Cart</button>
                   </form>
                   <button class="btn btn-success me-3 float-start">Add To Wishlist</button>
            </div>
        </div>
        </div>

        <div class="col-md-12">
            <button class="btn btn-success"><a href="/"> Review this product </a></button>
          </div>

    </div>
    </div>
    <div>
    </div>
    <script src="js/jquery.js"></script>
    <script>
$(document).ready(function(e){
    $('.addToCart').click(function(e){
        e.preventDefault();
        var produc_id=$(this).closest('.product_data').find('.prouduct_id').val();
    })

})
    </script>
@include('frontend.include.footer')
</body>
</html>
