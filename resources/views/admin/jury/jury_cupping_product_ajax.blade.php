@foreach ($products as $key => $product)
    <div class="row">
        <div class="col-md-4">
            <input type="hidden" name="products[]" value="{{ $product->id }}">
            <input type="text" class="form-control" id="products" value="{{ $product->product_title }}">
        </div>
        <div class="col-md-2">
            <input type="text" class="form-control" name="samples[]" id="samples" value="{{ $product->sample }}"
                placeholder="Enter Sample Id">
        </div>
        <div class="col-md-2">
            <input type="number" class="form-control" name="postion[]" id="postion" placeholder="Postion"
                value="{{ $product->postion }}" oninput="if (this.value > 9) this.value = 0;">

        </div>
        <div class="col-md-4">
            <div class="row checkbox-pad">
                <div class="chk">
                    <label class="check-label" for="male">
                        <b>T1</b>
                    </label>
                    <input type="radio" name="{{ $key }}" value="1" class="chk1 pt-5"
                        {{ $product->table == 1 ? 'checked' : '' }}>
                </div>
                <div class="chk">
                    <label class="check-label" for="male">
                        <b>T2</b>
                    </label>
                    <input type="radio" name="{{ $key }}" value="2" class="chk2 pt-5"
                        {{ $product->table == 2 ? 'checked' : '' }}>
                </div>
                <div class="chk">
                    <label class="check-label" for="male">
                        <b>T3</b>
                    </label>
                    <input type="radio" name="{{ $key }}" value="3" class="chk3 pt-5"
                        {{ $product->table == 3 ? 'checked' : '' }}>
                </div>
                <div class="chk">
                    <label class="check-label" for="male">
                        <b>T4</b>
                    </label>
                    <input type="radio" name="{{ $key }}" value="4" class="chk4 pt-5"
                        {{ $product->table == 4 ? 'checked' : '' }}>
                </div>
                <div class="chk">
                    <label class="check-label" for="male">
                        <b>T5</b>
                    </label>
                    <input type="radio" name="{{ $key }}" value="5" class="chk4 pt-5"
                        {{ $product->table == 5 ? 'checked' : '' }}>
                </div>
            </div>
        </div>
    </div>
@endforeach
