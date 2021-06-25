@if(count($errors->all()) > 0)

<div class="error-window">
<ul>
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>
</div>
    
@endif