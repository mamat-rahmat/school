// Contact Form Validation
function validateForm() {
    let isValid = true;
    
    // Reset all error states
    const inputs = document.querySelectorAll('.form-control, .form-select');
    inputs.forEach(input => {
        input.classList.remove('is-invalid');
    });

    // Validate Name
    const name = document.getElementById('name');
    if (!name.value.trim()) {
        showError(name, 'Nama lengkap harus diisi');
        isValid = false;
    } else if (name.value.length < 3) {
        showError(name, 'Nama harus minimal 3 karakter');
        isValid = false;
    }

    // Validate Email
    const email = document.getElementById('email');
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!email.value.trim()) {
        showError(email, 'Email harus diisi');
        isValid = false;
    } else if (!emailRegex.test(email.value)) {
        showError(email, 'Format email tidak valid');
        isValid = false;
    }

    // Validate Subject
    const subject = document.getElementById('subject');
    if (!subject.value.trim()) {
        showError(subject, 'Subjek harus diisi');
        isValid = false;
    } else if (subject.value.length < 3) {
        showError(subject, 'Subjek harus minimal 3 karakter');
        isValid = false;
    }

    // Validate Message
    const message = document.getElementById('message');
    if (!message.value.trim()) {
        showError(message, 'Pesan harus diisi');
        isValid = false;
    } else if (message.value.length < 10) {
        showError(message, 'Pesan minimal 10 karakter');
        isValid = false;
    }

    return isValid;
}

function showError(element, message) {
    element.classList.add('is-invalid');
    const errorDiv = element.nextElementSibling;
    if (errorDiv && errorDiv.classList.contains('invalid-feedback')) {
        errorDiv.textContent = message;
    }
}

// Make functions available globally
window.validateForm = validateForm;
window.showError = showError;