@extends('back.layout')
@section('content')
    <div class="box"  id="data">
        <div class="box-header">
            <h3 class="box-title">Liste des fournisseurs</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body" >
            <button type="button" class="btn btn-primary" title="Ajouter un nouveau fournisseur" data-toggle="modal" data-target="#modal-createFournisseur">
                <i class="fa fa-plus"></i>
              </button>
            <table id="tableFournisseur" class="table table-bordered table-striped">
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
                    @foreach ($fournisseur as $fournisseur)
                        <tr>
                            <td>{{ $fournisseur->id }}</td>
                            <td>{{$fournisseur->nom}}</td>
                            <td>{{$fournisseur->adresse}}</td>
                            <td>{{$fournisseur->pays}}</td>
                            <td>{{$fournisseur->ville}}</td>
                            <td>{{$fournisseur->adresseMail}}</td>
                            <td>{{$fournisseur->telephone}}</td>
                            <td>
                                <a href="#" class="btn btn-warning editFour" title="Modifier cet enregistrement"><i class="fa fa-edit"></i></a>
                                <a href="#" class="btn btn-danger deleteFour" title="Supprimer cet enregistrement"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @include('fournisseur.create')
    @include('fournisseur.edit')
    @include('fournisseur.delete')
@endsection
