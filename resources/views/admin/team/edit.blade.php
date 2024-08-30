<x-admin.app-layout>
    <x-slot name="title">Team Member</x-slot>
    <x-slot name="contentHeader">
        <div class="col-sm-6">
            <h1 class="m-0">Team Member</h1>
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
                    <h4>Update</h4>
                </div>
                <div class="col-md-6 text-right">
                    <a href="{{ url('/admin/team/list') }}" class="btn btn-sm btn-primary">
                        <i class="fa fa-plus-square"></i> Back
                    </a>
                </div>
            </div>
        </div>

        <form action="{{ route('admin.team.update') }}" method="POST" enctype="multipart/form-data" id="team_form">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Name<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ old('name',$team->name) }}">
                    <input type="hidden"  name="id" value="{{ $team->id }}">
                </div>
                <div class="form-group col-sm-12">
                    <label>Designation<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="designation" id="designation" value="{{ old('designation',$team->designation) }}">
                </div>
                <div class="form-group">
                    <label>Main Image <span class="text-danger">*</span></label>
                    <div id="main_image" style="padding-top: .5rem;"></div>
                    <div class="text-danger clean" id="main_image_error"></div>
                </div>   
                <div class="form-group">
                    <label>Status</label><br>
                    <input type="radio"  id="disable" name="status" value="disable" {{$team->status == "disable"?"checked": ""}}>
                    <label class="form-check-label" for="disable">Disable</label>
                    <input type="radio"  id="enable" name="status" value="enable" {{$team->status == "enable"?"checked": ""}}>
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
                 let main_image_preloaded = [
                {id: 1, src: "{{ asset('storage/images/teams/'.$team->image) }}"},
                ];  
                $('#main_image').imageUploader({
                    imagesInputName: 'main_image',
                    preloaded: main_image_preloaded,
                    preloadedInputName: 'old_main_image',
                    maxFiles:1
                });
                $(document).ready(function(){
                    $('#team_form').submit(function(e) {
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
