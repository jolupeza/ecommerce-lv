<div class="container">
    <h2>Listado de productos</h2>
    <div class="row">
        @foreach($products as $product)
            <div class="col-sm-4 mb-2">
                <div class="card" style="width: 18rem;">
                    <a href="{{ route('products.show', ['product' => $product->slug]) }}">
                        <img src="{{ $product->thumbnail }}" alt="{{ $product->name }}" class="card-img-top" />
                    </a>
{{--                    <img src="{{ asset('storage/' . $product->thumbnail) }}" alt="{{ $product->name }}" class="card-img-top" />--}}
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">{{ $product->price }} <sup>00</sup></h5>
                        <p><span>12 $ 10.75 sin intereses</span></p>
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-outline-primary">Add to cart</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
