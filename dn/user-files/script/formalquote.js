/*Type of Event and Package dropdown*/
/*https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_cascading_dropdown*/
var selectedObject = {
  "Wedding": ["Majesty Wedding Package", "Emerald Wedding Package", "Coral Wedding Package", "Affordable Wedding Package", "Customize"],
  "Adult Party": ["Bronze", "Silver", "Gold", "Customize"],
  "Birthday Party": ["Birthday Party Package 1", "Birthday Party Package 2", "Birthday Party Package 3", "Birthday Party Package 4", "Customize"],
  "Debut": ["Ruby Debut Package", "Turquoise Debut Package", "Amethyst Debut Package", "Affordable Debut Package", "Customize"],
  "Baptism": ["Baptism Package 1", "Baptism Package 2", "Customize"],
  "Others": ["Customize"]
}

var eventType = document.getElementById("eventType");
var packageSelect = document.getElementById("package");
for (var x in selectedObject) {
  eventType.options[eventType.options.length] = new Option(x, x);
}
eventType.onchange = function() {
  packageSelect.length = 1;
  var Z = selectedObject[eventType.value];
  for (var i = 0; i < Z.length; i++) {
      packageSelect.options[packageSelect.options.length] = new Option(Z[i], Z[i]);
  }
}

// Function to get URL parameters
function getUrlParameter(name) {
  name = name.replace(/[[]/, '\\[').replace(/[\]]/, '\\]');
  var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
  var results = regex.exec(location.search);
  return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
};

// Get parameters from URL
var eventIndex = getUrlParameter('eventIndex');
var packageIndex = getUrlParameter('packageIndex');

// Call selectEvent function with parameters
selectEvent(eventIndex, packageIndex);

// Function to select event type and package
function selectEvent(eventIndex, packageIndex) {
  if(eventIndex === '' || packageIndex === '') {
      return;
  }
  else{
      var eventTypeValue = Object.keys(selectedObject)[eventIndex];
      eventType.value = eventTypeValue;
      // Trigger onchange event to populate package dropdown based on selected event type
      eventType.onchange();
      // Select the package based on the event type and package index
      packageSelect.value = selectedObject[eventTypeValue][packageIndex];
  }
}

// Prevent Form Submit On Page Refresh
if(window.history.replaceState){
  window.history.replaceState(null,null,window.location.href)
}

function submitForm(event) {
  var recaptchaResponse = document.getElementById("g-recaptcha-response").value;
  if (recaptchaResponse != "") {
      document.getElementById("feedbackForm").submit();
  } else {
      alert('Please verify that you are not a robot.');
      event.preventDefault(event);
  }
}

// no access to prev dates and 2 years advance
document.addEventListener('DOMContentLoaded', function () {
  var today = new Date(); // Get today's date
  var minDate;
  
  // Function to set the date limits
  function setDateLimits() {
    if (eventType.value === "Wedding") {
      minDate = new Date(today.getTime() + 90 * 24 * 60 * 60 * 1000); // 90 days from today for weddings
    } else {
      minDate = new Date(today.getTime() + 30 * 24 * 60 * 60 * 1000); // 30 days from today for other events
    }
    var minDateString = minDate.toISOString().split('T')[0]; // Get the string representation of the min date

    var maxDate = new Date(); // Create a new Date object
    maxDate.setFullYear(maxDate.getFullYear() + 2); // Add two years to the current year
    var maxDateString = maxDate.toISOString().split('T')[0]; // Get the string representation of the max date

    // Set the minimum and maximum date attributes for the date input
    document.getElementById("date").setAttribute("min", minDateString);
    document.getElementById("date").setAttribute("max", maxDateString);
  }

  // Initial setting of date limits
  setDateLimits();

  // Update date limits whenever the event type changes
  eventType.addEventListener('change', setDateLimits);
});
