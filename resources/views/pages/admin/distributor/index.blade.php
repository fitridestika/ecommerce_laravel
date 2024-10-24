@extends('layouts.admin.main')
@section('title', 'Admin Distributor')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Distributor</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">
                            Dashboard</a></div>
                    <div class="breadcrumb-item">Distributor</div>
                </div>
            </div>
            <a href="{{ route('distributor.create') }}" class="btn btn-icon icon-left btn-primary">
                <i class="fas fa-plus"></i> Tambah Distributor</a>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-md">
                        <tr>
                            <th>#</th>
                            <th>Nama Distributor</th>
                            <th>Kota</th>
                            <th>Provinsi</th>
                            <th>Kontak</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                        @php
                            $no = 0;
                        @endphp
                        @forelse ($distributors as $distributor)
                            <tr>
                                <td>{{ $no += 1 }}</td>
                                <td>{{ $distributor->name_distributor }}</td>
                                <td>{{ $distributor->kota }}</td>
                                <td>{{ $distributor->provinsi }}</td>
                                <td>{{ $distributor->kontak }}</td>
                                <td>{{ $distributor->email }}</td>
                                <td>
                                    <a href="{{ route('distributor.detail', $distributor->id) }}" class="badge badge-info">Detail</a>
                                    <a href="{{ route('distributor.edit', $distributor->id) }}" class="badge badge-warning">Edit</a>
                                    <form action="{{ route('distributor.delete', $distributor->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="badge badge-danger"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus distributor ini?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <td colspan="7" class="text-center">Data Distributor Kosong</td>
                        @endforelse
                    </table>
                </div>
            </div>
    </div>
    </div>
@endsection