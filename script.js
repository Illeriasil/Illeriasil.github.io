function validateForm() {
  const name = document.forms[0]["name"].value;
  const email = document.forms[0]["email"].value;
  const message = document.forms[0]["message"].value;

  if (!name || !email || !message) {
    alert("Tous les champs doivent être remplis.");
    return false;
  }
  return true;
}
