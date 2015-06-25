@extends('admin.admin_layout')


@section('content')

    <div class="container pt-100">
        <div class="row">
            <div class="col-xs-12"><h1>Opret nyhed</h1></div>
            <div class="col-xs-12 col-md-6">
                {!! Form::open(
                    array(
                        'route' => 'admin_post_store',
                        'class' => 'form',
                        'novalidate' => 'novalidate',
                        'files' => true)) !!}

                <div class="form-group">
                    {!! Form::label('Titel') !!}
                    {!! Form::text('title', null, array('placeholder' => 'Skriv titel her', 'class' => 'form-control')) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Indhold') !!}
                    {!! Form::text('content', null, array('placeholder' => 'Skriv tekst her', 'class' => 'form-control')) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Nyhed billede') !!}
                    {!! Form::file('image', null) !!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Opret nyhed', array('class' => 'btn btn-default')) !!}
                </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection