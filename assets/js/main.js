// Mobile Navbar
var dropdowntoggled = false;
function toggleMobileNavigation() {
	var button = document.getElementById('dropdown_button');
	if (dropdowntoggled) {
		button.classList.add('fa-bars');
		button.classList.remove('fa-times');
		dropdowntoggled	= false;
	} else {
		button.classList.remove('fa-bars');
		button.classList.add('fa-times');
		dropdowntoggled = true;
	}
}
