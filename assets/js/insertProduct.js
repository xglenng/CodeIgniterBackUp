
  function saveProduct() {
var brand = document.getElementById("brand").value;
var image = document.getElementById("image").value;
var price = document.getElementById("price").value;
var description = document.getElementById("description").value;
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'brand=' + brand + '&image=' + image + '&price=' + price + '&description=' + description;
if (brand == '' || image == '' || price == '' || description == '') {
alert("Please Fill All Fields");
} else {
// AJAX code to submit form.
$.ajax({
type: "POST",
url: "insertProduct.php",
data: dataString,
cache: false,
success: function(html) {
alert(html);
}
});
}
return false;
}
