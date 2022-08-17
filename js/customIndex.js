const searcInput = document.querySelector("[data-search]");

searcInput.addEventListener("input", (e) => {
  const value = e.target.value;
  console.log(value);
});
