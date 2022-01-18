{{-- @dd($fotos[0]['fotoAda'][0]->filename) --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    {{-- google font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">

    {{-- css --}}
    <link rel="stylesheet" href="/css/home.css">

    <title>Kota Depok</title>
</head>

<body>
    {{-- Topbar --}}


    @include('partials.topbar')


    {{-- Konten --}}
    <div class="main detail">
        @if ($data[0]->category_id >= 10)
            <h2>Berita</h2>
            <div class="detail-columns flex">
                <div class="sticky-container">
                    <img src="/images/home-screen/berita.jpg" alt="feature image" class="sticky-item">
                </div>
                <div>
                    <div class="berita-header">
                        <h2>Lorem ipsum dolor sit amet consectetur.</h2>
                        <pre>posted on 9 hours ago</pre>
                        <pre>Kategori Ekonomi</pre>
                    </div>
                    <p>Lorem ipsum dolor sit amet
                        consectetur, adipisicing elit. Exercitationem amet id molestiae, autem hic
                        mollitia repellendus, deserunt at commodi nam debitis unde natus sed eos nobis sunt sit consequuntur
                        iste
                        officia possimus odio? Deleniti, explicabo assumenda quis recusandae ab, non at nobis culpa accusamus
                        porro
                        fugiat saepe tempore voluptatem nulla? Quam totam quas doloremque sed laudantium ducimus, inventore
                        nulla
                        animi neque rem voluptatibus. Consequatur quisquam omnis porro iure voluptas culpa voluptates eius quos,
                        iusto perferendis est expedita eveniet laudantium eos soluta accusamus repudiandae voluptatum quas
                        deserunt
                        distinctio quid.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati explicabo possimus, sunt voluptatum
                        reprehenderit quas corrupti praesentium blanditiis cumque repellendus eos, accusantium necessitatibus
                        debitis voluptatibus dicta et quaerat qui iure labore sequi nisi quidem! Iusto in necessitatibus quia
                        sequi
                        accusamus itaque eos voluptatem vitae dignissimos ducimus. Nam, necessitatibus! Sequi, eum laborum
                        sapiente,
                        ad dolorum veniam obcaecati error quae autem cupiditate itaque quasi fugiat amet? Ducimus, similique
                        doloribus suscipit ipsum ab maiores. Maiores, ex atque, natus illum temporibus magnam dicta quos
                        deserunt
                        minima quibusdam reiciendis at quas, ducimus officia blanditiis error? Pariatur quos amet itaque animi
                        est.
                        Quis, deleniti, adipisci voluptate dolorem.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati explicabo possimus, sunt voluptatum
                        reprehenderit quas corrupti praesentium blanditiis cumque repellendus eos, accusantium necessitatibus
                        debitis voluptatibus dicta et quaerat qui iure labore sequi nisi quidem! Iusto in necessitatibus quia
                        sequi
                        accusamus itaque eos voluptatem vitae dignissimos ducimus. Nam, necessitatibus! Sequi, eum laborum
                        sapiente,
                        ad dolorum veniam obcaecati error quae autem cupiditate itaque quasi fugiat amet? Ducimus, similique
                        doloribus suscipit ipsum ab maiores. Maiores, ex atque, natus illum temporibus magnam dicta quos
                        deserunt
                        minima quibusdam reiciendis at quas, ducimus officia blanditiis error? Pariatur quos amet itaque animi
                        est.
                        Quis, deleniti, adipisci voluptate dolorem unde vel.</p>
                </div>
            </div>
            <div class="gallery-frame">
                <h2>Gallery foto</h2>
                <div class="gallery-scroll flex">
                    <img src="/images/home-screen/berita.jpg">
                    <img src="/images/home-screen/h1c.jpg">
                    <img src="/images/home-screen/berita.jpg">
                    <img src="/images/home-screen/h2b.jpeg">
                    <img src="/images/home-screen/berita.jpg">
                    <img src="/images/home-screen/berita.jpg">
                    <img src="/images/home-screen/berita.jpg">
                    <img src="/images/home-screen/berita.jpg">
                </div>
            </div>

            <div class="gallery-frame">
                <h2>Gallery video</h2>
                <div class="gallery-scroll flex">
                    <img src="/images/home-screen/berita.jpg">
                    <img src="/images/home-screen/berita.jpg">
                    <img src="/images/home-screen/berita.jpg">
                </div>
            </div>
        @else
            <h2>Profil Wisata</h2>
            <div class="detail-columns flex">
                <div class="sticky-container">
                    {{-- @if (count($foto) > 0)    --}}
                    <img src="/images/home-screen/berita.jpg" alt="feature image" >
                    {{-- @endif --}}
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th scope="row">Nama</th>
                                <td>{{ $data[0]->nama }}</td>
                            </tr>
                            <tr>
                                <th scope="row">No. Telp</th>
                                <td>{{ $data[0]->no_telp }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Alamat</th>
                                <td>{!! $data[0]->alamat !!}</td>
                            </tr>
                            @if ($data[0]->instagram) 
                            <tr>
                                <th scope="row">Instagram</th>
                                <td>@{{ $data[0]->instagram }}</td>
                            </tr>
                            @endif
                            @if ($data[0]->youtube)    
                            <tr>
                                <th scope="row">youtube</th>
                                <td>{{ $data[0]->youtube }}</td>
                            </tr>
                            @endif
                            @if ($data[0]->twitter)    
                            <tr>
                                <th scope="row">Twitter</th>
                                <td>{{ $data[0]->twitter }}</td>
                            </tr>
                            @endif
                            @if ($data[0]->facebook)    
                            <tr>
                                <th scope="row">Facebook</th>
                                <td>{{ $data[0]->facebook }}</td>
                            </tr>
                            @endif
                            @if ($data[0]->whatsapp)    
                            <tr>
                                <th scope="row">Whatsapp</th>
                                <td>{{ $data[0]->whatsapp }}</td>
                            </tr>
                            @endif
                            @if ($data[0]->website)    
                            <tr>
                                <th scope="row">Website</th>
                                <td>{{ $data[0]->website }}</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
               
                <div>
                    <div class="berita-header">
                        <h2>{{ $data[0]->nama }}</h2>
                        <pre>posted on 9 hours ago</pre>
                    </div>
                    <h5>Pengelola</h5>
                    {!! $data[0]->pengelola !!}
                    <h5>Deskripsi</h5>
                    {!! $data[0]->deskripsi !!}
                </div>
            </div>


            @if (count($koleksiFoto) > 0)
            <div class="gallery-frame">
                <h2>Gallery foto</h2>
                <div class="gallery-scroll flex">
                    @foreach ($koleksiFoto as $item)
                    <img src="{{ asset('storage/'. $fotos[0]['fotoAda'][0]->filename) }}">
                    @endforeach
                </div>
            </div>
            @endif 
            @if (count($koleksiVideo) > 0)  
            <div class="gallery-frame">
                <h2>Gallery video</h2>
                <div class="gallery-scroll flex">
                    @foreach ($koleksiVideo as $item)
                    <video src="{{ asset('storage/'. $videos[0]['videoAda'][0]->filename) }}"></video>
                    @endforeach
                </div>
            </div>
            @endif
            
            
        @endif
    </div>
    {{-- menu --}}


    @include('partials.menu')


    {{-- javascript --}}
    <script src="js/home-screen.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript" src="../js/imageMapResizer.min.js"></script>
    <script type="text/javascript">
        $('map').imageMapResize();

    </script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous">
    </script>
</body>

</html>
