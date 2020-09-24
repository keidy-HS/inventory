@extends('layouts.main')

@section('content')
<section>
	<div class="content-wrapper">
	<form action="{{Route('vente.store')}}" method="POST" >
    	<!-- Content Header (Page header) -->
	    <section class="content-header">
	    	<h1 style="text-align: center;">Effectuer une vente</h1>
	      <div class="container-fluid">
	      
	        <div class="row mb-2">
	          <div class="col-sm-4" style="margin-top: 5%">
	           		<h5>Information client</h5>
			           <input type="text" name="nomClient" placeholder="Nom du Client">
			           <input type="text" name="adresseClient" placeholder="Adress du Client">
			           <input type="number" name="contactClient" placeholder="tel">
	          </div>
	          <div class="col-sm-6" style="margin-top: 5%">
	            <ol class="breadcrumb float-sm-right">
	              <li class="breadcrumb-item"><a href="#">Accueil</a></li>
	              <li class="breadcrumb-item active">Ajout Produit</li>
	            </ol>
	          </div>
	        </div>

			<div class="row mb-2">
					<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h2 class="card-title"><b>Produits à vendre</b></h2>

                @include('vente.search')
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nom du produit</th>
                      <th>Description</th>
                      <th>Prix unitaire</th>
                      <th>Quantité</th>
                    </tr>
                  </thead>
                  <tbody>
{{--                   	@foreach($products as $product)
 --}}	                    <tr>
{{-- 	                      <td>{{$product->id}}</td>
	                      <td>{{$product->name}}</td>
	                      <td>{{$product->description}}</td>
	                      <td>{{$product->price}}</td>
	                      <td>{{$product->quantity}}</td> --}}
	                    </tr>
                   	{{-- @endforeach --}}
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
			</div>	
	      </div><!-- /.container-fluid -->
	    </section>
	    </form>
	</div>
</section>