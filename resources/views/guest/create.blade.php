<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>登録フォーム</title>

</head>


<body>

    <header>
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
    </header>


    <div class="mt-8"></div>

    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      利用者 登録
    </h2>
    
    <div class="max-w-7xl mx-auto px-6">
        <form method = "post" action="{{ route ('guest.store') }}">@csrf
            <div class="mt-8">

               <div class="w-full flex flex-col">
                    <label for="name">名前</label>
                    <x-input-error :messages="$errors->get('name')" class="mt-2"/>
                        <input type="text" name="name" class="w-auto py-2 border border-gray-300 rounded-md"
                        id="name" placeholder="名前" value= "{{old ('name')}}">
               </div>

               <br>

                <div class="w-full flex flex-col">
                    <label for="address">住所</label>
                    <x-input-error :messages="$errors->get('address')" class="mt-2"/>
                        <input type="address" name="address" class="w-auto py-2 border border-gray-300 rounded-md"
                        id="address" placeholder="住所" value= "{{old ('address')}}">
                </div>

                <br>

                <div class="w-full flex flex-col">
                    <label for="tel">電話番号</label>
                    <x-input-error :messages="$errors->get('tel')" class="mt-2"/>
                        <input type="tel" name="tel" class="w-auto py-2 border border-gray-300 rounded-md"
                        id="tel" placeholder="電話番号" value= "{{old ('tel')}}">
                </div>
            </div>

            <br>

            <x-primary-button class="mt-4">
                送信する
            </x-primary-button>
        </form>
    </div>

</div>
    
</body>
</html>
