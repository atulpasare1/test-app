function createToast(type, msg) {
    // Define the available toast types
    let toastTypeClass = '';
    switch(type) {
        case 'success':
            toastTypeClass = 'text-success';
            break;
        case 'error':
            toastTypeClass = 'text-danger';
            break;
        case 'info':
            toastTypeClass = 'text-info';
            break;
        case 'warning':
            toastTypeClass = 'text-warning';
            break;
        case 'primary':
            toastTypeClass = 'text-primary';
            break;
        case 'secondary':
            toastTypeClass = 'text-secondary';
            break;
        default:
            toastTypeClass = 'text-dark'; // Default to dark toast if no type provided
    }

    // Create the toast element
    let toastElement = `
        <div class="toast ${toastTypeClass} text-white" role="alert" aria-live="assertive" aria-atomic="true" style="max-width: 300px;">
            <div class="toast-header">
                <strong class="mr-auto">${capitalizeFirstLetter(type)} Notification</strong>
                <small class="text-muted">just now</small>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body">
                ${msg}
            </div>
        </div>
    `;

    // Append the toast element to the container
    $('#toast-container').append(toastElement);

    // Initialize and show the toast
    let toast = $('#toast-container .toast').last(); // Get the last toast element
    toast.toast({ delay: 3000 });  // Show the toast for 3 seconds
    toast.toast('show');

    // Optional: Remove the toast from the DOM after it's hidden
    toast.on('hidden.bs.toast', function () {
        $(this).remove();
    });
}

// Helper function to capitalize the first letter
function capitalizeFirstLetter(string) {
    return string.charAt(0).toUpperCase() + string.slice(1);
}


function createToaster(type, msg) {
    let backgroundColor = '';
    let icon = '';

    // Define the background color and icon based on the type
    switch(type) {
        case 'success':
            backgroundColor = 'green';
            icon = '✔️';
            break;
        case 'error':
            backgroundColor = 'red';
            icon = '❌';
            break;
        case 'info':
            backgroundColor = 'blue';
            icon = 'ℹ️';
            break;
        case 'warning':
            backgroundColor = 'orange';
            icon = '⚠️';
            break;
        default:
            backgroundColor = 'gray';
            icon = '🔔';
    }

    // Create and show the toast using Toaster.js
    Toastify({
        text: `${icon} ${msg}`,  // Show message with icon
        backgroundColor: backgroundColor,  // Set background color
        duration: 3000,  // Duration in milliseconds (3 seconds)
        close: true,  // Show close button
        gravity: "top",  // Position the toast at the top
        position: "right",  // Position it to the right of the screen
        stopOnFocus: true  // Prevent toast from disappearing if user interacts with it
    }).showToast();
}