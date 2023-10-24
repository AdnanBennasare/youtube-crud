<!DOCTYPE html>
  <html lang="en">
  
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Simple Form with Tailwind CSS</title>
      <!-- Include Tailwind CSS -->
      <script src="https://cdn.tailwindcss.com"></script>
  </head>
  
  <body class="bg-gray-100 p-8">
      <div class="max-w-md mx-auto bg-white p-8 rounded shadow-md">
      @if($errors->any())
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>           
        @endforeach
      </ul>
      @endif
          <h2 class="text-2xl font-semibold mb-6">create product</h2>
          <!-- Form Start -->
          <form method="post" action="{{route('product.store')}}">
            @csrf
            @method('post')
            {{-- Name --}}
              <div class="mb-4">
                  <label for="name" class="block text-sm font-medium text-gray-600">Name</label>
                  <input type="text" id="name" name="name"
                      class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-indigo-500">
              </div>
            {{-- Qty --}}
  
              <div class="mb-4">
                <label for="qty" class="block text-sm font-medium text-gray-600">Qty</label>
                <input type="number" id="qty" name="qty"
                    class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-indigo-500">
            </div>
            {{-- Price --}}

            <div class="mb-4">
                <label for="qty" class="block text-sm font-medium text-gray-600">Price</label>
                <input type="number" id="price" name="price"
                    class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-indigo-500">
            </div>

            {{-- Description --}}

            <div class="mb-4">
                <label for="qty" class="block text-sm font-medium text-gray-600">description</label>
                <input type="text" id="description" name="description"
                    class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-indigo-500">
            </div>
  
              <button type="submit"
                  class="bg-indigo-500 text-white p-2 rounded hover:bg-indigo-600 focus:outline-none focus:ring focus:ring-indigo-200">
                  Submit
              </button>
          </form>
          <!-- Form End -->
      </div>
  </body>
  
  </html>
  

