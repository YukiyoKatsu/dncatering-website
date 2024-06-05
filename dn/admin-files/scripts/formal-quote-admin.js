

function toggleFeedback(action, id, button) {
    var formData = new FormData();
    formData.append('action', action);
    formData.append('feedback_id', id);

    fetch('php/process-feedback.php', {
        method: 'POST',
        body: formData
    }).then(response => response.json())
    .then(data => {
        console.log(data);
        if (data.success) {
            if (action === 'show') {
                button.style.display = 'none';
                button.nextElementSibling.style.display = 'inline-block';
                localStorage.setItem('buttonState_' + id, 'hide'); // Update state in localStorage
            } else if (action === 'hide') {
                button.style.display = 'none';
                button.previousElementSibling.style.display = 'inline-block';
                localStorage.setItem('buttonState_' + id, 'show'); // Update state in localStorage
            }
        } else {
            alert(data.message);
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
}

function initializeButtons() {
    document.querySelectorAll('.feedback-row').forEach(row => {
        var id = row.dataset.id;
        var state = localStorage.getItem('buttonState_' + id); // Retrieve state from localStorage
        var showButton = row.querySelector('.showButton');
        var hideButton = row.querySelector('.hideButton');

        // Ensure state is correctly fetched and applied
        if (state === 'show') {
            showButton.style.display = 'inline-block';
            hideButton.style.display = 'none';
        } else if (state === 'hide') {
            showButton.style.display = 'none';
            hideButton.style.display = 'inline-block';
        }
    });
}

document.addEventListener('DOMContentLoaded', function() {
    initializeButtons();

    document.querySelectorAll('.showButton').forEach(button => {
        button.addEventListener('click', function() {
            var id = this.dataset.id;
            toggleFeedback('show', id, this);
        });
    });

    document.querySelectorAll('.hideButton').forEach(button => {
        button.addEventListener('click', function() {
            var id = this.dataset.id;
            toggleFeedback('hide', id, this);
        });
    });
});

document.querySelectorAll('.statusSelect').forEach(function(select) {
    select.addEventListener('change', function() {
        this.className = 'statusSelect ' + this.value;
    });
});

// Function to set form values and submit the form
function submitForm(email, inquiry_id) {
    // Set form values
    document.getElementById("send-quote-form").querySelector("[name='email']").value = email;
    document.getElementById("send-quote-form").querySelector("[name='inquiry_id']").value = inquiry_id;

    // Submit the form
    document.getElementById("send-quote-form").submit();
}