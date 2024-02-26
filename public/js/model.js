// const btn = document.getElementById('btn');
// const bigModel = document.getElementById('big_box');


// // model btn
// const modelCloseBtn = document.getElementsByClassName('btn-close');
// let  cancelBtn = document.getElementById('cancelBtn');
// let  nextBtn = document.getElementById('nextBtn');
// let  backBtn = document.getElementById('backBtn');
// let second_model = ``

// btn.addEventListener('click', () => {
//     bigModel.style.display = 'block';
// });

// modelCloseBtn.addEventListener('click', () => {
//     bigModel.style.display = 'none';
// });

// // -----------------------------
// const models = document.querySelectorAll('.model');
// let currentIndex = 0;

// function showModel(index) {
//   models.forEach((model, i) => {
//     model.style.display = i === index ? 'block' : 'none';
//   });
// }

// function showNextModel() {
//   currentIndex = (currentIndex + 1) % models.length;
//   showModel(currentIndex);
// }

// function showPrevModel() {
//   currentIndex = (currentIndex - 1 + models.length) % models.length;
//   showModel(currentIndex);
// }

// document.getElementById('nextButton').addEventListener('click', showNextModel);
// document.getElementById('prevButton').addEventListener('click', showPrevModel);

// // Show the initial model
// showModel(currentIndex);