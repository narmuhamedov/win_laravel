@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $er)
                <li>
                    {{ $er }}
                </li>
            @endforeach
        </ul>
    </div>

@endif

<!-- эта чать за успешную обработку данных-->
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
