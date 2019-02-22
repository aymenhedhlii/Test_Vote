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
                <h4 class="mt-5 mb-5">Questions</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('questions.question.create') }}" class="btn btn-success" title="Create New Question"> 
                    <span class="glyphicon glyphicon-plus" aria-hidden="true">create question</span>
                </a>
            </div>

        </div>
        
        @if(count($questions) == 0)
            <div class="panel-body text-center">
                <h4>No Questions Available!</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Enonce</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($questions as $question)

                        <tr>
                            <td>{{ $question->enonce }}
<br>
 @foreach($reponses as $reponse)
 @if($reponse->question_id==$question->id)
 <input type="radio" name="rep_{{$question->id}}[]" value="{{$reponse->id}}">&nbsp;{{$reponse->reponse}}<br>
 @endif
@endforeach 
                            </td>

                           
                        </tr>
                    @endforeach 

                    </tbody>
                </table>

            </div>
        </div>

        <div class="panel-footer">
            {!! $questions->renderradio       </div{{$reponse->reponse}}[]>
        
        @endif
   
    </div>
@endsection