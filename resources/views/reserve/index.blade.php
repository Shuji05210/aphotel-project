
@extends('layouts.hotel')

@section('body')
    <table class="table1">
        <thead>
            <tr>
                <th>予約ID</th>
                <th>利用者ID</th>
                <th>お名前</th>
                <th>住所</th>
                <th>電話番号</th>
                <th>人数</th>
                <th>チェックイン</th>
                <th>チェックアウト</th>
            </tr>
        </thead>

        <tbody>
        @foreach($reserves as $reserve)
        <tr>
            <th>{{$reserve->reserve_id}}</th>
            <td>{{$reserve->user_id}}</td>
            <td>{{$reserve->guest->name}}</td>
            <td>{{$reserve->guest->address}}</td>
            <td>{{$reserve->guest->tel}}</td>
            <td>{{$reserve->people}}人</td>
            <td>{{$reserve->checkin_date}}</td>
            <td>{{$reserve->checkout_date}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection

