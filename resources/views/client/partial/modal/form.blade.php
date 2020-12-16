<div class="modal fade" id="{{'formModal'.($client->id ?? '')}}" tabindex="-1" role="dialog" aria-labelledby="{{'formModal'.($client->id ?? '')}}"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Dados do cliente</h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" id="{{'formClient'.($client->id ?? '')}}" action="{{ isset($client) ? route('client.update', $client) : route('client.save') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-md-12 div_client_photo_preview">
                            <img id="{{'client_photo_img_'.(isset($client) ? $client->id : '')}}" src="{{ isset($client) && $client->photo ? url('storage/'.$client->photo) : URL::asset('assets/images/default-user-image.png') }}" alt="profile Pic" class="client_photo_preview" height="150" width="150">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="image">Foto</label>
                                <input type="file" accept="image/*" id="{{'client_photo_input_'.(isset($client) ? $client->id : '')}}" class="form-control" name="image" value="{{ isset($client) && $client->photo ?? null }}" onchange="readURL(this, {{isset($client) ? $client->id : null}});" >
                            </div>
                        </div>
                    </div>
                
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name" class="required">Nome</label>
                                <input type="text" class="form-control" name="name" value="{{ isset($client) && $client->name ? $client->name : null }}" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="email" class="required">E-mail</label>
                                <input type="email" class="form-control" name="email" value="{{ isset($client) && $client->email ? $client->email : null }}" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="tel" class="required">Telefone</label>
                                <input type="text" class="form-control phone_with_ddd" name="tel" value="{{ isset($client) && $client->tel ? $client->tel : null }}" required>
                            </div>
                        </div>
                    </div>
                
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn" type="button" data-dismiss="modal">Cancelar</button>
                <button type="submit" form="{{'formClient'.($client->id ?? '')}}" class="btn btn-primary float-right">Salvar</button>
            </div>
        </div>
    </div>
</div>
