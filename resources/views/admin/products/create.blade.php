@include('admin.header')
@include('admin.sidebar')

<div class="card">
<div class="card-header">
    <h4>Add Product</h4>
</div>
<div class="card-body">
    <div class="card-body">
        @if(count($errors)>0)
    <ul class="navbar-nav mr-auto">
    @foreach($errors->all() as $error )
    <li class="alert alert-danger">
    {{$error}}
    </li>
    @endforeach

    </ul>
    @endif
    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-12 mb-3">
                <select name="cat_id" id="" class="form-select">
                    <option value="">Select a Category</option>
                    @foreach ($category as $category )
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-12 mb-3">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="col-md-12 mb-3">
                <label for="">small_description</label>
                <input type="text" name="small_description" class="form-control">
            </div>
            <div class="col-md-12 mb-3">
                <label for="">Description</label>

            <textarea name="description " id="" cols="30" rows="3"  class="form-control"></textarea>
            </div>
            <div class="col-md-12 mb-3">
             <label for="">Original_price</label>
             <input type="number" name="original_price" class="form-control">
            </div>
            <div class="col-md-12 mb-3">
                <label for="">selling_price</label>
                <input type="number" name="selling_price" class="form-control">
            </div>
            <div class="col-md-12 mb-3">
                <label for="">Qty</label>
                <input type="number" name="qty" class="form-control">
            </div>
            <div class="col-md-12 mb-3">
                <label for="">tax</label>
                <input type="number" name="tax" class="form-control">
            </div>
            <div class="col-md-12 mb-3">
                <label for="">trading</label>
                <input type="number" name="trending" class="form-control">
            </div>

            <div class="col-md-6 mb-3">
                <label for="">Stutes</label>
                <input type="checkbox" name="stutes">
            </div>

            <div class="col-md-12 mb-3">
                <label for="">Meta_title</label>
                <input type="text" name="meta_title" class="form-control">
            </div>
            <div class="col-md-12 mb-3">
                <label for="">Meta_descrip</label>
                <textarea rows="3" name="meta_descrip" class="form-control" ></textarea>
            </div>
            <div class="col-md-12 mb-3">
                <label for="">Meta_Keyword</label>
                <input type="text" name="meta_keyword" class="form-control">
            </div>
            <div class="col-md-12 mb-3">
                <label for="">Image</label>
                <input type="file" name="image" class="form-control">
            </div>
            <div class="col-md-12 mb-3">
                <button for="" class="form-control">Supmit</button>

            </div>


        </div>
    </form>
</div>


</div>




@include('admin.footer')
