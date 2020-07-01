@extends('layouts.pages-test')

@if ($page->editMode)
    @section('afterjs')
        <script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
        <script>
          $(function () {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            {!! $page->RegisterCKEditor('content') !!}
            {!! $page->RegisterCKEditor('content2') !!}
            {!! $page->RegisterCKEditor('content3') !!}
          });
        </script>    
    @endsection
@endif


@section('content')


    @if ($page->editMode)
        {{ Form::open() }}
    @endif
    <div class="box box-solid">
        <div class="box-body pad">
            <div class="col-md-12">
                <div class="row">

                   {!! SiteMap() !!}
                
                   {!! $page->render('content',$page->editMode) !!}
                   <br/>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        {!! $page->render('content2',$page->editMode) !!}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        {!! $page->render('content3',$page->editMode) !!}
                    </div>
                </div>      
                <div class="row">
                    <div class="col-md-12">
                        {!! $page->render('content4',$page->editMode) !!}
                    </div>
                </div>                            
            </div>
        </div>
    </div>
    @if ($page->editMode)
        <button class="btn btn-flat btn-primary">Save</button>
        {{ Form::close() }}
    @endif
@endsection