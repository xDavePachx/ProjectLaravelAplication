<center><h1>Lista de productos</h1></center>
<center>
    <table border="2">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Expire</th>
                <th>Brand</th>
                <th>type</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{$product->id }}</td>
                <td>{{$product->name }}</td>
                <td>{{$product->expire }}</td>
                <td>{{$product->brand }}</td>
                <td>{{$product->type }}</td>

                <form action="{{url ('/product/' .$product->id) }}" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <td>
                        <input type="submit" onclick="return confirm('Desea eliminar este registro?')"
                        value="Delete"/>
                    </td>
                </form>

                <form action="{{url ('product/edit/' .$product->id) }}" method="post">
                    @csrf
                    {{ method_field('PUT') }}
                    <td>
                        <input type="submit" onclick="return confirm('Desea editar este registro?')"
                        value="Edit"/>
                    </td>
                </form>
            </tr>
            @endforeach
        </tbody>
    </table>
</center>