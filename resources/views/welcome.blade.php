@extends('layouts.home')

@section('content')
   {{-- Flash Sale / Offers --}}
    <x-home.offer-section />

    {{-- Product Categories --}}
    <x-home.categories />

    {{-- Featured Products --}}
    <x-home.product-section />

    {{-- Promotional Banner --}}
    <x-home.promo-banner />

    {{-- Latest Products --}}
    <x-home.latest-products />

    {{-- New Arrivals --}}
    <x-home.new-arrivals />

    {{-- brands --}}
    <x-home.brands />
@endsection



