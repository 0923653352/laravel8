<div class="row">
    
    <div class="form-group col-lg-6">
        <label class="control-label">{{ 'Name' }}</label>
        <input class="form-control form-control-sm" name="Name" type="text" value="{{ isset($staff->Name) ? $staff->text : ''}}" >     
    </div>
    <div class="form-group col-lg-6 ">
        <label>{{ 'Age' }}</label>
        <input class="form-control form-control-sm" name="Age" type="text" value="{{ isset($staff->Age) ? $staff->text : ''}}" > 
    </div>
    <div class="form-group col-lg-6 ">
        <label>{{ 'Salary' }}</label>
        <input class="form-control form-control-sm" name="Salary" type="text" value="{{ isset($staff->Salary) ? $staff->text : ''}}" >    
    </div>
    <div class="form-group col-lg-6 ">
        <label>{{ 'Phone' }}</label>
        <input class="form-control form-control-sm" name="Phone" type="text" value="{{ isset($staff->Phone) ? $staff->text : ''}}" >    
    </div>
    <div class="form-group col-lg-6 ">
        <label>{{ 'Active' }}</label>
        <input class="form-control form-control-sm" name="Active" type="text" value="{{ isset($staff->Active) ? $staff->text : ''}}" >    
    </div>
  
</div>
