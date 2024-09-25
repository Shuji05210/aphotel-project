@extends('layouts.hotel')

@section('body')
    <table>
        <th>予約ID</th>
        <th>利用者ID</th>
        <th>お名前</th><th>住所</th><th>電話番号</th>
        <th>人数</th><th>チェックイン日</th><th>チェックアウト日</th>

        @foreach($reserves as $reserve)
        <tr>
            <th>{{$reserve->reserve_id}}</th>
            
            {{-- 0925 --}}
            {{-- <th>{{$reserve->guest->user_id}}</th>  --}}

            <td>{{$reserve->people}}</td>
            <td>{{$reserve->checkin_date}}</td>
            <td>{{$reserve->checkout_date}}</td>
        @endforeach
    </table>
@endsection