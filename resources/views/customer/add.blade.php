@include('partials.header')
<x-nav />
<h3>Add Account</h3>
<form action="/saveCustomer" method="Post">
@CSRF
<div class="mb-3">
    <label for="name" class="form-label">First Name</label>
    <input type="name" class="form-control" name="firstName">
    
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Last Name</label>
    <input type="name" class="form-control" name="lastName">
    
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
    @error('email')
    <p>Invalid email</p>
    @enderror
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    
  </div>
  <div class="mb-3">
    <label for="contactNumber" class="form-label">Contact</label>
    <input type="contactNumber" class="form-control" name="contactNumber">
    @error('contactNumber')
    <p>Input 11 number</p>
    @enderror
  </div>
 
  <div class="mb-3">
    <label for="address" class="form-label">address</label>
    <input type="address" class="form-control" name="address">
    
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
