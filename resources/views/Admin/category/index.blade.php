@extends('layouts.admin')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">



    <div class="row g-6 mb-6">
      <div class="col-sm-6 col-xl-3">
        <div class="card shadow-none bg-secondary-subtle">
          <div class="card-body">
            <div class="d-flex justify-content-between">
              <div class="me-1">
                <p class="text-heading mb-1">Session</p>
                <div class="d-flex align-items-center">
                  <h4 class="mb-1 me-2">21,459</h4>
                </div>

              </div>
              <div class="avatar">
                <div class="avatar-initial bg-label-primary rounded-3">
                  <div class="ri-group-line ri-26px"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-xl-3">
        <div class="card shadow-none bg-secondary-subtle">
          <div class="card-body">
            <div class="d-flex justify-content-between">
              <div class="me-1">
                <p class="text-heading mb-1">Paid Users</p>
                <div class="d-flex align-items-center">
                  <h4 class="mb-1 me-1">4,567</h4>

                </div>

              </div>
              <div class="avatar">
                <div class="avatar-initial bg-label-danger rounded-3">
                  <div class="ri-user-add-line ri-26px"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-xl-3">
        <div class="card shadow-none bg-secondary-subtle">
          <div class="card-body">
            <div class="d-flex justify-content-between">
              <div class="me-1">
                <p class="text-heading mb-1">Active Users</p>
                <div class="d-flex align-items-center">
                  <h4 class="mb-1 me-1">19,860</h4>

                </div>

              </div>
              <div class="avatar">
                <div class="avatar-initial bg-label-success rounded-3">
                  <div class="ri-user-follow-line ri-26px"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-xl-3">
        <div class="card shadow-none bg-secondary-subtle">
          <div class="card-body">
            <div class="d-flex justify-content-between">
              <div class="me-1">
                <p class="text-heading mb-1">Pending Users</p>
                <div class="d-flex align-items-center">
                  <h4 class="mb-1 me-1">237</h4>

                </div>

              </div>
              <div class="avatar">
                <div class="avatar-initial bg-label-warning rounded-3">
                  <div class="ri-user-search-line ri-26px"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    <!-- {{$title}}  List Table -->
    <div class="card">
        <div class="card-header border-bottom">
            <div class="d-flex justify-content-between">
                <div class="me-1">
                    <h5 class="card-title mb-0">{{$title}}</h5>
                    <small class="text-muted"> {{$subtitle}}</small>
                </div>
                <div class="me-1">
                    <a href="javascript:void(0);" class="btn btn-primary waves-effect waves-light text-white addcategpry" ><i class="ri-add-line me-0 me-sm-1 d-inline-block d-sm-none"></i><span class=" d-sm-inline-block"> Add {{$title}} </span></a>

                </div>
              </div>


           <div class="d-flex justify-content-between align-items-center row gx-5 pt-4 gap-5 gap-md-0">
              <div class="col-md-4 user_role">
                 <select id="UserRole" class="form-select  text-capitalize">
                    <option value=""> Select Role </option>
                    <option value="Admin">Admin</option>
                    <option value="Author">Author</option>
                    <option value="Editor">Editor</option>
                    <option value="Maintainer">Maintainer</option>
                    <option value="Subscriber">Subscriber</option>
                 </select>
              </div>
              <div class="col-md-4 user_plan">
                 <select id="UserPlan" class="form-select text-capitalize">
                    <option value=""> Select Plan </option>
                    <option value="Basic">Basic</option>
                    <option value="Company">Company</option>
                    <option value="Enterprise">Enterprise</option>
                    <option value="Team">Team</option>
                 </select>
              </div>
              <div class="col-md-4 user_status">
                 <select id="FilterTransaction" class="form-select text-capitalize">
                    <option value=""> Select Status </option>
                    <option value="Pending" class="text-capitalize">Pending</option>
                    <option value="Active" class="text-capitalize">Active</option>
                    <option value="Inactive" class="text-capitalize">Inactive</option>
                 </select>
              </div>
           </div>
        </div>
        <div class="card-datatable">
            <div class="table-responsive text-nowrap">
                <table class="table table-sm categoryTbl">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Status</th>

                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody class="table-border-bottom-0">
                    <!-- Data will be populated here by DataTables -->

                  </tbody>
                </table>
              </div>
        </div>
        <!-- Offcanvas to add new user -->
     </div>


              </div>

              <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasCategory" aria-labelledby="offcanvasEndLabel">
                <div class="offcanvas-header">
                  <h5 id="offcanvasEndLabel" class="offcanvas-title">Add {{$title}}</h5>
                  <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body flex-grow-1">
                    <form id="frmcategory" class="row g-3">
                        <div class="col-12">
                          <label for="categoryName" class="form-label">Name</label>
                          <input type="hidden" class="form-control" id="" placeholder="category name" name="category_id">
                          <input type="text" class="form-control" id="categoryName" placeholder="category name" name="name">
                        </div>
                        <div class="col-12">
                          <label for="inputUsername" class="form-label">Description</label>
                          <textarea class="form-control" placeholder="category description" name="description" id="inputdescription" cols="30" rows="10"></textarea>
                        </div>
                        <div class="col-12 d-flex justify-content-between">
                            <div class="me-2">
                                <h6 class="mb-0">Status</h6>
                              </div>
                              <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                  <input type="radio" name="status" value="1" class="btn-check raradio"  id="raradio1" checked="">
                                  <label class="btn btn-outline-primary btn-sm waves-effect" for="raradio1">Active</label>

                                  <input type="radio" name="status" value="0" class="btn-check raradio"  id="raradio2">
                                  <label class="btn btn-outline-primary btn-sm waves-effect" for="raradio2">Disable</label>


                              </div>
                        </div>
                        <div class="col-12 d-flex justify-content-end mt-5">
                            <button type="submit" class="btn btn-primary mb-2 mx-1  waves-effect waves-light ">Submit</button>
                            <button type="button" class="btn btn-outline-secondary mb-2  waves-effect waves-light" data-bs-dismiss="offcanvas">Continue</button>


                        </div>
                  </form>
                </div>
              </div>


@endsection

@section('js')
<script>

const myOffcanvas = new bootstrap.Offcanvas(document.getElementById('offcanvasCategory'));


 function editCategory(...param) {
    // Perform your edit logic here
    myOffcanvas.show();
    $('#offcanvasCategory').find('input[name="category_id"]').val(param[0]);
    $('#offcanvasCategory').find('input[name="name"]').val(param[1]);
    $('#offcanvasCategory').find('textarea[name="description"]').val(param[5]);
    $('#offcanvasCategory').find('input[name="status"]')
        .prop('checked', false)
        .filter(`[value="${param[6]}"]`)
        .prop('checked', true);


    console.log('Edit button clicked for ID:', param[0]); // Assuming param[0] is the category
    // id);
 }
 $('.addcategpry').on('click', function() {
    myOffcanvas.show();
    $('#offcanvasCategory').find('input[name="category_id"]').val('');
    $('#offcanvasCategory').find('input[name="name"]').val('');
    $('#offcanvasCategory').find('textarea[name="description"]').val('');
    $('#offcanvasCategory').find('input[name="status"]')
        .prop('checked', false)
        .filter(`[value="1"]`)
        .prop('checked', true);


 });





    let tbl =   $('.categoryTbl').DataTable({

        "processing": true, // Show processing indicator while loading data
        "serverSide": true, // Enable server-side processing
        "ajax": {
          "url": "{{ url()->current() }}", // Change this to your backend URL
          "type": "GET", // You can use GET or POST based on your backend setup
          "data": function(d) {
            // You can add additional parameters to be sent to the server, e.g. filters
           // console.log(d); // This will log the request params, like page number, search value, etc.
          }
        },
        columns: [
                { data: 'name' },
                { data: 'status' },
                { data: 'actions', orderable: false, searchable: false }
            ],
        "lengthMenu": [10, 25, 50, 100], // Page length options
        "paging": true,
        "searching": true,
        "ordering": true,
        "info": true,
      });


      $('#frmcategory').on('submit', function(e) {
    e.preventDefault(); // Prevent the default form submission

    $.ajax({
            url: "{{ route('categories.create') }}",
            type: "POST",
            dataType: "json",
            data: {
                // Add any additional data you want to send to the server
                name: $('input[name="name"]').val(),
                description: $('#inputDescription').val(),
                status: $('input[name="status"]:checked').val(),
                category_id: $('input[name="category_id"]').val(),

            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            beforeSend: function() {
                // Show a loading spinner or message if needed
            },
            success: function(data) {

                // Handle the response data as needed
                if(data.status){
                    // Assuming the response contains a success message
                    // You can also update the DataTable here if needed
                    tbl.ajax.reload(); // Reload the DataTable to reflect changes
                    myOffcanvas.hide();
                    createToaster('success', data.message); // Hide the offcanvas after successful submission
                } else {
                    createToaster('error', data.message);
                }
            },
            error: function(xhr, status, error) {
                console.error("Error fetching data:", error);
            }
        });
    });

</script>
@endsection
