<?php

function redirect($location){
    header("LOCATION:$location");
}
function popMSG($msg){
    echo "<script>alert('$msg');</script>";
}

function alertSuccess($msg){
    $newMSG=<<<DELIMETER
<div class="alert alert-success alert-dismissible">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Success!</strong> $msg
</div>
DELIMETER;
    echo $newMSG;
}

function alertError($msg){
    $newMSG=<<<DELIMETER
<div class="alert alert-danger  alert-dismissible">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Sorry!</strong> $msg
</div>
DELIMETER;
    echo $newMSG;
}


 function alertQuery($query,$msg){
     if ($query){
         alertSuccess($msg." successful");
     }else{
         alertError($msg." unsuccessful");
     }
 }


    // just a place holder

     $result =<<<SHOWHTML
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<div class="card mb-3">
<div class="card-header">
<i class="fas fa-plus"></i>
<i class="fas fa-pen-fancy"></i>

</div>
<div class="card-body">
<div class="row">
<div class="col-lg-12    form-group">

<form action="" METHOD="POST" enctype="multipart/form-data">
<?php
AddJobPosting();
?>
<div class="row">
<div class="col-lg-6 form-group">
<label for="jobTitle">Job Title</label>
<input type="text" class="form-control" name="jobTitle" id="jobTitle"  placeholder="Job Title" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required/>
<div class="validation"></div>
</div>
<div class="col-lg-6 form-group">
<label class="text-white">Company Name</label>
<div class="form-group input-group">
<div class="input-group-prepend">
<span class="input-group-text bg-primary text-white">Company Name</span>
</div>
<select  name="compID">
<option value="NULL">Choose Company</option>
<?php
showCompOp();
?>
</select>
<div class="validation"></div>
</div>
</div>
</div>
<hr>
<div class="row">
<div class="col-lg-6 form-group" >
<label for="position">Position</label>
<input type="text" name="position" id="position" class="form-control" placeholder="Position Available..." data-rule="minlen:5" data-msg="This field can not be empty" required>
<div class="validation"></div>
</div>
<div class="col-lg-6 form-group">
<label class="text-white">Industry Name</label>
<div class="form-group input-group">
<div class="input-group-prepend">
<span class="input-group-text bg-primary text-white">Industry</span>
</div>
<select  name="indID">
<?php
showIndOp();
?>
</select>
<div class="validation"></div>
</div>
</div>
</div>
<hr>
<div class="row">
<div class="col-lg-6 form-group" >
<label for="duration">Duration of Employment</label>
<input type="text" name="duration" id="duration" class="form-control" placeholder="Duration of employment..." data-rule="minlen:5" data-msg="This field can not be empty" required>
<div class="validation"></div>
</div>
<div class="col-lg-6 form-group">
<label for="location">Location</label>
<input type="text" name="location" id="location" class="form-control" placeholder="Location of the Organization..." data-rule="minlen:2" data-msg="The industry must be added" required>
<div class="validation"></div>
</div>
</div>
<hr>
<div class="row">
<div class="col-lg-6 form-group" >
<label for="deadend">Application Dead End</label>
<input type="date" name="deadend" id="deadend" class="form-control" placeholder="Dead end for application" data-msg="This field can not be empty" required>
<div class="validation"></div>
</div>
</div>
<hr>
<div class="row">
<div class="col-lg-12 form-group">
<label for="jobDesc">Job Description</label>
<textarea name="jobDesc" id="jobDesc"  class="form-control " placeholder="Description of the job offered" data-rule="minlen:2" data-msg="This Field must not be empty" required ></textarea>
<div class="validation"></div>
</div>
</div>
<hr>
<div class="row">
<div class="offset-5">
<input type="submit" name="addJob" class="btn btn-outline-primary" value="Add New Job">
</div>
</div>
</form>
</div>
</div>
</div>




</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="button" class="btn btn-primary">Save changes</button>
</div>
</div>
</div>
</div>
SHOWHTML;
     echo $result;


 }

 function existCode(){
    exit();

 }

 function toLower($string){
    $string = strtolower($string);
    return $string;
 }
 function firstToUpper($string){
    $string =   ucfirst($string);
    return $string;
 }

