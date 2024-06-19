@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="ms-table-container mt-5">
            <div class="d-flex justify-content-between align-items-center">
                <h1 class="fw-bold">Projects</h1>
                
                <div class="d-flex flex-column">
                    <a href="{{route('admin.projects.create')}}" class="btn btn-primary fw-bold">Add New </a>
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
                                        <button class="btn btn-primary fw-bold text-light">More</button>
                                        <a href="{{ route('admin.projects.edit',['project'=>$curProject->id])  }}" class="btn btn-warning fw-bold text-light">Edit</a>
                                        <form action="{{ route('admin.projects.destroy', ['project' => $curProject->id]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this comic?')">Delete</button>
                                        </form>
                                        {{-- <button class="btn btn-danger fw-bold">Delete</button> --}}
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                        
                    </tbody>
                </table>
        </div>
    </div>
@endsection