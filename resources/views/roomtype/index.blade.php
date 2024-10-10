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
            部屋種別情報 一覧
        </h2>
        <p class="text-center font-medium text-l">Roomtype index</p>
    </x-slot>

    <div class="p-4 flex justify-center text-xl">
    <table class="border border-black">
        <thead class="bg-blue-400">
            <tr>
                <th class="px-4 py-2">部屋種別ID</th>
                <th class="px-4 py-2">部屋名</th>
                <th class="px-4 py-2">最大宿泊人数</th>
            </tr>
        </thead>

        <tbody class="text-center">
        @foreach($roomtypes as $roomtype)
        <tr>
            <td class="py-2 px-2">{{$roomtype->roomtype_id}}</td>
            <td class="py-2 px-4">{{$roomtype->room_name}}</td>
            <td class="py-2 px-4">最大 {{$roomtype->max_rest_people}}名まで</td>
            
        @endforeach
        </tr>
        </tbody>
    </table>
    <br>
    </div>

    </x-app-layout>