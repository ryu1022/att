<x-app-layout>
    <x-slot name="header">
        <title>Posts</title>
        <!-- Fonts -->
    </x-slot>
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
<div class="px-36 py-9">
    <div class="my-8 text-2xl">
        <div class="my-8">
            <h1 class="title">
                {{ $event->title }}
            </h1>
            <div class="content">
                <div class="content__post">
                    <p>{{ $event->body }}</p>    
                </div>
            </div>
        </div>    
    </div>
    

    <form action="{{ route('event.join', ['event' => $event->id]) }}" method="POST">
        @csrf
        <button class="text-xl" type="submit">参加する</button>
    </form><br>


    <div class="text-xl">
        <h2>参加者</h2>
        <ul>
            @foreach ($event->users as $user)
                <li>{{ $user->name }}</li>
            @endforeach
        </ul>
    </div>

        <div class="footer">
        <a href="/participation">戻る</a>
        </div>
</div>
    
 
</x-app-layout>
