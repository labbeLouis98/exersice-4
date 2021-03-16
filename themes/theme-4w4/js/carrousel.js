(function () {
	let bout1 = document.getElementById('un')
	//console.log(bout1.id)

	let bout2 = document.getElementById('deux')
	//console.log(bout2.id)

	let bout3 = document.getElementById('trois')
	//console.log(bout3.id)

	let carrousel = document.querySelector('.carrousel')

	bout1.addEventListener('mousedown', function () {
		carrousel.style.transform = "translateX(0)"

		if (bout1.cheked = true){
			bout2.cheked = false;
			bout3.cheked = false;
			
		}

	})

	bout2.addEventListener('mousedown', function () {
		carrousel.style.transform = "translateX(-100vw)"

		if (bout2.cheked = true){
			bout1.cheked = false;
			bout3.cheked = false;
			
		}

	})

	bout3.addEventListener('mousedown', function () {
		carrousel.style.transform = "translateX(-200vw)"

		if (bout3.cheked = true){
			bout1.cheked = false;
			bout2.cheked = false;
		
		}

	})


}())