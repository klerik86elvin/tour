<!doctype html>
<html lang="en">
@include('layouts.head')
<title>Document</title>
<body>
@include('layouts.header')
<section>
    <div class="h-24 md:h-48 relative flex justify-center items-center" style="background-image: url({{asset('assets/images/service-page-img.jpg')}});">
        <div class="label absolute w-full min-h-full bg-[#0C517F] opacity-75"></div>
        <p class="text-white absolute text-2xl font-bold uppercase md:text-3xl">{{__('услуги')}}</p>
    </div>
</section>
<section class="py-4">
    <div class="content px-8 md:px-0">
        {!! $text->text !!}
    </div>
</section>
<section class="bg-[#EEF8FF]">
    <div class="content px-8 md:px-0">
        <p class="text-[#0C517F] text-center text-xl">{{__('мы работаем для Вас')}}</p>
        <p class="text-[#0C517F] text-center text-xl font-bold uppercase">{{__('наша команда')}}</p>
        <div class="dots text-center mb-4">
            <span> &#9642;</span>
            <span> &#9642;</span>
            <span> &#9642;</span>
        </div>
        <div class="persons md:grid md:grid-cols-3 md:gap-4">
            @foreach($persons as $p)
                @include('components.person.item', ['person' => $p])
            @endforeach
        </div>
    </div>
</section>
@include('layouts.footer')
</body>
</html>
