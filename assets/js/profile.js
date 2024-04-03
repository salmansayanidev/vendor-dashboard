let noimage = "./assets/images/blank-pro-img.png";

function readURL(input) {
  console.log(input.files);
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $("#img-preview").attr("src", e.target.result);
    };

    reader.readAsDataURL(input.files[0]);
  } else {
    $("#img-preview").attr("src", noimage);
  }
}



// ---------------------


const saveCancelBtn = document.querySelector('.save-cancel-area')
const editProfileBtn = document.querySelector('.edit-profile-btn')
const cancelProfileBtn = document.querySelector('.cancle-profile-btn')
const profileInputs = document.querySelectorAll('.input-area input')


editProfileBtn.addEventListener('click' , () => {
    saveCancelBtn.classList.add("active")
    editProfileBtn.removeAttribute("enabled", "");
    editProfileBtn.setAttribute("disabled", "");
    profileInputs.forEach((profileInput) => {
        profileInput.removeAttribute('readonly' , "")
    })
})

cancelProfileBtn.addEventListener('click' , () => {
    saveCancelBtn.classList.remove("active")
    editProfileBtn.removeAttribute("disabled", "");
    editProfileBtn.setAttribute("enabled", "");
    profileInputs.forEach((profileInput) => {
        profileInput.setAttribute('readonly' , "")
    })
})

