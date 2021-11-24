@extends('base')

@section('content')

    @if ($info = Session::get('info'))

        <div class="card" style="padding: 10px">
            <div class="card-body bg-success text-white">
                {{$info}}
            </div>
        </div>

    @endif

    <div class="btn" style="float: right">
        <a href="{{url('/investors/create')}}" class="btn btn-primary" >
            Add Investors
        </a>
    </div>
    <h1>List of Investors</h1>
    <table class='table table-bordered table-striped table-sm'>

        <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Investment</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($investors as $s)
                <tr>
                    <td>{{$s -> name}}</td>
                    <td>{{$s -> address}}</td>
                    <td>{{$s -> phone}}</td>
                    <td>{{$s -> investment}}</td>
                </tr>

            @endforeach
        </tbody>
    </table>

@endsection