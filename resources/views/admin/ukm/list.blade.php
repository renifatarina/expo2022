@extends('admin.master')

@section('title')
    List UKM
@endsection

@section('content')
    @if(session('success')) 
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif

    <a href="/renicantik/add-ukm" class="btn btn-primary mb-3">Add New UKM</a>
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
            @forelse ($ukms as $key=>$ukm)
                <tr>
                    <td>{{$key + 1}}</th>
                    <td>{{$ukm->title}}</td>
                    <td>{{Str::limit($ukm->desc, 60)}}</td>
                    <td>{{$ukm->picture}}</td>
                    <td>{{$ukm->basement}}</td>
                    <td>{{$ukm->loc}}</td>
                    <td>{{$ukm->created_at}}</td>
                    <td>
                        <form action="/renicantik/ukm/{{$ukm->id}}" method="POST">
                            <a href="/renicantik/ukm/{{$ukm->id}}" class="btn btn-info">Edit</a>
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