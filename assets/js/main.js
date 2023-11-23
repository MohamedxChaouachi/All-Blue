const body = document.body;
let lastScroll = 0;

window.addEventListener("scroll", () => {
	const currentScroll = window.pageYOffset;
	if (currentScroll <= 0) {
		body.classList.remove("scroll-up");
		return;
	}

	if (currentScroll > lastScroll && !body.classList.contains("scroll-down")) {
		body.classList.remove("scroll-up");
		body.classList.add("scroll-down");
	} else if (
		currentScroll < lastScroll &&
		body.classList.contains("scroll-down")
	) {
		body.classList.remove("scroll-down");
		body.classList.add("scroll-up");
	}
	lastScroll = currentScroll;
});

let menu=document.querySelector('#menu-icon');
let navlist=document.querySelector('.navlist');
menu.onclick = () => {
	menu.classList.toggle('bx-x');
	navlist.classList.toggle('open');
}

/**scroll reveal */
const sr = ScrollReveal({
	distance: '65px',
	duration : 2600,
	delay: 450,
	reset:false
});
sr.reveal('.hero-text', {delay:200,origin:'top'});
sr.reveal('.logo', {delay:200,origin:'top'});
sr.reveal('.navlist', {delay:200,origin:'top'});
sr.reveal('.hero-img .yacht', {delay:200,origin:'bottom'});
