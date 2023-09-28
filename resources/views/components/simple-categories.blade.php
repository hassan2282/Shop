@foreach($categories as $category)
        <details class="p-2 ">
            <summary><a>{{$category->name}}</a></summary>
            <ul>
                <li style="background-color: #fdcc24;border-radius: 5px">
                    <x-simple-categories :categories="$category->children"/>
                </li>
            </ul>
        </details>
@endforeach
