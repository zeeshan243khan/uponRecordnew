// model toggle js 

function toggleModal() {
    const modalContainer = document.getElementById('modal-container');
    const body = document.body;

    if (modalContainer.style.display === 'flex') {
        modalContainer.style.display = 'none';
        body.style.overflow = 'visible';
    } else {
        modalContainer.style.display = 'flex';
        body.style.overflow = 'hidden';
    }
}

// model page js 
const cancelButton = document.getElementById('model-cancel-button');
const saveAndContinueButton = document.getElementById('save-continue-button');
const firstPage = document.getElementById('first-page');
const secondPage = document.getElementById('second-page');
const thirdPage = document.getElementById('third-page');
const fourthPage = document.getElementById('fourth-page');
const linkPage = document.getElementById('link-page');

const pageSlider = () => {
    if (firstPage.style.display === 'block') {
        firstPage.style.display = 'none';
        secondPage.style.display = 'block';
    } else if (secondPage.style.display === 'block') {
        secondPage.style.display = 'none';
        thirdPage.style.display = 'block';
    } else if (thirdPage.style.display === 'block') {
        thirdPage.style.display = 'none';
        fourthPage.style.display = 'block';
    } else if (fourthPage.style.display === 'block') {
        fourthPage.style.display = 'none';
        linkPage.style.display = 'block';
    }
}

saveAndContinueButton.addEventListener('click', () => {
    pageSlider();
});