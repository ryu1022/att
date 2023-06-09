<x-app-layout>
    <x-slot name="header">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>イベント</title>
        <!-- Fonts -->
    </x-slot>
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<div class="px-36 py-9">
        <h1 class="text-3xl">イベント名</h1>
        <form action="/posts/event/{{$group->id}}/save" method="POST">
            @csrf
            <div class="title">
                <h2>title</h2>
                <input type="text" name="post[title]" placeholder="タイトル"/>
            </div>
            <div class="body">
                <h2>Body</h2>
                <textarea name="post[body]" placeholder="活動内容"></textarea>
            </div>
            <input type="submit" value="store"/>
        </form>
        <div class="footer">
            <a href="/participation">戻る</a>
        </div>
</div>
    
</x-app-layout>

