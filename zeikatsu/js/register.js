function check() {
  var e = document.getElementById("form1");
  for (i=0; i<e.lemgth; i++) {
    if ((e.elements[i].type == "text") && (e.elements[i].type == "password") &&(e.elements[i].value == "")) {
      alert("未入力の箇所があります");
      return false;
    }
  }
  return true;
}
