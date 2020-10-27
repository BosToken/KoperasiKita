@extends('partials.admin.sidebar')
@section('title', 'Koperasi Z')
@section('container')
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
</div>

<!-- Content Row -->
<div class="row">

<!-- SENG DEK NGISRO IKI ISO MBOK UBAH SAK PENAKMU SAK FRONTENDNE-->
  <!-- COA -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Coa [Chart Of Account]</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">IKI JUMLAH COA</div>
          </div>
          <div class="col-auto">
            <i class="fas fa-calendar fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- DICTIONARY -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Dictionary</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">IKI BAHASA PIRO</div>
          </div>
          <div class="col-auto">
            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- JOURNAL -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Journal</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">IKI JOURNALE ENEK MACEM PIRO</div>
          </div>
          <div class="col-auto">
            <i class="fas fa-calendar fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Pending Requests Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Transaction</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">IKI JUMLAH TRANSCATION</div>
          </div>
          <div class="col-auto">
            <i class="fas fa-comments fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="row">

<div class="col-xl-12 col-lg-12">
<div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">QUOTES KOPERASI</h6>
                </div>
                <div class="card-body">
                  <p>"Dasar kekeluargaan itulah dasar hubungan istimewa pada koperasi. Dalam koperasi tidak ada majikan dan buruh, melainkan usaha bersama diantara mereka yang sama kepentingandan tujuannya." -Kata Bung Hatta</p>
                </div>
              </div>
</div>
</div>
</div>
</div>
</div>


@stop