<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>登録フォーム</title>
</head>


<body>
    <h2 class="">登録フォーム</h2>

<div>
    <form method="post" action ="{{ route ('guest.store') }}">@csrf
        <div>
        <label for="name">名前</label>
        <input type="text" name="name" id="name" placeholder="名前" value= "{{old ('name')}}">
        </div>

        <br>
        
        <div>
            <label for="address">住所</label>
            <input type="text" name="address" id="address" placeholder="住所" value= "{{old ('address')}}">
        </div>
        
        <br>
        
        <label for="tel">電話番号</label>
        <input type="tel" name="tel" id="tel" placeholder="電話番号" value= "{{old ('tel')}}">

        <br>
        <br>

        <input type="submit" value="登録" class="form-control-sm">
    </form>
</div>
    
</body>
</html>
