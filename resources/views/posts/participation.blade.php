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
                <h2 class='name'>{{ $group->name }}</h2>
                <p class='body'>{{ $group->body }}</p>
                <button type="submit">参加する</button>
            </div>
            
        </div>
        
    </form>
    @endforeach  
        <div class="footer">
        <a href="/">戻る</a>
        </div>
    
 
</x-app-layout>
