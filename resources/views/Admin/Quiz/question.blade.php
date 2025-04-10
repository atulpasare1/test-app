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
      <div class="card-body m-5">
         <form class="m-5">
            @csrf
            <div class="form-floating form-floating-outline mb-8">
              <input type="text" name="title" class="form-control" id="basic-default-fullname" placeholder="John Doe">
              <label for="basic-default-fullname">Title<span class="text-danger">*</span></label>
              <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
               <div data-field="title" data-validator="notEmpty">
                </div>
               </div>
            </div>
           
            <div class="mb-8">
               <div class="row">
                  <div class="col-sm-4">
                     <div class="form-floating form-floating-outline">
                        <select class="form-select select2" name="board" id="floatingSelectBorad" aria-label="Floating label select example">
                          <option value="?">Select Board</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                        <label for="floatingSelect">Boards</label>
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                           <div data-field="board" data-validator="notEmpty">
                              </div>
                           </div>
                      </div>
                  </div>
                  <div class="col-sm-4">
                     <div class="form-floating form-floating-outline">
                        <select class="form-select select2" name="class" id="floatingSelectClass" aria-label="Floating label select example">
                          <option value="?">Select Class</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                        <label for="floatingSelect">Classes</label>
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                           <div data-field="class" data-validator="notEmpty">
                              </div>
                           </div>
                      </div>
                  </div>
                  <div class="col-sm-4">
                     <div class="form-floating form-floating-outline">
                        <select class="form-select select2" name="subject" id="floatingSelectSubject" aria-label="Floating label select example">
                          <option value="?">Select Subject</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                        <label for="floatingSelect">Subjects</label>
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                           <div data-field="subject" data-validator="notEmpty">
                              </div>
                           </div>
                      </div>
                  </div>
               </div>
            </div>
            <div class="mb-8">
              <div class="row">
               <div class="col-sm-6">
                  <div class="form-floating form-floating-outline">
                     <select class="form-select select2" name="lession" id="floatingSelectLession" aria-label="Floating label select example">
                       <option value="?">Select Lession</option>
                       <option value="1">One</option>
                       <option value="2">Two</option>
                       <option value="3">Three</option>
                     </select>
                     <label for="floatingSelect">Lessions</label>
                     <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                        <div data-field="lession" data-validator="notEmpty">
                           </div>
                        </div>
                   </div>
               </div>
               <div class="col-sm-6">
                  <div class="form-floating form-floating-outline">
                     <select class="form-select select2" name="topic" id="floatingSelectTopics" aria-label="Floating label select example">
                       <option value="?">Select Topic</option>
                       <option value="1">One</option>
                       <option value="2">Two</option>
                       <option value="3">Three</option>
                     </select>
                     <label for="floatingSelect">Topics</label>
                     <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                        <div data-field="topic" data-validator="notEmpty">
                           </div>
                        </div>
                   </div>
               </div>
                
              </div>
               </div>
            <div class="mb-3">
               <div class="row">
                  <div class="col-sm-3 mb-md-0 mb-5">
                    <div class="form-check custom-option custom-option-basic">
                      <label class="form-check-label custom-option-content" for="customRadioTemp1">
                        <input name="is_paid" class="form-check-input" type="radio" value="0" id="customRadioTemp1" checked="">
                        <span class="custom-option-header">
                          <span class="h6 mb-0">Free</span>
                          <small class="text-muted">Free</small>
                        </span>
                        <span class="custom-option-body">
                          <small>Anyone can access</small>
                        </span>
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-check custom-option custom-option-basic checked">
                      <label class="form-check-label custom-option-content" for="customRadioTemp2">
                        <input name="is_paid" class="form-check-input" type="radio" value="1" id="customRadioTemp2">
                        <span class="custom-option-header">
                          <span class="h6 mb-0">Paid</span>
                          <small class="text-muted">$ </small>
                        </span>
                        <span class="custom-option-body">
                          <small>Accessible to only paid users</small>
                        </span>
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-3 mb-md-0 mb-5">
                    <div class="form-check custom-option custom-option-basic">
                      <label class="form-check-label custom-option-content" for="customRadioTemp3">
                        <input name="is_private" class="form-check-input" type="radio" value="0" id="customRadioTemp5" checked="">
                        <span class="custom-option-header">
                          <span class="h6 mb-0">public</span>
                          <small class="text-muted">public</small>
                        </span>
                        <span class="custom-option-body">
                          <small>Anyone can access</small>
                        </span>
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-check custom-option custom-option-basic checked">
                      <label class="form-check-label custom-option-content" for="customRadioTemp6">
                        <input name="is_private" class="form-check-input" type="radio" value="1" id="customRadioTemp2">
                        <span class="custom-option-header">
                          <span class="h6 mb-0">Private</span>
                          <small class="text-muted">$ </small>
                        </span>
                        <span class="custom-option-body">
                          <small>Only groups users  can access</small>
                        </span>
                      </label>
                    </div>
                  </div>
                </div>
               </div>
            

            <div class="mb-8 ">
               <label for="basic-default-fullname mx-1">{{ucfirst($title)}} Description<span class="text-danger">*</span></label>
               <div id="full-editor" ></div>
               <div class="fv-plugins-message-container fv-plugins-message-container--enabled ">
                  <div data-field="description" data-validator="notEmpty">
                     </div>
                  </div>
            </div>
            <div class="mb-8 float-end">
               <a href="{{route('quiz')}}" class="btn btn-outline-primary waves-effect">Cancel</a>
               <button type="submit" class="btn btn-primary waves-effect waves-light">Submit Quiz </button>
            </div>
           
            
          </form>
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