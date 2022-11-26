@extends('bodpanel.m_informations.master')

@section('title', 'Create Information')

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
        <div class="card-header">Add BOD Member</div>
        <div class="card-body">
            <form>
                @csrf

                <div class="row mb-4">
                    <label class="col-sm-2 col-label-form">Category</label>
                    <div class="col-sm-10">
                        <select name="category" class="form-control">
                            @if (count($categories) > 0)
                                @foreach ($categories as $category)
                                <option value="{{$category->title}}">{{$category->title}}</option>
                                @endforeach
                            @else
                            <option>No Categories Found</option>
                            @endif
                           
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form">Heading 1</label>
                    <div class="col-sm-10">
                        <input type="text" name="heading1" class="form-control" value="{{ old('heading1') }}" />
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form">Heading 2</label>
                    <div class="col-sm-10">
                        <input type="text" name="heading2" class="form-control" value="{{ old('heading2') }}" />
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form">Heading 3</label>
                    <div class="col-sm-10">
                        <input type="text" name="heading3" class="form-control" value="{{ old('heading3') }}" />
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form">Heading 4</label>
                    <div class="col-sm-10">
                        <input type="text" name="heading4" class="form-control" value="{{ old('heading4') }}" />
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form">Heading 5</label>
                    <div class="col-sm-10">
                        <input type="text" name="heading5" class="form-control" value="{{ old('heading5') }}" />
                    </div>
                </div>

                <div class="row mb-4">
                    <label class="col-sm-2 col-label-form">Upload Images</label>
                    <div class="col-sm-10">
                        <input type="file" name="files[]" id="files" multiple
                            accept="image/jpeg, image/png, image/gif,"><br />
                    </div>
                </div>

                <output id="Filelist"></output>

               

                <div class="text-center">
                    <input type="submit" class="btn btn-primary" value="Add" btn-submit />
                </div>


            </form>
           
        </div>
    </div>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        //I added event handler for the file upload control to access the files properties.
        document.addEventListener("DOMContentLoaded", init, false);

        //To save an array of attachments
        var AttachmentArray = [];

        //counter for attachment array
        var arrCounter = 0;

        //to make sure the error message for number of files will be shown only one time.
        var filesCounterAlertStatus = false;

        //un ordered list to keep attachments thumbnails
        var ul = document.createElement("ul");
        ul.className = "thumb-Images";
        ul.id = "imgList";

        function init() {
            //add javascript handlers for the file upload event
            document
                .querySelector("#files")
                .addEventListener("change", handleFileSelect, false);
        }

        function timeFunction() {
            setTimeout(printvalues(), 2000);
        }

        $("form").data("valid", true).submit(function(e) {
            e.preventDefault();

            var form = $(this);
            var actionUrl = form.attr('action');
            var serializedform = form.serialize();

            $.ajax({

                type: 'POST',
                url: '{{ route('m_information.store') }}',
                data: {
                    AttachmentArray,
                    serializedform,
                },
                //  dataType: "false",
                success: function(data) {
                    $('html').html(data.responseText);
                    alert('sucess');
                    location.replace("{{ route('m_information.index') }}");
                },
                error: function(data) {
                    //console.log(data.responseText);
                    $('html').html(data.responseText);


                }
            });

        });

        function printvalues() {

            str = JSON.stringify(files, null, 4); // (Optional) beautiful indented output.
            console.log(AttachmentArray); // Logs output to dev tools console.

            // var test = "test";
            // document.getElementById("javascript_variable").value = str;

            // $.ajax({
            //     headers: {
            //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            //     },
            //     //  url : '',
            //     method: 'POST',
            //     dataType: "json",
            //     data: AttachmentArray,
            //     contentType: "application/json"
            // }).done(function(response) {
            //     alert('success   ' + JSON.stringify(response));
            //     window.location = "dispdetails";
            // }).fail(function(jqXHR, textStatus, errorThrown) {
            //     alert('FAILED! ERROR: ' + errorThrown);
            // });


        }

        //the handler for file upload event
        function handleFileSelect(e) {
            //to make sure the user select file/files
            if (!e.target.files) return;

            //To obtaine a File reference
            var files = e.target.files;

            // Loop through the FileList and then to render image files as thumbnails.
            for (var i = 0, f;
                (f = files[i]); i++) {
                //instantiate a FileReader object to read its contents into memory
                var fileReader = new FileReader();

                // Closure to capture the file information and apply validation.
                fileReader.onload = (function(readerEvt) {
                    return function(e) {
                        //Apply the validation rules for attachments upload
                        ApplyFileValidationRules(readerEvt);

                        //Render attachments thumbnails.
                        RenderThumbnail(e, readerEvt);

                        //Fill the array of attachment
                        FillAttachmentArray(e, readerEvt);
                    };
                })(f);

                // Read in the image file as a data URL.
                // readAsDataURL: The result property will contain the file/blob's data encoded as a data URL.
                // More info about Data URI scheme https://en.wikipedia.org/wiki/Data_URI_scheme
                fileReader.readAsDataURL(f);
                //window.alert("files");

            }
            document
                .getElementById("files")
                .addEventListener("change", handleFileSelect, false);
        }

        //To remove attachment once user click on x button
        jQuery(function($) {
            $("div").on("click", ".img-wrap .close", function() {
                var id = $(this)
                    .closest(".img-wrap")
                    .find("img")
                    .data("id");

                //to remove the deleted item from array
                var elementPos = AttachmentArray.map(function(x) {
                    return x.FileName;
                }).indexOf(id);
                if (elementPos !== -1) {
                    AttachmentArray.splice(elementPos, 1);
                }

                //to remove image tag
                $(this)
                    .parent()
                    .find("img")
                    .not()
                    .remove();

                //to remove div tag that contain the image
                $(this)
                    .parent()
                    .find("div")
                    .not()
                    .remove();

                //to remove div tag that contain caption name
                $(this)
                    .parent()
                    .parent()
                    .find("div")
                    .not()
                    .remove();

                //to remove li tag
                var lis = document.querySelectorAll("#imgList li");
                for (var i = 0;
                    (li = lis[i]); i++) {
                    if (li.innerHTML == "") {
                        li.parentNode.removeChild(li);
                    }
                }
            });
        });

        //Apply the validation rules for attachments upload
        function ApplyFileValidationRules(readerEvt) {
            //To check file type according to upload conditions
            if (CheckFileType(readerEvt.type) == false) {
                alert(
                    "The file (" +
                    readerEvt.name +
                    ") does not match the upload conditions, You can only upload jpg/png/gif files"
                );
                e.preventDefault();
                return;
            }

            //To check file Size according to upload conditions
            if (CheckFileSize(readerEvt.size) == false) {
                alert(
                    "The file (" +
                    readerEvt.name +
                    ") does not match the upload conditions, The maximum file size for uploads should not exceed 3 MB"
                );
                e.preventDefault();
                return;
            }

            //To check files count according to upload conditions
            if (CheckFilesCount(AttachmentArray) == false) {
                if (!filesCounterAlertStatus) {
                    filesCounterAlertStatus = true;
                    alert(
                        "You have added more than 10 files. According to upload conditions you can upload 10 files maximum"
                    );
                }
                e.preventDefault();
                return;
            }
        }

        //To check file type according to upload conditions
        function CheckFileType(fileType) {
            if (fileType == "image/jpeg") {
                return true;
            } else if (fileType == "image/png") {
                return true;
            } else if (fileType == "image/gif") {
                return true;
            } else {
                return false;
            }
            return true;
        }

        //To check file Size according to upload conditions
        function CheckFileSize(fileSize) {
            if (fileSize < 3000000) {
                return true;
            } else {
                return false;
            }
            return true;
        }

        //To check files count according to upload conditions
        function CheckFilesCount(AttachmentArray) {
            //Since AttachmentArray.length return the next available index in the array,
            //I have used the loop to get the real length
            var len = 0;
            for (var i = 0; i < AttachmentArray.length; i++) {
                if (AttachmentArray[i] !== undefined) {
                    len++;
                }
            }
            //To check the length does not exceed 10 files maximum
            if (len > 9) {
                return false;
            } else {
                return true;
            }
        }

        //Render attachments thumbnails.
        function RenderThumbnail(e, readerEvt) {
            var li = document.createElement("li");
            ul.appendChild(li);
            li.innerHTML = [
                '<div class="img-wrap"> <span class="close">&times;</span>' +
                '<img class="thumb" src="',
                e.target.result,
                '" title="',
                escape(readerEvt.name),
                '" data-id="',
                readerEvt.name,
                '"/>' + "</div>"
            ].join("");

            var div = document.createElement("div");
            div.className = "FileNameCaptionStyle";
            li.appendChild(div);
            div.innerHTML = [readerEvt.name].join("");
            document.getElementById("Filelist").insertBefore(ul, null);
        }

        //Fill the array of attachment
        function FillAttachmentArray(e, readerEvt) {
            AttachmentArray[arrCounter] = {
                AttachmentType: 1,
                ObjectType: 1,
                FileName: readerEvt.name,
                FileDescription: "Attachment",
                NoteText: "",
                MimeType: readerEvt.type,
                Content: e.target.result.split("base64,")[1],
                FileSizeInBytes: readerEvt.size
            };
            arrCounter = arrCounter + 1;
        }
    </script>

@endsection('content')
