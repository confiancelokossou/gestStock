@extends('back.layout')
@section('content')
    <div class="container">
            <div class="row">
                    <div class="col-lg- col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>@foreach ($min as $stosckMin)
                                {{ $stosckMin->nb }}
                            @endforeach</h3>
                            <p>Liste des produits en dessous du stock minimal</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                        <a href="#" class="small-box-footer" id="detailStockMin">Détail <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-6 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-green">
                        <div class="inner">
                            <h3>
                                @foreach ($alerte as $alert)
                                    {{ $alert->nb }}
                                @endforeach
                            </h3>

                            <p>Liste des produits en dessous du seuil alerte</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-bell-o"></i>
                        </div>
                        <a href="#" class="small-box-footer" id="detailSeuilAlerte">détail <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
    </div>



<!--************************Modal pour les détails du stock minimal**********************************-->
<div class="modal modal-info fade" id="modal-stockMinimal">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Détail sur les produits en dessous du stock minimal</h4>
        </div>
        <div class="modal-body">
            @foreach ($stMin as $st)
                <h4>{{ $st->libelle }} restant {{ $st->quantiteDisp }}</h4><hr>
            @endforeach
        </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>



<!--*********MODAL pour les détail des produits en dessous du seuil alerte*********-->

<div class="modal modal-success fade" id="modal-seuilAlerte">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Détail sur les produits en dessous du seuil alerte</h4>
        </div>
        <div class="modal-body">
            @foreach ($seuilAlerte as $alerte)
                <h4>{{ $alerte->libelle }} restant {{ $alerte-> quantiteDisp}}</h4><hr>
            @endforeach
        </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

@endsection
