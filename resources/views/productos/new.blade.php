<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Añadir product</title>
</head>

<body>
    <div class="container">
        <h1>Añadir product</h1>
        <form method="POST" action="{{route('productos.store')}}">
            @csrf
            <div class="mb-3">
                <label for="id" class="form-label">Id</label>
                <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id" disabled="disabled">
                <div id="idHelp" class="form-text">product Id</div>
            </div> 
            
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" required class="form-control" id="name" aria-describedby="nameHelp" name="name" placeholder="Product Name.">
            </div> 
            <div class="mb-3">
                <label for="name" class="form-label">Price:</label>
                <input type="text" required class="form-control" id="price" aria-describedby="nameHelp" name="price" placeholder="Product price.">
            </div>  
            <div class="mb-3">
                <label for="name" class="form-label">Stock:</label>
                <input type="text" required class="form-control" id="stock" aria-describedby="nameHelp" name="stock" placeholder="Product stock.">
            </div> 
            <div class="mb-3">
                <label for="obra">Category:</label>
                <select class="form-select" name="category" id="category" >
                    <option selected disabled value="">Choose one...</option>
                    @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div> 
            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="{{route('productos.index')}}" class="btn btn-warning">Cancel</a>
            </div>

        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


</body>

</html>