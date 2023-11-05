

@section('content1')

<div class="container mx-auto mt-5">
    <h1 class="text-2xl font-semibold">Create a New product </h1>

    <form action="{{ route('products.store') }}" method="post">
        @csrf

        <div class="mt-4">
            <label for="name" class="block text-gray-600">Product Name</label>
            <input type="text" id="name" name="name" class="form-input" required>
        </div>

        <div class="mt-4">
            <label for="description" class="block text-gray-600">Product Description</label>
            <textarea id="description" name="description" class="form-textarea" required></textarea>
        </div>

        <div class="mt-4">
            <label for="quantity" class="block text-gray-600">Quantity</label>
            <input type="number" id="quantity" name="quantity" class="form-input" required>
        </div>

        <div class="mt-4">
            <label for="price" class="block text-gray-600">Price</label>
            <input type="number" id="price" name="price" class="form-input" required>
        </div>

        <div class="mt-6">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create Product</button>
        </div>
    </form>
</div>

@endsection
