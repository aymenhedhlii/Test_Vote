@extends('layouts.defaults')

@section('content')

    @if(Session::has('success_message'))
        <div class="alert alert-success">
            <span class="glyphicon glyphicon-ok"></span>
            {!! session('success_message') !!}

            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>

        </div>
    @endif

    <div class="panel panel-default">

        <div class="panel-heading clearfix">

            <div class="pull-left">
                <h4 class="mt-5 mb-5">Reponse Abonnes</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('reponse_abonnes.reponse_abonnes.create') }}" class="btn btn-success" title="Create New Reponse Abonnes">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($reponseAbonnesObjects) == 0)
            <div class="panel-body text-center">
                <h4>No Reponse Abonnes Available!</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>User</th>
                            <th>Question</th>
                            <th>Reponse</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($reponseAbonnesObjects as $reponseAbonnes)
                        <tr>
                            <td>{{ optional($reponseAbonnes->user)->id }}</td>
                            <td>{{ optional($reponseAbonnes->question)->enonce }}</td>
                                <td>{{ optional($reponseAbonnes->reponse)->reponse }}</td>

                            <td>

                                <form method="POST" action="{!! route('reponse_abonnes.reponse_abonnes.destroy', $reponseAbonnes->id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('reponse_abonnes.reponse_abonnes.show', $reponseAbonnes->id ) }}" class="btn btn-info" title="Show Reponse Abonnes">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('reponse_abonnes.reponse_abonnes.edit', $reponseAbonnes->id ) }}" class="btn btn-primary" title="Edit Reponse Abonnes">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Reponse Abonnes" onclick="return confirm(&quot;Delete Reponse Abonnes?&quot;)">
                                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                        </button>
                                    </div>

                                </form>
                                
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>

        <div class="panel-footer">
            {!! $reponseAbonnesObjects->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection