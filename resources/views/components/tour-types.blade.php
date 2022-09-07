@foreach($tourTypes as $t)
    <div class="border-b border-solid flex gap-2 p-1 hover:bg-[#8A9EAE]">
        <img src="{{$t->getFirstMediaUrl('main')}}" alt="" style="width: 24px; height: 24px">
        <a href="{{route('tour-type', $t->id)}}">{{$t->name}}</a>
    </div>
@endforeach
