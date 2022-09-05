<div class="sale-tour-swiper relative px-12">
    <!-- Additional required wrapper -->

    <div class="swiper-wrapper">
        <!-- Slides -->
        @foreach($saleTours as $s)
            <div class="swiper-slide relative drop-shadow-lg">
                <img class="drop-shadow-lg" src="{{$s->getFirstMediaUrl('main', 'thumb')}}" alt="">
                    <div class="absolute bottom-0 bg-[#0C517F] w-full flex justify-between items-center p-2">
                        <div>
                            <p class="text-white text-xl font-medium underline no-underline">{{$s->name}}</p>
                            <p class="text-white text-sm font-medium underline no-underline">{{$s->date->format('d.m.Y')}}</p>
                        </div>
                        <div>
                            <a class="px-8 py-1.5 border border-solid border-white flex items-center text-white" href="">
                                <span>{{__('Подробно')}}</span>
                            </a>
                        </div>
                    </div>
            </div>
        @endforeach
    </div>
    <!-- If we need pagination -->

    <!-- If we need navigation buttons -->
    <div class="button-block">
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>

    <!-- If we need scrollbar -->
</div>

<script>
    const saleTourSwiper = new Swiper('.sale-tour-swiper', {
        // Optional parameters
        direction: 'horizontal',
        // autoplay: true,
        loop: true,
        centeredSlides: true,
        slidesPerView: 1,
        spaceBetween: 30,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },


        breakpoints: {
            // when window width is >= 640px
            640: {
                slidesPerView: 3,
                spaceBetween: 85,
            },
        }});
</script>
