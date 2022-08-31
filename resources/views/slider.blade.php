<section class="slider relative">
    <p class="hidden md:block text-center absolute z-10 w-full top-4 tex-lg text-white">
        +994 55 2939597 /   +994 55 4419457    /   agency@eltur.az     /    incoming@eltur.az</p>
    <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">

            <!-- Slides -->
            @foreach($slider as $s)
                <div class="swiper-slide relative">
                    <img src="{{$s->getFirstMediaUrl('main')}}" alt="">
                    <p class="text-2xl absolute uppercase font-bold text-white
                              md:text-4xl">{{$s->title}}</p>
                </div>
            @endforeach
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="button-block">
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>

        <!-- If we need scrollbar -->
    </div>
</section>

<script>
    const swiper = new Swiper('.swiper', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
        slidesPerView: 1,

        pagination: {
            el: '.swiper-pagination',
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        // If we need pagination

        breakpoints: {
            // when window width is >= 640px
            640: {

            },


        // And if we need scrollbar
    }});
    console.log(swiper)
</script>
