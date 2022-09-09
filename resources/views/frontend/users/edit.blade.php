@include('frontend.include.header')


<div class="card">
    <div class="card-header"><h3>Edit Profile</h3></div>
    <div class="card-body">
        <form method="POST" action="/profile/update/{{ Auth::user()->id }}"  enctype="multipart/form-data" >
            @csrf
        <div class="form-group">
            <label for="">user name</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="">E-mail</label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="password" name="password" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Avatar</label>
            <input type="file" name="avatar" class="form-control">
        </div>
        <button class="btn btn-success">update</button>
    </form>
    </div>
</div>






@include('frontend.include.footer')
