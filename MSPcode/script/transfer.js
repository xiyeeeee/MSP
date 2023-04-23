function fillForm() {
  // Get the training name and location from the clicked button's data attributes
  const tName = event.target.dataset.trainingName;
  const tLocation = event.target.dataset.trainingLocation;

  // Fill the form input fields with the training name and location
  document.getElementById("tName").value = tName;
  document.getElementById("tLocation").value = tLocation;
}

// Attach the fillForm function to the enquiry button's click event
document.getElementById("enquiry-btn").addEventListener("click", fillForm);
