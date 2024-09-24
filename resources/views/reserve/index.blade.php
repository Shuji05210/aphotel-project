@extends('layouts.hotel')

@section('body')
    <table>
        <th>予約ID</th>
        <th>利用者ID</th>
        <th>お名前</th><th>ご住所</th><th>電話番号</th>
        <th>人数</th><th>チェックイン日</th><th>チェックアウト日</th>

        @foreach($items as $item)
        <tr>
            <th>{{$item->reserve->reserve_id}}</th>
            <th>{{$item->guest->user_id}}</th>
            <td>{{$item->guest->name}} 様</td>
            <td>{{$item->guest->address}}</td>
            <td>{{$item->guest->tel}}</td>
        @endforeach
    </table>
@endsection