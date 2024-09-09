<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
   @include('admin.css')
</head>

<body>
    <div class="wrapper">
         @include('admin.sidebar')
         <!-- @include('admin.topbar') -->

      <div class="form-input">
         <h1>Add New Member</h1>
         <form action="{{ url('upload_member') }}" method="post">
            @csrf
            <div>
               <label>Name</label>
               <input type="text" name="name">
            </div>
            <div>
               <label>Email</label>
               <input type="email" name="email">
            </div>
            <div>
               <label>Phone</label>
               <input type="text" name="phone">
            </div>
            <div>
               <label>Password</label>
               <input type="password" name="password">
            </div>
            <div>
               <label>User Role</label>
               <select name="user_type" required>
                  <option value="member">Member</option>
                  <option value="admin">Admin</option>
                  <option value="superadmin">Superadmin</option>
               </select>
            </div>
            <div>
               <label>Is Active</label>
               <select name="is_active" required>
                  <option value="0">Inactive</option>
                  <option value="1">Active</option>
               </select>
            </div>
            <button type="submit" class="btn btn-success" style="margin-left: 85px; margin-top:40px;">Add Member</button>
         </form>
      </div>
         
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="{{ asset('admincss/js/script.js') }}"></script>
</body>

</html>