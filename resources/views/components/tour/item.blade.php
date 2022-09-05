<div class="item rounded-lg flex flex-col bg-white border border-solid border-gray-500">
    <img class="rounded-lg h-80" src={{$tour->getFirstMediaUrl('main', 'thumb')}} alt="">
    <div class="p-3 h-full flex flex-col justify-between">
        <p class="text-[#0C517F] text-center font-medium text-xl">{{$tour->name}}</p>
        <p class="text-sm text-gray-500">{{$tour->options}}</p>
        <p class="text-sm text-gray-500 my-2">{{$tour->days}}</p>
        <div class="flex  justify-between font-medium mt-8">
            <div class="flex items-end font-medium text-xl text-[#404040]">
                <p>{{$tour->price}}AZN</p>
            </div>
            <a class="bg-[#0C517F] rounded-lg text-white  py-2 px-4" href="/tour/{{$tour->id}}">
                <p>{{__('подробнее')}}</p>
            </a>
        </div>
    </div>
</div>
