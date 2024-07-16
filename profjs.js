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
    let usern = document.getElementById('usern');

    email.innerHTML = `<input type="email" id="email-input" value="${email.innerText}" class="form-control">`;
    phone.innerHTML = `<input type="text" id="phone-input" value="${phone.innerText}" class="form-control">`;
    usern.innerHTML = `<input type="text" id="usern-input" value="${usern.innerText}" class="form-control">`;
}

function saveProfile() {
    let emailInput = document.getElementById('email-input').value;
    let phoneInput = document.getElementById('phone-input').value;
    let usernInput = document.getElementById('usern-input').value;

    // Update the displayed values
    document.getElementById('email').innerText = emailInput;
    document.getElementById('phone').innerText = phoneInput;
    document.getElementById('usern').innerText = usernInput;

    // AJAX request to update username in the database
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'update_username.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.onload = function() {
        if (xhr.status == 200) {
            console.log(xhr.responseText); 
        }else {
            console.error('Error updating profile: ' + xhr.status);
        }
    };
    var params = 'newUsername=' + encodeURIComponent(usernInput) + 
    '&newemail=' + encodeURIComponent(emailInput) + 
    '&newphone=' + encodeURIComponent(phoneInput);

    xhr.send(params);
}
