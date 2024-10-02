<form action="{{ $route }}" method="post">
    @csrf
    @method('DELETE')
    <button class="bg-red-600 text-white px-3 py-1 rounded-lg shadow-md hover:bg-red-500 hover:shadow-lg">{{ $content }}</button>
    <!-- Be present above all else. - Naval Ravikant -->
</form>
