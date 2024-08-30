<x-admin.app-layout>
    <x-slot name="title">Slider</x-slot>
    <x-slot name="contentHeader">
        <div class="col-sm-6">
            <h1 class="m-0">Slider</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active"></li>
            </ol>
        </div><!-- /.col -->
    </x-slot>
    
    <div class="card">
      <div class="card-header">
        <div class="row">
          <div class="col-md-6">
              <h4>Slider</h4>
          </div>
          <div class="col-md-6 text-right">
                @if(Auth()->user()->id==1)
                  <a href="{{url('/admin/sliders/create')}}" class="btn btn-sm btn-primary table-sm">
                      <i class="fa fa-plus-square"></i> Add new
                  </a>
                @endif
          </div>
        </div>
      
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                  <tr>
                      <th width="30">#</th>
                      <th>Title</th>
                      <th>image</th>
                      <th>status</th>
                      <th>DateTime</th>
                      <th class="text-center" width="150">Action</th>
                  </tr>
              </thead>
              <tbody>

                @php  $i=1; @endphp
        @foreach($sliders as $slider)
        <tr>
            <td>{{$i++;}}</td>
            <td>{!!$slider->title!!}</td>
            <td><a href="{{ asset('storage/images/sliders/'. $slider->image) }}" target="_blank"><img src="{{ asset('storage/images/sliders/'. $slider->image) }}" width="100px" height="50px"></a></td>
            <td>{{$slider->status}}</td>
            <td>{{$slider->created_at}}</td>
            <td>
                {{-- <button class=" delete_slider btn btn-danger" value="{{$slider->id}}">Delete1</button> --}}
                <a href="{{url('/admin/sliders/edit/')}}/{{$slider->id}}" class="btn btn-info btn-sm">Edit</a>
                  @if(Auth()->user()->id==1)
                    <a href="{{url('/admin/sliders/delete/')}}/{{$slider->id}}" class="btn btn-danger btn-sm">Delete</a>
                  @endif
            </td>
        </tr>
        @endforeach


              <tbody>
                    
              </tbody>        
          </table>
      </div>
      <!-- /.card-body -->
  </div>
</div>
<x-slot name="footer">
    <script>
     
    </script>
  </x-slot>

</x-admin.app-layout>