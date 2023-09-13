<h1>Pizza</h1>
<p>{{ $head }} - {{ $body }} - {{ $price }}</p>
@if($price > 15)
<p>This pizza is expensive</p>
@elseif($price < 5)
<p>This pizza is Cheap</p>
@else
<p>This pizza is okay</p>
@endif

@php
    $name = 'my name is eva tech a self taught programmer :)';
    echo "$name";
@endphp