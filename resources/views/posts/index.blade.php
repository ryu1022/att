<x-app-layout>
    <x-slot name="header">
        ようこそAttendanceへ
    </x-slot>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
       
    <div class="px-36 py-9 border-gray-400">
        <h1 class="my-8 text-2xl">自分だけのグループを作る</h1>
        <p class="text-xl">Createボタンからグループを作成することができます。</p>
    </div>
    
    
    <div class="px-36 py-9">
        <h1 class="my-8 text-2xl">グループに参加する</h1>
        <p class="text-xl">Participationボタンからグループに参加することができます。</p>
    </div>
    
    <div class="px-36 py-9">
        <h1 class="my-8 text-2xl">イベントを作る</h1>
        <p class="text-xl">作成したグループ内でイベントを作ることができます。</p>
    </div>
    
</x-app-layout>