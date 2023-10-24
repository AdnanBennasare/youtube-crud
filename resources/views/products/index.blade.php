<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <!-- Include Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<body class="p-8">
    <div>
        @if(session()->has('success'))
        <div>{{session('success')}}</div>
        @endif
    </div>
    <div class="max-w-2xl mx-auto bg-white p-8 rounded shadow-lg">
            <div class="flex justify-between items-center  py-8">
                    <h2 class="text-2xl font-semibold">All Products</h2>
                    <a href="{{route('product.create')}}"
                    class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded flex items-center">
                    Add new product
                </a>
        </div>

        <!-- Table Start -->
        <table class="min-w-full border border-gray-300">
            <thead>
                <tr>
                    <th class="border-b p-2">id</th>
                    <th class="border-b p-2">name</th>
                    <th class="border-b p-2">Qty</th>
                    <th class="border-b p-2">price</th>
                    <th class="border-b p-2">description</th>
                    <th class="border-b p-2">actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
             
                    <td class="border-b p-2">{{$product->id}}</td>
                    <td class="border-b p-2">{{$product->name}}</td>
                    <td class="border-b p-2">{{$product->qty}}</td>
                    <td class="border-b p-2">{{$product->price}}</td>
                    <td class="border-b p-2">{{$product->description}}</td>
                    <td class="border-b p-2">
                        <form method="post" action="{{ route('product.destroy', ['product' => $product]) }}" class="inline">
                            @csrf
                            @method('delete')
                            <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-3 rounded">
                                <i class="fas fa-trash-alt mr-2"></i>
                            </button>
                        </form>
                        
                        <a href="{{ route('product.edit', ['product' => $product]) }}" class="bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-3 rounded inline">
                            <i class="fas fa-edit mr-2"></i>
                        </a>
                    </td>
                    
                       
                       
                    </tr>
                    @endforeach
   
                <!-- Add more rows as needed -->
            </tbody>
        </table>
        <!-- Table End -->
    </div>
</body>


</html>