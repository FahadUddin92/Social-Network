@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome {{Auth::user()->name}} </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                        Name: {{Auth::user()->name}}<br>
                        Gender: {{Auth::user()->gender}}<br>
                        Email: {{Auth::user()->email}}<br>
                        Member Since: {{Auth::user()->created_at}}<br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
