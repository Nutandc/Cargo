<div class="container-xl">
    {{--<div>--}}
    {{--<a href="{{ route('cargo', $cargo->id) }}" class="d-block color-b my-1">--}}
    {{--{{ number_format($cargo->price, 2, ".", " ") }}--}}
    {{--<small>TMT</small>--}}
    {{--</a>--}}
    {{--</div>--}}
    {{--<div>--}}
    {{--<a href="{{ route('cargo', $cargo->id) }}" class=" h5 d-block link-dark my-1">--}}
    {{--{{ $cargo->name }}--}}
    {{--</a>--}}
    {{--</div>--}}
    <div class="bg-white">
        <div class="p-3">
            <h5 class="title">
                @if($cargo->transport_id == 1)
                    <i class="fa-solid fa-plane text-primary"></i>
                @elseif($cargo->transport_id == 2)
                    <i class="fa-solid fa-ship text-primary"></i>
                @endif
                Card title</h5>
            <p class="text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
</div>
