// Retrieve the selected training name and location when the user clicks the enquiry button
$('#enquiry-btn').click(function() {
    var selectedTraining = $('#training-dropdown option:selected');
    var trainingName = selectedTraining.val();
    var trainingLocation = selectedTraining.data('location');

    // Autofill the training name and location fields in the request form
    $('#training-name-field').val(trainingName);
    $('#training-location-field').val(trainingLocation);
});
