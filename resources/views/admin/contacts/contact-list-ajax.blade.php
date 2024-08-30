<table id="example1" class="table table-sm table-condensed table-striped">
    <thead>
        <tr>
            <th width="30">#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Datetime</th>
            @canany(['Role edit', 'Role delete'])
                <th class="text-center">Action</th>
            @endcanany 
        </tr>
    </thead>
    <tbody>
        @forelse ($contacts as $contact)
            <tr>
                <td>{{$contact->id}}</td>
                <td>{{$contact->firstname.' '.$contact->lastname}}</td>
                <td>{{$contact->email}}</td>
                <td>{{$contact->subject}}</td>
                <td>{{$contact->created_at}}</td>
                <td>
                    <a href="{{url('/admin/contact/view')}}/{{$contact->id}}" class="btn btn-primary">View</a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="10" class="text-center">
                    Not Found!
                </td>
            </tr>
        @endforelse
    </tbody>
</table>
<div class="row mt-3">
    <div class="col-md-6"></div>
    <div class="col-md-6 d-flex justify-content-end">
    {{ $contacts->links() }}
    </div>
</div>