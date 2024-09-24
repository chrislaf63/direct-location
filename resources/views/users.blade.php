@extends ('layouts.admin')

@section('content')
<h2 class="text-center font-semibold text-3xl mb-10">Utilisateurs</h2>
@foreach($users as $user)
<div class="w-3/4 p-4 m-auto border-2 border-gray-300 rounded-xl flex justify-between items-center mb-5">
    <div>
    <p><span class="font-semibold">Nom d'utilisateur:&nbsp;</span>{{$user->name}}</p>
    <p><span class="font-semibold">Email:&nbsp;</span>{{$user->email}}</p>
    <p><span class="font-semibold">Role:&nbsp;</span>{{$user->role}}</p>
    <p><span class="font-semibold">Créé le:&nbsp;</span>{{$user->created_at}}</p>
    </div>
    <div class="flex gap-8">
    <div>
        <a href="{{ route('user.update', ['id' => $user->id, 'from' => 'users']) }}"><button class="bg-blue-900 text-white px-3 py-1 rounded-lg">Modifier</button></a>
    </div>
    <div>
        <x-delete :route="route('user.edit',  $user->id)" content="Supprimer"/>
    </div>
    </div>
</div>
@endforeach
@stop
