<!DOCTYPE html>
<html>
<head>
  <title>Uploading Image</title>
 
  
 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
</head>
<body>
 
<div class="container mt-5">
 
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{session()->get('success')}}
        </div>
    @endif
 
  <div class="card">
 
    <div class="card-header text-center font-weight-bold">
      <h2>Upload Image</h2>
    </div>
 
    <div class="card-body">
        <form method="POST" enctype="multipart/form-data" id="upload-image" action="{{ url('save') }}" >
                   @csrf
            <div class="row">
 
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="file" name="image" placeholder="Choose image" id="image">  
                    </div>
                </div>
                   
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary" id="submit">Submit</button>
                </div>
            </div>     
        </form>
 
    </div>
 
  </div>
 
</div>  
</body>
</html>