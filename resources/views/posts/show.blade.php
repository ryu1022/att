<x-app-layout>
    <x-slot name="header">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
    </x-slot>
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
    <div class="px-36 py-9">

        <h1 class="title px-36 py-9 my-8 text-2xl">
            {{ $group->name }}
        </h1>
        <div class="content text-xl">
            <div class="content__post">
                <h3>本文</h3>
                <p>{{ $group->body }}</p>    
            </div>
        </div>
    
    <div class="border-2 border-blue-500 rounded-md bg-blue-400">
        <a href='/posts/event/{{$group->id}}'>イベントを作る</a>
    </div>
        
        <!-- カレンダー機能 -->
        
    <div class="border border-gray-300 rounded-lg">
        <div class="grid grid-cols-7 gap-2">
        <div class="container md">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header bg-gray-200 text-gray-600 p-2 text-3xl">
                            {{ $calendar->getTitle() }}
                        </div>
                        <div class="card-body bg-gray-200 text-gray-600 p-2 text-3xl text-center">
                            {!! $calendar->render() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
        
        <!-- イベント投稿機能 -->
    <div class="my-8 text-2xl">
        @foreach($events as $event)
        <div class="my-8">
            <h1 class="title">
                <a href="/posts/{{ $event->id }}/event_detail">{{ $event->title }}</a>
            </h1>
            <div class="content">
                <div class="content__post">
                    <p>{{ $event->body }}</p>    
                </div>
            </div>
        </div>    
        
        <!-- イベント投稿削除機能 -->
        <form action="/posts/show/{{ $event->id }}/delete" id="form_{{ $event->id }}" method="post">
          @csrf
          @method('DELETE')
         <div class="text-xl">
          <button type="button" onclick="deletePost({{ $event->id }})">削除する</button>
         </div>
        </form>
        @endforeach
    </div>
        
    
        <script>
            function deletePost(id) {
                'use strict'
                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                document.getElementById(`form_${id}`).submit();
                }
            }
                
        </script>
    
    
 
        <div class="footer">
        <a href="/participation">戻る</a>
        </div>
    </div>
    
 
</x-app-layout>
