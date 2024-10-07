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
            利用者 登録フォーム
        </h2>
        <p class="text-center text-gray-800 leading-tight font-medium">User registration form</p>
    </x-slot>

    <div class="mt-8"></div>
    
    <div class="max-w-7xl mx-auto p-6 justify-center text-l m-auto">
        <form method = "post" action="{{ route ('guest.store') }}">@csrf
            <div class="mt-8">

               <div class="w-full flex flex-col">
                    <label for="name" class="text-l font-medium">名前 : Name</label>
                    <x-input-error :messages="$errors->get('name')" class="mt-2"/>
                        <input type="text" name="name" class="w-auto py-2 border border-gray-300 rounded-md"
                        id="name" placeholder="氏名を入力" value= "{{old ('name')}}">
               </div>

               <br>

                <div class="w-full flex flex-col">
                    <label for="address" class="text-l font-medium">住所 : Address</label>
                    <x-input-error :messages="$errors->get('address')" class="mt-2"/>
                        <input type="text" name="address" class="w-auto py-2 border border-gray-300 rounded-md"
                        id="address" placeholder="住所を入力" value= "{{old ('address')}}">
                </div>

                <br>

                <div class="w-full flex flex-col">
                    <label for="tel" class="text-l font-medium">電話番号 : Tel</label>
                    <x-input-error :messages="$errors->get('tel')" class="mt-2"/>
                        <input type="tel" name="tel" class="w-auto py-2 border border-gray-300 rounded-md"
                        id="tel" placeholder="電話番号を入力" value= "{{old ('tel')}}">
                </div>
            </div>

            <br>

            <x-primary-button class="mt-4">
                送信する
            </x-primary-button>
        </div>
        </form>

    

</x-app-layout>

