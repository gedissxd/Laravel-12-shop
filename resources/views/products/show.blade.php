<x-layout>
    <div class="max-w-6xl mx-auto px-4 py-8">
        <div class="flex flex-col md:flex-row gap-8">
            <div class="md:w-1/2">
                <img src="https://placehold.co/600x400" alt="{{ $product->name }}" class="w-full h-auto">
            </div>
            <div class="md:w-1/2 space-y-6">
                <h1 class="text-3xl font-bold text-gray-900">{{ $product->name }}</h1>
                <p class="text-2xl font-semibold text-stone-600">${{ $product->price }}</p>
                
                <div class="border-gray-200 py-4 my-4">
                    <p class="text-gray-700">{{ $product->description }}</p>
                </div>

                <form action="/cart" class="space-y-4">
                    <div class="flex items-center gap-4">
                        <label for="quantity" class="text-gray-700">Quantity:</label>
                        <select name="quantity" id="quantity" class="border border-gray-300 px-3 py-2">
                            @for ($i = 1; $i <= 5; $i++)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                    </div>
                    
                    <button type="submit" 
                        class="w-full bg-stone-800 text-white py-3 px-6 hover:bg-stone-700 
                        transition duration-200 flex items-center justify-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"/>
                        </svg>
                        Add to Cart
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-layout>