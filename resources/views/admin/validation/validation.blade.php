@if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>
                <div class="alert alert-primary" role="alert">
                    <div class="iq-alert-text">{{$error}}</div>
                </div>
            </li>
        @endforeach
    </ul>
@endif
