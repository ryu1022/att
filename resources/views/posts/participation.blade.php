<x-app-layout>
    <x-slot name="header">
        　グループ参加画面
    </x-slot>
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @if(isset($success))
    {{dd($success)}}
    @endif

<div class="px-36 py-9 text-xl">
    
    @foreach ($groups as $group)
        <form action="{{ route('participation.join') }}" method="POST">
            @csrf 
        
            <div class='posts'>
                   <input type="hidden" name="group_id" value="{{$group->id}}"> 
                <div class='post my-8 text-2xl'>
                    <a href="/posts/{{ $group->id }}">{{ $group->name }}</a>
                    <p class='body'>{{ $group->body }}</p>
                    @if($group->isMenber(Auth::user()->id))
                    <div class="text-red-800">参加済みです</div>
                    @else
                    <button class="bg-indigo-700 text-xl" type="submit">参加する</button>
                    @endif
                </div>
                
            </div>
        </form>
    @endforeach
    
        <div class="footer text-xl">
            <a href="/">戻る</a>
        </div>
    </div>
     
</div>
    
    
</x-app-layout>

