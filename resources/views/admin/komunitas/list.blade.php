@extends('admin.master')

@section('title')
    List Komunitas
@endsection

@section('content')
    @if(session('success')) 
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif

    <a href="/renicantik/add-komunitas" class="btn btn-primary mb-3">Add New Komunitas</a>
    <table class="table">
        <thead class="thead-light">
            <tr>
            <th scope="col">#</th>
            <th scope="col" width="150px">Title</th>
            <th scope="col"width="150px">Description</th>
            <th scope="col"width="150px">Picture</th>
            <th scope="col"width="150px">Basement</th>
            <th scope="col"width="150px">Location</th>
            <th scope="col">Date Created</th>
            <th scope="col" >Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($komunitases as $key=>$komunitas)
                <tr>
                    <td>{{$key + 1}}</th>
                    <td>{{$komunitas->title}}</td>
                    <td>{{Str::limit($komunitas->desc, 60)}}</td>
                    <td>{{$komunitas->picture}}</td>
                    <td>{{$komunitas->basement}}</td>
                    <td>{{$komunitas->loc}}</td>
                    <td>{{$komunitas->created_at}}</td>
                    <td>
                        <form action="/renicantik/komunitas/{{$komunitas->id}}" method="POST">
                            <a href="/renicantik/komunitas/{{$komunitas->id}}" class="btn btn-info">Edit</a>
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger my-1" onclick="return confirm('Are you sure?')" value="Delete">
                        </form>
                    </td>
                </tr>
            @empty
                <tr colspan="3">
                    <td class="text-center">No data</td>
                </tr>  
            @endforelse              
        </tbody>
    </table>
@endsection