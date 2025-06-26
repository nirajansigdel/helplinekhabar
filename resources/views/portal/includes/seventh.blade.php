<style>
    .news_card_images {
        width: 100%;
        height: 450px;
        object-fit: cover;
        transition: transform 0.3s ease;
        display: block;
    }
</style>

<section class="bgcolorforsection">
    <div class="container">
        <a href="{{ route('category.render', [$categories[8]->slug, $categories[8]]) }}">
            <p class="cat_title ">{{ $categories[8]->title }}</p>
        </a>
        <div class="d-flex flex-wrap justify-content-between">
            @foreach($eighthRow->take(3) as $rowOne)
                <div class="news_card-container">
                    <a href="{{ route('post.render', ['slug' => $rowOne->slug ?? '', 'id' => $rowOne->id ?? '']) }}">
                        <div class="news_card">
                            <div class="news_image-container">
                                <img class="news_card_images" src="{{ $rowOne->firstImagePath }}" alt="Post Image">
                                <div class="news_card_content">{{ Str::limit($rowOne->title, 80) }}</div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>
