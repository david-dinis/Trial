<div class="row mb-5">
    @foreach($products as $product)
    @if($product->deleted_at == null)
    <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
        <div class="block-4 text-center border">
            <figure class="block-4-image">
                <img src="{{asset($product->image)}}" alt="Image placeholder" class="img-fluid"></a>
            </figure>
            <div class="block-4-text p-4">
                <h3><a href="shop-single.html">{{$product->name}}</a></h3>
                <p class="mb-0">{{$product->price}}€</p>
                <p class="text-primary font-weight-bold"><button wire:click="destroy({{$product->id}})" class="button-style" value="Apagar"> Apagar </button></p>
            </div>
        </div>
    </div>
    @endif
    @endforeach
</div>