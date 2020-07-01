@extends('layouts.pages-test')

@if ($page->editMode)
    @section('afterjs')
        <script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
        <script>
            $(function () {
                {!! $page->RegisterCKEditorInline('editor1') !!}
            });

            function viewcontent()
            {
                var data = CKEDITOR.instances.editor1.getData();
                alert(data);
            }
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
                    <div class="col-md-5">
                       
                        <div id="editor1" contenteditable="true">
                            <h1>Inline Editing in Action!</h1>
                            <p>The "div" element that contains this text is now editable.
                        </div>

                    </div>

 
                </div>
            </div>
        </div>
    </div>

    @if ($page->editMode)
        <button class="btn btn-flat btn-primary">Save</button>
        {{ Form::close() }}
        <a href="#" onclick="javascript:viewcontent()">View</a>
    @endif
@endsection