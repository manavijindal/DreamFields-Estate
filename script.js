function validateForm(event) {

    event.preventDefault();

    let form = document.getElementById('feedback');
    let firstname = document.getElementById('first_name').value;
    let lastname= document.getElementById('last_name').value;
    let feedback = document.getElementById('feedback').value;


    if (firstname === "" || lastname === "" || feedback === "") {
        alert("Please fill out all fields. First name, Last name and the Feedback should be filled.");
    } else {
        form.submit();
    }
}