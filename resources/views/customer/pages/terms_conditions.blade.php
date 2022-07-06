<div class="container">
    <h3 m-2>Terms & Conditions</h3>
    <div class="form-group">
        @if(Storage::disk('public')->has('terms-condition'))
        {{ Storage::disk('public')->get('terms-condition');  }}
           @else
           Not added Yet Description
       @endif
    </div>

</div>
