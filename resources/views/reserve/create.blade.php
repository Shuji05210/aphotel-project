<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>宿泊予約フォーム</title>
</head>


<body>
    <h2 class="">宿泊予約フォーム</h2>

<div>
    
    <form method="post" action ="{{ route ('reserve.store') }}">@csrf
        <div>
        <label for="name">宿泊人数</label>
        <input type="text" name="people" id="people" placeholder="人数を入力" value= "{{old ('name')}}">
        </div>

        <br>
        
        <div>
            <label for="checkin_date">チェックイン日時</label>
            <input type="text" name="checkin_date" id="checkin_date" placeholder="日時を入力 例:20240901" value= "{{old ('checkin_date')}}">
        </div>
        
        <br>
        
        <label for="checkout_date">チェックアウト日時</label>
        <input type="text" name="checkout_date" id="checkout_date" placeholder="日時を入力 例:20240901" value= "{{old ('checkout_date')}}">

        <br>
        <br>

        <input type="submit" value="登録" class="form-control-sm">
    </form>
</div>
    
</body>
</html>
