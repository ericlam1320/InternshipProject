@extends('layout.master')

@section('menu-thaoluan','menu-top-active')

@section ('title','Thảo Luận')

@section('content')

<div class="content-wrapper">
 <div class="container">

  <div class="row pad-botm">
    <div class="col-md-12">
      <h4 class="header-line">Thảo luận</h4>
    </div>
  </div>

  <div class="row">
   <div class="col-md-3 col-sm-3 col-xs-6">
    <div class="alert alert-info back-widget-set text-center">
      <i class="fa fa-user fa-5x"></i>
      <h3>Vương Anh Kho</h3>
    </div>
  </div>

  <div class="col-md-3 col-sm-3 col-xs-6">
    <div class="alert alert-success back-widget-set text-center">
      <i class="fa fa-bookmark fa-5x"></i>
      <h3>DH51400553</h3>
    </div>
  </div>

  <div class="col-md-3 col-sm-3 col-xs-6">
    <div class="alert alert-warning back-widget-set text-center">
      <i class="fa fa-mortar-board fa-5x"></i>
      <h3>D14-TH02</h3>
    </div>
  </div>

  <div class="col-md-3 col-sm-3 col-xs-6">
    <div class="alert alert-danger back-widget-set text-center">
      <i class="fa fa-users fa-5x"></i>
      <h3>30+ </h3>
    </div>
  </div>



  </div>              
  <div class="col-md-6 col-sm-6 col-xs-12">
   <div class="panel panel-info">
    <div class="panel-heading">
     BASIC FORM
   </div>
   <div class="panel-body">
    <form role="form">
      <div class="form-group">
        <label>Enter Name</label>
        <input class="form-control" type="text" />
        <p class="help-block">Help text here.</p>
      </div>
      <div class="form-group">
        <label>Enter Email</label>
        <input class="form-control" type="text" />
        <p class="help-block">Help text here.</p>
      </div>
      <div class="form-group">
        <label>Text area</label>
        <textarea class="form-control" rows="3"></textarea>
      </div>


      <button type="submit" class="btn btn-info">Send Message </button>

    </form>
  </div>
</div>
</div>

 <div class="col-md-6">
                     <!--    Context Classes  -->
                    <div class="panel panel-default">
                       
                        <div class="panel-heading">
                            Context Classes
                        </div>
                        
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="success">
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr class="info">
                                            <td>2</td>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr class="warning">
                                            <td>3</td>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                        <tr class="danger">
                                            <td>4</td>
                                            <td>John</td>
                                            <td>Smith</td>
                                            <td>@jsmith</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--  end  Context Classes  -->
                </div>

</div>
</div>

@endsection