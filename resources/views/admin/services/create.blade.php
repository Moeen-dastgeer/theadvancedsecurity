<x-admin.app-layout>
    <x-slot name="title">Service</x-slot>
    <x-slot name="contentHeader">
        <div class="col-sm-6">
            <h1 class="m-0">Service</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active"></li>
            </ol>
        </div><!-- /.col -->
    </x-slot>

    <div class="card card-white">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h4>Add New</h4>
                </div>
                <div class="col-md-6 text-right">
                    <a href="{{ url('/admin/services/list') }}" class="btn btn-sm btn-primary">
                        <i class="fa fa-plus-square"></i> Back
                    </a>
                </div>
            </div>
        </div>

        <form action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data" id="product_form">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Title<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="title" id="title" value="{{ old('name') }}">
                </div>
                <div class="form-group">
                    <label>Main Image <span class="text-danger">*</span>(Recommended image dimenssion width= 470 height= 531)</label>
                    <div id="main_image" style="padding-top: .5rem;"></div>
                    <div class="text-danger clean" id="main_image_error"></div>
                </div>   
                <div class="form-group col-sm-12">
                    <label>Description<span class="text-danger">*</span></label><br>
                    <textarea id="long_desc" name="long_desc" class="form-control short_summernote" value="">{{ old('long_des') }}</textarea>
                </div>
                <div class="form-group">
                    <label>Status</label><br>
                    <input type="radio" id="disable" name="status" value="disable">
                    <label class="form-check-label" for="disable">Disable</label>
                    <input type="radio" id="enable" name="status" value="enable" checked>
                    <label class="form-check-label" for="enable">Enable</label>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>  
        <x-slot name="footer">
            <script>
                 $('#main_image').imageUploader({
                        imagesInputName: 'main_image',
                        maxFiles: 1
                    });

                $(document).ready(function(){
                    $('#product_form').submit(function(e) {
                        e.preventDefault();
                        $.ajax({
                            url: $(this).attr('action'),
                            type: "POST",
                            data: new FormData(this),
                            processData: false,
                            contentType: false,
                            success: function(data) {
                                $("p.error").remove();
                                if (data.status == "error") {
                                    jQuery.each(data.errors, function(key, val) {
                                        $("#" + key).after('<p class="small text-danger error">' + val[0] +'</p>');
                                    });
                                }
                                if (data.status == "success") {
                                    alert(data.message);
                                    return false;
                                }
                            },
                            error: function(data) {
                                console.log(data);
                                alert(data.message);
                            },
                        });
                    });
                });

            </script>
        </x-slot>


</x-admin.app-layout>
