@extends('layouts.admin')

@section('content')
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
        <x-stock-card type="danger">
            Low stock
        </x-stock-card>
        <x-stock-card type="warning">
            Out of stock
        </x-stock-card>
        <x-stock-card type="success">
            Plenty of stock
        </x-stock-card>
    </div>
@endsection
