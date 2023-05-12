@extends('layouts.page')

@section('title', 'Reseller Create')

@section('css')
<link rel="stylesheet" media="screen, print" href="{{asset('css/formplugins/select2/select2.bundle.css')}}">
<link rel="stylesheet" media="screen, print" href="{{asset('css/formplugins/dropzone/dropzone.css')}}">
<link rel="stylesheet" media="screen, print"
    href="{{asset('css/formplugins/bootstrap-datepicker/bootstrap-datepicker.css')}}">
@endsection

@section('content')
<div class="row">
    <div class="col-xl-6">
        <div id="panel-1" class="panel">
            <div class="panel-hdr">
                <h2>Add New <span class="fw-300"><i>Reseller </i></span></h2>
                <div class="panel-toolbar">
                    <a class="nav-link active" href="{{route('reseller.index')}}"><i class="fal fa-arrow-alt-left">
                        </i>
                        <span class="nav-link-text">Back</span>
                    </a>
                    <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip"
                        data-offset="0,10" data-original-title="Fullscreen"></button>
                </div>
            </div>
            <div class="panel-container show">
                <div class="panel-content">
                    <div class="panel-tag">
                        Form with <code>*</code> can not be empty.
                    </div>
                    @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                    @endif
                    {!! Form::open(['route' => 'reseller.store','id'=>'forms','method' => 'POST','class' =>
                    'needs-validation','dropzone', 'forms','novalidate','enctype' => 'multipart/form-data']) !!}
                    <div class="form-group col-md-4 mb-3">
                        {{ Form::label('wilayah_reseller','Wilayah Reseller',['class' => 'required form-label'])}}
                        {{ Form::text('wilayah_reseller',null,['placeholder' => 'Wilayah Reseller','class' => 'wilayah_reseller form-control '.($errors->has('wilayah_reseller') ? 'is-invalid':''),'required', 'autocomplete' => 'off'])}}
                        @if ($errors->has('wilayah_reseller'))
                        <div class="invalid-feedback">{{ $errors->first('wilayah_reseller') }}</div>
                        @endif
                    </div>
                    <div class="form-group col-md-15 mb-6">
                        {{ Form::label('deskripsi','Deskripsi',['class' => 'required form-label'])}}
                        {{ Form::textarea('deskripsi',null,['placeholder' => 'Deskripsi','class' => 'deskripsi form-control '.($errors->has('deskripsi') ? 'is-invalid':''),'required', 'autocomplete' => 'off'])}}
                        @if ($errors->has('deskripsi'))
                        <div class="invalid-feedback">{{ $errors->first('deskripsi') }}</div>
                        @endif
                    </div>
                    <div class="form-group col-md-4 mb-3">
                        {{ Form::label('telephone','No. Telephone',['class' => 'required form-label'])}}
                        {{ Form::text('telephone',null,['placeholder' => 'No. Telephone','class' => 'form-control '.($errors->has('telephone') ? 'is-invalid':''),'required', 'autocomplete' => 'off'])}}
                        @if ($errors->has('telephone'))
                        <div class="invalid-feedback">{{ $errors->first('telephone') }}</div>
                        @endif
                    </div>
                    {{-- <div class="form-group col-md-4 mb-3">
                        {{ Form::label('photo','Photo',['class' => 'required form-label'])}}
                        {{ Form::file('photo',null,['placeholder' => 'Photo','class' => 'form-control upload '.($errors->has('photo') ? 'is-invalid':''),'required', 'autocomplete' => 'off', 'id' => 'photo'])}}
                        <img id="preview-image-before-upload" src="https://www.riobeauty.co.uk/images/product_image_not_found.gif"
                        alt="preview image" style="max-height: 250px;">
                        @if ($errors->has('photo'))
                        <div class="invalid-feedback">{{ $errors->first('photo') }}</div>
                        @endif
                    </div> --}}
                <div
                    class="panel-content border-faded border-left-0 border-right-0 border-bottom-0 d-flex flex-row align-items-center">
                    <button class="btn btn-primary ml-auto" type="submit">Submit</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="{{asset('js/formplugins/select2/select2.bundle.js')}}"></script>
<script src="{{asset('js/formplugins/dropzone/dropzone.js')}}"></script>
<script src="{{asset('js/formplugins/bootstrap-datepicker/bootstrap-datepicker.js')}}"></script>
<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script>
    $(document).ready(function(){
        $('#photo').change(function(){
            
            let reader = new FileReader();
         
            reader.onload = (e) => { 
         
              $('#preview-image-before-upload').attr('src', e.target.result); 
            }
         
            reader.readAsDataURL(this.files[0]); 
           
           });

           $('.tgl_awal').datepicker({
            orientation: "bottom left",
            format:'yyyy-mm-dd', // Notice the Extra space at the beginning
            todayHighlight:'TRUE',
            autoclose: true,
            todayBtn: "linked",
            clearBtn: true,
        });

        // CKEDITOR.replace('wilayah_reseller');
        CKEDITOR.replace('deskripsi');

        $('.tgl_akhir').datepicker({
            orientation: "bottom left",
            format:'yyyy-mm-dd', // Notice the Extra space at the beginning
            todayHighlight:'TRUE',
            autoclose: true,
            todayBtn: "linked",
            clearBtn: true,
        });
    });
</script>
@endsection