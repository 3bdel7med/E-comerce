@include('frontend.include.header')
<div class="bg-success">
<nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item active">Shop</li>
    </ol>
  </nav>
<div class="row">



    <div class="col-md-12">
        <ul class="product-list grid-products equal-container">
            <div class="row row-cols-12 align-items-stretch py-5">
         @foreach ($product as $product )
            <div class="col m-2">
                <a style="color: black;" href="/category/product/{{$product->id}}">
              <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('/{{ $product->image }}');">
                <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                  <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold" style="color: white">{{ $product->name }}</h2>
                  <ul class="d-flex list-unstyled mt-auto">
                    <li class="me-auto">
                      {{ $product->small_description }}
                    </li>
                    <li class="d-flex align-items-center me-3">
                      <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                      <small>Earth</small>
                    </li>
                    <li class="d-flex align-items-center">
                      <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
                      <small><button class="btn btn-success">AddToCart </button></small>
                    </li>
                  </ul>
                </div>
              </div>
                </a>
            </div>

            @endforeach
            </div>
        </ul>

    </div>

</div>
</div>
@include('frontend.include.footer')
