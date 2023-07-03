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
    
        <div class="footer">
        <a href="/participation">戻る</a>
        </div>
</div>
    
 
</x-app-layout>
