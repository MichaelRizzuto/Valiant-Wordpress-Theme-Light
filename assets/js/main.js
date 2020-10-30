// Mobile Navbar
var dropdowntoggled = false;
function toggleMobileNavigation() {
	var button = document.getElementById('dropdown_button');
	var dropdown = document.getElementById('navbar_container');
	if (dropdowntoggled) {
		dropdown.style.display = 'none';
		button.classList.add('fa-bars');
		button.classList.remove('fa-times');
		dropdowntoggled	= false;
	} else {
		dropdown.style.display = 'block';
		button.classList.remove('fa-bars');
		button.classList.add('fa-times');
		dropdowntoggled = true;
	}
}

function resetNavOnResize() {
	var button = document.getElementById('dropdown_button');
	var dropdown = document.getElementById('navbar_container');
	if (window.innerWidth >= 1000) {
		dropdown.style.display = 'block';
		button.classList.add('fa-bars');
		button.classList.remove('fa-times');
		dropdowntoggled	= false;
	} else {
		dropdown.style.display = 'none';
		button.classList.add('fa-bars');
		button.classList.remove('fa-times');
		dropdowntoggled	= false;
	}
}
window.addEventListener('resize', resetNavOnResize);
