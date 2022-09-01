<div class="item rounded-lg flex flex-col justify-between bg-white border border-solid border-gray-500">
    <img class="rounded-lg h-80" src={{$tour->getFirstMediaUrl('main')}} alt="">
    <div class="p-3">
        <p class="text-[#0C517F] text-center font-medium text-xl">{{$tour->name}}</p>
        <p class="text-sm text-gray-500">{{$tour->options}}</p>
        <p class="text-sm text-gray-500 my-2">{{$tour->days}}</p>
        <div class="flex justify-between font-medium">
            <div class="flex items-end text-xl">
                <p>{{$tour->price}}AZN</p>
            </div>
            <a class="bg-[#0C517F] rounded-lg text-white  py-2 px-4" href="">
                <p>{{__('подробнее')}}</p>
            </a>
        </div>
    </div>
</div>
