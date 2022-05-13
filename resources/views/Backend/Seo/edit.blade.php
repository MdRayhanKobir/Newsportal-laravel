@extends('admin.admin_master')
@section('title')
  Update SEO setting Page
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
                        <h4 class="card-title">Update SEO Setting</h4>
                        <form class="forms-sample" action="{{ route('update.seosetting',['id'=>$seo->id]) }}" method="POST">
                            @csrf
                          <div class="form-group">
                            <label for="exampleInputUsername1">Meta Author</label>
                            <input type="text" class="form-control" name="meta_author" placeholder="meta author..."value="{{ $seo->meta_author }}">
                            @error('meta_author')
                                <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                          </div>
                          <div class="form-group">
                            <label for="exampleInputUsername1">Meta Title</label>
                            <input type="text" class="form-control" name="meta_title" placeholder="meta title..."value="{{ $seo->meta_title }}">
                            @error('meta_title')
                                <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                          </div>
                          <div class="form-group">
                            <label for="exampleInputUsername1">Meta Keyword</label>
                            <input type="text" class="form-control" name="meta_keyword" placeholder="meta keyword..."value="{{ $seo->meta_keyword}}">
                            @error('meta_keyword')
                                <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                          </div>
                           <div class="form-group">
                            <label for="exampleInputUsername1">Meta Description</label>
                            <textarea class="form-control" name="meta_description" id="summernote">{{ $seo->meta_description }}</textarea>
                            @error('meta_description')
                                <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                          </div>
                          <div class="form-group">
                            <label for="exampleInputUsername1">Google Analytics</label>
                            <textarea class="form-control" name="google_analytics" id="summernote">{{ $seo->google_analytics }}</textarea>
                            @error('google_analytics')
                                <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                          </div>
                          <div class="form-group">
                            <label for="exampleInputUsername1">Alexa Analytics</label>
                            <textarea class="form-control" name="alexa_analytics" id="summernote">{{ $seo->alexa_analytics }}</textarea>
                            @error('alexa_analytics')
                                <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                          </div>
                          <div class="form-group">
                            <label for="exampleInputUsername1">Google Varification</label>
                            <input type="text" class="form-control" name="google_varification" placeholder="google varification..."value="{{ $seo->google_varification}}">
                            @error('google_varification')
                                <div class="alert text-danger">{{ $message }}</div>
                            @enderror
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
