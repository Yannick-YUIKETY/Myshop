

    @foreach ($categories as $itemCategorie)
        <ul>
            <li>
                <a href="{{route('welcome.categorie',$itemCategorie)}}">{{$itemCategorie->name}}</a>
            </li>
        </ul>
    @endforeach



    @foreach ($products as $itemProduct)
        <ul>{{ $itemProduct->name }}

            <li>{{ $itemProduct->description }}</li>
            <li>{{ $itemProduct->price }} €</li>
            <a href="{{route('welcome.detail',$itemProduct)}}">
                detail
            </a>
        </ul>
    @endforeach


