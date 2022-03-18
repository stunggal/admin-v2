@extends('layout.index')

@section('container')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Form Input Event</h1>
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
                <div class="col-lg">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">General Form Elements</h5>

                            <!-- General Form Elements -->
                            <form action="/input" method="post">
                                @csrf
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            name="name" value="{{ old('name') }}" required>
                                        @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">about</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control @error('about') is-invalid @enderror"
                                            name="about" value="{{ old('about') }}" required>
                                        @error('about')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputDate" class="col-sm-2 col-form-label">Date</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" @error('executing') is-invalid @enderror"
                                            name="executing" value="{{ old('executing') }}" required>
                                        @error('executing')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputTime" class="col-sm-2 col-form-label">Time</label>
                                    <div class="col-sm-10">
                                        <input type="time" class="form-control" @error('time') is-invalid @enderror"
                                            name="time" value="{{ old('time') }}" required>
                                        @error('time')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <fieldset class="row mb-3">
                                    <legend class="col-form-label col-sm-2 pt-0">organizer</legend>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="organizer" id="gridRadios1"
                                                value="ukm" checked>
                                            <label class="form-check-label" for="gridRadios1">
                                                UKM
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="organizer" id="gridRadios2"
                                                value="hmp">
                                            <label class="form-check-label" for="gridRadios2">
                                                HMP
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="organizer" id="gridRadios3"
                                                value="departement">
                                            <label class="form-check-label" for="gridRadios3">
                                                DEPARTEMENT
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">place</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" @error('place') is-invalid @enderror"
                                            name="place" value="{{ old('place') }}" required>
                                        @error('place')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <input type="hidden" class="form-control" name="responsible_id"
                                            value="{{ auth()->user()->id }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputNumber" class="col-sm-2 col-form-label">comitte</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="file" id="formFile"
                                            @error('comitte') is-invalid @enderror" name="comitte_id"
                                            value="{{ old('comitte') }}">
                                        @error('comitte')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Submit Button</label>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Submit Form</button>
                                    </div>
                                </div>

                            </form><!-- End General Form Elements -->

                        </div>
                    </div>

                </div>


            </div>
        </section>

    </main><!-- End #main -->
@endsection
