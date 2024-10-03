

<x-app-layout>
    <x-slot name="header">
        <nav>
            <ul class="main-nav">
                <li><a href="/guest">利用者一覧</a></li>
                <li><a href="/reserve">予約一覧</a></li>
            </ul>
            <ul class="main-nav">
                <li><a href="/guest/create">利用者登録</a></li>
                <li><a href="/reserve/create">予約登録</a></li>
            </ul>

            <ul class="main-nav">
                <li><a href="/room/create">部屋登録</a></li>
                <li><a href="/roomtype/create">部屋種別登録</a></li>
            </ul>
        </nav>
        <div class="mt-8"></div>

        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            部屋 入力フォーム
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto px-6">
        <form method = "post" action="{{ route ('room.store') }}"> @csrf
            <div class="mt-8">
                <div class="w-full flex flex-col">
                    <label for="roomtype_id" class="font-semibold mt-4">部屋種別ID</label>
                    <x-input-error :messages="$errors->get('roomtype_id')" class="mt-2"/>
                    <input type="text" name="roomtype_id" class="w-auto py-2 border border-gray-300 rounded-md"
                    id="roomtype_id" placeholder="4以下の数値を入力" value="{{old('roomtype_id')}}">
                </div>

                <div class="w-full flex flex-col">
                    <label for="room_number" class="font-semibold mt-4">部屋番号</label>
                    <x-input-error :messages="$errors->get('room_number')" class="mt-2"/>
                    <input type="text" name="room_number" class="w-auto py-2 border border-gray-300 rounded-md" 
                    id="room_number" placeholder="3桁の数値"  value="{{old('room_number')}}">
                </div>
            </div>

            <x-primary-button class="mt-4">
                送信する
            </x-primary-button>
        </form>
    </div>
</x-app-layout>
