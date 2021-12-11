@extends('layouts.site')
@livewireStyles
@livewireScripts
@section('content')
<div class="bg-light py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-0"><strong class="text-black">Produtos</strong></div>
        </div>
    </div>
</div>
<div class="site-section">
    <div class="container">
        <div class="row mb-5">
            <di class="col-md-12 order-2">
                <livewire:product-details></livewire:product-details>
        </div>
    </div>
</div>
</div>
@endsection