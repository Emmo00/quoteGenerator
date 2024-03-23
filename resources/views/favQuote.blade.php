@include('components.header')

<div>
    <h1 class="text-lg text-center my-20"> Favorite Quotes </h1>
    <di>
        @if(count($quotes) == 0)
            <div class="mx-20">
                <div>No Favorite Quotes yet</div>
                <div>Go back <a href="/" class="hover:underline">Home</a></div>
            </div>
        @endif
        @foreach($quotes as $quote)
        <div class="mx-20">
            <div class="bg-gray-900 rounded-md shadow-md shadow-cyan-500/50 p-20 font-bold">
                {!! $quote !!}
            </div>
            <div class="flex justify-end">
            <a
                href='/delFav/{{ $loop->index }}'
                class="my-2 px-4 py-2 bg-white text-black rounded-md hover:bg-red-500 hover:text-white focus:outline-none focus:bg-red-600"
                >Delete from Favorites</a
            >
            </div>
        </div>
        <br>
        @endforeach
    </div>

</div>

@include('components.footer')

