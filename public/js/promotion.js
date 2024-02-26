


// add line button javascript start
const addLineButton = document.getElementById("addLineButton");
const lineContainer = document.getElementById("line-container");

// remove line function
const removeLine = (e) => {
    const lineToRemove = e.target.closest('.line-item');
    if (lineToRemove) {
        lineContainer.removeChild(lineToRemove);
    }
};

// Attach event listener to the delete button in the new line
const deleteBtns = document.querySelectorAll('.promotion-delete-btn');
deleteBtns.forEach((btn) => {
    btn.addEventListener('click', removeLine);
});

// function for creating line
const createALine = () => {
    const lineContent = `
    <div class="col-lg-12 d-flex flex-wrap align-items-center gap-1 my-3 line-item">
    <div class="col-md-2">
        <label for=" validationCustom04" class="form-label d-flex">Type<i
                class="fa-solid fa-circle-question" style="color: #0860f7;"></i></label>
        <select class="form-select" id="validationCustom04" required>
            <option selected disabled value="">Please select...</option>
            <option>...</option>
        </select>
    </div>


    <div class="col-md-2">
        <label for="validationCustom01" class="form-label required">Media title<i
                class="fa-solid fa-circle-question ps-2"
                style="color: #0860f7;"></i></label>
        <input type="text" class="form-control" id="validationCustom01" required>
        <div class="valid-feedback">
            Looks good!
        </div>
    </div>


    <div class="col-md-3">
        <label for="validationCustom01" class="form-label required">Description<i
                class="fa-solid fa-circle-question ps-2"
                style="color: #0860f7;"></i></label>
        <input type="text" class="form-control" id="validationCustom01" required>
        <div class="valid-feedback">
            Looks good!
        </div>
    </div>


    <div class="col-md-3">
        <label for="validationCustom03" class="form-label required">Campaign starting date<i
                class="fa-solid fa-circle-question ps-2"
                style="color: #0860f7;"></i></label>
        <input type="date" class="form-control" id="validationCustom03" required>
    </div>

    <div class="col-md-1 d-flex justify-content-center align-items-center">
        <button class="mt-4 promotion-delete-btn"><i class="fa-solid fa-xmark"></i></button>
    </div>
</div>
    `;

    // Append the new line content to the container
    lineContainer.innerHTML += lineContent;

    // Attach event listener to the delete button in the new line
    const deleteBtns = document.querySelectorAll('.promotion-delete-btn');
    deleteBtns.forEach((btn) => {
        btn.addEventListener('click', removeLine);
    });
};

addLineButton.addEventListener("click", createALine);



// add line button javascript end

// add line button 2 javascript start form here 


// add line button javascript start
const addLineButton2 = document.getElementById("addLineButton2");
const lineContainer2 = document.getElementById("line-container2");

// remove line function
const removeLine2 = (e) => {
    const lineToRemove = e.target.closest('.line-item2');
    if (lineToRemove) {
        lineContainer2.removeChild(lineToRemove);
    }
};

// Attach event listener to the delete button in the new line
const deleteBtns2 = document.querySelectorAll('.promotion-delete-btn2');
deleteBtns2.forEach((btn) => {
    btn.addEventListener('click', removeLine2);
});

// function for creating line
const createALine2 = () => {
    const lineContent2 = `
    <div class="col-lg-12 d-flex flex-wrap align-items-center gap-1 my-3 line-item2">
    <div class="col-md-2">
        <label for=" validationCustom04" class="form-label d-flex">Type<i
                class="fa-solid fa-circle-question" style="color: #0860f7;"></i></label>
        <select class="form-select" id="validationCustom04" required>
            <option selected disabled value="">Please select...</option>
            <option>...</option>
        </select>
    </div>


    <div class="col-md-2">
        <label for="validationCustom01" class="form-label required">Media title<i
                class="fa-solid fa-circle-question ps-2"
                style="color: #0860f7;"></i></label>
        <input type="text" class="form-control" id="validationCustom01" required>
        <div class="valid-feedback">
            Looks good!
        </div>
    </div>


    <div class="col-md-3">
        <label for="validationCustom01" class="form-label required">Description<i
                class="fa-solid fa-circle-question ps-2"
                style="color: #0860f7;"></i></label>
        <input type="text" class="form-control" id="validationCustom01" required>
        <div class="valid-feedback">
            Looks good!
        </div>
    </div>


    <div class="col-md-3">
        <label for="validationCustom03" class="form-label required">Campaign starting date<i
                class="fa-solid fa-circle-question ps-2"
                style="color: #0860f7;"></i></label>
        <input type="date" class="form-control" id="validationCustom03" required>
    </div>

    <div class="col-md-1 d-flex justify-content-center align-items-center">
        <button class="mt-4 promotion-delete-btn2"><i class="fa-solid fa-xmark"></i></button>
    </div>
</div>
    `;

    // Append the new line content to the container
    lineContainer2.innerHTML += lineContent2;

    // Attach event listener to the delete button in the new line
    const deleteBtns = document.querySelectorAll('.promotion-delete-btn2');
    deleteBtns.forEach((btn) => {
        btn.addEventListener('click', removeLine2);
    });
};

addLineButton2.addEventListener("click", createALine2);
// add line button 2 javascript end form here 



// concert item add and remove javascript **************************************************************

// add line button javascript start
const addLineConcertButton = document.getElementById("addLineConcertButton");
const concertLineContainer = document.getElementById("concertLineContainer");

// remove line function
const removeLineConcert = (e) => {
    const lineToRemove = e.target.closest('.concert-item');
    if (lineToRemove) {
        concertLineContainer.removeChild(lineToRemove);
    }
};

// Attach event listener to the delete button in the new line
const concertDeleteBtns = document.querySelectorAll('.concert-delete-btn');
concertDeleteBtns.forEach((btn) => {
    btn.addEventListener('click', removeLineConcert);
});

// function for creating line
const createALineConcert = () => {
    const concertLineContent = `
    <div class="col-lg-12 d-flex flex-wrap align-items-center gap-1 my-3 concert-item">

    <!-- date input  -->
    <div class="col-md-3">
        <label for="validationCustom03" class="form-label required">Date</label>
        <input type="date" class="form-control" id="validationCustom03">
    </div>

    <!-- text input  -->
    <div class="col-md-3">
        <label for="validationCustom01" class="form-label required">Place</label>
        <input type="text" class="form-control" id="validationCustom01">
        <div class="valid-feedback">
            Looks good!
        </div>
    </div>

    <div class="col-md-3">
        <label for=" validationCustom04" class="form-label d-flex">Country/Region</label>
        <select class="form-select" id="validationCustom04">
            <option selected disabled value="">Please select...</option>
            <option>...</option>
        </select>
    </div>

    <div class="col-md-2 d-flex justify-content-center align-items-center">
        <button class="mt-4 concert-delete-btn"><i class="fa-solid fa-xmark"></i></button>
    </div>
</div>
    `;

    // Append the new line content to the container
    concertLineContainer.innerHTML += concertLineContent;

    // Attach event listener to the delete button in the new line
    const concertDeleteBtns = document.querySelectorAll('.concert-delete-btn');
    concertDeleteBtns.forEach((btn) => {
        btn.addEventListener('click', removeLineConcert);
    });
};

addLineConcertButton.addEventListener("click", createALineConcert);
// add line button 2 javascript end form here
// concert item add and remove javascript 

