const page1 = document.getElementById("page-1");
const page2 = document.getElementById("page-2");
const page3 = document.getElementById("page-3");
const nextBtnPage1 = document.querySelectorAll(".nextBtn-page-1");




nextBtnPage1.forEach((btn) => {
    btn.addEventListener('click', () => {
        if (page1.style.display === 'block') {
            page1.style.display = 'none';
            page2.style.display = 'block';
        } else if (page2.style.display === 'block') {
            page2.style.display = 'none';
            page3.style.display = 'block';
        } else if (page3.style.display === 'block') {
            page3.style.display = 'none';
            window.location.href = 'realease_information.html';
        }
    });
});


// cover model javascript 
const coverUploadBtn = document.getElementById("cover-upload-btn");
const previousbBtn = document.getElementById("previous-btn");
const coverPage1 = document.getElementById("cover-page-1");
const coverPage2 = document.getElementById("cover-page-2");

coverUploadBtn.addEventListener('click', () => {
    if (coverPage1.style.display === 'block') {
        coverPage1.style.display = 'none';
        coverPage2.style.display = 'block';
    }
})

previousbBtn.addEventListener('click', () => {
    if (coverPage2.style.display === 'block') {
        coverPage2.style.display = 'none';
        coverPage1.style.display = 'block';
    }
})
// cover model javascript 


