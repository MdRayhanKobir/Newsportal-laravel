<section>
    @php
        $post=DB::table('posts')->orderBy('id','desc')->first();
    @endphp
    	<div class="container-fluid">
    		<div class="row">
    			<div class="col-md-12 col-sm-12">
					<div class="date">
						<ul>
							{{-- <li><i class="fa fa-map-marker" aria-hidden="true"></i>  Dhaka </li> --}}
							{{-- <li><i class="fa fa-calendar" aria-hidden="true"></i> {{ $post->post_month }}</li> --}}
							<li><i class="fa fa-calendar" aria-hidden="true"></i> {{ Carbon\Carbon::parse($post->post_date)->format('d M ')}}</li>
							{{-- <li><i class="fa fa-clock-o" aria-hidden="true"></i> {{ $post->post_date }} </li> --}}
						</ul>

					</div>
				</div>
    		</div>
    	</div>
    </section>
