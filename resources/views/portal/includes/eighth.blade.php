<section>

    <div class="container py-4">
        <a href="{{ route('category.render', [$categories[8]->slug, $categories[8]]) }}">
            <p class="cat_title">
                {{ $categories[9]->title }}
            </p>
        </a>
        <div class="row">
            <div class="col-md-12 row">

                @foreach($ninthColumnOne as $key => $columnThree)
                <div class="col-md-4">

                    <a
                        href="{{ route('post.render', ['slug' => $columnThree->slug ?? '', 'id' => $columnThree->id ?? '']) }}">
                        <div class="post_container">

                            <img class="round_image" src="{{ $columnThree->firstImagePath }}">

                            <p><span class="post_title">
                                    {{ Str::substr($columnThree->title, 0, 200) }}
                                </span>
                                <br>
                                {{-- <span class="nep_date"><i class="fa fa-calendar" aria-hidden="true"></i>{{
                                    $columnThree->getTimeDifference() }}</span> --}}
                            </p>

                        </div>
                    </a>


                </div>
                @endforeach

            </div>



        </div>

    </div>




</section>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var carouselIndicators = document.querySelectorAll("#carouselExampleIndicatorsOne .carousel-indicators button");
        var carouselItems = document.querySelectorAll("#carouselExampleIndicatorsOne .carousel-inner .carousel-item");

        carouselIndicators[0].classList.add("active");
        carouselItems[0].classList.add("active");
    });

</script>


{{-- For  खेलकुद 
<style>
    .gamesectionstart{
        background:#F1F1F1;
    }
</style>
<section class="container-fluid sectionbackground gameshero  d-flex align-items-center justify-content-center">
    <h2 class="sectionname ">खेलकुद </h2>
</section>
<section class="cover mt-5">
    <div class="container gamesectionstart rounded ">
        <div class="row">
            <div class="col-md-8">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        @foreach ($coverimages as $key => $coverimage)
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $key }}"
                            class="" aria-label="Slide {{ $key + 1 }}"></button>
                        @endforeach
                    </div>
                    <div class="carousel-inner">
                        @foreach ($coverimages as $key => $coverimage)
                        <div class="carousel-item">
                            <a
                                href="{{ route('post.render', ['slug' => $coverimage->slug ?? '', 'id' => $coverimage->id ?? '']) }}">
                               
                                <img class="d-block w-100 carousel-top-image" src="{{ $coverimage->firstImagePath }}">
                                <div class="carousel-caption d-none d-md-block">
                                    <p>{{ $coverimage->title }}</p>

                                </div>
                            </a>
                        </div>
                        @endforeach

                    </div>


                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

            </div>
            <div class="col-md-4">
                <div class="main_news">
                    <ul>
                        @foreach ($mukhyaNews->take(5) as $mukhyaPost)
                        <a href="{{ route('post.render', ['slug' => $mukhyaPost->slug ?? '', 'id' => $mukhyaPost->id ?? '']) }}" class="d-flex py-2" style="border-bottom:2px solid #ECE824">
                            
                  <img src="{{ asset("img/games2.png") }}" class="square_image"
                            alt="...">
                     <p class="post_title"> {{ $mukhyaPost->title }}</p>
                        </a>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
--}}