<form action="{{ $route }}" method="post">
    @csrf
    @method('DELETE')
    <button class="bg-red-500 text-white px-3 py-1 rounded-lg hover:bg-red-600">{{ $content }}</button>
    <!-- Be present above all else. - Naval Ravikant -->
</form>
