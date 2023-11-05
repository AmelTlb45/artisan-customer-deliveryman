@extends('layouts.guest')

@section('title', 'Product List')

@section('content')

<x-card>

    <div class="container mx-auto py-6">
        <div class="bg-white dark:bg-gray-800 shadow overflow-hidden sm:rounded-lg">
            <div class="p-6 sm:px-20 bg-white border-b border-gray-200 dark:border-gray-700">
                <h2 class="text-2xl font-semibold text-gray-600 dark:text-gray-300">
                    Product List
                </h2>
            </div>

            <!-- Product List -->
            <div class="p-6 dark:bg-gray-900">
                <table class="min-w-full">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                                Product Name
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                                Price
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900 dark:text-gray-200">{{ $product->name }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900 dark:text-gray-200">{{ $product->price }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <a href="{{ route('products.show', $product->id) }}" class="text-indigo-600 hover:text-indigo-900 dark:text-indigo-300 dark:hover:text-indigo-500">View</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-card>
@endsection


