@extends('admin.admin_master')
@section('title')
  Update LiveTV setting Page
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
                        <h4 class="card-title">Update LiveTV Setting</h4>
                        <div class="template-demo">
                            @if ($livetv->status==1)
                            <a href="{{ route('deactive.livetv',['id'=>$livetv->id]) }}">
                                <button type="button" class="btn btn-danger btn-fw " style="float:left">Deactive</button>
                            </a>
                            @else
                            <a href="{{ route('active.livetv',['id'=>$livetv->id]) }}">
                                <button type="button" class="btn btn-outline-primary btn-fw " style="float:left">Active</button>
                            </a>
                            @endif
                        </div>
                        <br><br>
                            @if ($livetv->status==1)
                            <small class="text-success">Now live tv are active</small>
                            @else
                            <small class="text-danger">Now live tv are deactive</small>
                            @endif
                            <br><br>

                        <form class="forms-sample" action="{{ route('update.livetvsetting',['id'=>$livetv->id]) }}" method="POST">
                            @csrf

                           <div class="form-group">
                            <label for="exampleInputUsername1">Embed Code for Live </label>
                            <textarea class="form-control" name="embed_code" >{{ $livetv->embed_code }}</textarea>
                            @error('embed_code')
                                <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                          </div>

                          <button type="submit" class="btn btn-primary mr-2">Update LiveTV Setting</button>

                        </form>
                      </div>
                    </div>
                  </div>


            </div>
        </div>

    </section>
@endsection
