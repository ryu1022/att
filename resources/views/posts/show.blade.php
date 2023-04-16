<x-app-layout>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>

        <h1 class="title">
            {{ $group->name }}
        </h1>
        <div class="content">
            <div class="content__post">
                <h3>本文</h3>
                <p>{{ $group->body }}</p>    
            </div>
        </div>
        <a href='/posts/event/{{$group->id}}'>イベントを作る</a>
        
        @foreach($events as $event)
            <h1 class="title">
                {{ $event->title }}
            </h1>
            <div class="content">
                <div class="content__post">
                    <p>{{ $event->body }}</p>    
                </div>
            </div>
        @endforeach
        
        <div class="footer">
        <a href="/">戻る</a>
        </div>
    
 
</x-app-layout>
