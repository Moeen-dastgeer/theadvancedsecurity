<x-admin.app-layout>
    <x-slot name="title">Counter</x-slot>
    <x-slot name="contentHeader">
        <div class="col-sm-6">
            <h1 class="m-0">Counter</h1>
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
                    <h4>Add new</h4>
                </div>

                <div class="col-md-6 text-right">
                    <a href="{{ url('/admin/counters/list') }}" class="btn btn-sm btn-warning">
                    <i class="fa fa-arrow-left"></i> Back
                    </a>
                </div>
            </div>
        </div>
       
            <div class="card-body">
            <form action="{{ url('/admin/counters/update') }}" method="POST" enctype="multipart/form-data" id="counter_form">
            @csrf
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="form-group col-sm-12">
                                <label>Title<span class="text-danger">*</span></label>
                                <input type="text" name="title" id="title" class="form-control" value="{{old('title',$counter->title)}}">
                                <input type="hidden" name="id" value="{{$counter->id}}">
                            </div>
                            <div class="form-group col-sm-12">
                                <label>Value<span class="text-danger">*</span></label>
                                <input type="text" name="value" id="value" class="form-control" value="{{old('value',$counter->value)}}">
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                    </form>
                </div>
                </div>
                    <!-- /.card-body -->
                </div>
        



        <x-slot name="footer">
            <script>
                $(document).ready(function(){
                    $('#counter_form').submit(function(e) {
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
