@extends('admin.layout.master')
@section('content')
<div class="pcoded-content">
    <div class="pcoded-inner-content">

        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header card">
                    <div class="row align-items-end">
                        <div class="col-lg-8">
                            <div class="page-header-title">
                                <i class="icofont icofont-file-code bg-c-blue"></i>
                                <div class="d-inline">
                                    <h4>Edit Jumlah Penduduk</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="page-header-breadcrumb">
                                <ul class="breadcrumb-title">
                                    <li class="breadcrumb-item">
                                        <a href="index.html">
                                            <i class="icofont icofont-home"></i>
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{route('geografis.index')}}">Edit Jumlah Penduduk</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Page-header end -->

                <!-- Page body start -->
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- Basic Form Inputs card start -->
                            <div class="card">
                                <div class="card-header">

                                </div>
                                <div class="card-block">
                                    <h4 class="sub-title">Jumlah Penduduk</h4>
                                    <form action="{{route('geografis.update', $geografis->id)}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                       
                                       
                                       
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Jumlah Penduduk</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="jumlah_penduduk" id="jumlah_penduduk" value="{{$geografis->jumlah_penduduk}}" class="form-control form-control-round" placeholder="Jumlah Penduduk">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Keterangan</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="keterangan" id="keterangan" value="{{$geografis->keterangan}}" class="form-control form-control-round" placeholder="Keterangan">
                                            </div>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-warning float-right"> Submit</button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                @endsection