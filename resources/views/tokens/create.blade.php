<x-layout>
    <div class="flex items-center justify-center">

        <form method="POST" action="/tokens">
            @csrf
            <div class="mb-6">
                <label for="service" class="inline-block text-lg mb-2">
                    Service
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="service" />
                @error('service')
                    <p class="text-red-500 text-xs mt-1">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="price" class="inline-block text-lg mb-2">Amount</label>
                <input type="number" class="border border-gray-200 rounded p-2 w-full" name="price" />
                <!-- Error Example -->
                @error('price')
                    <p class="text-red-500 text-xs mt-1">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="expires_at" class="inline-block text-lg mb-2">
                    Date
                </label>
                <input type="date" class="border border-gray-200 rounded p-2 w-full" name="expires_at" />
                @error('expires_at')
                    <p class="text-red-500 text-xs mt-1">
                        {{ $message }}
                    </p>
                @enderror
            </div>



            <div class="mb-6">
                <button type="submit" class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    Generate Token
                </button>
            </div>

            <div class="mt-8">
                <p>
                    Already have an account?
                    <a href="/login" class="text-laravel">Login</a>
                </p>
            </div>
        </form>
    </div>
</x-layout>
