@extends('partials.admin.sidebar')
@section('title', 'Admin Setting - Koperasi Z')
@section('container')
<head>
<link media="all" type="text/css" rel="stylesheet" href="/css/setting.css">
</head>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <ol class="breadcrumb">
        <li class="active">Admin - <span>Admin Setting</span></li>
      </ol>
    </section>
    <div class="view-account">
    <section class="module">
    @foreach($setting as $settings)
    <div class="content-panel">
                    <h2 class="title">Admin<span class="badge badge-warning" id="pro-label">Setting</span></h2>
                    <form action="{{url('/admin/admin/setting/update', [$settings->id])}}" method="post" class="form-horizontal">
                    {{ csrf_field() }}
                    @method('PUT')
                        <fieldset class="fieldset">
                            <div class="form-group avatar">
                                <figure class="figure col-md-2 col-sm-3 col-xs-12">
                                    <img class="img-rounded img-responsive" src="{{$settings->img_url}}" alt="">
                                </figure>
                                <div class="form-inline col-md-10 col-sm-9 col-xs-12">
                                    <input type="file" class="file-uploader pull-left">
                                    <button type="submit" class="btn btn-sm btn-outline-warning pull-left">Update Image</button>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3 col-xs-12 control-label">App Title</label>
                                <div class="col-md-10 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control" value="{{$settings->app_title}}">
                                </div>
                            </div>
        
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3 col-xs-12 control-label">Language</label>
                                <div class="col-md-10 col-sm-9 col-xs-12">
                                <select class="custom-select" id="lang" name="lang" for="lang">
                            <option selected="selected"
                            value="{{$settings->lang}}">
                                @if($settings->lang === "en")English
                                @elseif($settings->lang === "id")Indonesia
                                @elseif($settings->lang === "jp")Japanese
                                @else Nothing
                                @endif
                            </option>
                            <option value="en">English</option>
                            <option value="id">Indonesia</option>
                            <option value="jp">Japanese</option>
                        </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3 col-xs-12 control-label">Email</label>
                                <div class="col-md-10 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control" value="{{$settings->email}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3 col-xs-12 control-label">Image Url</label>
                                <div class="col-md-10 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control" value="{{$settings->img_url}}">
                                </div>
                            </div>
                        </fieldset>
                        <hr>
                        <div class="form-group">
                            <div class="panel-footer text-right">
                            <button type="submit" class="btn btn-outline-success"><i class="fa fa-save"></i> Save</button>
                            </div>
                        </div>
                        @endforeach
                    </form>
                </div>
                </section>
                </div>

                @stop