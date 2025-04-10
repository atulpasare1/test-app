@extends('layouts.admin')

@section('content')

  <style>
      .editor-container {
          margin-bottom: 20px;
      }

      /* Smaller height for option editors */
      .option-editor .ql-container {
          height: 120px;  /* Set a smaller height for options */
      }

      .add-more-btn {
          margin-top: 20px;
          padding: 10px 20px;
          background-color: #4CAF50;
          color: white;
          border: none;
          cursor: pointer;
      }

      .add-more-btn:hover {
          background-color: #45a049;
      }
      .option-editor .ql-container {
    height: 120px;  /* Set a smaller height for options */
}
  </style>

  <div class="container-xxl flex-grow-1 container-p-y">
     <div class="row g-6 mb-8 justify-content-end">
      <div class="col-sm-4 d-grid ">
        <div class="card-header border-bottom">
            <div class="d-flex justify-content-between">
                <div class="me-1">
                    <h5 class="card-title mb-0">Create Quiz</h5>
                    <small class="text-muted"> You can manage Quiz From here</small>
                </div>
            </div>
        </div>
      </div>
      <div class="col-sm-2 d-grid">
        <a  class="btn {{ (Request::segment(count(Request::segments())) === 'create') ? 'btn-primary' : 'btn-label-secondary' }} waves-effect">
            <div class="d-flex justify-content-start align-items-center ">
                <div class="avatar-wrapper text-white">
                   <div class="avatar avatar-sm me-0 mt-2 ">
                    <i class=" ri-sun-line"></i>
                   </div>
                </div>
                <div class="d-flex flex-column text-white">
                    <span>Details</span>
                    
                </div>
             </div>
         
        </a>
        </div>
      <div class="col-sm-2 d-grid">

         <a  class="btn btn-outline-secondary waves-effect">
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
         <a  class="btn btn-outline-secondary waves-effect">
            <div class="d-flex justify-content-start align-items-center user-name">
                <div class="avatar-wrapper">
                   <div class="avatar avatar-sm me-0 mt-2">
                    <i class=" ri-sun-line"></i>
                   </div>
                </div>
                <div class="d-flex flex-column">
                    <span>Solution</span>
                    
                </div>
             </div>
         
        </a>
      </div>
      <div class="col-sm-2 d-grid">
         <a  class="btn btn-outline-secondary waves-effect">
            <div class="d-flex justify-content-start align-items-center user-name">
                <div class="avatar-wrapper">
                   <div class="avatar avatar-sm me-0 mt-2">
                    <i class=" ri-sun-line"></i>
                   </div>
                </div>
                <div class="d-flex flex-column">
                    <span>Attachment</span>
                    
                </div>
             </div>
         
        </a>
      
      <!-- Additional controls omitted for brevity -->

    </div>

    <div class="card card-action mb-8">
      <div class="card-header">
        <h5 class="card-action-title mb-0">{{ ucfirst($title) }} Details</h5>
        {!! GetCardAction() ?? '' !!}
      </div>

      <div class="collapse show">
        <div class="card-body m-5">
          <form id="quiz-form" class="m-5">
            @csrf
            <div id="form-container">
              <!-- Question editor -->
              <div class="editor-container" id="question-container">
                  <label for="question">Question:</label>
                  <div id="question-editor"></div>
              </div>
      
              <!-- Options container -->
              <div class="editor-container container mx-5" id="options-container">
                  <label for="options">Options:</label>
                  <!-- Default Option Editors -->
                
              </div>
      
              <button type="button" class="btn btn-label-primary waves-effect" id="add-more-btn"><i class="ri-plus-line"></i>Add More Options</button>
          </div>

          <div class="mb-8 float-end">
            <a href="{{ route('quiz') }}" class="btn btn-outline-primary waves-effect">Cancel</a>
            <button type="submit" class="btn btn-primary waves-effect waves-light" id="submit-btn">Submit Quiz</button>
          </div>
        </form>
      </div>
    </div>
  </div>

@endsection

@section('js')

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
     // Initialize Quill editor for question
     const questionEditor = new Quill('#question-editor', {
         theme: 'snow',
         placeholder: 'Enter your question here...',
         modules: {
      formula: true,
      toolbar: fullToolbar
    },
     });

     // Initialize first two option editors by default
     let optionEditorCount =0 ;  // Start with two options
     const optionEditors = [];

     // Function to create a new option editor
     const addOptionEditor = () => {
         const optionEditorId = `option-editor-${optionEditorCount + 1}`;
         const optionEditorContainer = document.createElement('div');
         optionEditorContainer.classList.add('editor-container');
         optionEditorContainer.innerHTML = `<label for="options">Option ${optionEditorCount + 1}:</label><div id="${optionEditorId}"></div>`;
         document.getElementById('options-container').appendChild(optionEditorContainer);

         const optionEditor = new Quill(`#${optionEditorId}`, {
             theme: 'snow',
             placeholder: `Enter Option ${optionEditorCount + 1} here...`,
             modules: {
      formula: true,
      toolbar: fullToolbar
    },
         });

         optionEditors.push(optionEditor);
         optionEditorCount++;
     };

     // Call this function to initialize the default editors
     const initializeDefaultOptionEditors = () => {
         // Initialize the first two option editors only
         addOptionEditor();
         addOptionEditor();
     };

     // Call this function to initialize the default editors
     initializeDefaultOptionEditors();

     // Attach event listener to the "Add More" button
     document.getElementById('add-more-btn').addEventListener('click', addOptionEditor);

     // Collect data when the form is submitted
     document.getElementById('quiz-form').addEventListener('submit', (event) => {
         event.preventDefault();  // Prevent form from submitting the traditional way

         const questionData = questionEditor.getContents();  // Get question data (in Delta format)
         const optionsData = optionEditors.map(editor => editor.getContents());  // Get each option data

         // Convert the Delta format to HTML if needed
         const questionHtml = questionEditor.root.innerHTML;
         const optionsHtml = optionsData.map(data => {
             const tempDiv = document.createElement('div');
             const quill = new Quill(tempDiv);
             quill.setContents(data);
             return tempDiv.innerHTML;  // Get HTML content from Quill
         });

         // Example: Log the data
         console.log('Question:', questionHtml);
         console.log('Options:', optionsHtml);

         // Collect the form data in an object
         const formData = {
             question: questionHtml,
             options: optionsHtml
         };

         // Send data to your backend (Example with Fetch)
         fetch('/submit-quiz-endpoint', {
             method: 'POST',
             headers: {
                 'Content-Type': 'application/json',
                 'X-CSRF-TOKEN': '{{ csrf_token() }}'  // Include CSRF token
             },
             body: JSON.stringify(formData)
         })
         .then(response => response.json())
         .then(data => {
             // Handle the response
             console.log('Quiz submitted successfully:', data);
         })
         .catch(error => {
             console.error('Error submitting quiz:', error);
         });
     });
 </script>

@endsection
