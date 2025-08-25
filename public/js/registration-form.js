document.addEventListener('DOMContentLoaded', function() {
    // Show/hide team information and payment based on category
    const category = document.getElementById('category');
    const participationType = document.getElementById('participationType');
    const teamInfo = document.getElementById('teamInfo');
    const paymentInfo = document.getElementById('paymentInfo');
    const paymentProof = document.getElementById('paymentProof');
    const teamName = document.getElementById('teamName');
    const teamMembers = document.getElementById('teamMembers');
    const paymentFile = document.getElementById('payment');
    
    // Handle category change
    category.addEventListener('change', function() {
        const needsPayment = ['ctf', 'ml-tournament'].includes(this.value);
        const needsTeam = this.value === 'ml-tournament';
        
        // Show/hide payment info
        if (needsPayment) {
            paymentInfo.style.display = 'block';
            paymentProof.style.display = 'block';
            paymentFile.required = true;
        } else {
            paymentInfo.style.display = 'none';
            paymentProof.style.display = 'none';
            paymentFile.required = false;
        }
        
        // Handle team requirements
        if (needsTeam) {
            participationType.value = 'team';
            participationType.disabled = true;
            teamInfo.style.display = 'block';
            teamName.required = true;
            teamMembers.required = true;
        } else {
            participationType.disabled = false;
            if (participationType.value !== 'team') {
                teamInfo.style.display = 'none';
                teamName.required = false;
                teamMembers.required = false;
            }
        }
    });
    
    // Show/hide team information based on participation type
    participationType.addEventListener('change', function() {
        if (this.value === 'team') {
            teamInfo.style.display = 'block';
            teamName.required = true;
            teamMembers.required = true;
        } else {
            teamInfo.style.display = 'none';
            teamName.required = false;
            teamMembers.required = false;
        }
    });
    
    // Form submission
    document.getElementById('registrationForm').addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Show loading state
        const submitBtn = this.querySelector('button[type="submit"]');
        const originalText = submitBtn.innerHTML;
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i> Memproses...';
        submitBtn.disabled = true;
        
        // Submit form with FormData
        const formData = new FormData(this);
        
        fetch(this.action, {
            method: 'POST',
            body: formData,
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert(data.message);
                this.reset();
            } else {
                alert('Terjadi kesalahan. Silakan coba lagi.');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Terjadi kesalahan. Silakan coba lagi.');
        })
        .finally(() => {
            submitBtn.innerHTML = originalText;
            submitBtn.disabled = false;
        });
    });
    
    // File size validation
    const fileInputs = document.querySelectorAll('input[type="file"]');
    fileInputs.forEach(input => {
        input.addEventListener('change', function() {
            const file = this.files[0];
            if (file && file.size > 2 * 1024 * 1024) { // 2MB
                alert('Ukuran file terlalu besar. Maksimal 2MB.');
                this.value = '';
            }
        });
    });
});