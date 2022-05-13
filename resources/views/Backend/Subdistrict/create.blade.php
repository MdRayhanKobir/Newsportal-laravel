@extends('admin.admin_master')
@section('title')
    SubDistrict Page
@endsection
@section('content')
    <section>
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card corona-gradient-card">
                      <div class="card-body py-0 px-0 px-sm-3">
                        <div class="row align-items-center">
                          <div class="col-4 col-sm-3 col-xl-2">
                            <img src="{{ asset('backend/assets/images/dashboard/Group126@2x.png') }}" class="gradient-corona-img img-fluid" alt="">
                          </div>
                          <div class="col-5 col-sm-7 col-xl-8 p-0">
                            <h4 class="mb-1 mb-sm-0">Welcome our newsportal</h4>
                          </div>
                          <div class="col-3 col-sm-2 col-xl-2 pl-0 text-center">
                            <span>
                              <a href="{{ url('/') }}" target="_blank" class="btn btn-outline-light btn-rounded get-started-btn">Visit Frontend?</a>
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Add Sub-District</h4>
                        <form class="forms-sample" action="{{ route('store.subdistricts') }}" method="POST">
                            @csrf
                          <div class="form-group">
                            <label for="exampleInputUsername1">Sub-District English</label>
                            <input type="text" class="form-control" name="subdistrict_eng" placeholder="subdistrict english...">
                            @error('subdistrict_eng')
                                <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Sub-District Bangla</label>
                            <input type="text" class="form-control" name="subdistrict_bang"  placeholder="subdistrict bangla...">
                            @error('subdistrict_bang')
                                <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlSelect2">Select Category</label>
                            <select class="form-control" id="exampleFormControlSelect2" name="district_id">
                              <option disabled=""selected="">--select category</option>
                              @foreach ( $district as $district )
                              <option value="{{ $district->id }}">{{ $district->district_eng }} | {{ $district->district_bang }}</option>
                              @endforeach
                            </select>
                          </div>
                          <button type="submit" class="btn btn-primary mr-2">Submit</button>

                        </form>
                      </div>
                    </div>
                  </div>


            </div>
        </div>

    </section>
@endsection
