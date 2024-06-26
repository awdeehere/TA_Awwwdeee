<x-base>
    <header class="page-header" data-background="images/page-header.jpg">
        <div class="inner">
            <svg width="580" height="400" class="svg-morph">
                <path id="svg_morph" d="m261,30.4375c0,0 114,6 151,75c37,69 37,174 6,206.5625c-31,32.5625 -138,11.4375 -196,-19.5625c-58,-31 -86,-62 -90,-134.4375c12,-136.5625 92,-126.5625 129,-127.5625z" />
            </svg>
            <h1>Katalog</h1>
            <p>For the latest updates about reopening, booking tickets and what's happening at the Museum, sign
                up to our newsletter</p>
        </div>
        <!-- end inner -->
    </header>
    <!-- end page-header -->
    <section class="content-section" data-background="##FDCC05">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <figure><img src="{{ url('/') }}/assets/images/logo/logo.png" alt="Image"></figure>
                        <h2>Produk <br>
                            Kain Pelangi</h2>
                    </div>
                    <!-- end section-title -->
                </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
            <div class="row justify-content-center">
                @foreach($produk as $index => $p)
                <div class="col-lg-4 col-md-6">
                    <div class="collection-box" data-scroll data-scroll-speed="{{ ($index % 5) + 1 }}">
                        <div id="carousel{{ $index }}" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                @foreach($p->carousels as $index => $carousel)
                                <li data-target="#carouselExampleIndicators" data-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}"></li>
                                @endforeach
                            </ol>
                            <div class="carousel-inner">
                                @foreach($p->carousels as $index => $carousel)
                                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                    <img class="d-block w-100" src="{{ asset($carousel->foto) }}" alt="{{ $carousel->alt_text }}">
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $p->id }}">
                            <h4 class="mt-3">{{ $p->nama }}</h4>
                        </a> -->
                        <h4 class="mt-3">
                            <a href="#" style="color: black;" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $p->id }}">
                                {{ $p->nama }}
                            </a>
                        </h4>
                        <p>{{ $p->hak_cipta }}</p>
                    </div>
                    <!-- end collection-box -->
                </div>
                @endforeach
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end content-section -->
    <section class="content-section no-spacing" data-background="#FDCC05">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="newsletter-box">
                        <div class="form">
                            <div class="titles">
                                <h6>Subscribe Newsletter</h6>
                                <h2>Sign up to get the
                                    latest news</h2>
                            </div>
                            <!-- end titles -->
                            <div class="inner">
                                <input type="email" placeholder="Enter your e-mail address">
                                <input type="submit" value="SIGN UP">
                            </div>
                            <!-- end inner -->
                            <small>Will be used in accordance with our <a href="#">Privacy
                                    Policy</a></small>
                        </div>
                        <!-- end form -->
                        <figure class="newsletter-image" data-scroll data-scroll-speed="0.7"><img src="{{ url('/') }}/frontview/images/newsletter-image.png" alt="Image">
                        </figure>
                    </div>
                    <!-- end newsletter-box -->
                </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>

</x-base>

<!-- Modal -->
@foreach($produk as $index => $p)
<div class="modal fade" id="exampleModal{{ $p->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ $p->nama }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <div class="row d-flex justify-content-center">
                        <div class="card" style="width: 25rem;">
                            <div class="card-body">
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        @foreach($p->carousels as $index => $carousel)
                                        <li data-target="#carouselExampleIndicators" data-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}"></li>
                                        @endforeach
                                    </ol>
                                    <div class="carousel-inner">
                                        @foreach($p->carousels as $index => $carousel)
                                        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                            <img class="d-block w-100" src="{{ asset($carousel->foto) }}" alt="{{ $carousel->alt_text }}">
                                        </div>
                                        @endforeach
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                        <span class="carousel-control-custom-icon" aria-hidden="true">
                                            <i class="fas fa-chevron-left"></i>
                                        </span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                        <span class="carousel-control-custom-icon" aria-hidden="true">
                                            <i class="fas fa-chevron-right"></i>
                                        </span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <dt class="font-weight-bold">NAMA</dt>
                            <dd>{{ $p->nama }}</dd>
                        </div>
                        <div class="col-md-6">
                            <dt class="font-weight-bold">HAK CIPTA</dt>
                            <dd>{{ $p->hak_cipta }}</dd>
                        </div>
                        <div class="col-md-6">
                            <dt class="font-weight-bold">DESKRIPSI</dt>
                            <dd>{{ $p->deskripsi }}</dd>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach