<x-layout>

    <div class=" grid lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

        @unless (count($tokens) == 0)
            @foreach ($tokens as $token)
                <h1>{{ $token->token }}</h1>
            @endforeach
        @else
            <p>No tokens available</p>
        @endunless
    </div>
</x-layout>
