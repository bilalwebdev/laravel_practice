@extends('layouts.main')
@push('title')
    <title>Customers</title>
@endpush
@section('main-section')
<div class="container">
    <div class="row m-2">
        <form action="" class="col-9">
        <div class="form-group">
          <input type="search" name="search" id="" class="form-control" placeholder="Search by name or email" value="{{ $search }}" >
         </div>
         <button class="btn btn-primary">Search</button>
         <a href="{{ url('/customer') }}">
            <button class="btn btn-info" type="button">Reset</button></a>
    </form>
    <div class=" form-group mb-3 col-3 text-right">
    <a href="{{ route('customer.create') }}" ><button class="btn btn-success d-inline-block m-2 text-right">Add Customer</button></a>

        <a href="{{ route('customer.trash') }}" ><button class="btn btn-danger d-inline-block m-2 text-right">Go to Trash</button></a>
        </div>
</div>
    <table class="table table-striped">
        <thead>

            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>D-O-B</th>
                <th>Address</th>
                <th>country</th>
                <th>Status</th>
                <th>Action</th>
           </tr>
        </thead>
        <tbody>
            @foreach ($customers as $customer )
            <tr>
                <td>{{ $customer->customer_id }}</td>
                <td>{{ $customer->first_name }}</td>
                <td>{{ $customer->last_name }}</td>
                <td>{{ $customer->email }}</td>
                <td>
                  @if ($customer->gender =="M")
                  Male
              @else
                  Female
              @endif
                </td>
                <td>{{ $customer->dob}}</td>
                <td>{{ $customer->address }}</td>
                <td>{{ $customer->country }}</td>
                <td>
                    @if ($customer->status =="1")
                    <a href="">
                        <span class="badge badge-success"> Active</span>
                    </a>

                    @else
                    <a href="">
                        <span class="badge badge-success"> Active</span>
                    </a>
                    @endif
                    </td>
                    <td>
                        <a href="{{ route('customer.edit', ['id' => $customer->customer_id]) }}">
                            <button class="btn btn-success">Edit</button>
                        </a>
                        <a href="{{ route('customer.delete', ['id' => $customer->customer_id]) }}">
                            <button class="btn btn-danger">Trash</button>
                        </a>
                    </td>
            </tr>
            @endforeach

        </tbody>
    </table>
    @if ($search == NULL)
    <div class="row page-item">
        {{ $customers->links() }}
    </div>
    @endif

    </div>

@endsection
