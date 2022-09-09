@include('frontend.include.header')
<div class="container">
    <img src="images/checkout.jpg" style="width:100%; height:400px; ">
    <div class="row">
        <div class="col-md-7">
            <div class="card">
                <div class="card-head">
                    <h6>Basic Details</h6>
                    <hr>
                    <div class="row">
                        <form method="POST" action="/makeorder">
                            @csrf
                        <div class="col-md-6 form-group">
                            <label for="">First Name</label>
                            <input type="text" class="form-control" name='fname' value=" {{ Auth::user()->name  }}" required placeholder="Enter THe First Name">
                        </div>
                        <div class="col-md-6">
                            <label for="">Last Name</label>
                            <input type="text" name="lname" placeholder="enter your last name" required class="form-control">
                        </div>
                        <div class="col-md-6 mt-3">
                            <label for="">E-mail</label>
                            <input type="text" placeholder="enter your email" value=" {{ Auth::user()->email  }}" required name="email" class="form-control">
                        </div>
                        <div class="col-md-6 mt-3">
                            <label for="">Phone Number</label>
                            <input type="text" name="phone" placeholder="enter phone number" required class="form-control">
                        </div>
                        <div class="col-md-6 mt-3">
                            <label for="">Address</label>
                            <input type="text" placeholder="enter the address nt-3" name="address" required class="form-control">
                        </div>
                        <div class="col-md-6 mt-3">
                            <label for="">Country</label>
                            <input type="text" name="qountry" placeholder="enter the country" required class="form-control">
                        </div>
                        <div class="col-md-6 mt-3">
                            <label for="">City</label>
                            <input type="text" name="city" placeholder="enter the city" required class="form-control">
                        </div>
                        <div class="col-md mt-3">
                            <label for="">Message</label>
                            <textarea name="message" class="form-control" id="" cols="3" rows="5"></textarea>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card">
                <div class="card-head">
                    Order Details
                </div>
                <div class="card-body">
                   @php
                       $total=0;
                   @endphp
                    <table class="table">
                        <tr>
                            <td>product</td>
                            <td>qty</td>
                            <td>price</td>
                        </tr>
                        @foreach ($items as$item )
                        <tr>

                            <td>{{ $item->products->name }}</td>
                            <td>{{ $item->qty }}</td>
                            <td>{{ $item->products->selling_price*$item->qty }}</td>
                                @php
                                 $total += $item->products->selling_price* $item->qty;
                                @endphp

                        </tr>
                        @endforeach
                        <tr>
                            <td>total:{{ $total }}</td>
                            <td></td>
                            <td><button class="btn btn-danger"> Make Order<i class="fa fa-trash"></i></button></td>
                        </tr>
                    </table>
                </form>
                </div>
            </div>

        </div>
    </div>
</div>


@include('frontend.include.footer')
