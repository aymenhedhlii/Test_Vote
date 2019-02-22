
<div class="form-group {{ $errors->has('reponse') ? 'has-error' : '' }}">
    <label for="reponse" class="col-md-2 control-label">Reponse</label>
    <div class="col-md-10">
        <input class="form-control" name="reponse" type="text" id="reponse" value="{{ old('reponse', optional($reponse)->reponse) }}" minlength="1" maxlength="191" required="true" placeholder="Enter reponse here..." autocomplete="off">
        {!! $errors->first('reponse', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('correct') ? 'has-error' : '' }}">
   
</div>

<div class="form-group {{ $errors->has('question_id') ? 'has-error' : '' }}">
    <label for="question_id" class="col-md-2 control-label">Question</label>
    <div class="col-md-10">
        <select class="form-control select" id="question_id" name="question_id" required="true">
        	    <option value="" style="display: none;" {{ old('question_id', optional($reponse)->question_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select question</option>
        	@foreach ($questions as $key => $question)
			    <option value="{{ $key }}" {{ old('question_id', optional($reponse)->question_id) == $id ? 'selected' : '' }}>
			    	{{ $question }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('question_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

