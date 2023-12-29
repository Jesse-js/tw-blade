@extends('inheritance.layout')
@section('page-title', 'Portfolio')
@section('main-content')
    <!-- Portfolio Section-->
    <section class="page-section portfolio" id="portfolio">
        <div class="container">
            <!-- Portfolio Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Portfolio</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Portfolio Grid Items-->
            <div class="row justify-content-center">
                @forelse ($projects as $project)
                    @continue(!$project['active'])
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal"
                            data-bs-target="#portfolioModal{{ $loop->iteration }}">
                            <div
                                class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i
                                        class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="/assets/img/portfolio/{{ $project['image'] }}" alt="..." />
                        </div>
                    </div>
                @empty
                    <p>No projects</p>
                @endforelse

                {{-- @includeFirst(['site.partials._pagination', 'partials._pagination', 'main._pagination']) --}}
                @include('partials._pagination', ['first' => 'first', 'last' => 'last'])
            </div>
        </div>
    </section>
@endsection
