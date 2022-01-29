@extends('layouts.main')

{{-- cuaca --}}
@section('cuaca')

{{-- @dd($foto[0][0]->filename) --}}
{{-- @dd($foto) --}}
    <div class="cuaca">
        <?php
        $city_name = 'Depok';
        $api_key = 'baf203be46efb79bfadbcd96c9e58ecd';
        $api_url = 'http://api.openweathermap.org/data/2.5/weather?q='.$city_name.'&appid='.$api_key;
        $weather_data = json_decode( file_get_contents($api_url), true);
        $temperature = $weather_data['main']['temp'];
        $temperature_in_celc = $temperature - 273.15;
        $temperature_c_w_icon = $weather_data['weather'][0]['icon'];
        echo "<img src='http://openweathermap.org/img/wn/".$temperature_c_w_icon."@2x.png' style='width: 100px' />";
        echo "<div>";
        echo "<h3 id='jam'></h3>";
        echo "<h2>";
        echo round ($temperature_in_celc).'℃';
        echo "</h2>";
        echo "</div>";
        ?>
    </div>
    <div class="waktu">
        <h3 id="date"></h3>
    </div>
    <div class="waktu">
        <p class="timertext" 
        style="font-size: 9px;">
        Tidak Interaksi Selama
        <span id="idle" class="secs"></span> Detik
        <br>
        <p style="font-size: 9px; color: red">* Tidak Interaksi Layar selama 1 menit akan berpindah ke Tampilan Video</p>
    </p>
    </div>
@endsection

{{-- detil wisata peta --}}
@section('peta-detail')
@foreach ($kecamatans as $data)
{{-- @dd($data) --}}
{{-- @dd($semuaData[$data->nama][0]['slug']) --}}
    <div id="ex{{ $data->id }}" class="modal">
        <div style="padding-bottom: 3rem">
            <center><img src="/images/home-screen/kecamatan.png" style="width: 4rem; display: inline-block; padding-block: 1rem;"><h2>{{ $data->nama }}</h2></center>
        </div>
        <div class="row">
            <div class="col-3">
                <div class="nav flex-column nav-pills" id="v-pills-tab{{ $data->id }}" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active modal-link" id="v-pills-hotel-tab{{ $data->id }}" data-toggle="pill" href="#v-pills-hotel{{ $data->id }}" role="tab" aria-controls="v-pills-hotel{{ $data->id }}" aria-selected="true" data-key="8">Hotel</a>
                    <a class="nav-link modal-link" id="v-pills-wisata-tab{{ $data->id }}" data-toggle="pill" href="#v-pills-wisata{{ $data->id }}" role="tab" aria-controls="v-pills-wisata{{ $data->id }}" aria-selected="false" data-key="1,2,3">Destinasi</a>
                    <a class="nav-link modal-link" id="v-pills-restoran-tab{{ $data->id }}" data-toggle="pill" href="#v-pills-restoran{{ $data->id }}" role="tab" aria-controls="v-pills-restoran{{ $data->id }}" aria-selected="false" data-key="4,5,6">Makanan</a>
                    <a class="nav-link modal-link" id="v-pills-kuliner-tab{{ $data->id }}" data-toggle="pill" href="#v-pills-kuliner{{ $data->id }}" role="tab" aria-controls="v-pills-kuliner{{ $data->id }}" aria-selected="false" data-key="9">Travel</a>
                    <a class="nav-link modal-link" id="v-pills-kuliner-tab{{ $data->id }}" data-toggle="pill" href="#v-pills-kuliner{{ $data->id }}" role="tab" aria-controls="v-pills-kuliner{{ $data->id }}" aria-selected="false" data-key="7">Oleh Oleh</a>
                </div>
            </div>
            <div class="col-9">
                <div class="tab-content" id="v-pills-tabContent{{ $data->id }}">
                    <div class="tab-pane fade show active" id="v-pills-hotel{{ $data->id }}" role="tabpanel" aria-labelledby="v-pills-hotel-tab{{ $data->id }}">
                        <div class="list-group">
                            @for ($i = 0; $i < count($semuaData[$data->nama]); $i++)
                                @if ($semuaData[$data->nama][$i]['category_id'] == 8)
                                <a href="show/{{ $semuaData[$data->nama][$i]['slug'] }}" class="list-group-item list-group-item-action">{{ $semuaData[$data->nama][$i]['nama'] }}</a>
                                @endif
                            @endfor
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-wisata{{ $data->id }}" role="tabpanel" aria-labelledby="v-pills-wisata-tab{{ $data->id }}">
                        <div class="list-group">
                            @for ($i = 0; $i < count($semuaData[$data->nama]); $i++)
                                @if ($semuaData[$data->nama][$i]['category_id'] == 1 || $semuaData[$data->nama][$i]['category_id'] == 2 ||$semuaData[$data->nama][$i]['category_id'] == 3)
                                <a href="show/{{ $semuaData[$data->nama][$i]['slug'] }}" class="list-group-item list-group-item-action">{{ $semuaData[$data->nama][$i]['nama'] }}</a>
                                @endif
                            @endfor
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-restoran{{ $data->id }}" role="tabpanel" aria-labelledby="v-pills-restoran-tab{{ $data->id }}">
                        {{-- <div class="jumbotron jumbotron-fluid">
                            <div class="container">
                                <center>
                                    <p class="lead">Restoran tidak tersedia</p>
                                </center>
                            </div>
                        </div> --}}
                        <div class="list-group">
                            @for ($i = 0; $i < count($semuaData[$data->nama]); $i++)
                                @if ($semuaData[$data->nama][$i]['category_id'] == 4 || $semuaData[$data->nama][$i]['category_id'] == 5 ||$semuaData[$data->nama][$i]['category_id'] == 6)
                                <a href="show/{{ $semuaData[$data->nama][$i]['slug'] }}" class="list-group-item list-group-item-action">{{ $semuaData[$data->nama][$i]['nama'] }}</a>
                                @endif
                            @endfor
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-kuliner{{ $data->id }}" role="tabpanel" aria-labelledby="v-pills-kuliner-tab{{ $data->id }}">
                        <div class="list-group">
                            @for ($i = 0; $i < count($semuaData[$data->nama]); $i++)
                                @if ($semuaData[$data->nama][$i]['category_id'] == 9)
                                <a href="show/{{ $semuaData[$data->nama][$i]['slug'] }}" class="list-group-item list-group-item-action">{{ $semuaData[$data->nama][$i]['nama'] }}</a>
                                @endif
                            @endfor
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-kuliner{{ $data->id }}" role="tabpanel" aria-labelledby="v-pills-kuliner-tab{{ $data->id }}">
                        <div class="list-group">
                            @for ($i = 0; $i < count($semuaData[$data->nama]); $i++)
                                @if ($semuaData[$data->nama][$i]['category_id'] == 7)
                                <a href="show/{{ $semuaData[$data->nama][$i]['slug'] }}" class="list-group-item list-group-item-action">{{ $semuaData[$data->nama][$i]['nama'] }}</a>
                                @endif
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    {{-- <script>
        const modalLink = document.querySelectorAll('.modal-link');
        console.log(modalLink);
    </script> --}}
@endsection
