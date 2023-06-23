document.getElementById("booking-form").addEventListener("submit", function(event) {
    event.preventDefault();
    // Get the form values
    var name = document.getElementById("name").value;
    // Retrieve other form values

    // Perform validation and processing
    // You can use AJAX to send the form data to a backend server for further processing, or handle it locally within JavaScript

    // Display confirmation or error messages
    // Redirect to a confirmation page or display a modal with the booking details

    // Clear the form inputs
    document.getElementById("booking-form").reset();
});
