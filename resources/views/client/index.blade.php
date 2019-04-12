@extends('back.layout')
@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Liste des clients</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <button type="button" class="btn btn-primary" title="Ajouter un nouveau client" data-toggle="modal" data-target="#modal-createClient">
                    <i class="fa fa-plus"></i>
            </button>
            <table id="tableClient" class="table table-bordered table-striped">
                <thead>
                    <tr>
                    <th></th>
                    <th>Nom</th>
                    <th>Adresse</th>
                    <th>Pays</th>
                    <th>Ville</th>
                    <th>Adresse mail</th>
                    <th>Téléphone</th>
                    <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($client as $cli)
                        <tr>
                            <td>{{$cli->id }}</td>
                            <td>{{$cli->nom}}</td>
                            <td>{{$cli->adresse}}</td>
                            <td>{{$cli->pays}}</td>
                            <td>{{$cli->ville}}</td>
                            <td>{{$cli->adresseMail}}</td>
                            <td>{{$cli->telephone}}</td>
                            <td>
                                <a href="#" class="btn btn-warning editClient" title="Modifier cet enregistrement"><i class="fa fa-edit"></i></a>
                                <a href="#" class="btn btn-danger deleteClient" title="Supprimer cet enregistrement"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @include('client.create')
    @include('client.edit')
    @include('client.delete')
@endsection
