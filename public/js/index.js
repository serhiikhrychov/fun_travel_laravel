
const submitButton = document.querySelector('.search-button');
const destinationField = document.querySelector('#where-to-go');
const startDateField = document.getElementById('start');


submitButton.addEventListener('click', goToTourPage);



function goToTourPage() {
    if (destinationField.value === 'thai' || destinationField.value === 'turkey' || destinationField.value === 'indonesia' ) {
        window.location.href = "/tours.html";
    } else if (startDateField.value !== '') {
        window.location.href = "/tours.html";
    } else {
        alert('Please fill the destination or start date');
}

}
