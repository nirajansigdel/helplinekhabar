<style>
 <style>
    .with_back {
        background: linear-gradient(180deg, #F0F8FF 0%, #DCEEFF 100%);
        padding: 60px 0;
    }

    .cat_titles {
        font-size: 22px;
        font-weight: 700;
        color:white ;    }

    .carousel-container {
        position: relative;
        overflow: hidden;
    }

    .inner-carousel {
        display: flex;
        align-items: center;
        position: relative;
        border-radius: 12px;
        height: 550px;
    }

    .track-wrapper {
        overflow: hidden;
        width: 100%;
    }

    .track {
        display: flex;
        transition: transform 0.4s ease;
    }

    .news_card-container {
        flex: 0 0 33.33%;
        padding: 15px;
        box-sizing: border-box;
    }

    .news_card {
    
        border-radius: 12px;
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    .news_image-container {
        width: 100%;
        position: relative;
        overflow: hidden;
        border-radius: 12px;
    }

    .news_card_image {
        width: 100%;
        height: 550px;
        object-fit: cover;
        transition: transform 0.3s ease;
        display: block;
    }

    .news_card:hover .news_card_image {
        transform: scale(1.05);
    }

    .news_card:hover {
        transform: scale(1.02);
        box-shadow: 0 8px 18px rgba(0, 0, 0, 0.1);
    }

    .news_card_content {
        position: absolute;
        bottom: 0;
        width: 100%;
        padding: 40px 20px;
        font-weight: 700;
        font-size: 26px;
        color: white;
        text-align: center;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
        z-index: 10;
        background: linear-gradient(
            to top,
            rgba(0, 0, 0, 0.5) 0%,
            rgba(0, 0, 0, 0.2) 60%,
            rgba(0, 0, 0, 0) 100%
        );
    }

    .prev, .next {
        background: rgba(255, 255, 255, 0.9);
        border: 2px solid #1A1F36;
        border-radius: 50%;
        cursor: pointer;
        color: #1A1F36;
        width: 48px;
        height: 48px;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 0;
        z-index: 10;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .prev:hover, .next:hover {
        background: #1A1F36;
        color: #fff;
    }

    @media (max-width: 992px) {
        .news_card-container {
            flex: 0 0 50%;
        }

        .news_card_image {
            height: 300px;
        }

        .news_card_content {
            font-size: 20px;
            padding: 25px 20px;
        }
    }

@media (max-width: 768px) {
    .carousel-container {
         width: 100%;
    }
}

    @media (max-width: 576px) {
        .news_card-container {
            flex: 0 0 100%;
        }

        .news_card_image {
            height:400px;
            padding: none;
        }

        .news_card_content {
            font-size: 16px;
            padding: 18px 15px;
            white-space: normal;
            text-overflow: unset;
        }

        .prev, .next {
            width: 40px;
            height: 40px;
            font-size: 14px;
        }
    }
</style>


<section class="with_back">
    <div class="container py-4">
        <a href="{{ route('category.render', [$categories[7]->slug, $categories[7]]) }}">
            <p class="cat_title cat_titles">{{ $categories[7]->title }}</p>
        </a>

        <div class="carousel-container">
            <div class="inner-carousel">
                <button class="prev"><i class="fas fa-arrow-left fa-lg"></i></button>
                <div class="track-wrapper">
                    <div class="track">
                        @foreach($posts as $rowOne)
                        <div class="news_card-container">
                            <a href="{{ route('post.render', ['slug' => $rowOne->slug ?? '', 'id' => $rowOne->id ?? '']) }}">
                                <div class="news_card">
                                    <div class="news_image-container">
                                        <div class="news_card_content">{{ Str::limit($rowOne->title, 80) }}</div>
                                        <img class="news_card_image" src="{{ $rowOne->firstImagePath }}" alt="Post Image">
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
                <button class="next"><i class="fas fa-arrow-right fa-lg"></i></button>
            </div>
        </div>
    </div>
</section>

<script>
    $(document).ready(function () {
        const $track = $('.track');
        const $cards = $('.news_card-container');
        const cardWidth = $cards.outerWidth(true);
        const visibleCards = 4;
        const totalCards = $cards.length;
        const maxIndex = totalCards - visibleCards;
        let currentIndex = 0;

        function setTrackPosition() {
            $track.css('transform', `translateX(-${currentIndex * cardWidth}px)`);
        }

        $('.next').on('click', function () {
            if (currentIndex < maxIndex) {
                currentIndex++;
                setTrackPosition();
            }
        });

        $('.prev').on('click', function () {
            if (currentIndex > 0) {
                currentIndex--;
                setTrackPosition();
            }
        });
    });
</script>
