// js for delete model 

const showOkButton = () => {
    const checkBox = document.getElementById('checkBox');
    let delModelOkBtn = document.getElementById('del-model-ok-btn');
    if (checkBox.checked) {
        delModelOkBtn.style.display = 'block';
    } else {
        delModelOkBtn.style.display = 'none'
    }
}