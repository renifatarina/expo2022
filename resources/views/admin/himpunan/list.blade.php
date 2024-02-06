@extends('admin.master')

@section('title')
    List Himpunan
@endsection

@section('content')
    @if(session('success')) 
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif

    <a href="/renicantik/add-himpunan" class="btn btn-primary mb-3">Add New Himpunan</a>
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
            @forelse ($himpunans as $key=>$himpunan)
                <tr>
                    <td>{{$key + 1}}</th>
                    <td>{{$himpunan->title}}</td>
                    <td>{{Str::limit($himpunan->desc, 60)}}</td>
                    <td>{{$himpunan->picture}}</td>
                    <td>{{$himpunan->basement}}</td>
                    <td>{{$himpunan->loc}}</td>
                    <td>{{$himpunan->created_at}}</td>
                    <td>
                        <form action="/renicantik/himpunan/{{$himpunan->id}}" method="POST">
                            <a href="/renicantik/himpunan/{{$himpunan->id}}" class="btn btn-info">Edit</a>
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