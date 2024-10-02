@extends('layouts.hotel')
@section('body')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            部屋種別 登録フォーム
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto px-6">
        <form method = "post" action="{{ route ('roomtype.store') }}"> @csrf
            <div class="mt-8">
                <div class="w-full flex flex-col">
                    <label for="room_name" class="font-semibold mt-4">部屋の名前</label>
                    <input type="text" name="room_name" class="w-auto py-2 border border-gray-300 rounded-md" id="room_name">
                </div>

                <div class="w-full flex flex-col">
                    <label for="max_rest_people" class="font-semibold mt-4">最大宿泊人数</label>
                    <input type="text" name="max_rest_people" class="w-auto py-2 border border-gray-300 rounded-md" id="max_rest_people">
                </div>
            </div>

            <x-primary-button class="mt-4">
                送信する
            </x-primary-button>
        </form>
    </div>
</x-app-layout>
@endsection