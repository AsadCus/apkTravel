@extends('main')

@section('content')
<div class="container" style="padding-block: 65px;">
    <div class="card h-100 mb-3">
        <div class="card-header">
            <a class="btn btn-outline-secondary" href="/{{ $urlBack }}" role="button">Liat {{ $title }}
                lainnya..</a>
        </div>
        @if (count($foto))
        <img src="{{asset("storage/".$foto[0]->filename)}}" class="img-fluid rounded" alt="..." style="height: 360px; object-fit: cover;">
        @endif
        <div class="card-body">
            <div class="h3 mb-3">{{ $data->first()->judul }}</div>
            {!! $data[0]->body !!}
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="d-flex align-items-center gap-3">
                <div>
                    <h6 class="card-subtitle text-muted">{{ $title }}</h6>
                </div>
            </div>
            @if (count($koleksis))
                @if ($koleksiFoto)
                    @foreach ($koleksiFoto as $item)
                    <hr>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $item->nama }}</h6>
                    <div id="carouselExampleIndicators{{ $item->id }}" class="carousel slide" data-bs-ride="true">
                        <div class="carousel-indicators">
                            @for ($i = 0; $i < count($item->foto); $i++)
                                <button type="button" data-bs-target="#carouselExampleIndicators{{ $item->id }}"
                                    data-bs-slide-to="{{ $i }}" @if ($i==0) class="active" @endif" aria-current="true"
                                    aria-label="Slide {{ $i+1 }}"></button>
                                @endfor
                        </div>
                        <div class="carousel-inner rounded gallery" style="background: rgba(0, 0, 0, 0.25);">
                            @for ($i = 0; $i < count($item->foto); $i++)
                                <div class="carousel-item @if ($i == 0) active @endif">
                                    <a href="{{ asset('storage/'. $item->foto[$i]->filename) }}" class="d-block w-100"><img
                                            src="{{ asset('storage/'. $item->foto[$i]->filename) }}" class="d-block w-100"
                                            alt="..." style="height: 250px; object-fit: scale-down;"></a>
                                </div>
                                @endfor
                        </div>
                        <button class="carousel-control-prev" type="button"
                            data-bs-target="#carouselExampleIndicators{{ $item->id }}" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button"
                            data-bs-target="#carouselExampleIndicators{{ $item->id }}" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    @endforeach
                @endif
                @if ($koleksiVideo)
                    @foreach ($koleksiVideo as $item)
                    <hr>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $item->nama }}</h6>
                    <div id="carouselExampleIndicators{{ $item->id }}" class="carousel slide" data-bs-ride="true">
                        <div class="carousel-indicators">
                            @for ($i = 0; $i < count($item->video); $i++)
                            <button type="button" data-bs-target="#carouselExampleIndicators{{ $item->id }}" data-bs-slide-to="{{ $i }}"
                            @if ($i == 0) class="active" @endif" aria-current="true" aria-label="Slide {{ $i+1 }}"></button>
                            @endfor
                        </div>
                        <div class="carousel-inner rounded gallery" style="background: rgba(0, 0, 0, 0.25);">
                            @for ($i = 0; $i < count($item->video); $i++)
                            <div class="carousel-item @if ($i == 0) active @endif">
                                <a href="{{ asset('storage/'. $item->video[$i]->filename) }}" class="d-block w-100"><video src="{{ asset('storage/'. $item->video[$i]->filename) }}" class="d-block w-100" alt="..." style="height: 250px;margin: auto; object-fit: scale-down;" controls></a>
                            </div>
                            @endfor
                        </div>
                        <button class="carousel-control-prev" type="button"
                            data-bs-target="#carouselExampleIndicators{{ $item->id }}" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button"
                            data-bs-target="#carouselExampleIndicators{{ $item->id }}" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    @endforeach
                @endif
            @endif
        </div>
    </div>
</div>
@endsection
