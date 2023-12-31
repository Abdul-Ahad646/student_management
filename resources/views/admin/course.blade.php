@extends('layouts.layout')

@section('content')



<br>
<div class="container">
    <div class="row">
        <div class="">
            <ul>
                <button><a href="/" class=" list-group-item  text-success ">Home</a></button>
                <button><a href="{{route('admin')}}" class="list-group-item text-success"><i
                            class="glyphicon glyphicon-envelope text-primary active "></i> Dashboard</a>
                </button>
                <button>
                    <a href="{{route('department')}}" class="list-group-item text-success"><i
                            class="glyphicon glyphicon-envelope text-primary"></i> Department add</a>
                </button>
                <button>
                    <a href="{{route('course')}}" class="list-group-item text-danger active "><i
                            class="glyphicon glyphicon-envelope text-primary"></i> Course Add</a>
                    <a href="{{route('departmentView')}}" class="list-group-item text-success"><i
                            class="glyphicon glyphicon-envelope text-primary"></i>Department and Course add </a>
                </button>
                <button>
                    <a href="{{ route('departmentCourse') }}" class="list-group-item text-success"><i
                            class="glyphicon glyphicon-envelope text-primary"></i> department and course </a>
                </button>
                <button>
                    <a href="{{route('studentView')}}" class="list-group-item text-success"><i
                            class="glyphicon glyphicon-envelope text-primary"></i> Student all details</a>
                </button>
            </ul>

        </div>
        <div class="col-md-8">

            <div class="jumbotron">


                @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
                @endif

                </ul>
                <form action="{{route('coursestore')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group mb-3">
                        <label> Course Name:</label>
                        <input type="text" name="name" class="text-primary">

                        @foreach ($errors->all() as $error)
                        <span class="text-danger">{{ $error }}</span>
                        @endforeach

                    </div>
                    <input type="submit" class="btn btn-success" value="Course Add ">
            </div>

            </form>






        </div>

    </div>



    @endsection