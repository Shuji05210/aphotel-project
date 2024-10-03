@extends('layouts.hotel')

@section('body')
    <table>
        <th>予約ID</th><th>お名前</th><th>ご住所</th><th>電話番号</th><th>人数</th><th>チェックイン日</th><th>チェックアウト日</th>
        <th>料金</th>
        @foreach($reservedetails as $reservedetail)
        <tr>

            <!-- roomメソッドのbelongToManyでroomモデルとその中間テーブルreserve_roomテーブルにアクセス  -->
            

        </tr>
        @endforeach
    </table>
@endsection