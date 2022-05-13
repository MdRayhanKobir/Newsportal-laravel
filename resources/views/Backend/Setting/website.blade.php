@extends('admin.admin_master')
@section('title')
    Setting Page
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
                        <h4 class="card-title">Update  Setting</h4>
                        <form class="forms-sample" action="{{ route('updateallwebsite.setting',['id'=>$allWebsite->id]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputName1"> Logo Upload</label>
                                    <input type="file" name="logo" class="form-control" id="exampleFormControlFile1">
                                </div>
                                <div class="form-group col-md-6 d-flex">
                                    {{-- <label for="exampleInputName1">Present Image</label> --}}
                                    <img src="{{ asset($allWebsite->logo) }}" alt="" style="width:60px;height:60px;">
                                    <input type="hidden" name="oldimg" value="{{ $allWebsite->logo }}" >
                                </div>
                            </div>
                            {{-- end row --}}
                            <div class="form-group">
                                <label for="exampleInputUsername1">Email</label>
                                <input type="email" class="form-control" name="email"value="{{ $allWebsite->email }}">

                              </div>
                          <div class="form-group">
                            <label for="exampleInputUsername1">Phone Number English</label>
                            <input type="number" class="form-control" name="phone_eng"value="{{ $allWebsite->phone_eng }}">

                          </div>
                          <div class="form-group">
                            <label for="exampleInputUsername1">Phone Number Bangla</label>
                            <input type="number" class="form-control" name="phone_bang" value="{{ $allWebsite->phone_bang }}">

                          </div>

                           <div class="form-group">
                            <label for="exampleInputUsername1">Address English</label>
                            <textarea class="form-control" name="address_eng" id="summernote">{{ $allWebsite->address_eng }}</textarea>
                          </div>

                          <div class="form-group">
                            <label for="exampleInputUsername1">Address Bangla</label>
                            <textarea class="form-control" name="address_bang" id="summernote1">{{ $allWebsite->address_bang }}</textarea>
                          </div>

                          <button type="submit" class="btn btn-primary mr-2">Update Social Setting</button>

                        </form>
                      </div>
                    </div>
                  </div>


            </div>
        </div>

    </section>
@endsection
