Algoritmo SinTitulo
    prensa <- "prensa"
    pleno <- "pleno"
    estadisticas <- "estadisticas"
    cuenta <- "cuenta"
    investigaciones <- "investigaciones"
    ayuda <- "ayuda"
    cerrar <- "cerrar"
    login <- Verdadero
    
	Mientras login Hacer
		Escribir "Opciones: prensa, pleno, estadisticas, cuenta, investigaciones, ayuda, cerrar"
		Leer opcion_usuario
		
		Segun opcion_usuario Hacer
			prensa:
				Escribir "Informacion de prensa"
			pleno:
				Escribir "Informacion de pleno"
			estadisticas:
				Escribir "Informacion de estadisticas"
			cuenta:
				Escribir "Informacion de cuenta"
			investigaciones:
				Escribir "Informacion de investigaciones"
			ayuda:
				Escribir "Informacion de ayuda"
			cerrar:
				login <- Falso
			De Otro Modo:
				Escribir "Opci�n no v�lida!"
		Fin Segun
	Fin Mientras
    
Fin Algoritmo
