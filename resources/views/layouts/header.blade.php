<header class="relative px-8 py-4 md:px-0">
    <div class="flex justify-between items-center flex">
        <img class="h-16" src="{{asset('assets/images/logo.svg')}}" alt="">
        <div class="hidden md:flex gap-[4.5rem] h-9">
            <div class="menu flex items-center gap-11 text-[#0C517F] ">
                <a href="" class="uppercase active">{{__('о нас')}}</a>
                <a href="" class="uppercase">{{__('туры')}}</a>
                <a href="" class="uppercase">{{__('услуги')}}</a>
                <a href="" class="uppercase">{{__('обратная связь')}}</a>
            </div>

            <div class="socials flex items-center gap-5">
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
        <div class="mobile-menu flex md:hidden z-50">
            <a href="" class="flex text-[#0C517F] text-sm gap-2">
                <p>{{__('Sual var')}}?</p>
                <img src="{{asset('/assets/images/question.svg')}}" alt="">
            </a>
            <a href="" onclick="event.preventDefault(); f()">
                <img class="ml-8" src="{{asset('/assets/images/menu.svg')}}" alt="">
            </a>
            <div class="menu-mobile hidden py-10 gap-4 absolute flex flex-col items-center text-white font-light bg-[#0C517F] top-24 right-0">
                <div class="lang-mobile mx-12 gap-2 text-sm flex items-center">
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
                <a href="" class="uppercase font-light" onclick="event.preventDefault(); openTourType()">
                    {{__('туры')}}
                    <div class="tours-type w-full bg-[#EEF8FF] text-[#0C517F]">
                        <div class="border-b border-solid">
                            <a href="">Туры по Баку</a>
                        </div>
                        <div class="border-b border-solid">
                            <a href="">Туры по Баку</a>
                        </div>
                        <div class="border-b border-solid">
                            <a href="">Туры по Баку</a>
                        </div>
                        <div class="border-b border-solid">
                            <a href="">Туры по Баку</a>
                        </div>
                        <div class="border-b border-solid">
                            <a href="">Туры по Баку</a>
                        </div>
                        <div class="border-b border-solid">
                            <a href="">Туры по Баку</a>
                        </div>
                        <div class="border-b border-solid">
                            <a href="">Туры по Баку</a>
                        </div>
                    </div>
                </a>
                <a href="" class="uppercase">{{__('услуги')}}</a>
                <a href="" class="uppercase">{{__('обратная связь')}}</a>
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
</header>

<script>
    function f() {
        // console.log(document.querySelector('.menu-mobile').classList.toggle('hidden'))
       document.querySelector('.menu-mobile').classList.toggle('hidden')
    }

    function openTourType() {
        document.querySelector('.tours-type').classList.toggle('hidden')
    }
</script>