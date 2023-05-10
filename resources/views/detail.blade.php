<h1>detail</h1>
{{$product->name}}
{{$product->price}}€
{{$product->description}}
<ul>
<a href="{{route('addtocart' , $product )}}">add to cart</a>
</ul>
@foreach ( $products as $itemProduct )
<ul>
    <li>{{$itemProduct->name}}</li>
</ul>
@endforeach


