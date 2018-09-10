@section('content')
    {{--{{ isset($bvar) ? $bvar : $title }}--}}
    {{--{{ $bvar or $title }}--}}

    {{--<ul>--}}
        {{--@for($i = 0; $i < count($dataI); $i++)--}}
            {{--<li>{{ $dataI[$i] }}</li>--}}
        {{--@endfor--}}
    {{--</ul>--}}
    {{--<ul>--}}
        {{--@foreach($data as $k=>$v)--}}
            {{--<li>{{ $k.'=>'.$v }}</li>--}}
        {{--@endforeach--}}
    {{--</ul>--}}
    {{--<ul>--}}
        {{--@forelse($data as $k=>$v)--}}
            {{--<li>{{ $k.'=>'.$v }}</li>--}}
        {{--@endforelse--}}
    {{--</ul>--}}
    {{--@while(false)--}}
        {{--<p>forever...</p>--}}
    {{--@endwhile--}}
    <div class="col-md-4">
        <h2>Heading</h2>
        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
        <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
    </div>
    <div class="col-md-4">
        <h2>Heading</h2>
        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
        <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
    </div>
    <div class="col-md-4">
        <h2>Heading</h2>
        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
        <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
    </div>
@endsection