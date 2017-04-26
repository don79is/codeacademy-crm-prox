@extends('main')

@section('title', trans('app.client'))



@section('content')
    <div> Total records : {{$totalCount }}</div>
    <div>Clients</div>
    <ul>@foreach($client as $oneclient)
            <li> {{$oneclient['name']}}
                <ul>
                    @foreach($oneclient['projects'] as $projects)
                        <li>
                            {{$projects['name']}}
                        </li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
@endsection


