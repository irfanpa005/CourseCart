$(document).ready(function() {
    $('#courseCreateForm').on('submit', function(event) {
        event.preventDefault();
        console.log('sample');

        var formData = new FormData();

        var titleInput = $('#titleInput').val();
        var subTitleInput = $('#subTitleInput').val();
        var description = $('#description').val();
        var amount = $('#amount').val();
        var status = $('#status').val();
        var imageInput = $('#courseImage')[0].files[0];

        formData.append('title', titleInput);
        formData.append('subtitle', subTitleInput);
        formData.append('description', description);
        formData.append('amount', amount);
        formData.append('status', status);
        formData.append('image', imageInput);

        console.log(formData);

        // Send an AJAX request to your Django view
        $.ajax({
            type: 'POST', 
            url: '/create_course/', 
            data: formData,
            contentType: false, // Set to false to prevent jQuery from processing the data
            processData: false, // Set to false to prevent jQuery from transforming the data into a query string
            beforeSend: function(xhr, settings) {
                if (!csrfSafeMethod(settings.type) && !this.crossDomain) {
                    xhr.setRequestHeader("X-CSRFToken", getCookie("csrftoken"));
                }
            },
            success: function(response) {
                // Handle the response from the server
                console.log(response);
                
                // Example: Display a success message if the response indicates success
                if (response.success) {
                    window.location.href = '/short_course_view/'; 
                    $('#your-success-message-element').text('Course created successfully.');
                }
            },
            error: function(error) {
                // Handle any errors or validation failures
                console.log(error);

                // Example: Display an error message if the request fails
                // Replace 'your-error-message-element' with the ID or class of your message element
                $('#your-error-message-element').text('Course creation failed. Please try again.');
            }
        });
    });


    // Function to check if a request method is safe (e.g., GET)
function csrfSafeMethod(method) {
    // These HTTP methods do not require CSRF protection
    return /^(GET|HEAD|OPTIONS|TRACE)$/.test(method);
}

// Function to get the value of a cookie by name
function getCookie(name) {
    var cookieValue = null;
    if (document.cookie && document.cookie !== '') {
        var cookies = document.cookie.split(';');
        for (var i = 0; i < cookies.length; i++) {
            var cookie = cookies[i].trim();
            // Does this cookie string begin with the name we want?
            if (cookie.substring(0, name.length + 1) === name + '=') {
                cookieValue = decodeURIComponent(cookie.substring(name.length + 1));
                break;
            }
        }
    }
    return cookieValue;
}



});

