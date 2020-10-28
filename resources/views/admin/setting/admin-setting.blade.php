@foreach($setting as $settings)
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
        <li class="active">
            <span>@if($settings->lang === "en")@lang('lang.en.adminsetting')
                @elseif($settings->lang === "id")@lang('lang.id.adminsetting')
                @elseif($settings->lang === "jp")@lang('lang.jp.adminsetting')
                @else Admin Setting
                @endif </span></li>
      </ol>
    </section>
    <div class="view-account">
    <section class="module">
    @foreach($setting as $settings)
    <div class="content-panel">
                    <h2 class="title"><span class="badge badge-warning" id="pro-label">
                        @if($settings->lang === "en")@lang('lang.en.adminsetting')
                @elseif($settings->lang === "id")@lang('lang.id.adminsetting')
                @elseif($settings->lang === "jp")@lang('lang.jp.adminsetting')
                @else Admin Setting
                @endif
                </span></h2>
                    <form action="{{url('/admin/admin/setting/update', [$settings->id])}}" method="post" class="form-horizontal">
                    {{ csrf_field() }}
                    @method('PUT')
                        <fieldset class="fieldset">
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3 col-xs-12 control-label">
                                    @if($settings->lang === "en")@lang('lang.en.apptitle')
                @elseif($settings->lang === "id")@lang('lang.id.apptitle')
                @elseif($settings->lang === "jp")@lang('lang.jp.apptitle')
                @else App Title
                @endif
                </label>
                                <div class="col-md-10 col-sm-9 col-xs-12">
                                    <input id = "app_title" name="app_title"  for="app_title" type="app_title" class="form-control" placeholder="{{$settings->app_title}}" value="{{$settings->app_title}}" >
                                </div>
                            </div>
        
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3 col-xs-12 control-label">
                                    @if($settings->lang === "en")@lang('lang.en.language')
                @elseif($settings->lang === "id")@lang('lang.id.language')
                @elseif($settings->lang === "jp")@lang('lang.jp.language')
                @else Language
                @endif </label>
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
                                <label class="col-md-2 col-sm-3 col-xs-12 control-label">
                                    @if($settings->lang === "en")@lang('lang.en.email')
                @elseif($settings->lang === "id")@lang('lang.id.email')
                @elseif($settings->lang === "jp")@lang('lang.jp.email')
                @else Email
                @endif
                </label>
                                <div class="col-md-10 col-sm-9 col-xs-12">
                                    <input id = "email" name="email"  for="email" type="email" class="form-control" placeholder="{{$settings->email}}" value="{{$settings->email}}" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3 col-xs-12 control-label">
                                    @if($settings->lang === "en")@lang('lang.en.imageurl')
                @elseif($settings->lang === "id")@lang('lang.id.imageurl')
                @elseif($settings->lang === "jp")@lang('lang.jp.imageurl')
                @else Image Url
                @endif
                </label>
                                <div class="col-md-10 col-sm-9 col-xs-12">
                                    <input id = "img_url" name="img_url"  for="img_url" type="img_url" class="form-control" placeholder="{{$settings->img_url}}" value="{{$settings->img_url}}" >
                                </div>
                            </div>
                        </fieldset>
                        <hr>
                        <div class="form-group">
                            <div class="panel-footer text-right">
                            <button type="submit" class="btn btn-outline-success"><i class="fa fa-save"></i> 
                                @if($settings->lang === "en")@lang('lang.en.save')
                @elseif($settings->lang === "id")@lang('lang.id.save')
                @elseif($settings->lang === "jp")@lang('lang.jp.save')
                @else Save
                @endif
                </button>
                            </div>
                        </div>
                        @endforeach
                    </form>
                </div>
                </section>
                </div>

                @stop
                @endforeach