<x-app-layout>
    <x-slot name="header">
        　グループ参加画面
    </x-slot>
    @if(isset($success))
    {{dd($success)}}
    @endif
    @foreach ($groups as $group)
    <form action="{{ route('participation.join') }}" method="POST">
        @csrf
        <div class='posts'>
               <input type="hidden" name="group_id" value="{{$group->id}}"> 
            <div class='post'>
                <a href="/posts/{{ $group->id }}">{{ $group->name }}</a>
                <p class='body'>{{ $group->body }}</p>
                @if($group->isMenber(Auth::user()->id))
                <div>参加済みです</div>
                @else
                <button type="submit">参加する</button>
                @endif
            </div>
            
        </div>
        
    </form>
    @endforeach  
        <div class="footer">
        <a href="/">戻る</a>
        </div>
    
 
</x-app-layout>

