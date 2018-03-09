@extends ('layouts.master')

@section('content')

<div id="projectadd">
 <form  id="addform" action="{{ route('salesupload') }}" method="post" enctype="multipart/form-data">

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

    <label for="price">Price:</label>
    <input type="text" class="form-control" placeholder="price" name="price" />
      
    <label for="details">Description:</label>
    <textarea  class="form-control" rows="2" name="description" ></textarea>

    <label for="type" style="float:left;width: 100%; margin-top: 4%;">Category:</label>
    <select class="type" name="category">
      <option value="Hire equipment">Hire Equipment</option>
      <option value="Building Materials">Building Materials</option>
      <option value="Steel Bars">Steel Bars</option>
      <option value="Plumbing Materials">Plumbing Materials</option>
      <option value="Electrical Materials">Electrical Materials</option>
      <option value="Hardware Equipment">Hardware equipment</option>
    </select>

      
      <input  type="submit"  id="uploadimage" class="btn btn-success" style="margin-top: 3%;" value="Upload"/>



  </form>
</div>

@endsection