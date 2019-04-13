$("#sign-fx").focus(function()
{
	//var teks = document.getElementById("sign-email-pindah").innerHTML;
	$("#sign-fx-pindah").animate({marginTop: '-30px'}, 1000);
	$("#sign-fx").css("border-bottom-color","rgb(76, 88, 224)");
	$("#sign-fx-pindah").css("color","rgb(76, 88, 224)");
	$("#selek-1").animate({marginTop: '-25px'}, 1000);
	$("#selek-2").animate({marginTop: '-25px'}, 1000);
	$("#selek-3").animate({marginTop: '-25px'}, 1000);	
	$("#sign-fx").attr("placeholder","Format : (x angka angka)");
});

$("#selek-1").click(function()
{
	//var teks = document.getElementById("sign-email-pindah").innerHTML;
	$("#sign-fx-pindah").animate({marginTop: '-30px'}, 1000);
	$("#sign-fx").css("border-bottom-color","rgb(76, 88, 224)");
	$("#sign-fx-pindah").css("color","rgb(76, 88, 224)");
	$("#selek-1").animate({marginTop: '-25px'}, 1000);
	$("#selek-2").animate({marginTop: '-25px'}, 1000);
	$("#selek-3").animate({marginTop: '-25px'}, 1000);
	$("#sign-fx").attr("placeholder","Format : (x angka angka)");
});

$("#selek-2").click(function()
{
	//var teks = document.getElementById("sign-email-pindah").innerHTML;
	$("#sign-fx-pindah").animate({marginTop: '-30px'}, 1000);
	$("#sign-fx").css("border-bottom-color","rgb(76, 88, 224)");
	$("#sign-fx-pindah").css("color","rgb(76, 88, 224)");
	$("#selek-1").animate({marginTop: '-25px'}, 1000);
	$("#selek-2").animate({marginTop: '-25px'}, 1000);
	$("#selek-3").animate({marginTop: '-25px'}, 1000);
	$("#sign-fx").attr("placeholder","Format : (x angka angka)");
});

$("#selek-3").click(function()
{
	//var teks = document.getElementById("sign-email-pindah").innerHTML;
	$("#sign-fx-pindah").animate({marginTop: '-30px'}, 1000);
	$("#sign-fx").css("border-bottom-color","rgb(76, 88, 224)");
	$("#sign-fx-pindah").css("color","rgb(76, 88, 224)");
	$("#selek-1").animate({marginTop: '-25px'}, 1000);
	$("#selek-2").animate({marginTop: '-25px'}, 1000);
	$("#selek-3").animate({marginTop: '-25px'}, 1000);
	$("#sign-fx").attr("placeholder","Format : (x angka angka)");
});

$("#sign-fx").blur(function()
{
	if ($("#sign-fx").val()=="")
	{
		$("#sign-fx-pindah").animate({marginTop: '-10px'}, 1000);
		$("#sign-fx").css("border-bottom-color","red");
		$("#sign-fx-pindah").css("color","#444");
		$("#selek-1").animate({marginTop: '0px'}, 1000);
		$("#selek-2").animate({marginTop: '0px'}, 1000);
		$("#selek-3").animate({marginTop: '0px'}, 1000);
		$("#sign-fx").removeAttr("placeholder");
	}
});

$("#sign-a").blur(function()
{
	if ($("#sign-a").val()=="")
	{
		$("#sign-a-pindah").animate({marginTop: '75px'}, 1000);
		$("#sign-a").css("border-bottom-color","red");
		$("#sign-a-pindah").css("color","#444");
	}
});

$("#sign-a").focus(function()
{
	//var teks = document.getElementById("sign-email-pindah").innerHTML;
	$("#sign-a-pindah").animate({marginTop: '60px'}, 1000);
	$("#sign-a").css("border-bottom-color","rgb(76, 88, 224)");
	$("#sign-a-pindah").css("color","rgb(76, 88, 224)");
});

$("#sign-b").blur(function()
{
	if ($("#sign-b").val()=="")
	{
		$("#sign-b-pindah").animate({marginTop: '160px'}, 1000);
		$("#sign-b").css("border-bottom-color","red");
		$("#sign-b-pindah").css("color","#444");
	}
});

$("#sign-b").focus(function()
{
	//var teks = document.getElementById("sign-email-pindah").innerHTML;
	$("#sign-b-pindah").animate({marginTop: '145px'}, 1000);
	$("#sign-b").css("border-bottom-color","rgb(76, 88, 224)");
	$("#sign-b-pindah").css("color","rgb(76,88,224)");
});

$("#sign-n").blur(function()
{
	if ($("#sign-n").val()=="")
	{
		$("#sign-n-pindah").animate({marginTop: '245px'}, 1000);
		$("#sign-n").css("border-bottom-color","red");
		$("#sign-n-pindah").css("color","#444");
	}
});

$("#sign-n").focus(function()
{
	//var teks = document.getElementById("sign-email-pindah").innerHTML;
	$("#sign-n-pindah").animate({marginTop: '230px'}, 1000);
	$("#sign-n").css("border-bottom-color","rgb(76, 88, 224)");
	$("#sign-n-pindah").css("color","rgb(76,88,224)");
});
