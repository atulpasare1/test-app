@extends('layouts.admin')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
     <div class="row g-6 mb-8 justify-content-end">

      <div class="col-sm-4 d-grid ">
        <div class="card-header border-bottom">
            <div class="d-flex justify-content-between">
                <div class="me-1">
                    <h5 class="card-title mb-0">{{$title}}</h5>
                    <small class="text-muted"> You can manage Quiz From here</small>
                </div>

              </div>



        </div>
      </div>
      <div class="col-sm-2 d-grid">
        <a  href="{{route('quiz.edit',['quiz_id'=>$quiz->id])}}" class="btn btn-outline-secondary waves-effect">
            <div class="d-flex justify-content-start align-items-center ">
                <div class="avatar-wrapper text-dark">
                   <div class="avatar avatar-sm me-0 mt-2 ">
                    <i class=" ri-sun-line"></i>
                   </div>
                </div>
                <div class="d-flex flex-column text-dark">
                    <span>Details</span>

                </div>
             </div>

        </a>
         </div>
      <div class="col-sm-2 d-grid">

         <a href="{{route('quiz.settings',['quiz_id'=>$quiz->id])}}"  class="btn btn-outline-secondary waves-effect">
            <div class="d-flex justify-content-start align-items-center user-name">
                <div class="avatar-wrapper">
                   <div class="avatar avatar-sm me-0 mt-2">
                    <i class=" ri-setting"></i>
                   </div>
                </div>
                <div class="d-flex flex-column">
                    <span>Settings</span>

                </div>
             </div>

        </a>
      </div>
      <div class="col-sm-2 d-grid">
         <a href="{{route('quiz.questions',['quiz_id'=>$quiz->id])}}" class="btn {{ (Request::segment(count(Request::segments())) === 'questions') ? 'btn-primary' : 'btn-outline-secondary' }}
 waves-effect">
            <div class="d-flex justify-content-start align-items-center user-name">
                <div class="avatar-wrapper">
                   <div class="avatar avatar-sm me-0 mt-2">
                    <i class=" ri-sun-line"></i>
                   </div>
                </div>
                <div class="d-flex flex-column">
                    <span>Questions</span>

                </div>
             </div>

        </a>
      </div>
      <div class="col-sm-2 d-grid">
         <a href="{{route('quiz.schedules',['quiz_id'=>$quiz->id])}}"  class="btn btn-outline-secondary waves-effect">
            <div class="d-flex justify-content-start align-items-center user-name">
                <div class="avatar-wrapper">
                   <div class="avatar avatar-sm me-0 mt-2">
                    <i class=" ri-sun-line"></i>
                   </div>
                </div>
                <div class="d-flex flex-column">
                    <span>Schedules</span>

                </div>
             </div>

        </a>
      </div>

    </div>
    <!-- {{$title}}  List Table -->
    <div class="card card-action mb-8">
      <div class="card-header">
        <h5 class="card-action-title mb-0">{{ucfirst($title)}} Details</h5>
       {!! GetCardAction() ?? '' !!}
      </div>

      <div class="collapse show">
      <div class="card-body ">
        <div class="row g-6">

          <div class="col-xl-12 col-md-12 col-sm-12">
            <div class=" mb-6">
                <div class="card-header p-0">
                  <div class="nav-align-top" style="width: 100%;">
                    <ul class="nav nav-tabs nav-fill" role="tablist">
                      <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link active waves-effect" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-viewQue" aria-controls="navs-justified-home" aria-selected="true"><span class="d-none d-sm-block">
                            <i class="tf-icons ri-home-smile-line me-2"></i> View Questions
                            </span><i class="ri-home-smile-line ri-20px d-sm-none"></i></button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link waves-effect" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-Addque"
                        aria-controls="navs-justified-profile" aria-selected="false" tabindex="-1"><span class="d-none d-sm-block">
                            <i class="tf-icons ri-user-3-line me-2"></i> Add Questions</span><i class="ri-user-3-line ri-20px d-sm-none"></i></button>
                      </li>

                    <span class="tab-slider" style="left: 0px; width: 237.688px; bottom: 0px;"></span></ul>
                  </div>
                </div>
                <div class="card-body pt-5">
                  <div class="tab-content p-0">
                    <div class="tab-pane fade show active" id="navs-justified-viewQue" role="tabpanel">
                        <div class="row">
                            <div class="col"><div class="form-floating form-floating-outline">
                                <select class="form-select" id="mySelect2" aria-label="Floating label select example">
                                  <option>Open this select menu</option>
                                  <option value="1">One</option>
                                  <option value="2">Two</option>
                                  <option value="3">Three</option>
                                </select>
                                <label for="floatingSelect">Works with selects</label>
                              </div>
                             </div>
                        </div>
                        <div class="table-responsive text-nowrap">
                            <table class="table table-sm">
                              <thead>
                                <tr>
                                  <th>Project</th>
                                  <th>Client</th>
                                  <th>Users</th>
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
                                  <td>
                                    <div class="dropdown">
                                      <button type="button" class="btn p-0 dropdown-toggle hide-arrow show" data-bs-toggle="dropdown" aria-expanded="true"><i class="ri-more-2-line"></i></button>
                                      <div class="dropdown-menu show" data-popper-placement="top-start" style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(1206px, -167px);">
                                        <a class="dropdown-item waves-effect" href="javascript:void(0);"><i class="ri-pencil-line me-1"></i> Edit</a>
                                        <a class="dropdown-item waves-effect" href="javascript:void(0);"><i class="ri-delete-bin-7-line me-1"></i> Delete</a>
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td><i class="ri-basketball-fill ri-22px text-info me-4"></i><span class="fw-medium">Sports Project</span></td>
                                  <td>Barry Hunter</td>
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
                                  <td><span class="badge rounded-pill bg-label-success me-1">Completed</span></td>
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
                                <tr>
                                  <td><i class="ri-leaf-fill ri-22px text-success me-4"></i><span class="fw-medium">Greenhouse Project</span></td>
                                  <td>Trevor Baker</td>
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
                                  <td><span class="badge rounded-pill bg-label-info me-1">Scheduled</span></td>
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
                                <tr>
                                  <td><i class="ri-bank-fill ri-22px text-primary me-4"></i><span class="fw-medium">Bank Project</span></td>
                                  <td>Jerry Milton</td>
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
                                  <td><span class="badge rounded-pill bg-label-warning me-1">Pending</span></td>
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
                    <div class="tab-pane fade" id="navs-justified-Addque" role="tabpanel">
                        <div class="table-responsive text-nowrap">
                            <table class="table">
                              <thead>
                                <tr class="text-nowrap">
                                  <th>#</th>
                                  <th>Table heading</th>
                                  <th>Table heading</th>
                                  <th>Table heading</th>

                                </tr>
                              </thead>
                              <tbody class="table-border-bottom-0">
                                <tr>
                                  <th scope="row">1</th>
                                  <td>Table cell</td>
                                  <td>Table cell</td>
                                  <td>Table cell</td>

                                </tr>
                                <tr>
                                  <th scope="row">2</th>
                                  <td>Table cell</td>
                                  <td>Table cell</td>
                                  <td>Table cell</td>

                                </tr>
                                <tr>
                                  <th scope="row">3</th>
                                  <td>Table cell</td>
                                  <td>Table cell</td>

                                </tr>
                              </tbody>
                            </table>
                          </div>
                    </div>
                    <div class="tab-pane fade" id="navs-justified-messages" role="tabpanel">
                      <p>
                        Oat cake chupa chups dragée donut toffee. Sweet cotton candy jelly beans macaroon gummies cupcake gummi
                        bears
                        cake chocolate.
                      </p>
                      <p class="mb-0">
                        Cake chocolate bar cotton candy apple pie tootsie roll ice cream apple pie brownie cake. Sweet roll icing
                        sesame snaps caramels danish toffee. Brownie biscuit dessert dessert. Pudding jelly jelly-o tart brownie
                        jelly.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
          </div>

        </div>

        <button type="submit" class="btn btn-primary">Save Changes</button>

       </div>
      </div>
    </div>


              </div>
@endsection

@section('js')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
  $('#mySelect2').select2({
        placeholder: 'Select a user',
        multiple: true,
        ajax: {
            url: '{{ route("question.search") }}', // Your route that returns user data
            dataType: 'json',
            delay: 250,
            data: function (params) {
                return {
                    q: params.term // search term
                };
            },
            processResults: function (data) {
                return {
                    results: data.map(user => ({
                        id: user.id,
                        text: user.name
                    }))
                };
            },
            cache: true
        }
    });


</script>

@endsection
