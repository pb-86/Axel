/**
 * Wróc do góry strony
 */
 function scrollToTop() {
	const root = document.documentElement;
	root.scrollTo(
		{
			top: 0,
		}
	);
	root.focus();
}

const scrollToTopButton = document.getElementById( 'scroll-to-top' );
scrollToTopButton.addEventListener( 'click', scrollToTop );