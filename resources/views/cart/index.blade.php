<x-layout>
    <div class="bg-stone-600  w-3xl mx-auto mt-5 p-2">
        <h1 class="flex justify-center items-center">Cart</h1>
        <div class="flex justify-between">
            <div class="flex justify-between space-x-2">
            <h1>Product name</h1>
            </div>
            <div class="flex space-x-2">
            <h1>Price: 3$</h1>
            <label for="quantity">Quantity:</label>
            <select name="quantity" id="quantity">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
            <button class="bg-red-600 px-2 cursor-pointer hover:bg-red-700">Remove</button>
            </div>
        </div>
        <div class="mt-5">
            <button class="w-full bg-green-600 px-2 cursor-pointer hover:bg-green-700">Checkout</button>
        </div>
    </div>
</x-layout>