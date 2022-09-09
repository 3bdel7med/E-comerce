@include('frontend.include.header')
<img src="images/cart.jpg" style="height: 400px; width: 100%">
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>My Cart</h3>
        </div>
        <div class="card-body">
            @php
                $total=0;
            @endphp
            @foreach ($items as$item )


            <div class="row">
                <div class="col-md-2">
                    <img style="width:60px; height:60px; border-redies:50%" src="/{{ $item->products->image }}" alt="">
                </div>
                <div class="col-md-5 row">
               <h3 class="col">{{ $item->products->name }}</h3>
               <h3 class="col">{{ $item->products->selling_price }}$</h3>
                </div>
                <div class="col-md-3">
                    <input type="hidden" name="product_id">
                    <label for="">Quantity</label>
                    <div style="width: 130px" class="input-group text-center mb-3">

                        <button class="input-group-text">{{ $item->qty }}</button>
                    </div>
                </div>
                <div class="col-md-2">
                    <a href="{{  url('cart/delete/'.$item->id)}}"><button class="btn btn-danger"> Delte<i class="fa fa-trash"></i></button></a>
                </div>
            </div>
            @php
                $total += $item->products->selling_price*$item->qty;
            @endphp
            @endforeach
        </div>
            <hr>
            <div class="card-footer">
                <h3>Total Price:: {{ $total }}$
               <a href="/checkout">    <button class="btn btn-outline-success float-end">Checkout</button></a>
                </h3>

            </div>


    </div>
</div>
@include('frontend.include.footer')
