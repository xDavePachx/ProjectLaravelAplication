<center><h1>Add new product</h1></center>

<center>
    <form action="{{ url('/product') }}" method="post">
        @csrf
        @include('product.form')
    </form>
</center>