@extends('layouts.admin')

@section('content')

  <style>
      .editor-container {
          margin-bottom: 20px;
      }
      .ql-editor {
        height: 100%;        /* Full height inside container */
        overflow-y: auto;    /* Scroll when needed */    /* Enable scrolling if content exceeds height */
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
                    <h5 class="card-title mb-0">{{ $title }}</h5>
                    <small class="text-muted"> {{$subtitle}}</small>
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
            <div id="form-container" >
              <!-- Question editor -->
              <div class="editor-container p-5" id="question-container"  >
                  <label for="question">Question:</label>
                  <div id="question-editor"></div>
              </div>

              <!-- Options container -->
              <div class="editor-container p-5" id="options-container">
                  <label for="options">Options:</label>
                  <!-- Default Option Editors -->

              </div>

              <button type="button" class="btn btn-outline-success waves-effect" id="add-more-btn"><i class="ri-plus-line"></i>Add More Options</button>
          </div>

          <div class="mb-8 float-end">
            <a href="{{ route('question') }}" class="btn btn-outline-primary waves-effect">Cancel</a>
            <button type="submit" class="btn btn-primary waves-effect waves-light" id="submit-btn">Submit {{$title}}</button>
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

//      let optionEditorCount = 0;
// const optionEditors = [];

// const addOptionEditor = () => {
//   const optionEditorId = `option-editor-${optionEditorCount + 1}`;
//   const radioId = `radio-${optionEditorCount + 1}`;

//   const optionEditorContainer = document.createElement('div');
//   optionEditorContainer.classList.add('editor-container');
//   optionEditorContainer.innerHTML = `
//     <label>Option ${optionEditorCount + 1}:</label>
//     <input type="radio" name="is_answer" value="${optionEditorCount}" id="${radioId}" style="margin-right: 10px;">
//     <label for="${radioId}">Correct Answer</label>
//     <div id="${optionEditorId}" class="quill-editor"></div>
//   `;

//   document.getElementById('options-container').appendChild(optionEditorContainer);

//   const optionEditor = new Quill(`#${optionEditorId}`, {
//     theme: 'snow',
//     placeholder: `Enter Option ${optionEditorCount + 1} here...`,
//     modules: {
//       formula: true,
//       toolbar: fullToolbar
//     },
//   });

//   optionEditors.push(optionEditor);
//   optionEditorCount++;
// };


//      // Call this function to initialize the default editors
//      const initializeDefaultOptionEditors = () => {
//          // Initialize the first two option editors only
//          addOptionEditor();
//          addOptionEditor();
//      };

//      // Call this function to initialize the default editors
//      initializeDefaultOptionEditors();

//      // Attach event listener to the "Add More" button
//      document.getElementById('add-more-btn').addEventListener('click', addOptionEditor);

//      // Collect data when the form is submitted
//

let optionEditorCount = 0;
const optionEditors = [];
const maxOptions = 6;

const addOptionEditor = () => {
  if (optionEditorCount >= maxOptions) {
    alert(`Maximum ${maxOptions} options allowed.`);
    return;
  }

  const index = optionEditorCount;
  const optionEditorId = `option-editor-${index}`;
  const radioId = `radio-${index}`;
  const containerId = `option-container-${index}`;

  const optionEditorContainer = document.createElement('div');
optionEditorContainer.classList.add('card', 'mb-3', 'p-3');
optionEditorContainer.id = containerId;

optionEditorContainer.innerHTML = `
  <div class="row mb-2 align-items-center">
    <div class="col-12 col-md-8 mb-2 mb-md-0">
      <label class="form-label mb-1">Option ${index + 1}</label>
      <div class="form-check d-inline-block ms-2">
        <input type="radio" name="is_answer" value="${index}" id="${radioId}" class="form-check-input">
        <label for="${radioId}" class="form-check-label">Correct Answer</label>
      </div>
    </div>
    <div class="col-12 col-md-4 text-md-end">
      <button type="button" class="btn btn-sm btn-danger waves-effect" onclick="removeOption(${index})">Remove</button>
    </div>
  </div>
  <div id="${optionEditorId}" class="quill-editor"></div>
`;


  document.getElementById('options-container').appendChild(optionEditorContainer);

  const optionEditor = new Quill(`#${optionEditorId}`, {
    theme: 'snow',
    placeholder: `Enter Option ${index + 1} here...`,
    modules: {
      formula: true,
      toolbar: fullToolbar
    },
  });

  optionEditors[index] = optionEditor; // Use index directly
  optionEditorCount++;
};
const removeOption = (index) => {
  const container = document.getElementById(`option-container-${index}`);
  if (container) container.remove();

  optionEditors[index] = null; // Remove the editor reference
  optionEditorCount--;
};

const getOptionsData = () => {
  const data = optionEditors
    .map((editor, i) => {
      if (!editor) return null;
      return {
        content: editor.root.innerHTML,
        isAnswer: document.querySelector(`input[name="is_answer"][value="${i}"]`)?.checked || false
      };
    })
    .filter(Boolean); // remove nulls

  console.log(data);
  return data;
};
document.getElementById('add-more-btn').addEventListener('click', addOptionEditor);



document.getElementById('quiz-form').addEventListener('submit', (event) => {
 event.preventDefault();  // Prevent form from submitting the traditional way
 let valid = true;
  let selectedAnswer = document.querySelector('input[name="is_answer"]:checked');
  if (!selectedAnswer) {
   createToaster('error', 'Please select a correct answer.');
    valid = false;
  }

  optionEditors.forEach((item, i) => {
  if (!item ) return; // Skip removed or invalid items

  const html = item.getContents();
  const text = item.getText();
  console.log(text.length, text);

    if (html === '<p><br></p>' || html === '<p></p>') {
        createToaster('error', `Option ${i + 1} cannot be empty.`);
        valid = false;
    }
    if (text === '' || text.length === 1) {
        createToaster('error', `Option ${i + 1} cannot be empty.`);
        valid = false;
    }



  const hiddenInput = document.getElementById(item.hiddenInputId);
  if (hiddenInput) {
    hiddenInput.value = html;
  }
});

  if (valid) {
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



 // Collect the form data in an object
 const formData = {
     question: questionHtml,
     options: getOptionsData(),
 };

 // Send data to your backend (Example with Fetch)
 fetch('/question/submit', {
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
        createToaster('success', 'Quiz submitted successfully.');
        window.location.href = data.redirect_url;
 })
 .catch(error => {
     console.error('Error submitting quiz:', error);
 });
}
    });
 </script>

@endsection
