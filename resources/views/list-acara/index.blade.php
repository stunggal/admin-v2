@extends('layout.index')

@section('container')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Tabs</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                    <li class="breadcrumb-item">Registration</li>
                    <li class="breadcrumb-item active">Event</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Bordered Tabs</h5>
                            @if (session()->has('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <!-- Bordered Tabs -->
                            <ul class="nav nav-tabs nav-tabs-bordered" id="borderedTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                        data-bs-target="#bordered-home" type="button" role="tab" aria-controls="home"
                                        aria-selected="true">UKM</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#bordered-profile" type="button" role="tab" aria-controls="profile"
                                        aria-selected="false">HMP</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                        data-bs-target="#bordered-contact" type="button" role="tab" aria-controls="contact"
                                        aria-selected="false">Dapartement</button>
                                </li>
                            </ul>
                            <div class="tab-content pt-2" id="borderedTabContent">
                                <div class="tab-pane fade show active" id="bordered-home" role="tabpanel"
                                    aria-labelledby="home-tab">
                                    <div class="row align-items-top">
                                        @foreach ($data as $d)
                                            @if ($d->organizer === 'ukm')
                                                <div class="col-lg-3">
                                                    <!-- Card with an image on top -->
                                                    <div class="card">
                                                        <img src="https://source.unsplash.com/500x500?programming"
                                                            class="card-img-top" alt="...">
                                                        <div class="card-body">
                                                            <h5 class="card-title">{{ $d->name }}</h5>
                                                            <p class="card-text">{{ $d->about }}</p>
                                                            <small>start in {{ $d->executing }}</small>
                                                        </div>
                                                    </div>
                                                    <!-- End Card with an image on top -->
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="bordered-profile" role="tabpanel"
                                    aria-labelledby="profile-tab">
                                    <div class="row align-items-top">
                                        @foreach ($data as $d)
                                            @if ($d->organizer === 'hmp')
                                                <div class="col-lg-3">
                                                    <!-- Card with an image on top -->
                                                    <div class="card">
                                                        <img src="https://source.unsplash.com/500x500?programming"
                                                            class="card-img-top" alt="...">
                                                        <div class="card-body">
                                                            <h5 class="card-title">{{ $d->name }}</h5>
                                                            <p class="card-text">{{ $d->about }}</p>
                                                            <small>start in {{ $d->executing }}</small>
                                                        </div>
                                                    </div>
                                                    <!-- End Card with an image on top -->
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="bordered-contact" role="tabpanel"
                                    aria-labelledby="contact-tab">
                                    <div class="row align-items-top">
                                        @foreach ($data as $d)
                                            @if ($d->organizer === 'departement')
                                                <div class="col-lg-3">
                                                    <!-- Card with an image on top -->
                                                    <div class="card">
                                                        <img src="https://source.unsplash.com/500x500?programming"
                                                            class="card-img-top" alt="...">
                                                        <div class="card-body">
                                                            <h5 class="card-title">{{ $d->name }}</h5>
                                                            <p class="card-text">{{ $d->about }}</p>
                                                            <small>start in {{ $d->executing }}</small>
                                                        </div>
                                                    </div>
                                                    <!-- End Card with an image on top -->
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div><!-- End Bordered Tabs -->
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main><!-- End #main -->
@endsection
