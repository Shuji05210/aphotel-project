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
            宿泊予約
        </h2>
        <p class="text-center font-medium text-l">Reserve form</p>
    </x-slot>

    
    <div class="max-w-7xl mx-auto p-6 flex justify-center text-l m-auto">
        <div class="mt-4"></div>
        
        <form method="post" action ="{{ route ('reserve.store') }}">@csrf
            <div class="w-full flex flex-col">
                <label for="people" class="font-semibold mt-4">宿泊人数 : Number of guests</label>
                <x-input-error :messages="$errors->get('people')" class="mt-2"/>
                <input type="text" name="people" id="people" placeholder="人数を入力"
                class="w-auto py-2 border border-gray-300 rounded-md"  value= "{{old ('people')}}">
            </div>

        <div class="w-full flex flex-col">
            <label for="checkin_date" class="font-semibold mt-4">チェックイン日時 : Check in Date</label>
            <x-input-error :messages="$errors->get('checkin_date')" class="mt-2"/>
            <input type="text" name="checkin_date" id="checkin_date" placeholder="日時を入力 例:20240901"
            class="w-auto py-2 border border-gray-300 rounded-md"  value= "{{old ('checkin_date')}}">
        </div>
                
        <div class="w-full flex flex-col">
            <label for="checkout_date" class="font-semibold mt-4">チェックアウト日時 : Check out Date</label>
            <x-input-error :messages="$errors->get('checkout_date')" class="mt-2"/>
            <input type="text" name="checkout_date" id="checkout_date" placeholder="日時を入力 例:20240901"
        class="w-auto py-2 border border-gray-300 rounded-md"  value= "{{old ('checkout_date')}}">
        </div>

        <input type="submit" value="送信する" class="w-auto px-4 py-2 border border-gray-300 rounded-md mt-4">
    </form>
    </div>

</x-app-layout>
