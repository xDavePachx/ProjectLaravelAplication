<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Menu</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('create')}}">Agregar Producto</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</header>

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