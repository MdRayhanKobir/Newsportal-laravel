@extends('admin.admin_master')
@section('title')
  Update Prayer setting Page
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
                        <h4 class="card-title">Update Prayer Setting</h4>
                        <form class="forms-sample" action="{{ route('update.prayersetting',['id'=>$prayer->id]) }}" method="POST">
                            @csrf
                          <div class="form-group">
                            <label for="exampleInputUsername1">Fajr Time</label>
                            <input type="text" class="form-control" name="fajor"value="{{ $prayer->fajor }}">
                            @error('fajor')
                                <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                          </div>
                          <div class="form-group">
                            <label for="exampleInputUsername1">Dhuhr Time</label>
                            <input type="text" class="form-control" name="jahor"value="{{ $prayer->jahor }}">
                            @error('jahor')
                                <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                          </div>
                          <div class="form-group">
                            <label for="exampleInputUsername1">Asr Time</label>
                            <input type="text" class="form-control" name="asor"value="{{ $prayer->asor }}">
                            @error('asor')
                                <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                          </div>
                          <div class="form-group">
                            <label for="exampleInputUsername1">Magrib Time</label>
                            <input type="text" class="form-control" name="magrib"value="{{ $prayer->magrib }}">
                            @error('magrib')
                                <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                          </div>
                          <div class="form-group">
                            <label for="exampleInputUsername1">Isha Time</label>
                            <input type="text" class="form-control" name="esha"value="{{ $prayer->esha }}">
                            @error('esha')
                                <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                          </div>
                          <div class="form-group">
                            <label for="exampleInputUsername1">Jummah Time</label>
                            <input type="text" class="form-control" name="jummah"value="{{ $prayer->jummah }}">
                            @error('jummah')
                                <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                          </div>

                          <button type="submit" class="btn btn-primary mr-2">Update Prayer Setting</button>

                        </form>
                      </div>
                    </div>
                  </div>


            </div>
        </div>

    </section>
@endsection
