<!-- Firstname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Firstname', 'Firstname:') !!}
    {!! Form::text('Firstname', null, ['class' => 'form-control','maxlength' => 25,'maxlength' => 25]) !!}
</div>

<!-- Middlename Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Middlename', 'Middlename:') !!}
    {!! Form::text('Middlename', null, ['class' => 'form-control','maxlength' => 25,'maxlength' => 25]) !!}
</div>

<!-- Lastname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Lastname', 'Lastname:') !!}
    {!! Form::text('Lastname', null, ['class' => 'form-control','maxlength' => 25,'maxlength' => 25]) !!}
</div>

<!-- Birthday Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Birthday', 'Birthday:') !!}
    {!! Form::text('Birthday', null, ['class' => 'form-control','id'=>'Birthday']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#Birthday').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Gender Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Gender', 'Gender:') !!}
    {!! Form::text('Gender', null, ['class' => 'form-control','maxlength' => 5,'maxlength' => 5]) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Address', 'Address:') !!}
    {!! Form::text('Address', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50]) !!}
</div>

<!-- Citizenship Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Citizenship', 'Citizenship:') !!}
    {!! Form::text('Citizenship', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50]) !!}
</div>

<!-- Relagion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Relagion', 'Relagion:') !!}
    {!! Form::text('Relagion', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50]) !!}
</div>