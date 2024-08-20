@extends('layouts.admin-app')
@push('style')

@endpush

@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Votes</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">Votes</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Vote Details</h3>
                    </div>
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Scenario</th>
                                    <th>Scenario Number</th>
                                    <th>User</th>
                                    <th>Created At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $key => $value)
                                <tr>
                                    <td>{{ $value->id }}</td>
                                
                                    <td><?php if($value->scenario == 'Jmbarani.com    ') {echo "Draw"; }else{ echo  $value->scenario.'s';  } ?></td>
                                    <td><?php if($value->scenario_number == 'Draw') {echo "Scenario"; }else{ echo  $value->scenario_number;  } ?></td>
                                  
                                    <td>{{ $value->user->name }}</td>
                                    <td>
                                        <span class="badge badge-info">
                                            {{ $value->created_at->format('d M, Y') }};
                                        </span>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Scenario</th>
                                    <th>Scenario Number</th>
                                    <th>User</th>
                                    <th>Created At</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@push('script')

@endpush
