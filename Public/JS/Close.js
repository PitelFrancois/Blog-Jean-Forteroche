class Close {

	constructor() {
		this.CloseSessionWindow() ;
		this.CloseConnectionWindow() ;
		this.OpenConnectionWindow() ;
	} ;

	CloseSessionWindow() {
		let fatimescircle = document.querySelector('.fa-times-circle') ;
		if (fatimescircle != null) {
			fatimescircle.addEventListener("click",() => {
				document.getElementById('session').style.display = "none" ;
				this.CloseSessionWindow() ;
			}) ;
		} ;
	} ;

	CloseConnectionWindow() {
		let cross2 = document.querySelector('.cross') ;
		cross2.addEventListener("click", function() { 
			let windowConnect = document.querySelector('.windowConnect') ; 	  
    		windowConnect.style.display = "none" ;                         
		}) ;
	} ;

	OpenConnectionWindow() {
		let connect = document.getElementById('connect') ;
		connect.addEventListener("click", function() { 	
			let windowConnect = document.querySelector('.windowConnect') ;  
    		windowConnect.style.display = "flex" ;                          
		}) ;
	} ;
} ;

let close = new Close ;