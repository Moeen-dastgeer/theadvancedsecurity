<x-admin.app-layout>
    <x-slot name="title">Team Members</x-slot>
    <x-slot name="contentHeader">
        <div class="col-sm-6">
            <h1 class="m-0">Team Members</h1>
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
                    <h4>Team Members</h4>
                </div>
                <div class="col-md-6 text-right">
                @if(Auth()->user()->id==1)
                    <a href="{{ url('/admin/team/create') }}" class="btn btn-sm btn-primary">
                        <i class="fa fa-plus-square"></i> Add new
                    </a>
                @endif
                </div>
            </div>
        </div>    
            <!-- /.card-header -->
            <div class="card-body">

                <div id="products">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr align="center">
                                <th width="30">#</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th class="text-center" width="210">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php  $i=1; @endphp
                            @foreach ($teams as $team)
                                <tr align="center">
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $team->name }}</td>
                                    <td>
                                        <a href="{{ asset('storage/images/teams/'.$team->image) }}" target="_blank"> <img src="{{ asset('storage/images/teams/'.$team->image) }}" alt="" width="50px" height="50px"></a>
                                    </td>
                                    <td>
                                        {{-- <a href="{{ url('/admin/products/delete/') }}/{{ $product->id }}" class="btn btn-danger">Delete</a> --}}
                                        <a href="{{ url('/admin/team/edit/') }}/{{ $team->id }}" class="btn btn-info">Edit</a>
                                          @if(Auth()->user()->id==1)
                                             <a  href="{{ url('/admin/team/delete/') }}/{{ $team->id }}" class="btn btn-danger">Delete</a>
                                          @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-md-10"></div>
                        <div class="col-md-2">
                            {{ $teams->links() }}
                        </div>
                        <div class="col-md-6"></div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        

    </div>
    <x-slot name="footer">
            <script>
               
            </script>
    </x-slot>
</x-admin.app-layout>
