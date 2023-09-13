

<h1>foreach loops in laravel/blade....</h1>

@foreach($pizza as $soso)
    <div>
       {{ $loop -> index}} {{ $soso['head'] }} - {{ $soso['body'] }}
    
    @if($loop -> first)
        - <span>this the first pizza type.</span>
    @endif
    </div>
@endforeach