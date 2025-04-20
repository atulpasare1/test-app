@extends('layouts.admin')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">


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
                <table class="table table-sm">
                  <thead>
                    <tr>
                      <th>Title</th>
                      <th>Class</th>
                      <th>Subject</th>
                      <th>Lession</th>
                      <th>Status</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody class="table-border-bottom-0">
                    <tr>
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
