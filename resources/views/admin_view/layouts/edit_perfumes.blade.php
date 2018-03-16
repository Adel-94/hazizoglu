@extends('admin_view.layouts.master')
@section('content')
<div class="x_panel">
<div class="x_content">
<form action="{{ route('update_perfumes', $perfume_id->id)  }}" method="POST" id="demo-form2" class="form-horizontal form-label-left" enctype="multipart/form-data">
{{ csrf_field()  }}
<div class="form-group">
<label class="control-label col-md-3">Perfume Name <span class="required">*</span>
</label>
<div class="col-md-7">
<input type="text"  name="name" value="{{ $perfume_id->name}}" required="required" class="form-control col-md-7 col-xs-12">
</div>
</div>
<div class="form-group">
<label class="control-label col-md-3">Perfume Description <span class="required">*</span>
</label>
<div class="col-md-7">
 <textarea  required="required" class="form-control" rows="10" cols="80" name="description" data-parsley-trigger="keyup" data-parsley-minlength="50" data-parsley-maxlength="50" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
data-parsley-validation-threshold="10">{{ $perfume_id->description }}</textarea>
</div>
</div>
<div class="form-group">
<label class="control-label col-md-3">Perfume Ingredients <span class="required">*</span>
</label>
<div class="col-md-7">
 <textarea  required="required" class="form-control" rows="10" cols="80" name="ingredient" data-parsley-trigger="keyup" data-parsley-minlength="50" data-parsley-maxlength="50" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
data-parsley-validation-threshold="10">{{ $perfume_id->ingredient }}</textarea>
</div>
</div>
<div class="form-group">
<label class="control-label col-md-3">Perfume Volume <span class="required">*</span>
</label>
<div class="col-md-7">
 <input type="number"  name="volume" value="{{ $perfume_id->volume}}" required="required" class="form-control col-md-7 col-xs-12">
</div>
</div>
<div class="form-group">
<label class="control-label col-md-3">Perfume Price <span class="required">*</span>
</label>
<div class="col-md-7">
 <input type="number"  name="price" value="{{ $perfume_id->price}}" required="required" class="form-control col-md-7 col-xs-12">
</div>
</div>

<div class="form-group">
<label class="control-label col-md-3">Image Path1 <span class="required">*</span>
  </label>
   <div class="col-md-7" style="margin-top:13px;">
      <img src="{{ ( asset('/assets/upload/').'/'.$perfume_id->img_path1) }}" style="width: 120px; height: 80px;">
    <input type="file" name="img_path1" value="{{ ( asset('/assets/upload/').'/'.$perfume_id->img_path1) }}" accept="image/*">
  </div>
</div>

<div class="form-group">
<label class="control-label col-md-3">Image Path2 <span class="required">*</span>
  </label>
   <div class="col-md-7" style="margin-top:13px;">
      <img src="{{ ( asset('/assets/upload/').'/'.$perfume_id->img_path2) }}" style="width: 120px; height: 80px;">
    <input type="file" name="img_path2" value="{{ ( asset('/assets/upload/').'/'.$perfume_id->img_path2) }}" accept="image/*">
  </div>
</div>
<div class="form-group">
<label class="control-label col-md-3">Image Path3 <span class="required">*</span>
  </label>
   <div class="col-md-7" style="margin-top:13px;">
      <img src="{{ ( asset('/assets/upload/').'/'.$perfume_id->img_path3) }}" style="width: 120px; height: 80px;">
    <input type="file" name="img_path3" value="{{ ( asset('/assets/upload/').'/'.$perfume_id->img_path3) }}" accept="image/*">
  </div>
</div>
<div class="form-group">
<label class="control-label col-md-3">Image Path4 <span class="required">*</span>
  </label>
   <div class="col-md-7" style="margin-top:13px;">
      <img src="{{ ( asset('/assets/upload/').'/'.$perfume_id->img_path4) }}" style="width: 120px; height: 80px;">
    <input type="file" name="img_path4" value="{{ ( asset('/assets/upload/').'/'.$perfume_id->img_path4) }}" accept="image/*">
  </div>
</div>
<div class="form-group">
<label class="control-label col-md-3">Image Path5 <span class="required">*</span>
  </label>
   <div class="col-md-7" style="margin-top:13px;">
      <img src="{{ ( asset('/assets/upload/').'/'.$perfume_id->img_path5) }}" style="width: 120px; height: 80px;">
    <input type="file" name="img_path5" value="{{ ( asset('/assets/upload/').'/'.$perfume_id->img_path5) }}" accept="image/*">
  </div>
</div>

<div class="form-group">
<label class="control-label col-md-3">Video Path<span class="required">*</span>
</label>
<div class="col-md-7">
<iframe width="100" height="100" src="https://www.youtube.com/embed/{{ $perfume_id->video_path }}">
</iframe>
<input type="text"  name="video_path"  required="required" class="form-control col-md-7 col-xs-12">
</div>
</div>



<div class="form-group">
<label class="control-label col-md-3">
<span class="required">Perfume Type Name * </span>
  </label>
  <div class="col-md-7">
<select  class="form-control col-md-7 col-xs-12" name="perfume_name">
 <option value=" {{(!is_null($perfume_id->perfume_types)) ? $perfume_id->perfume_types->id : ''}}"  selected="true">
{{(!is_null($perfume_id->perfume_types)) ? $perfume_id->perfume_types->perfume_name : ''}}
 </option>
 @foreach($perfume_types  as $p_types)
 <option value="{{ $p_types->id }}">
  {{  $p_types->perfume_name }}</option>     
 @endforeach
</select>
</div>
</div>
  <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
  <button type="submit" class="btn btn-success">Update</button>
</div>
</form>
@if ($errors->any())
<div class="alert alert-danger">
   <ul>
       @foreach ($errors->all() as $error)
           <li>{{ $error }}</li>
       @endforeach
   </ul>
</div>
@endif
    </div>
  </div>
@stop