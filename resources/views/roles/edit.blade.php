@extends('layouts.adminlte.master')

@section('title')
    @lang('role.edit.title')
@endsection

@section('page_title')
    <span class="fa fa-user fa-fw"></span>&nbsp;@lang('role.edit.page_title')
@endsection
@section('page_title_desc')
    @lang('role.edit.page_title_desc')
@endsection

@section('content')
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">@lang('role.edit.title')</h3>
        </div>

        {!! Form::model($role, ['method' => 'PATCH','route' => ['db.admin.role.edit', $role->hId()], 'class' => 'form-horizontal']) !!}
            <div class="box-body">
                <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">@lang('role.name')</label>
                    <div class="col-sm-10">
                        <input id="inputName" name="name" type="text" class="form-control" placeholder="@lang('role.name')">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputDisplayName" class="col-sm-2 control-label">@lang('role.display_name')</label>
                    <div class="col-sm-10">
                        <input id="inputDisplayName" name="display_name" type="text" class="form-control" placeholder="@lang('role.display_name')">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputDescription" class="col-sm-2 control-label">@lang('role.description')</label>
                    <div class="col-sm-10">
                        <input id="inputDescription" name="display_name" type="text" class="form-control" placeholder="@lang('role.description')">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPermission" class="col-sm-2 control-label">@lang('role.permission')</label>
                    <div class="col-sm-10">
                        <select multiple class="form-control" data-height="20">
                            @foreach($permission as $key => $p)
                                <option value="{{ $p->id }}">{{ $p->display_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputButton" class="col-sm-2 control-label"></label>
                    <div class="col-sm-10">
                        <a href="{{ route('db.admin.roles') }}" class="btn btn-default">Cancel</a>
                        <button class="btn btn-default" type="submit">Submit</button>
                    </div>
                </div>
            </div>
        {!! Form::close() !!}
    </div>
@endsection