@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit SchoolRankingCriterium #{{ $schoolrankingcriterium->id }}</div>
                    <div class="panel-body">
                        <a href="{{ url('/admin/school-ranking-criteria') }}" title="Back"><button class="btn btn-default btn-md"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::model($schoolrankingcriterium, [
                            'method' => 'PATCH',
                            'url' => ['/admin/school-ranking-criteria', $schoolrankingcriterium->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('admin.school-ranking-criteria.form', ['submitButtonText' => 'Update'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
