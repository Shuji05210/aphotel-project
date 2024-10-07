<x-app-layout>
    <x-slot name="header">
        <nav class="flex justify-center items-center gap-6">
            <ul class="main-nav font-medium">
                <li><a href="/guest">利用者一覧</a></li>
                <li><a href="/reserve">予約一覧</a></li>
            </ul>
            
            <ul class="main-nav font-medium text-blue-500">
                <li><a href="/room">部屋一覧</a></li>
                <li><a href="/roomtype">部屋種別一覧</a></li>
            </ul>

            <ul class="main-nav font-medium text-green-500">
                <li><a href="/guest/create">利用者登録</a></li>
                <li><a href="/reserve/create">予約登録</a></li>
            </ul>

            <ul class="main-nav font-medium">
                <li><a href="/room/create">部屋情報登録</a></li>
                <li><a href="/roomtype/create">部屋種別登録</a></li>
            </ul>

            <ul class="main-nav font-medium text-purple-500">
                <li><a href="/reservedetail/create">予約明細登録</a></li>
                <li><a href="/reservedetail/">予約明細一覧</a></li>
            </ul>
        </nav>

        <div class="mt-8"></div>

        <h2 class="text-center font-semibold text-xl text-gray-800 leading-tight">
            予約情報 一覧
        </h2>
        <p class="text-center font-medium text-l">Reserve index</p>
    </x-slot>

    <div class="p-4 flex justify-center items-center h-screen text-xl">
    <table class="min-w-full border border-black">
        <thead class="bg-white">
            <tr>
                <th class="px-4 py-2">予約ID</th>
                <th class="px-4 py-2">利用者ID</th>
                <th class="px-4 py-2">お名前</th>
                <th class="px-4 py-2">住所</th>
                <th class="px-4 py-2">電話番号</th>
                <th class="px-4 py-2">人数</th>
                <th class="px-4 py-2">チェックイン</th>
                <th class="px-4 py-2">チェックアウト</th>
            </tr>
        </thead>

        <tbody class="text-center">
        @foreach($reserves as $reserve)
        <tr>
            <td class="py-2">{{$reserve->reserve_id}}</td>
            <td class="py-2">{{$reserve->user_id}}</td>
            <td class="px-4 py-2">{{$reserve->guest->name}}</td>
            <td class="px-4 py-2">{{$reserve->guest->address}}</td>
            <td class="px-4 py-2">{{$reserve->guest->tel}}</td>
            <td class="px-4 py-2">{{$reserve->people}}名</td>
            <td class="px-4 py-2">{{$reserve->checkin_date}}</td>
            <td class="px-4 py-2">{{$reserve->checkout_date}}</td>
            
        @endforeach
        </tr>
        </tbody>
    </table>
    <br>
    </div>

    </x-app-layout>

   
