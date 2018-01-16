<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	{{ Form::open(array('route' => 'upload.photo', 'enctype' => 'multipart/form-data', 'files' => 'true', 'method'=>'post')) }}
	
		<div class="col-md-4 form-group">
            <label>Image</label>
            <input type="text" name="name">
            <input type="text" name="fname">
            <input type="text" name="mname">
            <input type="text" name="email">
            <input type="text" name="address">
            <input type="text" name="phone">
            <input type="file" name="photo">
            <input type="text" name="education">
            <input type="text" name="gender">
            <input type="text" name="district">           
            <button type="submit" class="btn btn-info">Submit</button>
        </div>
	
	{!! Form::close() !!}



      <div class="col-lg-12" style="padding:20px">
            <table width="100%" style="background:#F4F4F4; padding:20px" class="table table-striped table-bordered" id="dataTables-example">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Father's Name</th>
                        <th>Mother's Name</th>
                        <th>Email</th>                                               
                        <th>Phone No</th>
                        <th>Photo</th>
                        <th>Education</th>
                        <th>Gender</th>
                        <th>District</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($alldata as $print)
                    <tr class="odd gradeX">
                        <td>{{ $print->id }}</td>
                        <td>{{ $print->name }}</td>
                        <td>{{ $print->fname }}</td>
                        <td>{{ $print->mname }}</td>
                        <td>{{ $print->email }}</td>                                               
                        <td>{{ $print->phone }}</td>
                       
                        <td><img src="storage/upload/{{ $print->photo }}" height="40px" width="40px"></td>
                        
                        <td>{{ $print->education }}</td>
                        <td>{{ $print->gender }}</td>
                        <td>{{ $print->district }}</td>
                    </tr>
                    @endforeach                                 
                </tbody>
            </table>                                
      </div>
</body>
</html>