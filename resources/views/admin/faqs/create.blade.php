<x-admin.app-layout>
    <x-slot name="title">FAQs Asked Question</x-slot>
    <x-slot name="contentHeader">
        <div class="col-sm-6">
            <h1 class="m-0">FAQs Asked Question</h1>
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
                    <a href="{{ url('/admin/faqs/list') }}" class="btn btn-sm btn-primary">
                        <i class="fa fa-plus-square"></i> Back
                    </a>
                </div>
            </div>
        </div>

        <form action="{{ route('admin.web_settings.faqs.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Question<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="question" value="{{ old('question') }}">
                    <span class="text-danger">
                        @error('question')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="form-group">
                    <label>Answer<span class="text-danger">*</span></label>
                    <textarea class="short_summernote" name="answer">{{ old('answer') }}</textarea>
                    <span class="text-danger">
                        @error('answer')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>  
        <x-slot name="footer">

        </x-slot>


</x-admin.app-layout>
