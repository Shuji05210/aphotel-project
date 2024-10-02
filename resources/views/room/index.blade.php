@extends('layouts.hotel')

@section('body')
    <table class="table1">
        <thead>
            <tr>
                <th>部屋ID</th>
                <th>部屋種別ID</th>
                <th>部屋名</th>
                <th>部屋番号</th>
                <th>宿泊可能人数</th>
            </tr>
        </thead>

        <tbody>
        @foreach($rooms as $room)
        <tr>
            <th>{{$room->room_id}}</th>
            <td>{{$room->roomtype->roomtype_id}}</td>
            <td>{{$room->roomtype->room_name}}</td>
            <td>{{$room->room_number}}</td>
            <td>最大{{$room->roomtype->max_rest_people}}名まで</td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection
