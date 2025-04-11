@extends('layouts.admin')

@section('css')

<style>
    /* Change background of the checked radio button */
input[type="radio"]:checked + label {
    background-color: #28a745; /* Green background for checked */
    color: white; /* White text */
}

/* Optional: Change background color on hover for unselected radio buttons */
input[type="radio"]:not(:checked) + label:hover {
    background-color: #f8f9fa; /* Light background on hover */
}
    </style>
@endsection

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

         <a href="{{route('quiz.settings',['quiz_id'=>$quiz->id])}}"  class="btn {{ (Request::segment(count(Request::segments())) === 'settings') ? 'btn-primary' : 'btn-outline-secondary' }}
 waves-effect">
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
         <a href="{{route('quiz.questions',['quiz_id'=>$quiz->id])}}" class="btn btn-outline-secondary waves-effect">
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
         <form class="">
            @csrf

            <div class="row">
                <div class="col-sm-6">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <div class="me-2">
                            <h6 class="mb-0">Duration Mode</h6>
                            <small class="mb-0 durlbl"><span class="text-primary">Auto</span> - Duration will be calculated based on questions' default time</small>

                          </div>

                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check duration" value="1" name="auto_duration" id="auto_duration1" checked="">
                            <label class="btn btn-outline-primary btn-sm  waves-effect" for="auto_duration1">Auto</label>

                            <input type="radio" class="btn-check duration" value="0" name="auto_duration" id="auto_duration2">
                            <label class="btn btn-outline-primary btn-sm  waves-effect" for="auto_duration2">Manual</label>


                        </div>

                      </div>

                      <div class="form-floating form-floating-outline mb-6 mx-5" style="display:none" id="manual_duration">
                        <input type="number" name="total_duration" id="form-alignment-username" class="form-control form-control-sm" placeholder="Duration in Minutes">
                        <label for="form-alignment-username">Duration (Minutes)*</label>
                      </div>

                      <div class="card-header d-flex align-items-center justify-content-between">
                        <div class="me-2">
                          <h6 class="mb-0">Marks/Points Mode</h6>
                          <small class="mb-0 mrkmdelbl"><span class="text-primary">Auto</span> -Marks/Points will be calculated based on questions' default marks</small>

                        </div>

                         <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                          <input type="radio" class="btn-check mrkmode" value="1" name="mark_mode" id="mark_mode1" checked="">
                          <label class="btn btn-outline-primary btn-sm  waves-effect" for="mark_mode1">Auto</label>

                          <input type="radio" class="btn-check mrkmode" value="0" name="mark_mode" id="mark_mode2">
                          <label class="btn btn-outline-primary btn-sm  waves-effect" for="mark_mode2">Manual</label>
                        </div>

                     </div>
                     <div class="form-floating form-floating-outline mb-6 mx-5" id="ManualMarks" style="display:none">
                        <input type="text" name="correct_marks" id="form-alignment-username" class="form-control" placeholder="Duration">
                        <label for="form-alignment-username">Marks for Correct Answer*</label>
                      </div>

                      <div class="card-header d-flex align-items-center justify-content-between">

                        <div class="me-2">
                          <h6 class="mb-0">Negative Marking</h6>
                          <small class="mb-0 negmrklbl"><span class="text-primary">Yes</span> -Negative marking will be considered as specified</small>
                        </div>
                       <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                           <input type="radio" name="enable_negative_marking" value="1" class="btn-check negmrking"  id="enblNegMrk1" checked="">
                           <label class="btn btn-outline-primary btn-sm waves-effect" for="enblNegMrk1">Yes</label>

                           <input type="radio" name="enable_negative_marking" value="0" class="btn-check negmrking"  id="enblNegMrk2">
                           <label class="btn btn-outline-primary btn-sm waves-effect" for="enblNegMrk2">No</label>


                       </div>

                     </div>
                      <div class="card-header d-flex align-items-center justify-content-between negmrktyp" id="negmrkTyp" style="display:none;">
                        <div class="me-2">
                          <h6 class="mb-0">Negative Marking Type</h6>
                          <small class="mb-0 negmrkTyplbl"><span class="text-primary">Fixed</span> -Fixed amount will be deduct from question marks</small>
                        </div>
                       <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                           <input type="radio" name="negative_marking_type" value="fixed" class="btn-check nmtradio" name="btnradio" id="btnradio1" >
                           <label class="btn btn-outline-primary btn-sm waves-effect" for="btnradio1">Fixed</label>

                           <input type="radio" name="negative_marking_type" value="percentage" class="btn-check nmtradio" name="btnradio" id="btnradio2">
                           <label class="btn btn-outline-primary btn-sm waves-effect" for="btnradio2">Percentage</label>


                       </div>

                     </div>

                     <div class="form-floating form-floating-outline mb-6 mx-5 d-none" id="negmrkTypInput">
                        <input type="text" name="negative_marks" id="negative_marks" class="form-control" placeholder="Negative Marks*">
                        <label for="form-alignment-username">Negative Marks*</label>
                      </div>

                     <div class="form-floating form-floating-outline mb-6 mx-5">
                        <input type="text" name="cutoff" id="form-alignment-username" class="form-control" placeholder="Pass Percentage*">
                        <label for="form-alignment-username">Pass Percentage<span class="text-danger">*</span></label>
                      </div>


                </div>
                <div class="col-sm-6">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <div class="me-2">
                          <h6 class="mb-0">Shuffle Questions</h6>
                          <small class="mb-0 shqulbl"><span class="text-primary">Yes</span> -Questions will be shuffled for each attempt</small>
                        </div>
                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" name="shuffle_questions" value="1" class="btn-check sqradio"  id="sqradio1" >
                            <label class="btn btn-outline-primary btn-sm waves-effect" for="sqradio1">Yes</label>

                            <input type="radio" name="shuffle_questions" value="0" class="btn-check sqradio"  id="sqradio2">
                            <label class="btn btn-outline-primary btn-sm waves-effect" for="sqradio2">No</label>


                        </div>

                      </div>
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <div class="me-2">
                          <h6 class="mb-0">Restrict Attempts</h6>
                          <small class="mb-0 ralbl"><span class="text-primary">Yes</span> -Attempts will be restricted as specified</small>
                        </div>
                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" name="restrict_attempts" value="1" class="btn-check raradio"  id="raradio1" checked="">
                            <label class="btn btn-outline-primary btn-sm waves-effect" for="raradio1">Yes</label>

                            <input type="radio" name="restrict_attempts" value="0" class="btn-check raradio"  id="raradio2">
                            <label class="btn btn-outline-primary btn-sm waves-effect" for="raradio2">No</label>


                        </div>

                      </div>

                      <div class="form-floating form-floating-outline mb-6 mx-5 " id="no_of_attempts_div">
                        <input type="number" name="no_of_attempts" id="no_of_attempts" class="form-control" placeholder="Number of Attempts*">
                        <label for="form-alignment-username">Number of Attempts*</label>
                      </div>
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <div class="me-2">
                          <h6 class="mb-0">Disable Finish Button</h6>
                          <small class="mb-0 dsbtlbl"><span class="text-primary">Yes</span> -Disable Finish Button</small>
                        </div>
                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" name="disable_finish_button" value="1" class="btn-check dfbradio" id="dfbradio1" checked="">
                            <label class="btn btn-outline-primary btn-sm waves-effect" for="dfbradio1">Yes</label>

                            <input type="radio" name="disable_finish_button" value="0" class="btn-check dfbradio" id="dfbradio2">
                            <label class="btn btn-outline-primary btn-sm waves-effect" for="dfbradio2">No</label>


                        </div>

                      </div>
                    <div class="card-header d-flex align-items-center justify-content-between">

                        <div class="me-2">
                          <h6 class="mb-0">Disable Finish Button</h6>
                          <small class="mb-0 eqlvlbl"><span class="text-primary">Yes</span> -User can be able to see all questions as list</small>
                        </div>
                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" name="list_questions" value="1" class="btn-check eqlvradio"  id="eqlvradio1" checked="">
                            <label class="btn btn-outline-primary btn-sm waves-effect" for="eqlvradio1">Yes</label>

                            <input type="radio" name="list_questions" value="0" class="btn-check eqlvradio"  id="eqlvradio2">
                            <label class="btn btn-outline-primary btn-sm waves-effect" for="eqlvradio2">No</label>


                        </div>

                      </div>
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <div class="me-2">
                          <h6 class="mb-0">Hide Solutions </h6>
                          <small class="mb-0 hisolbl"><span class="text-primary">Yes</span> -Solutions will not be shown in results</small>
                        </div>
                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" name="hide_solutions" value="1" class="btn-check hisoradio"id="hisoradio1" checked="">
                            <label class="btn btn-outline-primary btn-sm waves-effect" for="hisoradio1">Yes</label>

                            <input type="radio" name="hide_solutions" value="0" class="btn-check hisoradio" name="hisoradio2" id="btnradio2">
                            <label class="btn btn-outline-primary btn-sm waves-effect" for="hisoradio2">No</label>


                        </div>

                      </div>
                </div>
            </div>


            <div class="mb-8 float-end">
               <a href="{{route('quiz')}}" class="btn btn-outline-primary waves-effect">Cancel</a>
               <button type="submit" class="btn btn-primary waves-effect waves-light">Update  </button>
            </div>


          </form>
      </div>
      </div>
    </div>


              </div>


<script>
     $('input[type="radio"]').change(function() {
        // Remove the active class from all labels
        $('label').removeClass('active');

        // Add the active class to the label of the checked radio button
        $('input[type="radio"]:checked').next('label').addClass('active');
    });
    </script>
@endsection

@section('js')


<script>

$(document).ready(function() {
    // Submit the form using AJAX
    $('form').on('submit', function(event) {
        event.preventDefault(); // Prevent the default form submission

        // Get the form data
        var formData = new FormData(this);

    // Get the content from the Quill editor
    var quillContent = '';  // quill is the Quill editor instance


// Append the Quill content to the FormData
    formData.append('description', quillContent);
        // Send the data using AJAX
        $.ajax({
            url: "{{ route('quiz.settings.submit',['quiz_id'=>request()->segments()[count(request()->segments()) - 2] ?? '']) }}",  // Your Laravel route for storing quizzes
            method: 'POST',
            data: formData,
            processData: false,  // Don't process the data
            contentType: false,  // Don't set content type
            success: function(response) {
                if (response.success) {
                    createToaster('success', response.message);
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

$('.duration').on('change', function() {
  console.log($(this).val());
    if ($(this).val() === "0") {
      $('#manual_duration').show();
      $('.durlbl').html(`<span class="text-primary">Manual</span> - Duration will be considered as specified`);
    } else {
      $('#manual_duration').hide();
      $('.durlbl').html(`<span class="text-primary">Auto</span> - Duration will be calculated based on questions' default time`);
    }
  });
$('.mrkmode').on('change', function() {
  console.log($(this).val());
    if ($(this).val() === "0") {
      $('#ManualMarks').show();
      $('.mrkmdelbl').html(`<span class="text-primary">Manual</span> -Marks/Points will be assigned to each question as specified`);
    } else {
      $('#ManualMarks').hide();
      $('.mrkmdelbl').html(`<span class="text-primary">Auto</span> -Marks/Points will be calculated based on questions' default marks`);
    }
  });
});
$('.negmrking').on('change', function() {
  console.log($(this).val());
    if ($(this).val() === "1") {
      $('#negmrkTyp').removeClass('d-none');
      $('#negmrkTypInput').removeClass('d-none');
      $('.negmrklbl').html(`<span class="text-primary">Yes</span> -Negative marking will be considered as specified`);
    } else {
      $('#negmrkTyp').addClass('d-none');
      $('#negmrkTypInput').addClass('d-none');
      $('.negmrklbl').html(`<span class="text-primary">NO</span> -No Negative marking`);
    }
  });
$('.nmtradio').on('change', function() {
  console.log($(this).val());
    if ($(this).val() == "fixed") {
      $('#negative_marks').val('0.50');
      $('.negmrkTyplbl').html(`<span class="text-primary">Fixed</span> -Fixed amount will be deduct from question marks`);
    } else {
      $('#negative_marks').val('0.5 %');
      $('.negmrkTyplbl').html(`<span class="text-primary">Percentage</span> -Percentage will be deduct from question marks`);
    }
  });
$('.sqradio').on('change', function() {
  console.log($(this).val());
    if ($(this).val() === "1") {
      $('.shqulbl').html(`<span class="text-primary">Yes</span> -Questions will be shuffled for each attempt`);
    } else {
      $('.shqulbl').html(`<span class="text-primary">No</span> - Questions will not be shuffled`);
    }
  });
$('.raradio').on('change', function() {
  console.log($(this).val());
    if ($(this).val() === "1") {
      $('#no_of_attempts_div').removeClass('d-none');
      $('#no_of_attempts').val('1');
      $('.riatlbl').html(`<span class="text-primary">Yes</span> - Attempts will be restricted as specified`);
    } else {
      $('#no_of_attempts_div').addClass('d-none');
      $('.riatlbl').html(`<span class="text-primary">No</span> - Unlimited attempts`);
    }
  });
$('.dfbradio').on('change', function() {
  console.log($(this).val());
    if ($(this).val() === "1") {

      $('.dsbtlbl').html(`<span class="text-primary">Yes</span> -Test Finish button will be disabled`);
    } else {

      $('.dsbtlbl').html(`<span class="text-primary">No</span> -Test Finish button will be displayed`);
    }
  });
$('.eqlvradio').on('change', function() {

    if ($(this).val() === "1") {

      $('.eqlvlbl').html(`<span class="text-primary">Yes</span> -User can be able to see all questions as list`);
    } else {

      $('.eqlvlbl').html(`<span class="text-primary">No</span> -User cannot be able to see all questions as list`);
    }
  });
$('.hisoradio').on('change', function() {

    if ($(this).val() === "1") {

      $('.hisolbl').html(`<span class="text-primary">Yes</span> -Solutions will not be shown in results`);
    } else {

      $('.hisolbl').html(`<span class="text-primary">No</span> -Solutions will be shown in results`);
    }
  });


// Listen for changes in the Quill editor

</script>

@endsection
