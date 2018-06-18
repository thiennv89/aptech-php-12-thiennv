<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Title:</strong>
            {{-- {!! Form::text('title', null, array('placeholder' => 'Title','class' => 'form-control')) !!}
             --}}
            <input type="text" class="form-control" placeholder="Title" name="title">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Body:</strong>
            {{-- {!! Form::textarea('body', null, array('placeholder' => 'Body','class' => 'form-control','style'=>'height:150px')) !!} --}}
            <textarea name="body" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Body"></textarea>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>