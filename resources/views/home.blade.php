@extends('layouts.main')

@section('content')
@include('layouts.messegvld')
<div class="container"> <br>
    <h1>Home Page</h1>

    <table class="table">
        <thead class="black white-text">
            <tr>
                <th scope="col">id
                </th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)

            <tr>
                <th scope="row">{{$student->id}}</th>
                <td>{{$student->first_name}}</td>
                <td>{{$student->last_name}}</td>
                <td>{{$student->email}}</td>
                <td>{{$student->phone}}</td>

                <td>
                    <a href="{{ route('edit',$student->id)}}">Edit</a>
                </td>
                <td>
                    <form method="post" id="delete-form{{$student->id }}" action="{{route('delete',$student->id) }}" style="display: none;">
                        {{ csrf_field() }}
                        {{ method_field('delete') }}
                    </form>

                    <button onclick="
                    if(confirm('Are you sure you wanna delete?')){event.preventDefault();
                        document.getElementById('delete-form{{ $student->id }}').submit();
                
                    }else{ 
                        event.preventDefault();
                          } 
                    " class="btn btn-danger" href="">
                        <iaria-hidden="true">
                            </i>
                            Delete
                    </button>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br> <br> <br> <br>
</div>

@endsection