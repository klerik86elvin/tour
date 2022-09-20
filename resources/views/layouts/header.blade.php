<header class="bg-[#EEF8FF]">
    <div class="content relative px-8 py-4 md:px-0">
        <div class="flex justify-between items-center flex">
            <a href="/">
                <img class="h-16" src="{{asset('assets/images/logo.svg')}}" alt="">
            </a>
            <div class="hidden md:flex gap-[4.5rem] h-9">
                <div class="menu flex relative items-center gap-11 text-[#0C517F] ">
                    <a href="{{route('about-us')}}" class="uppercase{{request()->segment(1) === 'about-us' ? ' active' : ''}}">{{__('о нас')}}</a>
                    <a href="#" onclick="openTourType()" class="uppercase cursor-pointer relative">
                        {{__('туры')}}
                        <div class="hidden tours-type absolute bg-[#EEF8FF] text-[#0C517F] z-50 top-20">
                            @include('components.tour-types')
                        </div>
                    </a>
                    <a href="{{route('service')}}" class="uppercase{{request()->segment(1) === 'service' ? ' active' : ''}}">{{__('услуги')}}</a>
                    <a href="{{route('contact-us')}}" class="uppercase{{request()->segment(1) === 'contact-us' ? ' active' : ''}}">{{__('обратная связь')}}</a>
                </div>
                <div class="flex">
                    <div class="lang pr-4 gap-2 text-sm flex items-center border-r-2 solid border-[#0C517F]">
                        <a href="/lang/az">
                            <img src="{{asset('assets/images/az.svg')}}" alt="">
                        </a>
                        <a href="/lang/en">
                            <img src="{{asset('assets/images/en.svg')}}" alt="">
                        </a>
                        <a href="/lang/ru">
                            <img src="{{asset('assets/images/ru.svg')}}" alt="">
                        </a>
                    </div>
                    <div class="socials pl-4 flex items-center gap-5">
                        <a href="">
                            <img src="{{asset('assets/images/lin.svg')}}" alt="">
                        </a>
                        <a href="">
                            <img src="{{asset('assets/images/inst.svg')}}" alt="">
                        </a>
                        <a href="">
                            <img src="{{asset('assets/images/yout.svg')}}" alt="">
                        </a>
                        <a href="">
                            <img src="{{asset('assets/images/fb.svg')}}" alt="">
                        </a>
                        <a href="">
                            <img src="{{asset('assets/images/twit.svg')}}" alt="">
                        </a>
                    </div>
                </div>

            </div>
            <div class="mobile-menu flex md:hidden z-50">
                <a href="" class="flex text-[#0C517F] text-sm gap-2">
                    <p>{{__('Sual var')}}?</p>
                    <img src="{{asset('/assets/images/question.svg')}}" alt="">
                </a>
                <a href="" onclick="event.preventDefault(); f()">
                    <img class="ml-8" src="{{asset('/assets/images/menu.svg')}}" alt="">
                </a>
                <div class="menu-mobile hidden py-10 gap-4 absolute flex flex-col items-center text-white font-light bg-[#0C517F] top-24 right-0">
                    <div class="lang mx-12 gap-2 text-sm flex items-center">
                        <a href="">
                            <img src="{{asset('assets/images/az.svg')}}" alt="">
                        </a>
                        <a href="">
                            <img src="{{asset('assets/images/en.svg')}}" alt="">
                        </a>
                        <a href="">
                            <img src="{{asset('assets/images/ru.svg')}}" alt="">
                        </a>
                    </div>
                    <a href="" class="uppercase active">{{__('о нас')}}</a>
                    <a href="" class="uppercase font-light" onclick="event.preventDefault(); openMobileTourType()">
                        {{__('туры')}}
                        <div class="hidden tours-type w-full bg-[#EEF8FF] text-[#0C517F]">
                            @include('components/tour-types')
                        </div>
                    </a>
                    <a href="{{route('service')}}" class="uppercase">{{__('услуги')}}</a>
                    <a href="{{route('contact-us')}}" class="uppercase">{{__('обратная связь')}}</a>
                    <div class="socials flex items-center gap-2">
                        <a href="">
                            <img src="{{asset('assets/images/lin-mob.svg')}}" alt="">
                        </a>
                        <a href="">
                            <img src="{{asset('assets/images/inst-mob.svg')}}" alt="">
                        </a>
                        <a href="">
                            <img src="{{asset('assets/images/yout-mob.svg')}}" alt="">
                        </a>
                        <a href="">
                            <img src="{{asset('assets/images/fb-mob.svg')}}" alt="">
                        </a>
                        <a href="">
                            <img src="{{asset('assets/images/twit-mob.svg')}}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<script>
    function f() {
       document.querySelector('.menu-mobile').classList.toggle('hidden')
    }

    function openMobileTourType() {
        document.querySelector('.menu-mobile .tours-type').classList.toggle('hidden')
    }
    function openTourType() {
        document.querySelector('.menu .tours-type').classList.toggle('hidden')
    }
</script>
