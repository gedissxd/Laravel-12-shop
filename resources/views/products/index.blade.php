<x-layout>
    <div class="grid grid-cols-3 gap-10 mx-auto w-[900px] mt-5 mb-5">
   
    @foreach ($products as $product)
<a href="/product/{{ $product->id }}">    
<div class="bg-white border border-stone-200 w-[300px] h-[300px]">
<img src="https://placehold.co/600x400" alt="">
<h1>{{ $product->name }}</h1>
<h1>${{ $product->price }}</h1>
</div>
</a>   
 @endforeach
 </div>
</x-layout>