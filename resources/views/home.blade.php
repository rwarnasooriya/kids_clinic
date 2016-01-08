@extends('layouts.app')
@section('header')
<style>
    .page-header {
        margin: 20px 0px 20px;
    }
</style>
@endsection

@section('content')
<div class="container spark-screen">
    <div class="row">
        <div class="col-md-3">     
            <div class="list-group">
                <a href="#" class="list-group-item active">New Patient</a>
                <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
                <a href="#" class="list-group-item">Morbi leo risus</a>
                <a href="#" class="list-group-item">Porta ac consectetur ac</a>
                <a href="#" class="list-group-item">Vestibulum at eros</a>
            </div> 
        </div> 

        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">New Patient</div>

                <div class="panel-body">
                    <h5 id="grid" class="page-header">Patient Details</h5>
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="name" name='name'>
                            </div>
                            <label for="gender" class="col-sm-2 control-label">Gender</label>
                            <div class="col-sm-2">
                                <select class="form-control" name='gender'>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>                            
                        </div>
                        <div class="form-group">
                            <label for="address_1" class="col-sm-2 control-label">Address 1</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="address_1" name='address_1'>
                            </div>
                            <label for="dob" class="col-sm-2 control-label">Birth Date</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="dob" name='dob'>
                            </div>                            
                        </div>  
                        <div class="form-group">
                            <label for="address_2" class="col-sm-2 control-label">Address 2</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="address_2" name='address_2'>
                            </div>
                            <label for="age" class="col-sm-2 control-label">Age</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="age" name='age'>
                            </div>                            
                        </div>
                        <div class="form-group">
                            <label for="address_3" class="col-sm-2 control-label">Address 3</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="address_3" name='address_3'>
                            </div>
                            <label for="race" class="col-sm-2 control-label">Race</label>
                            <div class="col-sm-2">
                                <select class="form-control" name='race'>
                                    <option>test1</option>
                                    <option>test2</option>
                                </select>
                            </div>                            
                        </div>                        
                        <div class="form-group">
                            <label for="post_code" class="col-sm-2 control-label">Post Code</label>   
                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="post_code" name='post_code'>
                            </div>                              
                            <label for="occupation" class="col-sm-2 control-label">Occupation</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="occupation" name='occupation'>
                            </div>
                        </div> 
                        <div class="form-group">
                            <label for="tel_no" class="col-sm-2 control-label">Tel No</label>   
                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="tel_no" name='tel_no'>
                            </div>                              
                            <label for="email" class="col-sm-2 control-label">E-mail</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="email" name='email'>
                            </div>
                        </div> 
                        <div class="form-group">
                            <label for="hp_no" class="col-sm-2 control-label">HP No</label>   
                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="hp_no" name='hp_no'>
                            </div>                              
                            <label for="allergy" class="col-sm-2 control-label">Allergy</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="allergy" name='allergy'>
                            </div>
                        </div> 
                        <div class="form-group">
                            <label for="other_no" class="col-sm-2 control-label">Other ID No</label>   
                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="other_no" name='other_no'>
                            </div>                              
                            <label for="language" class="col-sm-2 control-label">Language</label>
                            <div class="col-sm-6">
                                <select class="form-control" name='race'>
                                    <option>test1</option>
                                    <option>test2</option>
                                </select>
                            </div>
                        </div> 
                        <div class="form-group">
                            <label for="marital" class="col-sm-2 control-label">Marital Status</label>   
                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="marital" name='marital'>
                            </div>                              
                            <label for="remarks" class="col-sm-2 control-label">Remarks</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="remarks" name='remarks'>
                            </div>
                        </div>
                        <h5 id="grid" class="page-header">Billing Details</h5>
                        <div class="form-group">
                            <label for="pay_type" class="col-sm-2 control-label">Type</label>
                            <div class="col-sm-4">
                                <select class="form-control" name='pay_type'>
                                    <option>option 01</option>
                                    <option>option 02</option>
                                </select>
                            </div>                             
                            <label for="panel" class="col-sm-2 control-label">Panel</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="panel" name='Panel'>
                            </div>                           
                        </div>                        
                        <div class="form-group">
                            <label for="payer_name" class="col-sm-2 control-label">Payer Name</label>   
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="payer_name" name='payer_name'>
                            </div>                              
                            <label for="staff_id" class="col-sm-2 control-label">Staff ID</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="staff_id" name='staff_id'>
                            </div>
                        </div> 
                        <div class="form-group">
                            <label for="department" class="col-sm-2 control-label">Department</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="department" name='department'>
                            </div>                           
                            <label for="relation_payer" class="col-sm-2 control-label">Relation to Payer</label>
                            <div class="col-sm-4">
                                <select class="form-control" name='relation_payer'>
                                    <option>option 01</option>
                                    <option>option 02</option>
                                </select>
                            </div>                             
                        </div>                                          
                        <div class="form-group">
                            <label for="pay_amt" class="col-sm-2 control-label">Copay Amt</label>   
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="pay_amt" name='pay_amt'>
                            </div>                              
                            <label for="credit_amt" class="col-sm-2 control-label">Credit Amt</label>   
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="credit_amt" name='credit_amt'>
                            </div>                              
                        </div>  
                        <h5 id="grid" class="page-header"></h5>
                        <div class="form-group">
                            <div class="col-sm-offset-4 col-sm-8">
                                <button type="submit" class="btn btn-default">Register New Patient</button>
                                <button type="submit" class="btn btn-default">Update</button>
                                <button type="submit" class="btn btn-default">Delete</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
