@extends('portal.master')


@section('content')

@include('portal.includes.breakingnews')
@include('portal.includes.coverimage')


{{-- Popup Ad Section - Only renders if homeads exists --}}
@if (!empty($homeads))
    <div id="popup-overlay" style="display: none;">
        <div id="popup">
            <img src="{{ asset('uploads/images/ads/' . $homeads->image) }}" alt="Pop-up Image">
            <button id="close-btn">Close</button>
        </div>
    </div>
    <div id="overlay" style="display: none;"></div>


    <script>
        window.onload = function () {
            const popupAd = document.getElementById('popup-overlay');
            const overlay = document.getElementById('overlay');
            const body = document.body;
            const closeButton = document.getElementById('close-btn');


            // Function to show the pop-up ad and overlay
            function showPopup() {
                window.scrollTo(0, 0);
                popupAd.style.display = 'block';
                overlay.style.display = 'block';
                overlay.classList.add('active');
                body.style.overflow = 'hidden';
            }


            // Function to hide the pop-up ad and overlay
            function hidePopup() {
                popupAd.style.display = 'none';
                overlay.style.display = 'none';
                overlay.classList.remove('active');
                body.style.overflow = 'auto';
            }


            // Initialize popup
            showPopup();


            // Event listener for close button
            closeButton.addEventListener('click', hidePopup);


            // Listen for messages from the ad
            window.addEventListener('message', (event) => {
                if (event.data === 'closeAd') {
                    hidePopup();
                }
            });


            // Call any additional initialization functions
            if (typeof updateClock === 'function') {
                updateClock();
            }
        };
    </script>
@endif


@include('portal.includes.first')
@include('portal.includes.second')
@include('portal.includes.third')
@include('portal.includes.fourth')
@include('portal.includes.fifth')
@include('portal.includes.sixth')
@include('portal.includes.seventh')


@include('portal.includes.eighth')
<!-- @include('portal.includes.ninth') -->

@include('portal.includes.tenth')




<style>
    .sectionbackground{
        height: calc(22px + 26vh);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
        opacity: 0.8;


    }
    .educationhero{
        background-image: url({{asset("img/ed3.png")}});

    }
    .healthhero{
        background-image: url({{asset("img/health.png")}});

    }
    .gameshero{
        background-image: url({{asset("img/games2.png")}});
    }
    .imgsize{
        height: 30vh;
        width: 100%;
        object-fit: cover;
    }
    .herosection a{
        color: var(--black) !important;
    }
    .herosection a :hover{
        color: #057aa1 !important;
    }
    .herocontent{
        font-size: 22px;
    }

</style>



<div class="container">
    @if ($afterMainAd)
    <div class="top_ad">
        <a target="_blank" href="{{ $afterMainAd->url ?? '#' }}">
            <img src="{{ asset('uploads/images/ads/' . ($afterMainAd->image ?? 'default.jpg')) }}" alt="">
        </a>
    </div>
    @else
    <!-- Handle the case when no ad is found -->
    <p>No ad available.</p>
    @endif
</div>

<div class="container">
    @if ($afterBreakingAd)
    <div class="top_ad p-0 m-0 py-2">
        <a target="_blank" href="{{ $afterBreakingAd->url ?? '#' }}">
            <img src="{{ asset('uploads/images/ads/' . ($afterBreakingAd->image ?? 'default.jpg')) }}" alt="">
        </a>
    </div>
    @else
    <!-- Handle the case when no ad is found -->
    <p>No ad available.</p>
    @endif
</div>




<div class="container">
    @if ($afterMainAd)
    <div class="top_ad">
        <a target="_blank" href="{{ $afterMainAd->url ?? '#' }}">
            <img src="{{ asset('uploads/images/ads/' . ($afterMainAd->image ?? 'default.jpg')) }}" alt="">
        </a>
    </div>
    @else
    <!-- Handle the case when no ad is found -->
    <p>No ad available.</p>
    @endif
</div>



<script>
    document.addEventListener("DOMContentLoaded", function() {
        var carouselIndicators = document.querySelectorAll("#carouselExampleIndicators .carousel-indicators button");
        var carouselItems = document.querySelectorAll("#carouselExampleIndicators .carousel-inner .carousel-item");

        carouselIndicators[0].classList.add("active");
        carouselItems[0].classList.add("active");
    });

</script>












@endsection