let active = false;

function toggleForm() {
  active = !active;
  document.getElementById("forms").style.transform = active
    ? "translateX(-50%)"
    : "translateX(0%)";
}
