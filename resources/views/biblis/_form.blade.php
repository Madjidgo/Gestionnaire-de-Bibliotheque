   <div class="form-group">
    <label for="formGroupExampleInput">Title</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="title" value="{{old('title') ?? $book->title}}">
    {!! $errors->first('title','<p>:message</p>') !!}
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput2">Author</label>
   
    <input type="text" class="form-control" id="formGroupExampleInput2" name="author" value="{{old('author') ?? $book->author}}">
    {!! $errors->first('author','<p>:message</p>') !!}

     <div class="form-group">
    <label for="formGroupExampleInput">Resume</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="resume" value="{{old('resume') ?? $book->resume}}">
    {!! $errors->first('resume','<p>:message</p>') !!}
  </div>

   <div class="form-group">
    <label for="formGroupExampleInput">Category</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="category" value="{{old('category') ?? $book->category}}">
    {!! $errors->first('category','<p>:message</p>') !!}
  </div>

   <div class="form-group">
    <label for="formGroupExampleInput">Borrow</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="borrow" value="{{old('borrow') ?? $book->borrow}}">
    {!! $errors->first('borrow','<p>:message</p>') !!}
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput">User_id</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="user_id" value="{{old('user_id') ?? $book->user_id}}">
    {!! $errors->first('user_id','<p>:message</p>') !!}
  
  </div>

	
   <div class="form-group">
    <label for="formGroupExampleInput">Date</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="date" value="{{old('date') ?? $book->date}}">
    {!! $errors->first('date','<p>:message</p>') !!}
  </div>
