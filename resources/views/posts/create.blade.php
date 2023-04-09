<x-app-layout>
    <x-slot name="header">
        　グループ作成画面
    </x-slot>
        <h1>グループ作成画面</h1>
        <form action="/groups" method="POST">
            @csrf
            <div class="title">
                <h2>Name</h2>
                <input type="text" name="post[name]" placeholder="グループ名"/>
            </div>
            <div class="body">
                <h2>Body</h2>
                <textarea name="post[body]" placeholder="活動内容"></textarea>
            </div>
            <input type="submit" value="store"/>
        </form>
       
        <div class="footer">
        <a href="/">戻る</a>
        </div>
    
 
</x-app-layout>
