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
            部屋情報 入力フォーム
        </h2>
        <p class="text-center font-medium text-l">Room form</p>
    </x-slot>

    <div class="max-w-7xl mx-auto px-6 flex justify-center items-center">
        <form method = "post" action="{{ route ('room.store') }}"> @csrf
            <div class="mt-4 py-4">

                <div class="w-full flex flex-col">
                    <label for="roomtype_id" class="font-semibold mt-4">部屋種別ID : RoomType ID</label>
                    <x-input-error :messages="$errors->get('roomtype_id')" class="mt-2"/>                    
                    <select name="roomtype_id" id="roomtype_id" class="text-left w-auto py-2 border border-gray-300 rounded-md">
                          <option value="" class="bg-gray-300">------- 部屋の種類 選択してください -------</option>
                          <option value="1">1:   松</option>
                          <option value="2">2:   竹</option>
                          <option value="3">3:   梅</option>
                          <option value="4">4:   大広間</option>
                    </select>
                </div>

                <div class="w-full flex flex-col py-4">
                    <label for="room_number" class="font-semibold mt-4">部屋番号 : Room Number</label>
                    <x-input-error :messages="$errors->get('room_number')" class="mt-2"/>
                    <input type="text" name="room_number" class="w-auto py-2 border border-gray-300 rounded-md placeholder-indigo-400" 
                    id="room_number" placeholder="3桁の数値"  value="{{old('room_number')}}">
                </div>
                        
            <input type="submit" value="送信する" class="w-auto px-4 py-2 border border-gray-300 rounded-md mt-4">
            </div>
        </form>
    </div>
</x-app-layout>
