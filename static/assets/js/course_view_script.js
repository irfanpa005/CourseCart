$(document).ready(function() {
    $('.courseDescBtn').on('click', function() {
        var courseDescription = $(this).data('course-description');
        console.log("hellooo")
        $('#courseDescriptionContent').text(courseDescription);
      });




      //delete

      var courseIdToDelete;

      $('#modaldemo5').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        courseIdToDelete = button.data('course-id');
      });
    
      // Handle the "Yes" button click in the modal
      $('#modaldemo5').on('click', '.btn-success', function() {
        // Perform the deletion action using AJAX or other methods
        // For example, you can make an AJAX request to delete the course
    
        // Assuming you have an AJAX endpoint for deleting a course
        $.ajax({
          type: 'POST',
          url: '/delete_course/' + courseIdToDelete, // Replace with the actual URL
          success: function(response) {
            if (response.success) {
              // Course was successfully deleted, you can remove it from the UI
              // The specific method depends on your UI structure
              // For example, you can fade out the table row containing the course
              $('#courseRow-' + courseIdToDelete).fadeOut();
            }
          },
          error: function(error) {
            console.log(error);
          }
        });
        
        // Close the modal
        $('#modaldemo5').modal('hide');
      });

});

