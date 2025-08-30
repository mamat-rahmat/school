// Contact Form Validation
function validateForm() {
    let isValid = true;
    
    // Reset all error states
    const inputs = document.querySelectorAll('.form-control, .form-select');
    inputs.forEach(input => {
        input.classList.remove('is-invalid');
    });

    // Validate Name
    const nama = document.getElementById('nama');
    if (!nama.value.trim()) {
        showError(nama, 'Nama lengkap harus diisi');
        isValid = false;
    } else if (nama.value.length < 3) {
        showError(nama, 'Nama harus minimal 3 karakter');
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

    // Validate Phone (if filled)
    const telepon = document.getElementById('telepon');
    if (telepon.value.trim()) {
        const phoneRegex = /^[0-9]{10,13}$/;
        if (!phoneRegex.test(telepon.value)) {
            showError(telepon, 'Nomor telepon harus 10-13 digit angka');
            isValid = false;
        }
    }

    // Validate Subject
    const subjek = document.getElementById('subjek');
    if (!subjek.value) {
        showError(subjek, 'Silakan pilih subjek');
        isValid = false;
    }

    // Validate Message
    const pesan = document.getElementById('pesan');
    if (!pesan.value.trim()) {
        showError(pesan, 'Pesan harus diisi');
        isValid = false;
    } else if (pesan.value.length < 10) {
        showError(pesan, 'Pesan minimal 10 karakter');
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