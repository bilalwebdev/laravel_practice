@extends('layouts.main')
@push('title')
    <title>Customers</title>
@endpush
@section('main-section')
<div class="container">
    <div class="mb-3 col-md-12 text-right">
        <a href="{{ route('customer.view') }}" ><button class="btn btn-primary d-inline-block m-2 text-right">Back</button></a>
        <a href="{{ route('customer.create') }}" ><button class="btn btn-success d-inline-block m-2 text-right">Add Customer</button></a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
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
                        <a href="{{ route('customer.forcedel', ['id' => $customer->customer_id]) }}">
                            <button class="btn btn-success">Delete</button>
                        </a>
                        <a href="{{ route('customer.restore', ['id' => $customer->customer_id]) }}">
                            <button class="btn btn-danger">Restore</button>
                        </a>
                    </td>
            </tr>
            @endforeach

        </tbody>
    </table>
    </div>

@endsection
