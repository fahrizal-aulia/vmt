@extends('instructor.master')

@section('content')
    @include('instructor.header')

    @include('instructor.sidebar')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Scenarios</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('instructor.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Scenarios</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Scenario Table</h3>
                                {{-- <a class="btn btn-primary float-right mt-2" href="{{route('scenarios.create')}}" role="button">Add Scenario</a> --}}
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                @include('flash-message')
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Scenario Name</th>
                                            <th>Project Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($scenario as $item)
                                            <tr>
                                                <td>{{ $item->scenario_name }}</td>
                                                <td><a href="exercises/viewExercise/{{ $item->id_exercise }}">{{ $item->project_name }}</a></td>
                                                <td>
                                                    {{-- <a href="scenarios/viewScenario/{{ $item->id_scenario }}" class="btn btn-info btn-lg">
                                                        View
                                                    </a>
                                                    <a href="scenarios/updateScenario/{{ $item->id_scenario }}" class="btn btn-info btn-lg">
                                                        Update 
                                                    </a> --}}
                                                    <a href="scenarios/deleteScenario/{{ $item->id_scenario }}" class="btn btn-danger btn-lg" onclick="return confirm('Are you sure?')">
                                                        Delete
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection