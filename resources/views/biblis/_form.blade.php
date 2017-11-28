 <div class="form-group">
    <label for="formGroupExampleInput">Title</label>

    <input type="text" class="form-control" id="formGroupExampleInput" name="title" value="{{old('title') ?? $bibli->title}}">
    {!! $errors->first('title','<p>:message</p>') !!}
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput2">Description</label>
    
    <input type="text" class="form-control" id="formGroupExampleInput2" name="description" value="{{old('description') ?? $bibli->description}}">
    {!! $errors->first('title','<p>:message</p>') !!}
  </div>