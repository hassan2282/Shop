@if ($errors->any())
    <ul style="background-color: #fcad03;" class="text-white p-2">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
