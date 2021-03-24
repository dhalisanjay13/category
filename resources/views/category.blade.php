<ul>

    @foreach($childs as $child)

        <li>

            {{ $child->name }}
            @if (auth()->user()->isAdmin())
                <a href="{{ route("add-product", ["id" => $child->id]) }}"><button type="button" class="btn btn-link">Add product</button></a>
            @endif
            @if(count($child->childs))

                @include('category',['childs' => $child->childs])

            @endif

        </li>

    @endforeach

</ul>