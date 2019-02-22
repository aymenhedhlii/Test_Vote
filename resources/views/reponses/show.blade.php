@extends('layouts.defaults')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Reponse' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('reponses.reponse.destroy', $reponse->id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('reponses.reponse.index') }}" class="btn btn-primary" title="Show All Reponse">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('reponses.reponse.create') }}" class="btn btn-success" title="Create New Reponse">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('reponses.reponse.edit', $reponse->id ) }}" class="btn btn-primary" title="Edit Reponse">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Reponse" onclick="return confirm(&quot;Delete Reponse??&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Reponse</dt>
            <dd>{{ $reponse->reponse }}</dd>
            <dt>Correct</dt>
            <dd>{{ ($reponse->correct) ? 'Yes' : 'No' }}</dd>
            <dt>Question</dt>
            <dd>{{ optional($reponse->question)->enonce }}</dd>
            <dt>Created At</dt>
            <dd>{{ $reponse->created_at }}</dd>
            <dt>Updated At</dt>
            <dd>{{ $reponse->updated_at }}</dd>

        </dl>

    </div>
</div>

@endsection