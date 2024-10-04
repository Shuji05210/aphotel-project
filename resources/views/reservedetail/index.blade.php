
<nav class="flex justify-center items-center gap-4">
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

            <ul class="main-nav">
                <li><a href="/reservedetail/create">予約明細登録</a></li>
                <li><a href="/reservedetail/">予約明細一覧</a></li>
            </ul>
        </nav>

    <body>
            <table class="table1">
        <thead>
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
 

    
    </body>