/**
 *	CHILD THEME JS
 */
window.addEventListener( "scroll", ()=>{
let bBody	=	p2getEl( 'body' );
	if ( window.pageYOffset > 200 ) { bBody.classList.add( 'pop2' ); }
	else { bBody.classList.remove( 'pop2' ); }
}, false );
