@extends('layouts.hotel')

@section('body')
    <table class="table1">
        <thead>
            <tr>
                <th>部屋種別ID</th>
                <th>部屋名</th>
                <th>最大宿泊人数</th>
            </tr>
        </thead>

        <tbody>
        @foreach($roomtypes as $roomtype)
        <tr>
            <th>{{$roomtype->roomtype_id}}</th>
            <td>{{$roomtype->room_name}}</td>
            <td>最大{{$roomtype->max_rest_people}}名まで</td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection