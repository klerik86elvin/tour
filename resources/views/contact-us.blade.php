<!doctype html>
<html lang="en">
<title>{{__('Обратная связь')}}</title>

@include('layouts.head')
<body>
@include('layouts.header')
<section>
    <div class="h-24 md:h-48 relative flex justify-center items-center" style="background-image: url({{asset('assets/images/service-page-img.jpg')}});">
        <div class="label absolute w-full min-h-full bg-[#0C517F] opacity-75"></div>
        <p class="text-white absolute text-2xl font-bold uppercase md:text-3xl">{{__('Обратная связь')}}</p>
    </div>
</section>
<section class="py-4">
    <div class="content px-8 md:px-0">
        <form class="md:w-3/5 md:mx-auto flex flex-col gap-4" action="{{route('contact-us.post')}}" method="post">
            @csrf
            <input class="bg-[#EEF8FF] p-2 @error('title') border border-solid border-red-500 @enderror" name="title" type="text" value="{{ old('title') }}" placeholder="{{__('Заголовок письма')}}"/>
{{--            @error('title')--}}
{{--            @enderror--}}
            <input class="bg-[#EEF8FF] p-2 @error('mail') border border-solid border-red-500 @enderror" name="mail" type="email" value="{{ old('email') }}" placeholder="{{__('Впишите ваш Электронный адрес')}}"/>
            <textarea class="bg-[#EEF8FF] p-2 @error('text') border border-solid border-red-500 @enderror" name="text" id="" cols="30" rows="10" placeholder="{{__('Напишите письмо')}}">{{ old('text') }}</textarea>
            <input class="cursor-pointer text-white bg-[#0C517F] py-4 rounded-lg md:w-3/5 md:mx-auto" type="submit" value="{{__('Отправить')}}">
            <a class="text-center py-4 w-full text-[#0C517F] border border-solid border-[#0C517F] rounded-lg md:w-3/5 md:mx-auto" href="{{redirect()->back()}}">{{__('Назад')}}</a>
            @if(session('message'))
                <p class="py-4 text-center border border-solid border-green-500 text-[#0C517F] font-bold rounded-lg">{{session()->get('message')}}</p>
            @endif
        </form>

    </div>
</section>
@include('layouts.footer')
</body>
</html>
