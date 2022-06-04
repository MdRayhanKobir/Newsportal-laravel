@extends('main.home_master')
@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Address: <span class="text-primary">Kawranbazar,dhaka-1200</span></h3>
                <h3>Phone  Number: <span class="text-primary">01727038318,01633194484</span></h3>
                <h3>Email: <span class="text-primary">rayhan@gmail.com</span></h3>
                <div style="margin-top:20px"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7303.803630973972!2d90.40349417411973!3d23.75088043835629!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b888ad339cb5%3A0x20c70986185ad2ba!2sMogbazar%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1654319991929!5m2!1sen!2sbd" width="500" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="col-md-6">
                <h3>News Share</h3>
                <form action="">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter your name..">
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Address</label>
                        <input type="text" class="form-control" name="address" placeholder="Enter your Address..">
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Number</label>
                        <input type="number" class="form-control" name="address" placeholder="Enter your Number..">
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Details</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="details"></textarea>
                      </div>
                      <div class="mb-3" style="margin-top: 10px">
                        <label for="exampleFormControlTextarea1" class="form-label"></label>
                        <input type="submit" class="btn btn-primary"value="Submit">
                      </div>
                </form>

            </div>
        </div>
    </div>
</section>

@endsection
