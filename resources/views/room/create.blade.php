
@extends('layouts.hotel')
@section('body')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            部屋 入力フォーム
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto px-6">
        <form method = "post" action="{{ route ('room.store') }}"> @csrf
            <div class="mt-8">
                <div class="w-full flex flex-col">
                    <label for="name" class="font-semibold mt-4">部屋種別ID</label>
                    <input type="text" name="roomtype_id" class="w-auto py-2 border border-gray-300 rounded-md" id="">
                </div>

                <div class="w-full flex flex-col">
                    <label for="price" class="font-semibold mt-4">部屋番号</label>
                    <input type="text" name="room_number" class="w-auto py-2 border border-gray-300 rounded-md" id="">
                </div>
            </div>

            <x-primary-button class="mt-4">
                送信する
            </x-primary-button>
        </form>
    </div>
</x-app-layout>
@endsection