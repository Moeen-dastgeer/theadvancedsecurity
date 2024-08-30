<x-admin.app-layout>
    <x-slot name="title">Frequently Asked Questions</x-slot>
    <x-slot name="contentHeader">
        <div class="col-sm-6">
            <h1 class="m-0">Frequently Asked Questions</h1>
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
                    <h4>Frequently Asked Questions</h4>
                </div>

                  @if(Auth()->user()->id==1)
                {{-- <div class="col-md-6 text-right">
                  <a href="{{url('/admin/categories/create')}}" class="btn btn-sm btn-primary">
                      <i class="fa fa-plus-square"></i> Add new
                  </a>
          </div> --}}
                @endif
            </div>

            {{-- <form id="filtercategoryform">
                <div class="row mb-3">
                    <div class="col-md-6 d-flex">
                        From:<input type="date" name="from" id="from"
                            class="form-control form-control-md filters">
                        &nbsp;&nbsp;To:<input type="date" name="to" id="to" max="{{ date('Y-m-d') }}"
                            value="{{ date('Y-m-d') }}" class="form-control form-control-md filters">
                    </div>
                    <div class="col-md-3 d-flex">
                        <select name="s_status" class="form-control s_status">
                            <option value="">All</option>
                            <option value="enable">Enable</option>
                            <option value="disable">Disable</option>

                        </select>
                    </div>
                    <div class="col-md-3 d-flex">
                        Search:<input type="search" name="search" id="search"
                            class="form-control form-control-md search">
                    </div>
                </div>
            </form> --}}
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6 text-right">
                      @if(Auth()->user()->id==1)
                        <a href="{{ route('admin.web_settings.faqs.create') }}" class="btn btn-sm btn-primary">
                            <i class="fa fa-plus-square"></i> Add new
                        </a>
                      @endif
                </div>
            </div>

        </div>



        <!-- /.card-header -->
        <div class="card-body">
            <div id="category">
                <table id="" class="table table-bordered table-striped">
                    <thead>
                        <tr align="center">
                            <th width="30">#</th>
                            <th>Question</th>
                            <!--<th>Answer</th>-->
                            <th class="text-center" width="210">Action</th>

                        </tr>
                    </thead>
                    <tbody>

                        @php  $i=1; @endphp
                        @foreach ($faqs as $faq)
                            <tr align="center">
                                <td>{{ $i++ }}</td>
                                <td>{{ $faq->question }}</td>
                                <!--<td>{{ $faq->answer }}</td>-->
                                <td>
                                    <a href="{{ url('admin/faqs/edit') }}/{{ $faq->id }}"
                                        class="btn btn-info">Edit</a>
                                    {{-- <a href="{{ url('/admin/products/delete/') }}/{{ $product->id }}" class="btn btn-danger">Delete</a> --}}
                                  @if(Auth()->user()->id==1)
                                    <a href="{{ url('admin/faqs/delete') }}/{{ $faq->id }}"
                                            class="btn btn-danger">Delete</a>
                                  @endif
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
                <div class="row">
                    <div class="col-md-10"></div>
                    <div class="col-md-2">
                        {{ $faqs->links() }}
                    </div>
                    <div class="col-md-6"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.card-body -->


    <x-slot name="footer">

    </x-slot>


</x-admin.app-layout>
