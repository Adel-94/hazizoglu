@extends('admin_view.layouts.master')
@section('content1')
<div class="x_panel">
<div class="x_content">
<form action="{{ route('update_banners', $banner_id->id)  }}" method="POST" id="demo-form2" class="form-horizontal form-label-left" enctype="multipart/form-data">
{{ csrf_field()  }}
<div class="form-group">
<label class="control-label col-md-3">Left_banner_image <span class="required">*</span>
  </label>
   <div class="col-md-7" style="margin-top:13px;">
      <img src="{{('/assets/upload/banner_upload/'.$banner_id->left_banner_path)}}" style="width: 120px; height: 80px;">
    <input type="file" name="left_banner_path" value="{{ ( asset('/assets/upload/').'/'.$banner_id->left_banner_path) }}" accept="image/*">
  </div>
</div>
<div class="form-group">
<label class="control-label col-md-3">Left_banner_link <span class="required">*</span>
</label>
<div class="col-md-7">
<input type="text"  name="left_banner_link" value="{{ $banner_id->left_banner_link}}" required="required" class="form-control col-md-7 col-xs-12">
</div>
</div>
<div class="form-group">
<label class="control-label col-md-3">Right_banner_image <span class="required">*</span>
  </label>
   <div class="col-md-7" style="margin-top:13px;">
      <img src="{{('/assets/upload/banner_upload/'.$banner_id->right_banner_path)}}" style="width: 120px; height: 80px;">
    <input type="file" name="right_banner_path" value="{{ ( asset('/assets/upload/').'/'.$banner_id->right_banner_path) }}" accept="image/*">
  </div>
</div>
<div class="form-group">
<label class="control-label col-md-3">Right_banner_link <span class="required">*</span>
</label>
<div class="col-md-7">
<input type="text" id="news_title" name="right_banner_link" value="{{ $banner_id->right_banner_link}}" required="required" class="form-control col-md-7 col-xs-12">
</div>
</div>
<div class="form-group">
<label class="control-label col-md-3">Top_banner_image<span class="required">*</span>
  </label>
   <div class="col-md-7" style="margin-top:13px;">
      <img src="{{('/assets/upload/banner_upload/'.$banner_id->top_banner_path)}}" style="width: 120px; height: 80px;">
    <input type="file" name="top_banner_path" value="{{ ( asset('/assets/upload/').'/'.$banner_id->top_banner_path) }}" accept="image/*">
  </div>
</div>
<div class="form-group">
<label class="control-label col-md-3">top_banner_link <span class="required">*</span>
</label>
<div class="col-md-7">
<input type="text" id="top_banner_link" name="top_banner_link" value="{{ $banner_id->top_banner_link}}" required="required" class="form-control col-md-7 col-xs-12">
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