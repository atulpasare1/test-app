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
                    <a href="{{route('question.create')}}" class="btn btn-primary waves-effect waves-light text-white" ><i class="ri-add-line me-0 me-sm-1 d-inline-block d-sm-none"></i><span class=" d-sm-inline-block"> Add {{$title}} </span></a>

                </div>
              </div>


           <div class="d-flex justify-content-between align-items-center row gx-5 pt-4 gap-5 gap-md-0">
              <div class="col-md-4 user_role">
                 <select id="UserRole" class="form-select form-select-sm  text-capitalize">
                    <option value=""> Select Role </option>
                    <option value="Admin">Admin</option>
                    <option value="Author">Author</option>
                    <option value="Editor">Editor</option>
                    <option value="Maintainer">Maintainer</option>
                    <option value="Subscriber">Subscriber</option>
                 </select>
              </div>
              <div class="col-md-4 user_plan">
                 <select id="UserPlan" class="form-select form-select-sm text-capitalize">
                    <option value=""> Select Plan </option>
                    <option value="Basic">Basic</option>
                    <option value="Company">Company</option>
                    <option value="Enterprise">Enterprise</option>
                    <option value="Team">Team</option>
                 </select>
              </div>
              <div class="col-md-4 user_status">
                 <select id="FilterTransaction" class="form-select form-select-sm text-capitalize">
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
                <table class="table table-sm QuestionTbl">
                  <thead>
                    <tr>
                      <th>Code</th>
                      <th>Question</th>
                      <th>Type</th>
                      <th>Section</th>
                      <th>Skill</th>
                      <th>Topic</th>
                      <th>Status</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody class="table-border-bottom-0">
                    <tr>

                      <td><i class="ri-suitcase-2-line ri-22px text-danger me-4"></i><span class="fw-medium">Tours Project</span></td>
                      <td><i class="ri-suitcase-2-line ri-22px text-danger me-4"></i><span class="fw-medium">Tours Project</span></td>
                      <td><i class="ri-suitcase-2-line ri-22px text-danger me-4"></i><span class="fw-medium">Tours Project</span></td>
                      <td>Albert Cook</td>
                      <td>
                        <ul class="list-unstyled m-0 avatar-group d-flex align-items-center">
                          <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" aria-label="Lilian Fuller" data-bs-original-title="Lilian Fuller">
                            <img src="../../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle">
                          </li>
                          <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" aria-label="Sophia Wilkerson" data-bs-original-title="Sophia Wilkerson">
                            <img src="../../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle">
                          </li>
                          <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" aria-label="Christina Parker" data-bs-original-title="Christina Parker">
                            <img src="../../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle">
                          </li>
                        </ul>
                      </td>
                      <td><span class="badge rounded-pill bg-label-primary me-1">Active</span></td>
                      <td><span class="badge rounded-pill bg-label-primary me-1">Active</span></td>
                      <td>
                        <div class="dropdown">
                          <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ri-more-2-line"></i></button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item waves-effect" href="javascript:void(0);"><i class="ri-pencil-line me-1"></i> Edit</a>
                            <a class="dropdown-item waves-effect" href="javascript:void(0);"><i class="ri-delete-bin-7-line me-1"></i> Delete</a>
                          </div>
                        </div>
                      </td>
                    </tr>

                  </tbody>
                </table>
              </div>
        </div>
        <!-- Offcanvas to add new user -->
     </div>


              </div>




@endsection

@section('js')
<script>
     let tbl =   $('.QuestionTbl').DataTable({
        "processing": true, // Show processing indicator while loading data
        "serverSide": true, // Enable server-side processing
        "autoWidth": false,
        "columnDefs": [
        { "width": "150px", "targets": 0 },
        { "width": "200px", "targets": 1 }
    ],
        "ajax": {
          "url": "{{ url()->current() }}", // Change this to your backend URL
          "type": "GET", // You can use GET or POST based on your backend setup
          "data": function(d) {
            // You can add additional parameters to be sent to the server, e.g. filters
            console.log(d); // This will log the request params, like page number, search value, etc.
          }
        },
        columns: [
                { data: 'code' },
                { data: 'question',width:'300px' },
                { data: 'type' },
                { data: 'subject' },
                { data: 'skill' },
                { data: 'topic' },
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
