{{--<div>--}}
{{--<a href="{{ route('cargo', $cargo->id) }}" class="d-block color-b my-1">--}}
{{--{{ number_format($cargo->price, 2, ".", " ") }}--}}
{{--<small>TMT</small>--}}
{{--</a>--}}
{{--</div>--}}

{{--</a>--}}
{{--</div>--}}
<div class="bg-white">
    <div class="p-3">
        <h5 class="title" style="font-family: Arial;">
            @if($cargo->transport_id == 1)
                <i class="fa-solid fa-plane-departure text-primary"></i> @lang('app.air')
            @elseif($cargo->transport_id == 2)
                <i class="fa-solid fa-ship text-primary"></i> @lang('app.sea')
            @elseif($cargo->transport_id == 3)
                <i class="fa-solid fa-train-subway text-primary"></i> @lang('app.railway')
            @elseif($cargo->transport_id == 4)
                <i class="fa-solid fa-truck text-primary"></i> @lang('app.road')
            @endif
        </h5>
        <p><i class="fa-solid fa-qrcode text-primary"></i> <span class="font-monospace">{{$cargo->track}}</span></p>
        <button href="" class="btn btn-primary position-relative"><i class="fa-solid fa-angle-right text-white"></i>
            Read more
            @if($cargo->process_id == 1)
                <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
    <span class="visually-hidden"></span>
                    </span>
            @elseif($cargo->process_id == 2)
                <span class="position-absolute top-0 start-100 translate-middle p-2 bg-info border border-light rounded-circle">
    <span class="visually-hidden"></span>
                    </span>
            @elseif($cargo->process_id == 3)
                <span class="position-absolute top-0 start-100 translate-middle p-2 bg-warning border border-light rounded-circle">
    <span class="visually-hidden"></span>
                    </span>
            @elseif($cargo->process_id == 4)
                <span class="position-absolute top-0 start-100 translate-middle p-2 bg-success border border-light rounded-circle">
    <span class="visually-hidden"></span>
                    </span>
            @endif
        </button>
    </div>
</div>