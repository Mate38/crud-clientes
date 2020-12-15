@extends('layout.master', ['title' => 'Clientes', 'name' => 'Clientes'])
    
@section('content')
<div class="card">
    <div class="col-md-12">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Telefone</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clients as $client)
                <tr>
                    <th scope="row" class="align-middle">{{ $client->id }}</th>
                    <td class="align-middle"><img src="{{URL::asset($client->photo)}}" alt="profile Pic" class="client_photo" height="45" width="45"> {{ $client->name }}</th>
                    <td class="align-middle">{{ $client->email }}</td>
                    <td class="align-middle">{{ brazil_phone_number_format($client->tel) }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
        {{ $clients ?? $clients->links() }}
    </div>
</div>
@endsection

@section('styles')
<style>
    .client_photo {
        border-radius: 50%;
    }
</style>
@endsection
