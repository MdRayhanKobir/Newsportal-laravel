@php
    $horizontal=DB::table('adds')->where('adds.type',1)->first();
@endphp
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12  col-sm-12">
                <a href="{{$horizontal->link  }}">
                    <div class="top-add"><img src="{{ asset($horizontal->ads) }}" alt="" /></div>
                </a>
            </div>
        </div>
    </div>
</section>
