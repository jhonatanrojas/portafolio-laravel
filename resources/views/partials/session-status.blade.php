

       @if (session('status'))
   
<div class="container mt-4">
    <div class="alert alert-primary alert-dismissible fade" role="alert">
 
{{ session('status') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
</div>

@endif