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
            予約明細 登録
        </h2>
        <p class="text-center font-medium text-l">Reserve detail form</p>
    </x-slot>

    <div class="max-w-7xl mx-auto px-6">
        <form method = "post" action="{{ route ('reservedetail.store') }}"> @csrf
            <div class="mt-8">
                <div class="w-full flex flex-col">
                    <label for="reserve_id" class="font-semibold mt-4">予約ID</label>
                    <x-input-error :messages="$errors->get('reserve_id')" class="mt-2"/>
                    <input type="text" name="reserve_id" class="w-auto py-2 border border-gray-300 rounded-md"
                    id="reserve_id" placeholder="予約IDを入力" value="{{old('reserve_id')}}">
                </div>

            <div class="w-full flex flex-col">
                    <label for="room_number" class="font-semibold mt-4">部屋ID</label>
                    <x-input-error :messages="$errors->get('room_id')" class="mt-2"/>
                    <input type="text" name="room_id" class="w-auto py-2 border border-gray-300 rounded-md" 
                    id="room_id" placeholder="1桁の数値"  value="{{old('room_id')}}">
                </div>
            

            <div class="w-full flex flex-col">
                    <label for="rest_date" class="font-semibold mt-4">宿泊日</label>
                    <x-input-error :messages="$errors->get('rest_date')" class="mt-2"/>
                    <input type="text" name="rest_date" class="w-auto py-2 border border-gray-300 rounded-md" 
                    id="rest_date" placeholder="日付を入力"  value="{{old('rest_date')}}">
                </div>
            

            <div class="w-full flex flex-col">
                    <label for="room_price" class="font-semibold mt-4">宿泊料金</label>
                    <x-input-error :messages="$errors->get('room_price')" class="mt-2"/>
                    <input type="text" name="room_price" class="w-auto py-2 border border-gray-300 rounded-md" 
                    id="room_price" placeholder="数値"  value="{{old('room_price')}}">
                </div>
            </div>

            <x-primary-button class="mt-4">
                送信する
            </x-primary-button>
        </form>
    </div>
</x-guest-layout>
