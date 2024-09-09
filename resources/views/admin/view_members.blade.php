<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
   @include('admin.css')
</head>

<body>
    <div class="wrapper">
         @include('admin.sidebar')
         <!-- @include('admin.topbar') -->
      <div class="header">
         <h1>All Members List</h1>
         <a href="{{ url('add_member') }}" class="btn btn-primary">
         <i class="fa-solid fa-plus"></i>
         Add New Member</a>
      </div>
      <div>
         <div class="view-members">
            <table class="members-table">               
               <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>User Role</th>
                  <th>Active Status</th>
                  <th>Action</th>
               </tr>
               @foreach($member as $x)
               <tr>
                  <td>{{ $x->id }}</td>
                  <td>{{ $x->name }}</td>
                  <td>{{ $x->email }}</td>
                  <td>{{ $x->phone }}</td>
                  <td>{{ $x->user_type }}</td>
                  <td>{{ $x->is_active }}</td>
                  <td><a href="{{ url('delete_product',$x->id) }}" class="btn btn-danger" onclick="confirmation(event)">Delete</a></td>
               </tr>
               @endforeach
            </table>
         </div>
         <div class="pagination">
         {{ $member->links() }}
         </div>
         
      </div>
      
         
    </div>


   <!-- Javascript Files -->

    <script type="text/javascript">
      function confirmation(ev){
         ev.preventDefault();

         var urlToRedirect = ev.currentTarget.getAttribute('href');

         console.log(urlToRedirect);
         swal({
            title: "Are you sure you want to delete this ember",
            text: "This will permanently delete the member",
            icon: "warning",
            buttons: true,
            dangerMode: true,
         })

         .then((willCancel)=>{
            if(willCancel){
               window.location.href=urlToRedirect;
            }
         });
      }
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('admincss/js/script.js') }}"></script>
</body>

</html>