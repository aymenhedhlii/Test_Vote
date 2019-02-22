@extends('layouts.defaults')

@section('content')

    <div class="panel panel-default">

        <div class="panel-heading clearfix">
            
            <span class="pull-left">
                <h4 class="mt-5 mb-5">Create New Reponse</h4>
            </span>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('reponses.reponse.index') }}" class="btn btn-primary" title="Show All Reponse">
                    <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                </a>
            </div>

        </div>

        <div class="panel-body">
        
            @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <form method="POST" action="{{ route('reponses.reponse.store') }}" accept-charset="UTF-8" id="create_reponse_form" name="create_reponse_form" class="form-horizontal">
            {{ csrf_field() }}
            @include ('reponses.form', [
                                        'reponse' => null,
                                      ])

                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                         @if (auth()->user()->isAdmin == 1)
                        <input class="btn btn-primary" type="submit" value="Ajouter reponse" >
                          
                        <input class="btn btn-primary" type="button" value="Ajouter nouvelle question" onclick="window.location.href='/questions/create'">
                       
                       
                         <input class="btn btn-primary" type="button" value="Liste des questions" onclick="window.location.href='/questions'">
                          @endif
                    </div>
                </div>

            </form>

        </div>
    </div>

@endsection


