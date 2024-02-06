@extends('admin.master')

@section('title')
    List BSO
@endsection

@section('content')
    @if(session('success')) 
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif

    <a href="/renicantik/add-bso" class="btn btn-primary mb-3">Add New BSO</a>
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
            @forelse ($bsos as $key=>$bso)
                <tr>
                    <td>{{$key + 1}}</th>
                    <td>{{$bso->title}}</td>
                    <td>{{Str::limit($bso->desc, 60)}}</td>
                    <td>{{$bso->picture}}</td>
                    <td>{{$bso->basement}}</td>
                    <td>{{$bso->loc}}</td>
                    <td>{{$bso->created_at}}</td>
                    <td>
                        <form action="/renicantik/bso/{{$bso->id}}" method="POST">
                            <a href="/renicantik/bso/{{$bso->id}}" class="btn btn-info">Edit</a>
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