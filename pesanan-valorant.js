document.addEventListener("DOMContentLoaded", () => {
  const nominalButtons = document.querySelectorAll(".nominal-btn");

  nominalButtons.forEach((button) => {
    button.addEventListener("click", () => {
      nominalButtons.forEach((btn) => btn.classList.remove("selected"));
      button.classList.add("selected");
    });
  });
});
