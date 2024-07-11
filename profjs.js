    document.addEventListener('DOMContentLoaded', (event) => {
        document.getElementById('edit-profile-btn').addEventListener('click', function() {
            enableEditing();
            document.getElementById('edit-profile-btn').style.display = 'none';
            document.getElementById('save-profile-btn').style.display = 'inline-block';
        });

        document.getElementById('save-profile-btn').addEventListener('click', function() {
            saveProfile();
            document.getElementById('edit-profile-btn').style.display = 'inline-block';
            document.getElementById('save-profile-btn').style.display = 'none';
        });
    });

    function enableEditing() {
        let email = document.getElementById('email');
        let phone = document.getElementById('phone');
        let address = document.getElementById('address');
        let usern = document.getElementById('usern');

        email.innerHTML = `<input type="email" id="email-input" value="${email.innerText}" class="form-control">`;
        phone.innerHTML = `<input type="text" id="phone-input" value="${phone.innerText}" class="form-control">`;
        address.innerHTML = `<input type="text" id="address-input" value="${address.innerText}" class="form-control">`;
        usern.innerHTML = `<input type="text" id="usern-input" value="${usern.innerText}" class="form-control">`;
    }

    function saveProfile() {
        let emailInput = document.getElementById('email-input').value;
        let phoneInput = document.getElementById('phone-input').value;
        let addressInput = document.getElementById('address-input').value;
        let usernInput = document.getElementById('usern-input').value;

        document.getElementById('email').innerText = emailInput;
        document.getElementById('phone').innerText = phoneInput;
        document.getElementById('address').innerText = addressInput;
        document.getElementById('usern').innerText = usernInput;
    }