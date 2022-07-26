@extends('layouts.main')
@push('title')
    <title>Register</title>
@endpush
@section('main-section')
<div class="container">


  <div class="col-md-11 offset-md-1">
    <div class="signup-form">
      <form action="{{ $url}}" class="mt-5 border p-4 bg-light shadow border-radius" method="post">
       @csrf
        <h4 class="mb-5 text-secondary">{{ $header }}</h4>
          <div class="row">
        <div class="mb-3 col-md-6">
          <label>First Name</label>
          <input type="text" name="first_name" class="form-control" placeholder="Enter first name" value="{{ $customer->first_name }}">
          <span class="text-danger">
            @error('first_name')
             {{ $message }}
            @enderror
          </span>
         </div>
         <div class="mb-3 col-md-6">
          <label>Last Name</label>
          <input type="text" name="last_name" class= "form-control" placeholder="Enter last name" value="{{ $customer->last_name }}">
          <span class="text-danger">
           @error('last_name')
            {{ $message }}
           @enderror
         </span>
        </div>
         <div class="mb-3 col-md-12">
          <label>Email Address</label>
          <input type="Email" name="email" class="form-control" placeholder="Enter e-mail" value="{{ $customer->email }}">
          <span class="text-danger">
           @error('email')
            {{ $message }}
           @enderror
         </span>
        </div>

         <div class="mb-3 col-md-12">
           <label>Address</label>
           <input type="text-area" name="address" class="form-control" placeholder="Address here" value="{{ $customer->address }}">
           <span class="text-danger">
             @error('address')
              {{ $message }}
             @enderror
           </span>
          </div>
          <div class="mb-3 col-md-6">
           <label>Country</label>
           <input type="text" name="country" class="form-control" placeholder="Country here" value="{{ $customer->country }}">
          </div>
          <div class="mb-3 col-md-6">
           <label>Province</label>
           <input type="text" name="province" class="form-control" placeholder="Province here" value="{{ $customer->province}}">
          </div>

          <div class="mb-3 col-md-6 ">
           <label >Gender</label>
           <div class="form-check">
               <input class="form-check-input" type="radio" name="gender" id="" value="M" checked>
               <label class="form-check-label" for="" >
                 {{ $customer->gender == 'M' ? "checked":""}}
                 Male
               </label>
             </div>
             <div class="form-check">
               <input class="form-check-input" type="radio" name="gender" value="F" id="" >
               <label class="form-check-label" for="">
                {{ $customer->gender == 'F' ? "checked":""}}
                 Female
               </label>
             </div>
          </div>
          <div class="mb-3 col-md-6">
           <label>Date of Birth</label>
           <input type="date" name="date" class="form-control" placeholder="dd-mm-yyyy" value="{{ $customer->dob }}">
          </div>
          <div class="mb-3 col-md-6">
            <label>Password</label>
            <input type="password" name="password" class="form-control" placeholder="Choose password">
            <span class="text-danger">
             @error('password')
              {{ $message }}
             @enderror
           </span>
          </div>

           <div class="mb-3 col-md-6">
            <label>Confirm Password</label>
            <input type="password" name="confirm_password" class="form-control" placeholder="Confirm password">
            <span class="text-danger">
             @error('confirm_password')
              {{ $message }}
             @enderror
           </span>
          </div>
         <div class="mb-3 col-md-12 text-right">
          <button class="btn btn-success ">{{ $button }}</button>
         </div>
       </div>
       @if ($customer->password == NULL)
       <p class="text-center">If you alreay have account, then <a href="">Login</a></p>
       @endif
       </form>

    </div>
  </div>

</div>
</div>


@endsection

