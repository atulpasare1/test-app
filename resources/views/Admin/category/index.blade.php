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
                    <a href="{{route('quiz.create')}}" class="btn btn-primary waves-effect waves-light text-white" ><i class="ri-add-line me-0 me-sm-1 d-inline-block d-sm-none"></i><span class=" d-sm-inline-block"> Add {{$title}} </span></a>

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

              <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEnd" aria-labelledby="offcanvasEndLabel">
                <div class="offcanvas-header">
                  <h5 id="offcanvasEndLabel" class="offcanvas-title">Add {{$title}}</h5>
                  <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body my-auto mx-0 flex-grow-0">
                  <p class="text-center">Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.</p>
                  <button type="button" class="btn btn-primary mb-2 d-grid w-100 waves-effect waves-light">Continue</button>
                  <button type="button" class="btn btn-outline-secondary d-grid w-100 waves-effect" data-bs-dismiss="offcanvas">Cancel</button>
                </div>
              </div>


@endsection

@section('js')
<script>

    let tbl =   $('.categoryTbl').DataTable({
        "processing": true, // Show processing indicator while loading data
        "serverSide": true, // Enable server-side processing
        "ajax": {
          "url": "{{ url()->current() }}", // Change this to your backend URL
          "type": "GET", // You can use GET or POST based on your backend setup
          "data": function(d) {
            // You can add additional parameters to be sent to the server, e.g. filters
            console.log(d); // This will log the request params, like page number, search value, etc.
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


</script>
@endsection
