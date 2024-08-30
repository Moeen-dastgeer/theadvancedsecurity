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

    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h4>Counter</h4>
                </div>
                <div class="col-md-6 text-right">
                    <!--<a href="{{ url('/admin/counters/create') }}" class="btn btn-sm btn-primary">-->
                    <!--    <i class="fa fa-plus-square"></i> Add new-->
                    <!--</a>-->
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
                                <th>Title</th>
                                <th>Value</th>
                                <th class="text-center" width="210">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php  $i=1; @endphp
                            @foreach ($counters as $counter)
                                <tr align="center">
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $counter->title }}</td>
                                    <td>
                                        {{ $counter->value }}
                                    </td>
                                    <td>
                                        {{-- <a href="{{ url('/admin/counters/delete/') }}/{{ $counter->id }}" class="btn btn-danger">Delete</a> --}}
                                        <a href="{{ url('/admin/counters/edit/') }}/{{ $counter->id }}" class="btn btn-info">Edit</a>
                                        <!--<a  href="{{ url('/admin/counters/delete/') }}/{{ $counter->id }}" class="btn btn-danger">Delete</a>-->
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-md-10"></div>
                        <div class="col-md-2">
                            {{ $counters->links() }}
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
