@forelse ($products as $key => $product)
    <div class="row">
        <div class="col-md-4">
            <input type="hidden" name="" value="{{ $product->id }}">
            <input type="text" class="form-control" id="products" value="{{ $product->product_title }}">
        </div>
        <div class="col-md-2">
            <input type="text" class="form-control" name="" id="samples" value="{{ $product->sample }}"
                placeholder="Enter Sample Id">
        </div>
        {{-- <div class="col-md-2">
            <input type="number" class="form-control" name="" id="postion" placeholder="Postion"
                value="{{ $product->postion }}" oninput="if (this.value > 9) this.value = 0;">

        </div> --}}
        <div class="col-4 mt-1">
            <input type="checkbox" value="{{ $product->id }}"
                {{ in_array($product->id, $cuppingProduct) == true ? ' checked' : '' }} name="selected_product[]"
                id="">
        </div>
    </div>
    <br>
@empty
    <center>
        <h6>No Product Found !</h6>
    </center>
@endforelse
