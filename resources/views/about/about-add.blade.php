@extends('template.main')
@section('title', 'Add about')
@section('content')



<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">@yield('title')</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
            <li class="breadcrumb-item"><a href="/about">about</a></li>
            <li class="breadcrumb-item active">@yield('title')</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="text-right">
                <a href="/about" class="btn btn-warning btn-sm"><i class="fa-solid fa-arrow-rotate-left"></i>
                  Back
                </a>
              </div>
            </div>
           <form class="needs-validation" novalidate action="/about" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label for="content">Title</label>
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Input about's title" value="{{old('title')}}" required>
                        @error('title')
                        <span class="invalid-feedback text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>                 
                  </div> 
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label for="content">Content</label>
                      <textarea type="text" name="content" class="form-control @error('content') is-invalid @enderror" id="content" placeholder="Input your idea" value="{{old('content')}}" required></textarea>
                      @error('content')
                      <span class="invalid-feedback text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>                 
                </div> 
                <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="image" value="{{old('image')}}" required>
                        @error('image')
                        <span class="invalid-feedback text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>                 
                  </div>                               
              </div>
              <div class="card-footer text-right">
                <button class="btn btn-dark mr-1" type="reset"><i class="fa-solid fa-arrows-rotate"></i>
                  Reset</button>
                <button class="btn btn-success" type="submit"><i class="fa-solid fa-floppy-disk"></i>
                  Save</button>
              </div>
            </form>
          </div>
        </div>
        <!-- /.content -->
      </div>
    </div>
  </div>
</div>
@endsection