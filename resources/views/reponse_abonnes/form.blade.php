

        <input type="hidden" class="form-control" id="user_id" name="user_id" value="{{auth()->user()->id}}">
    

<div class="form-group">
    <label for="question_id" class="col-md-2 control-label">Question : </label>
    <div class="col-md-10">
       <h3>
        @if(count($questions)>0)
        	@foreach ($questions as $key => $question)
			    	{{ $question }}
			@endforeach
            <input type="hidden" name="question_id" value="{{$key}}">
        </h3>
        <ul>
        @foreach ($reponses as $key => $reponse)
        <li> <input type="radio" name="reponse_id" value="{{$reponse['id']}}">       
            {{ $reponse['reponse'] }}
        </li>
            @endforeach
            @else
            {{"terminé"}}
            @endif
            
        </ul>
    </div>
</div>

