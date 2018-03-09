@extends ('layouts.master')

@section('content')

<div id="projectadd">
 <form  id="addform" action="{{ route('upload') }}" method="post" enctype="multipart/form-data">

      {{ csrf_field() }}

      <label id="camera2"><i class="fa fa-camera fa-lg" aria-hidden="true"></i>

      <input  id="projectpic" type="file" id="uploadFile" name="uploadFile" onchange="preview_image2(event)" />

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

      
    <label for="details" >Details:</label>
    <textarea  class="form-control" rows="2" name="details" ></textarea>


    <label for="estimate">Estimate:</label>
      <input type="text" class="form-control" placeholder="estimate" name="estimate"  />

      <label for="location">Location:</label>
      <input type="text" class="form-control" placeholder="location" name="location"  />

      
      <input  type="submit"  id="uploadimage" class="btn btn-success" style="margin-top: 3%;" value="Upload"/>



  </form>
</div>

@endsection