@extends('back.layout')
    @section('content')
        <div class="container">
                <div class="row">
                        <div class="col-lg- col-xs-6">
                          <!-- small box -->
                          <div class="small-box bg-aqua">
                            <div class="inner">
                              <h3>150</h3>
                              <p>Liste des produits en dessous du stock minimal</p>
                            </div>
                            <div class="icon">
                              <i class="fa fa-envelope-o"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                          </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-6 col-xs-6">
                          <!-- small box -->
                          <div class="small-box bg-green">
                            <div class="inner">
                              <h3>53<sup style="font-size: 20px">%</sup></h3>

                              <p>Liste des produits en dessous du seuil alerte</p>
                            </div>
                            <div class="icon">
                              <i class="fa fa-bell-o"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                          </div>
                        </div>
                        <!-- ./col -->
                 </div>
        </div>
    @endsection
