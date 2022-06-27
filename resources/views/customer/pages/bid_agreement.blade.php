<div class="container">
    <h3 m-2>Bid Agrement</h3>
    <div class="form-group">
         @if(Storage::disk('public')->has('bidding-agreement'))
         {{ Storage::disk('public')->get('bidding-agreement');  }}
            @else
            Not added Yet Description
        @endif
    </div>

</div>
