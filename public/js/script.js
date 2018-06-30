		/*name*/
		function cambiaEstilo(){
			document.getElementById('name').style.color = '#48ABF7';
			document.getElementById('name').style.fontSize = '2em';
		}

		function restablecer(){
			document.getElementById('name').style.color = '#000000';
			document.getElementById('name').style.fontSize = '12px';
		}

		/*correo*/
		function cambiaCorreo(){
			document.getElementById('correo').style.color = '#48ABF7';
			document.getElementById('correo').style.fontSize = '2em';
		}

		function restablecerCorreo(){
			document.getElementById('correo').style.color = '#000000';
			document.getElementById('correo').style.fontSize = '12px';
		}

		/*pass*/
		function cambiaPass(){
			document.getElementById('pass').style.color = '#48ABF7';
			document.getElementById('pass').style.fontSize = '2em';
		}

		function restablecerPass(){
			document.getElementById('pass').style.color = '#000000';
			document.getElementById('pass').style.fontSize = '12px';
		}

		/*confpass*/
		function cambiaConfpass(){
			document.getElementById('confpass').style.color = '#48ABF7';
			document.getElementById('confpass').style.fontSize = '2em';
		}

		function restablecerConfass(){
			document.getElementById('confpass').style.color = '#000000';
			document.getElementById('confpass').style.fontSize = '12px';
		}

		/*correolog*/
		function cambiaCorreolog(){
			document.getElementById('correolog').style.color = '#48ABF7';
			document.getElementById('correolog').style.fontSize = '2em';
		}

		function restablecerCorreolog(){
			document.getElementById('correolog').style.color = '#000000';
			document.getElementById('correolog').style.fontSize = '12px';
		}		

		/*passlog*/
		function cambiaPasslog(){
			document.getElementById('passlog').style.color = '#48ABF7';
			document.getElementById('passlog').style.fontSize = '2em';
		}

		function restablecerPasslog(){
			document.getElementById('passlog').style.color = '#000000';
			document.getElementById('passlog').style.fontSize = '12px';
		}



		/*name*/
				document.getElementById('name').addEventListener('click', cambiaEstilo);
				document.getElementById('name').addEventListener('blur', restablecer);

		/*correo*/
				document.getElementById('correo').addEventListener('click', cambiaCorreo);
				document.getElementById('correo').addEventListener('blur', restablecerCorreo);

		/*pass*/
				document.getElementById('pass').addEventListener('click', cambiaPass);
				document.getElementById('pass').addEventListener('blur', restablecerPass);
		
		/*confpass*/
				document.getElementById('confpass').addEventListener('click', cambiaConfpass);
				document.getElementById('confpass').addEventListener('blur', restablecerConfpass);

		/*correolog*/
				document.getElementById('correolog').addEventListener('click', cambiaCorreolog);
				document.getElementById('correolog').addEventListener('blur', restablecerCorreolog);

		/*passlog*/
				document.getElementById('passlog').addEventListener('click', cambiaPasslog);
				document.getElementById('passlog').addEventListener('blur', restablecerPasslog);