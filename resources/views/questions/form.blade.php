
<div class="form-group {{ $errors->has('enonce') ? 'has-error' : '' }}">
    <label for="enonce" class="col-md-2 control-label">Enonce</label>
    <div class="col-md-10">
        <input class="form-control" name="enonce" type="text" id="enonce" value="{{ old('enonce', optional($question)->enonce) }}" minlength="1" maxlength="191" required="true" placeholder="Enter enonce here...">
        {!! $errors->first('enonce', '<p class="help-block">:message</p>') !!}
    </div>
</div>

