@extends('admin.template.master')



@push('extra-css')
<link rel="stylesheet" href="{{ asset('css/bootstrap-switch.min.css') }}" media="all" />
<link rel="stylesheet" href="{{ asset('css/summernote-bs4.css') }}" media="all" />
<link rel="stylesheet" href="{{ asset('css/select2.min.css') }}" media="all" />
@endpush



@section('page-title','Edit Post')
@section('content')
<!-- start of content -->
<div class="card">
    <div class="card-header">
      <h3 class="card-title">{{ 'Edit '.$post->title}}</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" method="POST" action="{{ route('admin.posts.update', $post->id)  }}" enctype="multipart/form-data">
       @csrf
       @method('put')
      <div class="card-body">

        {{-- @if($errors->any())
        <div class="callout callout-danger">
            <h5>Form Errors!</h5>
            <ul  class="list-unstyled">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif --}}

        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" value="{{ old('title') ? old('title') : $post->title }}" class="form-control @error('title') is-invalid @enderror" name="title" id="title" placeholder="Enter title">
          @error('title')
            <small class="text-danger">{{ $message }}</small>
          @enderror
        </div>


        <div class="form-group">
            <label for="content">Content</label>
            <textarea type="text"  class="form-control @error('content') is-invalid @enderror" name="content" id="content" placeholder="Enter content">{{ old('content') ? old('content') : $post->content }}</textarea>
            @error('content')
              <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>


        <div class="form-group">
            <label for="exampleInputFile">Image</label>
            <div class="input-group">
              <div class="custom-file">
                <input name="image" type="file" class="custom-file-input" id="exampleInputFile">
                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
              </div>
              <div class="input-group-append">
                <span class="input-group-text" id="">Upload</span>
              </div>
            </div>
            @error('image')
                <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>



        <div class="form-group">
            <label for="category">Category</label>
            <select name="category" id="category" class="select2" multiple="multiple" data-placeholder="Select a category" style="width: 100%;">
              @foreach ($categories as $id => $categroy)
                    <option value="{{ $id }}">{{ $categroy }}</option>
              @endforeach
            </select>
            @error('category')
            <small class="text-danger">{{ $message }}</small>
           @enderror
          </div>


        <div class="form-group">
            <label for="description">Description</label>
            <textarea type="text"  class="form-control @error('description') is-invalid @enderror" name="description" id="description" placeholder="Enter description">{{ old('description') ? old('description') : $post->description }}</textarea>
            @error('description')
              <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>


        <div class="form-group">
            <label for="keywords">Keywords</label>
            <textarea type="text" name="keywords"  class="form-control @error('keywords') is-invalid @enderror" id="keywords" placeholder="Enter keywords">{{ old('keywords') ? old('keywords') : $post->keywords }}</textarea>
            <small id="keywordsHelp" class="form-text text-muted">keyword1,keyword2,keyword3,keyword4</small>
            @error('keywords')
              <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="approved">Approved</label>
            <input id="approved" type="checkbox" name="approved" checked data-bootstrap-switch>
        </div>

      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-secondary float-right">Submit</button>
      </div>
    </form>
  </div>
<!-- end of content -->

@endsection


@section('extra-scripts')
    <script>
    jQuery(function(){
        $("input[data-bootstrap-switch]").each(function(){
        $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });
    $('.select2').select2();

    $('#content').summernote({
    height:100,
    toolbar: [
        // [groupName, [list of button]]
        ['style', ['bold', 'italic', 'underline', 'clear']],
        ['font', ['strikethrough', 'superscript', 'subscript']],
        ['fontsize', ['fontsize']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['height', ['height']]
    ]
});



    })
    </script>
@endsection



@push('extra-js')
<script src="{{ asset('js/select2.full.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-switch.min.js') }}"></script>
<script src="{{ asset('js/summernote-bs4.min.js') }}"></script>
@endpush