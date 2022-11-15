@extends('bodpanel.m_announcements.master')

@section('title', 'Edit announcement')

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
        <div class="card-header">Edit Announcement</div>
        <div class="card-body">
            <form>
                @csrf
                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form">Subject</label>
                    <div class="col-sm-10">
                        <input type="text" name="subject" class="form-control" value=" {{ $m_announcement->subject }}" />
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form">Description</label>
                    <div class="col-sm-10">
                        <textarea rows="3" type="text" name="description" class="form-control">{{ $m_announcement->description }}</textarea>
                    </div>
                </div>

                <div class="row mb-4">
                    <label class="col-sm-2 col-label-form">Privacy</label>
                    <div class="col-sm-10">
                        <select name="p_tag" class="form-control">
                            <option>Choose</option>
                            <option value="public" <?php if ($m_announcement->tag == 'public') {
                                echo 'selected';
                            } ?>>Public</option>
                            <option value="private" <?php if ($m_announcement->tag == 'private') {
                                echo 'selected';
                            } ?>>Private</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-4">
                    <label class="col-sm-2 col-label-form">Severity/Priority</label>
                    <div class="col-sm-10">
                        <select name="severity" class="form-control">
                            <option>Choose</option>
                            <option value="high" <?php if ($m_announcement->severity == 'high') {
                                echo 'selected';
                            } ?>>High</option>
                            <option value="low" <?php if ($m_announcement->severity == 'low') {
                                echo 'selected';
                            } ?>>Low</option>
                        </select>
                    </div>
                </div>


                @if (count($announcements_files) > 0)<div class="row mb-4">
                    <div class="row mb-4">
						<label class="col-sm-2 col-label-form">File Preview</label>
						<div class="col-sm-10">
							<select name="v_tag" class="form-control">
								<option>Choose</option>
								<option value="minimized" <?php if ($announcements_files[0]->tag == 'minimized') {echo 'selected';} ?>>Minimized</option>
								<option value="maximized" <?php if ($announcements_files[0]->tag == 'maximized') {echo 'selected';} ?>>Maximized</option>
							</select>
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
                        <select name="status" class="form-control">
                            <option>Choose</option>
                            <option value="active" <?php if ($m_announcement->status == 'active') {echo 'selected';} ?>>Active</option>
                            <option value="notactive" <?php if ($m_announcement->status == 'notactive') {echo 'selected';} ?>>Not Active</option>
                            <option value="hidden" <?php if ($m_announcement->status == 'hidden') {echo 'selected';} ?>>Hidden</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-4">
					<label class="col-sm-2 col-label-form">Uploaded Images <br>(Not Editable)</label>
	
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

                {{-- <span class="btn btn-success fileinput-button">
                    <span>Select Attachment</span>
                    <input type="file" name="files[]" id="files" multiple
                        accept="image/jpeg, image/png, image/gif,"><br />
                </span> --}}
                <output id="Filelist"></output>

                <div class="text-center">
					<input type="hidden" name="hidden_id" value="{{$m_announcement->id }}" />
                    <input type="submit" class="btn btn-primary" value="Edit" btn-submit />
                </div>


            </form>
        </div>

        <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $("form").data("valid", true).submit(function(e) {
            e.preventDefault();

            var form = $(this);
            var actionUrl = form.attr('action');
            var serializedform = form.serialize();

            $.ajax({

                type: 'POST',
                url: '{{ route('m_announcement.update', $m_announcement->id ) }}',
                data: {
                    serializedform
                },
                //  dataType: "false",
                success: function(data) {
					$('html').html(data.responseText);
                    alert('sucess');
                    location.replace("{{route('m_announcement.index')}}");
                },
                error: function(data) {
					//console.log(data.responseText);
                    $('html').html(data.responseText);


                }
            });

        });

       
    </script>

    @endsection('content')
