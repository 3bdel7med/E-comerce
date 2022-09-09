@include('frontend.include.header')
<div style="background: #0c63e4">
<nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active">Categpry</li>
    </ol>
</nav>
    <div>

    <h3>All  Category</h3>
    <div class="row">
        @foreach ($data as $data)
        <div class="col-md-3 sm-6">
            <div class="card shadow-sm">
                <a href="/category/{{ $data->slug }}">
              <img src="/{{  $data->image}}" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/>

              <div class="card-body">

                <p class="card-text">{{ $data->description }}.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                  </div>
                  <small class="text-muted">9 mins</small>
                </div>
                </a>
              </div>
            </div>
          </div>

        @endforeach


    </div>
</div>
    @include('frontend.include.footer')
</body>
</html>
