 <div class="form-group">
    <label for="formGroupExampleInput">Title</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="title" value="{{old('title') ?? $bibli->title}}">
    {!! $errors->first('title','<p>:message</p>') !!}
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput2">Author</label>
   
    <input type="text" class="form-control" id="formGroupExampleInput2" name="author" value="{{old('author') ?? $bibli->author}}">
    {!! $errors->first('title','<p>:message</p>') !!}

     <div class="form-group">
    <label for="formGroupExampleInput">Resume</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="resume" value="{{old('resume') ?? $bibli->resume}}">
    {!! $errors->first('title','<p>:message</p>') !!}
  </div>

   <div class="form-group">
    <label for="formGroupExampleInput">Category</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="category" value="{{old('category') ?? $bibli->category}}">
    {!! $errors->first('title','<p>:message</p>') !!}
  </div>

	
   <div class="form-group">
    <label for="formGroupExampleInput">Date</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="date" value="{{old('date') ?? $bibli->date}}">
    {!! $errors->first('title','<p>:message</p>') !!}
  </div>
