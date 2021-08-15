const searchbarInput = document.getElementById("searchbar");

searchbarInput.addEventListener("keydown", (event) => {
  if (event.keyCode === 13) {
    if (searchbarInput.value === "") {
      event.preventDefault();
    } else {
      window.location.replace(`https://www.google.com/search?q=${searchbarInput.value}`);
    }
  }
});
