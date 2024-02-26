const singleReportCard = document.getElementById('single-report-card');
const multipleReportCard = document.getElementById('multiple-report-card');

const displayReportCard1 = () => {
    multipleReportCard.style.display = 'none';
    if (singleReportCard.style.display === 'none') {
        singleReportCard.style.display = 'block';
    } else {
        singleReportCard.style.display = 'none';
    }
}

const displayReportCard2 = () => {
    singleReportCard.style.display = 'none';
    if (multipleReportCard.style.display === 'none') {
        multipleReportCard.style.display = 'block';
    } else {
        multipleReportCard.style.display = 'none';
    }
}


// document.addEventListener('DOMContentLoaded', function () {
//     var radioOptions = document.querySelectorAll('.radio-btn');

//     function handleVisibility(event) {
//         var targetId = event.target.getAttribute('data-target');
//         var targetElement = document.getElementById(targetId);

//         // Hide all elements
//         document.querySelectorAll('.hidden').forEach(function (element) {
//             element.classList.add('hidden');
//         });

//         // Show the selected element
//         targetElement.classList.remove('hidden');
//     }

//     // Add event listeners to all radio buttons
//     radioOptions.forEach(function (radio) {
//         radio.addEventListener('change', handleVisibility);
//     });
// });




