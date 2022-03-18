@extends('layout.index')

@section('container')
    {{-- @dd($data->where('status_id', 1)->count()) --}}
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="/">Dashboard</a></li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-8">
                    <div class="row">

                        <!-- Sales Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card sales-card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>More</h6>
                                        </li>
                                        <li><a class="dropdown-item" href="/list">see all</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">UKM
                                        <span>| Events </span>
                                    </h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi ri-steam-line"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $data->where('organizer', 'ukm')->count() }}</h6>
                                            <span
                                                class="text-success small pt-1 fw-bold">{{ $datas->where('organizer', 'ukm')->count() }}</span>
                                            <span class="text-muted small pt-2 ps-1">events today</span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Sales Card -->

                        <!-- Revenue Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card revenue-card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>
                                        <li><a class="dropdown-item" href="/list">see all</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">HMP <span>| Events</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi ri-user-line"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $data->where('organizer', 'departement')->count() }}</h6>
                                            <span
                                                class="text-success small pt-1 fw-bold">{{ $datas->where('organizer', 'departement')->count() }}</span>
                                            <span class="text-muted small pt-2 ps-1">events today</span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Revenue Card -->

                        <!-- Customers Card -->
                        <div class="col-xxl-4 col-xl-12">

                            <div class="card info-card customers-card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="/list">see all</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Departement <span>| Events</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi ri-spy-line"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $data->where('organizer', 'hmp')->count() }}</h6>
                                            <span
                                                class="text-danger small pt-1 fw-bold">{{ $datas->where('organizer', 'hmp')->count() }}</span>
                                            <span class="text-muted small pt-2 ps-1">events today
                                            </span>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div><!-- End Customers Card -->

                        <!-- Recent Sales -->
                        <div class="col-12">
                            <div class="card recent-sales">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>More</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="/list">see all</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Recent Events <span>| Today</span></h5>

                                    <table class="table table-borderless datatable">
                                        <thead>
                                            @if (session()->has('success'))
                                                <div class="alert alert-success" role="alert">
                                                    {{ session('success') }}
                                                </div>
                                            @endif
                                            <tr>
                                                <th scope="col">id</th>
                                                <th scope="col">Event's name</th>
                                                <th scope="col">Execution time </th>
                                                <th scope="col">Organizer</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $d)
                                                <tr>
                                                    <th scope="row"><a href="#">{{ $d->id }}</a></th>
                                                    <td><a href="#" class="text-primary">{{ $d->name }}</a></td>
                                                    <td>{{ $d->executing }}</td>
                                                    <td>{{ $d->organizer }}</td>
                                                    <td><span
                                                            class="badge bg-{{ $d->status->name === 'aproved' ? 'primary' : '' }}{{ $d->status->name === 'pending' ? 'danger' : '' }}{{ $d->status->name === 'started' ? 'success' : '' }}{{ $d->status->name === 'finished' ? 'dark' : '' }} ">{{ $d->status->name }}</span>
                                                    </td>
                                                    <td>
                                                        <form action="/delete/{{ $d->id }}" method="post"
                                                            class="d-inline">
                                                            @method('delete')
                                                            @csrf
                                                            <button class="badge bg-danger border-0"
                                                                onclick="return confirm('apakah anda yakin')">delete</button>
                                                        </form>
                                                        <a href="#" class="badge bg-primary">update</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div><!-- End Recent Sales -->

                    </div>
                </div><!-- End Left side columns -->

                <!-- Right side columns -->
                <div class="col-lg-4">

                    <!-- Recent Activity -->
                    <div class="card">
                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                    class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>More</h6>
                                </li>

                                <li><a class="dropdown-item" href="/list">see all</a></li>
                            </ul>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Jadwal acara <span>| Events</span></h5>

                            <div class="activity">

                                <div class="activity-item d-flex">
                                    <div class="activite-label">today</div>
                                    <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                                    <div class="activity-content">
                                        {{-- <a href="#" class="fw-bold text-dark">FESDA {{ $dt->toDateString() }} |
                                            {{ $d->executing }}</a> --}}
                                        @foreach ($data as $d)
                                            {{ $dt->toDateString() === $d->executing ? $d->name . ',' : '' }}
                                        @endforeach
                                    </div>
                                </div><!-- End activity item-->

                                <div class="activity-item d-flex">
                                    <div class="activite-label">2 days</div>
                                    <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                                    <div class="activity-content">
                                        @php
                                            $dt->addDays(1);
                                        @endphp
                                        @foreach ($data as $d)
                                            {{ $dt->toDateString() === $d->executing ? $d->name . ',' : '' }}
                                        @endforeach
                                    </div>
                                </div><!-- End activity item-->

                                <div class="activity-item d-flex">
                                    <div class="activite-label">3 days</div>
                                    <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                                    <div class="activity-content">
                                        @php
                                            $dt->addDays(1);
                                        @endphp
                                        @foreach ($data as $d)
                                            {{ $dt->toDateString() === $d->executing ? $d->name . ',' : '' }}
                                        @endforeach
                                    </div>
                                </div><!-- End activity item-->

                                <div class="activity-item d-flex">
                                    <div class="activite-label">4 days</div>
                                    <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                                    <div class="activity-content">
                                        @php
                                            $dt->addDays(1);
                                        @endphp
                                        @foreach ($data as $d)
                                            {{ $dt->toDateString() === $d->executing ? $d->name . ',' : '' }}
                                        @endforeach
                                    </div>
                                </div><!-- End activity item-->

                                <div class="activity-item d-flex">
                                    <div class="activite-label">5 days</div>
                                    <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                                    <div class="activity-content">
                                        @php
                                            $dt->addDays(1);
                                        @endphp
                                        @foreach ($data as $d)
                                            {{ $dt->toDateString() === $d->executing ? $d->name . ',' : '' }}
                                        @endforeach
                                    </div>
                                </div><!-- End activity item-->

                                <div class="activity-item d-flex">
                                    <div class="activite-label">6 days </div>
                                    <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                                    <div class="activity-content">
                                        @php
                                            $dt->addDays(1);
                                        @endphp
                                        @foreach ($data as $d)
                                            {{ $dt->toDateString() === $d->executing ? $d->name . ',' : '' }}
                                        @endforeach
                                    </div>
                                </div>

                                <div class="activity-item d-flex">
                                    <div class="activite-label">7 days </div>
                                    <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                                    <div class="activity-content">
                                        @php
                                            $dt->addDays(1);
                                        @endphp
                                        @foreach ($data as $d)
                                            {{ $dt->toDateString() === $d->executing ? $d->name . ',' : '' }}
                                        @endforeach
                                    </div>
                                </div>
                                <!-- End activity item-->

                            </div>

                        </div>
                    </div><!-- End Recent Activity -->

                    <!-- News & Updates Traffic -->
                    <div class="card">
                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                    class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>More</h6>
                                </li>

                                <li><a class="dropdown-item" href="/list">see all</a></li>
                            </ul>
                        </div>

                        <div class="card-body pb-0">
                            <h5 class="card-title">Event News <span>| Today</span></h5>

                            <div class="news">
                                <div class="post-item clearfix">
                                    <img src="assets/img/news-1.jpg" alt="">
                                    <h4><a href="#">{{ $news->first()->title }}</a></h4>
                                    <p>{{ $news->first()->body }}</p>
                                </div>

                                <div class="post-item clearfix">
                                    <img src="assets/img/news-2.jpg" alt="">
                                    <h4><a href="#">{{ $news->skip(1)->first()->title }}</a></h4>
                                    <p>{{ $news->skip(1)->first()->body }}</p>
                                </div>

                                <div class="post-item clearfix">
                                    <img src="assets/img/news-3.jpg" alt="">
                                    <h4><a href="#">{{ $news->skip(2)->first()->title }}</a></h4>
                                    <p>{{ $news->skip(2)->first()->body }}</p>
                                </div>

                                <div class="post-item clearfix">
                                    <img src="assets/img/news-4.jpg" alt="">
                                    <h4><a href="#">{{ $news->skip(3)->first()->title }}</a></h4>
                                    <p>{{ $news->skip(3)->first()->body }}</p>
                                </div>

                                <div class="post-item clearfix">
                                    <img src="assets/img/news-5.jpg" alt="">
                                    <h4><a href="#">{{ $news->skip(4)->first()->title }}</a></h4>
                                    <p>{{ $news->skip(4)->first()->body }}
                                    </p>
                                </div>

                            </div><!-- End sidebar recent posts-->

                        </div>
                    </div><!-- End News & Updates -->

                </div><!-- End Right side columns -->

            </div>
        </section>

    </main><!-- End #main -->
@endsection
