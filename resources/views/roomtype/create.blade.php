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
            部屋種別情報 登録
        </h2>
        <p class="text-center font-medium text-l">Roomtype form</p>
    </x-slot>

    <div class="max-w-7xl mx-auto p-6 flex justify-center text-l m-auto">
        <div class="mt-4"></div>
        
        <form method = "post" action="{{ route ('roomtype.store') }}"> @csrf
                <div class="w-full flex flex-col">
                    <label for="room_name" class="font-semibold mt-4">部屋の名前</label>
                    <x-input-error :messages="$errors->get('room_name')" class="mt-2"/>
                    <input type="text" name="room_name" class="w-auto py-2 border border-gray-300 rounded-md"
                    id="room_name" placeholder="部屋名を20字以内で入力" value="{{old('room_name')}}">
                </div>

                <div class="w-full flex flex-col">
                    <label for="max_rest_people" class="font-semibold mt-4">最大宿泊人数</label>
                    <x-input-error :messages="$errors->get('max_rest_people')" class="mt-2"/>
                    <input type="text" name="max_rest_people" class="w-auto py-2 border border-gray-300 rounded-md"
                    id="max_rest_people" placeholder="宿泊可能人数を数値入力" value="{{old('room_name')}}">
                </div>
            
            <input type="submit" value="送信する" class="w-auto px-4 py-2 border border-gray-300 rounded-md mt-4">
            
        </form>
        </div>
</x-app-layout>