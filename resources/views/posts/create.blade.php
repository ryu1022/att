<x-app-layout>
    <x-slot name="header">
        　グループ作成画面
    </x-slot>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
     
    <div class="px-36 py-9 border-gray-400">
        <h1 class="my-8 text-2xl">グループ作成画面</h1>
        <form action="/groups" method="POST">
            @csrf
            <div class="title">
                <h2 class="text-xl">Name</h2>
                <input type="text" name="post[name]" placeholder="グループ名"/>
            </div>
            <div class="body">
                <h2 class="text-xl">Body</h2>
                <textarea name="post[body]" placeholder="活動内容"></textarea>
            </div>
            <input type="submit" value="store"/>
        </form>
       
        <div class="footer text-xl">
        <a href="/">戻る</a>
        </div>
    </div>
</x-app-layout>
