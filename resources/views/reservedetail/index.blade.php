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
            予約明細 一覧
        </h2>
        <p class="text-center font-medium text-l">Reserve detail index</p>
    </x-slot>

    
    <<div class="p-4 flex justify-center items-center h-screen text-xl">
    <table class="min-w-full border border-black">
        <thead class="bg-white">
            <tr>
                <th>予約詳細ID</th>
                <th>予約ID</th>
                <th>部屋ID</th>
                <th>宿泊日</th>
                <th>宿泊料金</th>
            </tr>
        </thead>

        <tbody>
        @foreach($reservedetails as $reservedetail)
        <tr>
            <th>{{$reservedetail->reserve_detail_id}}</th>
            <td>{{$reservedetail->reserve_id}}</td>
            <td>{{$reservedetail->room_id}}</td>
            <td>{{$reservedetail->rest_date}}</td>
            <td>{{$reservedetail->room_price}}円</td>
        @endforeach
        </tr>
        </tbody>
    </table>

    <x-app-layout>