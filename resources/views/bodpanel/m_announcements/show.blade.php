@extends('bodpanel.m_announcements.master')

@section('title', 'Manage Announcements')

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <style type="text/css">
        /*Copied from bootstrap to handle input file multiple*/
        .btn {
            display: inline-block;
            padding: 6px 12px;
            margin-bottom: 0;
            font-size: 14px;
            font-weight: normal;
            line-height: 1.42857143;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            background-image: none;
            border: 1px solid transparent;
            border-radius: 4px;
        }

        /*Also */
        .btn-success {
            border: 1px solid #c5dbec;
            background: #d0e5f5;
            font-weight: bold;
            color: #2e6e9e;
        }

        /* This is copied from https://github.com/blueimp/jQuery-File-Upload/blob/master/css/jquery.fileupload.css */
        .fileinput-button {
            position: relative;
            overflow: hidden;
        }

        .fileinput-button input {
            position: absolute;
            top: 0;
            right: 0;
            margin: 0;
            opacity: 0;
            -ms-filter: "alpha(opacity=0)";
            font-size: 200px;
            direction: ltr;
            cursor: pointer;
        }

        .thumb {
            height: 80px;
            width: 100px;
            border: 1px solid #000;
        }

        ul.thumb-Images li {
            width: 120px;
            float: left;
            display: inline-block;
            vertical-align: top;
            height: 120px;
        }

        .img-wrap {
            position: relative;
            display: inline-block;
            font-size: 0;
        }

        .img-wrap .close {
            position: absolute;
            top: 2px;
            right: 2px;
            z-index: 100;
            background-color: #d0e5f5;
            padding: 5px 2px 2px;
            color: #000;
            font-weight: bolder;
            cursor: pointer;
            opacity: 0.5;
            font-size: 23px;
            line-height: 10px;
            border-radius: 50%;
        }

        .img-wrap:hover .close {
            opacity: 1;
            background-color: #ff0000;
        }

        .FileNameCaptionStyle {
            font-size: 12px;
        }
    </style>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="card">

        <div class="card-header">
            <div class="row">
                <div class="col col-md-6"><b>Show Announcement</b></div>
                <div class="col col-md-6">
                    <a href="{{ route('m_announcement.index') }}" class="btn btn-primary btn-sm float-end">View All</a>
                </div>
            </div>
        </div>

        <div class="card-body">

            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Subject</label>
                <div class="col-sm-10">
                    {{ $m_announcement->subject }}
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Description</label>
                <div class="col-sm-10">
                    {{ $m_announcement->description }}
                </div>
            </div>

            <div class="row mb-4">
                <label class="col-sm-2 col-label-form">Privacy</label>
                <div class="col-sm-10">
                    {{ $m_announcement->tag }}
                </div>
            </div>

            <div class="row mb-4">
                <label class="col-sm-2 col-label-form">Severity/Priority</label>
                <div class="col-sm-10">
                    {{ $m_announcement->severity }}
                </div>
            </div>


            @if (count($announcements_files) > 0)

                <div class="row mb-4">
                    <label class="col-sm-2 col-label-form">File Preview</label>
                    <div class="col-sm-10">
                        {{ $announcements_files[0]->tag }}
                    </div>
                </div>
                
            @else
                <tr>
                    <td colspan="5" class="text-center">No Image Found</td>
                </tr>
            @endif

            <div class="row mb-4">
                <label class="col-sm-2 col-label-form">Announcements Status</label>
                <div class="col-sm-10">
                    {{ $m_announcement->status }}
                </div>
            </div>

            <div class="row mb-4">
                <label class="col-sm-2 col-label-form">Uploaded Images</label>

                @if (count($announcements_files) > 0)
                    @foreach ($announcements_files as $row)
                        <img src="{{ asset('storage/images/announcement/') . '/' . $row->filename }}" width="400"
                            class="img-thumbnail" />
                    @endforeach
                @else
                    <tr>
                        <td colspan="5" class="text-center">No Image Found</td>
                    </tr>
                @endif
                <div class="col-sm-10">

                </div>
            </div>

           

        </div>
    </div>

@endsection('content')
