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
                    <h4>Update</h4>
                </div>

                <div class="col-md-6 text-right">
                    <a href="{{ url('/admin/servicebox/list') }}" class="btn btn-sm btn-warning">
                    <i class="fa fa-arrow-left"></i> Back
                    </a>
                </div>
            </div>
        </div>
            <div class="card-body">
                <form action="{{ url('/admin/servicebox/update') }}" method="POST" enctype="multipart/form-data" id="service_form">
                    @csrf
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="form-group col-sm-12">
                                <label>Title<span class="text-danger">*</span></label>
                                <input type="text" name="title" id="title" class="form-control" value="{{old('intro',$service->title)}}">
                                <input type="hidden" name="id" value="{{$service->id}}">
                            </div>
                            <div class="form-group col-sm-12">
                                <label>Description<span class="text-danger">*</span>(Maximum length 200 Characters)</label>
                                <textarea name="description" id="description" rows="3" class="form-control">{{old('title',$service->description)}}</textarea>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Main Image <span class="text-danger">*</span>(Recommended image dimenssion width= 50 height= 50)</label>
                                    <div id="main_image" style="padding-top: .5rem;"></div>
                                    <div class="text-danger clean" id="main_image_error"></div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Back Image <span class="text-danger">*</span>(Recommended image dimenssion width= 470 height= 450)</label>
                                    <div id="back_image" style="padding-top: .5rem;"></div>
                                    <div class="text-danger clean" id="main_image_error"></div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Service <span class="text-danger">*</span></label>
                                    <select name="link" id="link" class="form-control">
                                        <option value="">Select Service</option>
                                        @foreach ($services as $service1)
                                            <option value="{{$service1->id}}" {{$service->link==$service1->id?'selected':''}}>{{$service1->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Status</label><br>
                                <input type="radio"  id="disable" name="status" value="disable" {{$service->status == "disable"?"checked": ""}}>
                                <label class="form-check-label" for="disable">Disable</label>
                                <input type="radio"  id="enable" name="status" value="enable" {{$service->status == "enable"?"checked": ""}}>
                                <label class="form-check-label" for="enable">Enable</label>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
    </div>
                    <!-- /.card-body -->
        



        <x-slot name="footer">
            <script>
               let main_image_preloaded = [
                {id: 1, src: "{{ asset('storage/images/services/svg/'.$service->image) }}"},
                ];  
                $('#main_image').imageUploader({
                    imagesInputName: 'main_image',
                    preloaded: main_image_preloaded,
                    preloadedInputName: 'old_main_image',
                    maxFiles:1
                });
                let back_image_preloaded = [
                {id: 2, src: "{{ asset('storage/images/services/'.$service->back_image) }}"},
                ];  
                $('#back_image').imageUploader({
                    imagesInputName: 'back_image',
                    preloaded: back_image_preloaded,
                    preloadedInputName: 'old_back_image',
                    maxFiles:1
                });
                $(document).ready(function(){
                    $('#service_form').submit(function(e) {
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
