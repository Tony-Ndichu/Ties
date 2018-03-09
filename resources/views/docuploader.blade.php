@extends ('layouts.master')

@section('content')

<div id="projectadd">
 <form  id="addform" action="{{ route('docupload') }}" method="post" enctype="multipart/form-data">

      {{ csrf_field() }}

      <label id="camera2"><i class="fa fa-camera fa-lg" aria-hidden="true"></i>

      <input  id="projectpic" type="file"  name="uploadFile" onchange="preview_image2(event)" />

  </label>
  
  <div id="full">

      <img id="disp" />

      	<script type='text/javascript'>
function preview_image2(event)
{
var reader=new FileReader();
reader.onload=function()
{
	var output=document.getElementById('disp');
	output.src=reader.result;
	}
	reader.readAsDataURL(event.target.files[0]);
	}
	</script>

</div>

      
    <label for="details" >Description</label>
    <textarea  class="form-control" rows="2" name="description" ></textarea>

      
      <input  type="submit"  id="uploadimage" class="btn btn-success" value="Upload"/>



  </form>
</div>

@endsection