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
              <a href="#" data-toggle="modal" data-target="#modal-add" class="btn btn-success btn-add">Add</a>
            </div>
            <!-- /.box-header -->

            <div class="box-body">
              <table id="posts-table" class="table table-bordered table-striped " style="width: 100%;">
                <thead>
                <tr>
                  <th>Id</th>
                    <th>Title</th>
                    <th>Image</th>
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
  <div class="modal fade" id="modal-add">
    <div class="modal-dialog">
    <div class="modal-content">

      <form action="" data-url="{{ route('god.store') }}"  id="form-add" method="POST" role="form">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Add new post</h4>
      </div>
      <div class="modal-body">
        
         
                    <div class="form-group">
                        <label for="">Title (<span style="color: red">*</span>)</label>
                        <input type="text" class="form-control" id="title-add" placeholder="Title" >
                    </div>
                    <div class="form-group">
                        <label for="">Thumbnail (<span style="color: red">*</span>)</label>
                        <input type="text" class="form-control" id="thumbnail-add" placeholder="Thumbnail-link" >
                    </div>
                    <div class="form-group">
                        <label for="">Description (<span style="color: red">*</span>)</label>
                        <textarea class="form-control"  id="description-add" cols="30" rows="4" placeholder="Description"></textarea> 
                    </div>
                    <div class="form-group">
                        <label for="">Content (<span style="color: red">*</span>)</label>
                        <textarea class="form-control"  id="content-add" cols="30" rows="10" placeholder="Content"></textarea> 
                    </div>
                    <div class="form-group">
                        <label for="">Slug (<span style="color: red">*</span>)</label>
                        <input type="text" class="form-control" id="slug-add" placeholder="Slug" >
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
  <div class="modal fade" id="modal-show">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Show post</h4>
        </div>
        <div class="modal-body" style="text-align: center;">
          <h2>Post</h2>
          <h3 id="title-show"></h3>
          <h3 id="thumbnail-show"><img src="" alt="" style="width: 100%"></h3>
          <h3 id="description-show"></h3>
          <h3 id="content-show"></h3>
          <h3 id="slug-show"></h3>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="modal-edit">
  <div class="modal-dialog">
    <div class="modal-content">

      <form action="" id="form-edit" method="POST" role="form">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Edit post</h4>
      </div>
      <div class="modal-body">
        
                    <div class="form-group">
                        <label for="">Title (<span style="color: red">*</span>)</label>
                        <input type="text" class="form-control" id="title-edit" placeholder="Title" >
                    </div>
                    <div class="form-group">
                        <label for="">Thumbnail (<span style="color: red">*</span>)</label>
                        <input type="text" class="form-control" id="thumbnail-edit" placeholder="Thumbnail-link" >
                    </div>
                    <div class="form-group">
                        <label for="">Description (<span style="color: red">*</span>)</label>
                        <textarea class="form-control"  id="description-edit" cols="30" rows="4" placeholder="Description"></textarea> 
                    </div>
                    <div class="form-group">
                        <label for="">Content (<span style="color: red">*</span>)</label>
                        <textarea class="form-control"  id="content-edit" cols="30" rows="10" placeholder="Content"></textarea> 
                    </div>
                    <div class="form-group">
                        <label for="">Slug (<span style="color: red">*</span>)</label>
                        <input type="text" class="form-control" id="slug-edit" placeholder="Slug" >
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