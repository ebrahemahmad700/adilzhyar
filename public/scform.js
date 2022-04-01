const phoneNumber = document.getElementById("ph_num");

const btn = document.getElementById("sendUs");

btn.addEventListener("click", (e) => {
  e.preventDefault();
  const phone = phoneNumber.value;
  console.log(phone);

  if (isNaN(phone)) {
    alert("Your phone number is not valid");
  } else {
    alert("Your Submited");
  }
});
