@extends('main')

@section('title', trans('app.projects'))

@section('content')

    <div>
        <table border="4" style=" border:10px solid brown;
border-top-color:black;padding:10px 5px">
            <tr style="color:blue;">
                <th>Projects</th>
                <th>Clients</th>
                <th>People</th>
            </tr>


            @foreach($projects as $project)

                <tr>
                    <td>{{$project['name']}} </td>
                    <td>{{$project['client']['name']}}</td>
                    <td>{{sizeof($project['total_persons'])}}</td>


                </tr>
            @endforeach
        </table>
    </div>
@endsection


