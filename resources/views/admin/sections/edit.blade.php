<x-admin.app-layout>
    <x-slot name="title">Section</x-slot>
    <x-slot name="contentHeader">
        <div class="col-sm-6">
            <h1 class="m-0">Section</h1>
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
                    <a href="{{ url('/admin/web-setting/sections/list') }}" class="btn btn-sm btn-warning">
                    <i class="fa fa-arrow-left"></i> Back
                    </a>
                </div>
            </div>
        </div>
            <div class="card-body">
            <form action="{{ url('/admin/web-setting/sections/update') }}" method="POST" enctype="multipart/form-data" id="section_form">
                @csrf
                <div class="row">
                    <div class="col-8">
                        <div class="form-group">
                            <label>Title<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="title" id="title" value="{{ old('name',$section->title) }}">
                            <input type="hidden" class="form-control" name="id"  value="{{ $section->id }}">
                        </div>
                        <div class="form-group">
                            <label>Page<span class="text-danger">*</span></label>
                           <select name="page" id="page" class="form-control">
                               <option>Select Page</option>
                               <option value="home" {{$section->page_name=='home'?'selected':''}}>Home</option>
                               <option value="about" {{$section->page_name=='about'?'selected':''}}>About us</option>
                               <option value="join" {{$section->page_name=='join'?'selected':''}}>Join us</option>
                               <option value="services" {{$section->page_name=='services'?'selected':''}}>Services</option>
                               <option value="contact" {{$section->page_name=='contact'?'selected':''}}>Contact us</option>
                           </select>
                        </div>
                         <div class="form-group col-12">
                            <label>Description<span class="text-danger">*</span></label><br>
                            <textarea id="description" name="description" class="form-control short_summernote" value="">{{ old('description',$section->description) }}</textarea>
                         </div>
                    </div>
                    <div class="col-4">
                        @if($section->image!=null)
                        <div class="form-group">
                            <label>Main Image <span class="text-danger">*</span></label>
                            <div id="main_image" style="padding-top: .5rem;"></div>
                            <div class="text-danger clean" id="main_image_error"></div>
                        </div> 
                        @endif
                    </div>
                   
                </div>
                <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </form>
            </div>
                    <!-- /.card-body -->
        </div>            



        <x-slot name="footer">
            <script>
               let main_image_preloaded = [
                {id: 1, src: "{{ asset('storage/images/sections/'.$section->image) }}"},
                ];  
                $('#main_image').imageUploader({
                    imagesInputName: 'main_image',
                    preloaded: main_image_preloaded,
                    preloadedInputName: 'old_main_image',
                    maxFiles:1
                });
                $(document).ready(function(){
                    $('#section_form').submit(function(e) {
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
