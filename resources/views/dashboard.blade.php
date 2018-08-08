@extends('layouts.app')

@section('title', 'Home')

@section('breadcrumb')

@component('components.bread')
  @slot('title', 'Dashboard')
@endcomponent

@endsection

@section('content')

<div class="row">
  <div class="col-lg-3 col-md-6">
      <div class="card">
          <div class="card-body">
              <div class="d-flex flex-row">
                  <div class="round round-lg align-self-center round-info"><i class="ti-user"></i></div>
                  <div class="m-l-10 align-self-center">
                      <h3 class="m-b-0 font-light">0</h3>
                      <h5 class="text-muted m-b-0">Usuarios</h5></div>
              </div>
          </div>
      </div>
  </div>
</div>

<div class="row">
  <div class="col-lg-12 col-md-12">
    <h1>Hola</h1>
  </div>
</div>
@endsection