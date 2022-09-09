@include('frontend.include.header')
    <div>
    <h3>{{ $category->name }}</h3>
    <div class="row">
        @foreach ($data as $data)
        <div class="col-md-3 sm-6">

            <div class="card shadow-sm">
            <a href="/category/product/{{  $data->id}}">
              <img src="/{{  $data->image}}" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/>
              <div class="card-body">

                <p class="card-text">{{ $data->small_description }}.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <span class="float-start">{{ $data->selling_price }}</span>
                    <span class="float-start"></span>
                    <span class="float-end"><s>         {{"   " .$data->original_price }}</s></span>
                  </div>
                  <small class="text-muted">{{$data->created_at->diffForHumans()}}</small>
                </div>

                 </div>
                </div>
            </a>
          </div>


        @endforeach

    </div>
</body>
</html>
