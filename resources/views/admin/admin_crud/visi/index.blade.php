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
                                <i class="icofont icofont-table bg-c-blue"></i>
                                <div class="d-inline">
                                    <h2>Data Visi Misi</h2>
                                    <span>Isi Visi Misi</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="page-header-breadcrumb">
                                <ul class="breadcrumb-title">
                                    <li class="breadcrumb-item">
                                        <a href="{{ url('/dashboard') }}">
                                            <i class="icofont icofont-home"></i>
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ url('/visi') }}">Visi Misi</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Page-header end -->

                <!-- Page-body start -->
                <div class="page-body">
                    <!-- Basic table card start -->
                    <div class="card">
                        <div class="card-block table-border-style">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>Isi Data</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($visi as $vm)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$vm->judul}}</td>
                                            <td>
                                                <textarea class="form-control form-control-round custom-textarea" readonly rows="12">{{$vm->isi_vm}}</textarea>
                                            </td>
                                            <td>
                                                <form action="{{route('visi.edit', $vm->id)}}" method="GET">
                                                    @csrf
                                                    <button type="submit" class="btn btn-warning"><i class="icofont icofont-edit"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                            <div class="btn-container">
                                {{ $visi->links() }}
                            </div>
                        </div>
                    </div>
                    <!-- Basic table card end -->
                </div>
                <!-- Page-body end -->
            </div>
        </div>
        <!-- Main-body end -->

        <div id="styleSelector">

        </div>
    </div>
</div>

@endsection
