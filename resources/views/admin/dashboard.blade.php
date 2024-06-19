@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-4">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>

        <div class="ms-table-container mt-5">
            <div class="d-flex justify-content-between align-items-center">
                <h1 class="fw-bold">Projects</h1>
                
                <div class="d-flex flex-column">
                    <a href="http://" class="btn btn-primary fw-bold">Add New </a>
            <span class="fw-bold">Num of row: <?= count($projectsList)?> </span>

                </div>
                
            </div>
            <hr>
            
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Owner</th>
                        <th scope="col">Description</th>
                        <th scope="col">Functions</th>


                    </tr>
                    </thead>
                    <tbody>

                        @foreach ($projectsList as $curProject)
                            <tr>
                                <th scope="row">{{ $loop->index + 1}}</th>
                                <td>{{ $curProject->title }}</td>
                                <td>{{ $curProject->owner }}</td>
                                <td>{{ $curProject->description }}</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <button class="btn btn-warning fw-bold text-light">Edit</button>
                                        <button class="btn btn-danger fw-bold">Delete</button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                        
                    </tbody>
                </table>
        </div>
    </div>
@endsection
