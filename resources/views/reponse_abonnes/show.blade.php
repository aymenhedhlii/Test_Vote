@extends('layouts.defaults')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Reponse Abonnes' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('reponse_abonnes.reponse_abonnes.destroy', $reponseAbonnes->id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('reponse_abonnes.reponse_abonnes.index') }}" class="btn btn-primary" title="Show All Reponse Abonnes">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('reponse_abonnes.reponse_abonnes.create') }}" class="btn btn-success" title="Create New Reponse Abonnes">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('reponse_abonnes.reponse_abonnes.edit', $reponseAbonnes->id ) }}" class="btn btn-primary" title="Edit Reponse Abonnes">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Reponse Abonnes" onclick="return confirm(&quot;Delete Reponse Abonnes??&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>User</dt>
            <dd>{{ optional($reponseAbonnes->user)->id }}</dd>
            <dt>Question</dt>
            <dd>{{ optional($reponseAbonnes->question)->enonce }}</dd>
             <dt>Reponse</dt>
            <dd>{{ optional($reponseAbonnes->reponse)->reponse }}</dd>
            <dt>Created At</dt>
            <dd>{{ $reponseAbonnes->created_at }}</dd>
            <dt>Updated At</dt>
            <dd>{{ $reponseAbonnes->updated_at }}</dd>

        </dl>

    </div>
</div>

@endsection