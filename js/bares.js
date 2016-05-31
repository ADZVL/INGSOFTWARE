$(document).ready(principal());
function principal() {
	$("#contenido").load('../contenido/rodeo.php');
}
function quitarActivo(par){
	if (par==0) {
		$("#li0").removeClass("active");
	}else if (par == 1) {
		$("#li1").removeClass("active");
	}else if (par == 2) {
		$("#li2").removeClass("active");
	}else if (par == 3) {
		$("#li3").removeClass("active");
	}else if (par == 4) {
		$("#li4").removeClass("active");
	}
}
actual = 0;
function cambiar(num){
	if (num!=actual) {
		quitarActivo(actual);
		if (num==0) {
			$("#contenido").empty();
			$("#contenido").load('../contenido/rodeo.php');
			actual=0;
			$("#li0").addClass("active");
		}else if (num == 1) {
			$("#contenido").empty();
			$("#contenido").load('../contenido/yadis.php');
			actual=1;
			$("#li1").addClass("active");
		}else if (num == 2) {
			$("#contenido").empty();
			$("#contenido").load('../contenido/salsipuedes.php');
			actual=2;
			$("#li2").addClass("active");
		}else if (num == 3) {
			$("#contenido").empty();
			$("#contenido").load('../contenido/chabela.php');
			actual=3;
			$("#li3").addClass("active");
		}
		else if (num == 4) {
			$("#contenido").empty();
			$("#contenido").load('../contenido/chilanguitos.php');
			actual=4;
			$("#li4").addClass("active");
		}
	}
}