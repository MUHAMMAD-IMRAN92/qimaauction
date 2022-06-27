<div class="container">
    <h3 m-2>Privacy Policy</h3>
    <div class="form-group">
        @if(Storage::disk('public')->has('privacy-policy'))
        {{ Storage::disk('public')->get('privacy-policy');  }}
           @else
           Not added Yet Description
       @endif
    </div>

</div>
