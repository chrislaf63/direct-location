<x-main-layout :title="$title">
    @if (request()->query('from') == 'users')
    <h2 class="text-center font-semibold text-3xl py-8">Modifier un utilisateur</h2>
    @else
    <h2 class="text-center font-semibold text-3xl py-8">Modifier mon profil</h2>
    @endif
    <form method="post" action="{{ route('user.update', $user->id) }}"
          class="w-1/3 m-auto mb-4 bg-neutral-50 border-2 border-gray-300 rounded-xl p-5">
        @csrf
        @method('PUT')
        <div class="mb-5">
            <label for="name" class="font-semibold">Nom d'utilisateur</label>
            <input type="text" name="name" id="name" value="{{ $user->name }}"
                   class="w-full border-2 border-gray-300 rounded-lg p-2">
        </div>
        <div class="mb-5">
            <label for="email" class="font-semibold">Email</label>
            <input type="email" name="email" id="email" value="{{ $user->email }}"
                   class="w-full border-2 border-gray-300 rounded-lg p-2">
        </div>
        @if (Auth::user()->isAdmin())
        <div class="mb-5">
            <label for="role" class="font-semibold">Role</label>
            <select name="role" id="role" class="w-full border-2 border-gray-300 rounded-lg p-2">
                <option value="admin" {{ $user->isAdmin() ? 'selected' : '' }}>Admin</option>
                <option value="user" {{ !$user->isadmin() ? 'selected' : '' }}>User</option>
            </select>
        </div>
        @endif
        <button type="submit"
                class="bg-blue-900 text-white px-3 py-1 shadow-md rounded-lg hover:bg-blue-800 hover:shadow-lg">Modifier
        </button>
    </form>
</x-main-layout>
