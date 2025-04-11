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
    const fullToolbar = [
    [
      {
        font: []
      },
      {
        size: []
      }
    ],
    ['bold', 'italic', 'underline', 'strike'],
    [
      {
        color: []
      },
      {
        background: []
      }
    ],
    [
      {
        script: 'super'
      },
      {
        script: 'sub'
      }
    ],
    [
      {
        header: '1'
      },
      {
        header: '2'
      },
      'blockquote',
      'code-block'
    ],
    [
      {
        list: 'ordered'
      },
      {
        list: 'bullet'
      },
      {
        indent: '-1'
      },
      {
        indent: '+1'
      }
    ],
    [{ direction: 'rtl' }],
    ['link', 'image', 'video', 'formula'],
    ['clean']
  ];
  const fullEditor = new Quill('#full-editor', {
    bounds: '#full-editor',
    placeholder: 'Type Something...',
    modules: {
      formula: true,
      toolbar: fullToolbar
    },
    theme: 'snow'
  });
$(document).ready(function() {
    // Submit the form using AJAX
    $('form').on('submit', function(event) {
        event.preventDefault(); // Prevent the default form submission

        // Get the form data
        var formData = new FormData(this);

    // Get the content from the Quill editor
    var quillContent = fullEditor.root.innerHTML;  // quill is the Quill editor instance

// Append the Quill content to the FormData
    formData.append('description', quillContent);
        // Send the data using AJAX
        $.ajax({
            url: '{{ route('quiz.store') }}',  // Your Laravel route for storing quizzes
            method: 'POST',
            data: formData,
            processData: false,  // Don't process the data
            contentType: false,  // Don't set content type
            success: function(response) {
                if (response.success) {
                    alert('Quiz created successfully!');
                    window.location.href = response.redirect_url; // Redirect to the quizzes list page or any other URL
                } else {
                  var errors = response.errors;
                  console.log(errors);
                  for (var field in errors) {
            if (errors.hasOwnProperty(field)) {
              // Example: display validation errors on the UI
              var errorMessages = errors[field];
               $('input[name="' + field + '"]').addClass('is-invalid');
               $('select[name="' + field + '"]').addClass('is-invalid');
              $('div[data-field="' + field + '"]').html(errorMessages.join('')).addClass('text-danger');
            }
          }
                }
            },
            error: function(xhr, status, error) {
                console.log(xhr.responseText);
                alert('There was an error with the AJAX request.');
            }
        });
    });

    $('input, select').on('input change', function() {
    var fieldName = $(this).attr('name'); // Get the name of the field

    // Remove the 'is-invalid' class from inputs/selects
    $(this).removeClass('is-invalid');

    // Remove the error message from the UI
    $('div[data-field="' + fieldName + '"]').html('').removeClass('text-danger');
});

fullEditor.on('text-change', function() {
    // Remove error styling from the Quill editor container
    $('#quill-editor-container').removeClass('is-invalid');

    // Clear error messages
    $('div[data-field="' + 'description' + '"]').html('').removeClass('text-danger');
});
});

// Listen for changes in the Quill editor

</script>

@endsection
