@extends (request()->query('from') == 'users' ? 'layouts.admin' : 'layouts.main')

@section('content')
<h2 class="text-center font-semibold text-3xl mb-10">Modifier un utilisateur</h2>
<form method="post" action="{{ route('user.update', $user->id) }}" class="w-3/4 m-auto border-2 border-gray-300 rounded-xl p-5">
    @csrf
    @method('PUT')
    <div class="mb-5">
        <label for="name" class="font-semibold">Nom d'utilisateur</label>
        <input type="text" name="name" id="name" value="{{ $user->name }}" class="w-full border-2 border-gray-300 rounded-lg p-2">
    </div>
    <div class="mb-5">
        <label for="email" class="font-semibold">Email</label>
        <input type="email" name="email" id="email" value="{{ $user->email }}" class="w-full border-2 border-gray-300 rounded-lg p-2">
    </div>
    <div class="mb-5">
        <label for="role" class="font-semibold">Role</label>
        <select name="role" id="role" class="w-full border-2 border-gray-300 rounded-lg p-2">
            <option value="admin" {{ $user->role === 'admin' ? 'selected' : '' }}>Admin</option>
            <option value="user" {{ $user->role === 'user' ? 'selected' : '' }}>User</option>
        </select>
    </div>
    <button type="submit" class="bg-blue-900 text-white px-3 py-1 rounded-lg">Modifier</button>
</form>
@stop
