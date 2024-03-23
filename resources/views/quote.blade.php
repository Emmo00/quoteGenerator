@include('components.header')

<div class="mx-auto p-20 my-8 container shadow-lg shadow-cyan-500">
    <div
        class="bg-gray-900 rounded-md shadow-md shadow-cyan-500/50 p-20 font-bold"
    >
        {!! $quote !!}
    </div>
    <div class="flex justify-end">
        <a
            href="/addFav"
            class="my-2 px-4 py-2 bg-white text-black rounded-md hover:bg-red-500 hover:text-white focus:outline-none focus:bg-red-600"
            >Add to Favorite</a
        >
        <a
            href="https://twitter.com/intent/tweet?text={{ urlencode($quote) }}"
            target="_blank"
            class="m-2 px-4 py-2 bg-white text-black rounded-md hover:bg-blue-500 hover:text-white focus:outline-none focus:bg-blue-600"
            >Tweet</a
        >
        <a
            href="/new"
            class="m-2 px-4 py-2 bg-white text-black rounded-md hover:bg-green-500 hover:text-white focus:outline-none focus:bg-green-600"
            >New</a
        >
    </div>
</div>

@include('components.footer')
