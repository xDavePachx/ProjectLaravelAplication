<center><h1>Edit product</h1></center> 

<center>
<form action="{{ url('/edit/'.$product->id) }}" method="post">
    @csrf
    {{method_field('PUT')}}
    @include('product.form')
</form>
</center>