@extends('layouts.app')

@section('content')
 
<div class="flex justify-content">
    <div class="w-12/8 bg-white p-6 rounded-lg">
        
        <x-post :post="$post"/>
        
    </div>
</div>

@endsection