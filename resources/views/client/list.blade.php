@extends('layout.master', ['title' => 'Clientes', 'name' => 'Clientes'])
    
@section('content')
<div class="card">
    <div class="card-header">
        <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#formModal">
            + Adicionar
        </button>
    </div>
    <div class="card-body">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clients as $client)
                <tr>
                    <th scope="row" class="align-middle">{{ $client->id }}</th>
                    <td class="align-middle">
                        <img src="{{ $client->photo ? url('storage/'.$client->photo) : URL::asset('assets/images/default-user-image.png') }}" alt="profile Pic" class="client_photo" height="45" width="45"> {{ $client->name }}
                    </th>
                    <td class="align-middle">{{ $client->email }}</td>
                    <td class="align-middle">{{ brazil_phone_number_format($client->tel) }}</td>
                    <td class="align-middle">
                        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="{{'#formModal'.$client->id}}">
                            <i class="fas fa-user-edit"></i>
                        </button>
                    </td>
                </tr>
                @include('client.partial.modal.form', ['client' => $client])
                @endforeach
            </tbody>
        </table>
        {{ $clients ?? $clients->links() }}
    </div>
</div>
@include('client.partial.modal.form', ['client' => null])
@endsection

@section('styles')
<style>
    .client_photo, .client_photo_preview {
        border-radius: 50%;
    }
    .div_client_photo_preview {
        text-align: center;
    }
</style>
@endsection
