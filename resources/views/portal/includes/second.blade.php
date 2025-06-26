 <style>
    .card-fixed-height {
    height: 304px; /* Adjust as needed */
    display: flex;
    flex-direction: column;
    overflow: hidden;
}

.card-fixed-height .card-img-top {
    height: 128px;
    object-fit: cover;
    border-radius: 0.5rem 0.5rem 0 0;
    flex-shrink: 0;
}

.card-fixed-height .card-body {
    padding: 0.75rem;
    flex-grow: 1;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
}

 </style>
<section class="py-5 bg-white">
    <div class="container">
        <div class="row">
            <!-- Left Column: Category 1 -->
            <div class="col-md-8">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <a href="{{ route('category.render', [$categories[1]->slug, $categories[1]]) }}" class="text-decoration-none">
                        <h2 class="cat_title display-6 fw-bold mb-0 ">
                            {{ $categories[1]->title }}
                        </h2>
                    </a>
                    <a href="{{ route('category.render', [$categories[1]->slug, $categories[1]]) }}" class="btn btn-outline-primary btn-sm">View All</a>
                </div>
                <div class="row g-4">
                    @foreach ($secondColumnOne->take(4) as $i => $columnOne)
                        <div class="col-md-6 mb-4">
                            <div class="card shadow-sm border-0 hover-shadow h-100">
                                <a href="{{ route('post.render', ['slug' => $columnOne->slug ?? '', 'id' => $columnOne->id ?? '']) }}" class="text-decoration-none">
                                    <img class="card-img-top img-fluid" style="height: 200px; object-fit: cover; border-radius: 0.5rem 0.5rem 0 0;" src="{{ $columnOne->firstImagePath }}" alt="{{ $columnOne->title }}">
                                    <div class="card-body">
                                        <h5 class="card-title text-dark">{{ Str::limit($columnOne->title, 80) }}</h5>
                                        <p class="card-text text-muted small">{{ Str::limit($columnOne->description, 100, '...') }}</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- Right Column: Category 2 -->
            <div class="col-md-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <a href="{{ route('category.render', [$categories[2]->slug, $categories[2]]) }}" class="text-decoration-none">
                        <h2 class="cat_title display-6 fw-bold mb-0 text-success">
                            {{ $categories[2]->title }}
                        </h2> 
                    </a>
                    <a href="{{ route('category.render', [$categories[2]->slug, $categories[2]]) }}" class="btn btn-outline-success btn-sm">View All</a>
                </div>
                @foreach($secondColumnThree->take(4) as $columnThree)
                <div class="card card-fixed-height shadow-sm border-0 mb-5 hover-shadow">
                    <a href="{{ route('post.render', ['slug' => $columnThree->slug ?? '', 'id' => $columnThree->id ?? '']) }}" class="text-decoration-none">
                        <img class="card-img-top img-fluid" style="height: 200px; object-fit: cover; border-radius: 0.5rem 0.5rem 0 0;" src="{{ $columnThree->firstImagePath }}" alt="{{ $columnThree->title }}">
                        <div class="card-body d-flex flex-column justify-content-end" style="min-height: 10px;">
                            <h6 class="card-title text-dark">{{ Str::limit($columnThree->title, 60) }}</h6>
                            <p class="card-text text-muted small">{{ Str::limit($columnThree->description, 100, '...') }}</p>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    
    </div>
    <style>
        .hover-shadow:hover {
            box-shadow: 0 0.5rem 1.5rem rgba(0,0,0,0.15)!important;
            transition: box-shadow 0.3s;
        }
    </style>
</section>
