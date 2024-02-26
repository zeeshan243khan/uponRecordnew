const ftpImportBtn = document.getElementById("ftp-import");
const ftpUploadBtn = document.getElementById("ftp-upload");
let ftpImportSection = document.querySelector(".ftp-import-section");
let ftpUploadSection = document.querySelector(".ftp-upload-section");

ftpImportBtn.addEventListener("click", () => {
    ftpImportSection.style.display = "block";
    ftpUploadSection.style.display = "none";
});

ftpUploadBtn.addEventListener("click", () => {
    ftpUploadSection.style.display = "block";
    ftpImportSection.style.display = "none";
});

function scrollToSection(sectionId) {
    var section = document.getElementById(sectionId);
    if (section) {
        section.scrollIntoView({
            behavior: 'smooth'
        });
    }
}
