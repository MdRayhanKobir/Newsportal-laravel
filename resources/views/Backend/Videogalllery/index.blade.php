@extends('admin.admin_master')
@section('title')
   Video Gallery Page
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
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Video's Table</h4>
                            <div class="template-demo">
                                <a href="{{ route('create.videogallery') }}"><button type="button" class="btn btn-outline-primary btn-fw mb-2" style="float:right">Add Video</button></a>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th> SL </th>
                                            <th> Video Title</th>
                                            <th> Video Embed Code </th>
                                            <th> Type </th>
                                            <th> Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                       @foreach ($video as $videos )
                                       <tr>
                                        <td>{{ $video->firstItem()+$loop->index }}</td>
                                        <td> {{ $videos->video_title }} </td>
                                        <td>{{ Str::limit($videos->embed_code, 50,) }}</td>
                                        <td>
                                            @if($videos->type==1)
                                            <span class="badge badge-success">Big videos</span>
                                            @else
                                            <span class="badge badge-info">Small videos</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('edit.videogallery',['id'=>$videos->id]) }}"class="btn btn-info">Edit</a>
                                            <a href="{{ route('delete.videogallery',['id'=>$videos->id]) }}"class="btn btn-danger" onclick=" return confirm('are you sure deleted?')">Delete</a>
                                        </td>
                                    </tr>
                                       @endforeach
                                    </tbody>
                                </table>
                                {{ $video->links('pagination-link') }}
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </section>
@endsection
