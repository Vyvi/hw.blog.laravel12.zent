@extends('layouts.adminmaster') 

{{-- thay đổi nội dung phần content --}}
@section('adminContent')
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    <!-- Content Header (Page header) -->
     <section class="content-header">
      <h1>
        Data Tables
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
          <div class="box">
            <div class="box-header">
              <a href="#" data-toggle="modal" data-target="#modal-add-cate" class="btn btn-success btn-add-cate">Add</a>
            </div>
            <!-- /.box-header -->

            <div class="box-body">
              <table id="cates-table" class="table table-bordered table-striped " style="width: 100%;">
                <thead>
                <tr>
                  <th>Id</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Slug</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
                <tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Text</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        {{-- <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-numposts="5"></div> --}}
  <div class="modal fade" id="modal-add-cate">
    <div class="modal-dialog">
    <div class="modal-content">

      <form action="" data-url="{{ route('godd.store') }}"  id="form-add-cate" method="POST" role="form">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Add new category</h4>
      </div>
      <div class="modal-body">
        
         
                    <div class="form-group">
                        <label for="">Name (<span style="color: red">*</span>)</label>
                        <input type="text" class="form-control" id="name-add-cate" placeholder="Title" >
                    </div>
                    <div class="form-group">
                        <label for="">Thumbnail (<span style="color: red">*</span>)</label>
                        <input type="text" class="form-control" id="thumbnail-add-cate" placeholder="Thumbnail-link" >
                    </div>
                    <div class="form-group">
                        <label for="">Description (<span style="color: red">*</span>)</label>
                        <textarea class="form-control"  id="description-add-cate" cols="30" rows="4" placeholder="Description"></textarea> 
                    </div>
                    <div class="form-group">
                        <label for="">Slug (<span style="color: red">*</span>)</label>
                        <input type="text" class="form-control" id="slug-add-cate" placeholder="Slug" >
                    </div>
                    <div class="form-group">
                        <label for="">Parent id (<span style="color: red">*</span>)</label>
                        <input type="text" class="form-control" id="parent-add-cate" placeholder="Slug" >
                    </div>
                </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Add</button>
      </div>
          
        </form>
      </div>
      
      
    </div>
  </div>
  <div class="modal fade" id="modal-show-cate">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Show category</h4>
        </div>
        <div class="modal-body" style="text-align: center;">
          <h2>Category</h2>
          <h3 id="name-show-cate"></h3>
          <h3 id="thumbnail-show-cate"><img src="" alt="" style="width: 100%"></h3>
          <h3 id="description-show-cate"></h3>
          <h3 id="parent-show-cate"></h3>
          <h3 id="slug-show-cate"></h3>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="modal-edit-cate">
  <div class="modal-dialog">
    <div class="modal-content">

      <form action="" id="form-edit-cate" method="POST" role="form">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Edit category</h4>
      </div>
      <div class="modal-body">
        
                    <div class="form-group">
                        <label for="">Name (<span style="color: red">*</span>)</label>
                        <input type="text" class="form-control" id="name-edit-cate" placeholder="Title" >
                    </div>
                    <div class="form-group">
                        <label for="">Thumbnail (<span style="color: red">*</span>)</label>
                        <input type="text" class="form-control" id="thumbnail-edit-cate" placeholder="Thumbnail-link" >
                    </div>
                    <div class="form-group">
                        <label for="">Description (<span style="color: red">*</span>)</label>
                        <textarea class="form-control"  id="description-edit-cate" cols="30" rows="4" placeholder="Description"></textarea> 
                    </div>
                    <div class="form-group">
                        <label for="">Slug (<span style="color: red">*</span>)</label>
                        <input type="text" class="form-control" id="slug-edit-cate" placeholder="Slug" >
                    </div>
                    <div class="form-group">
                        <label for="">Parent id (<span style="color: red">*</span>)</label>
                        <input type="text" class="form-control" id="parent-edit-cate" placeholder="Slug" >
                    </div>
          
        
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Edit</button>
        
      </div>
      </form>
    </div>
  </div>
</div>



  
  
@endsection