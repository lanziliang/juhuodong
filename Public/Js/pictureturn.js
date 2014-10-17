// JavaScript Document
window.onload = function(){
	var obutton = document.getElementsByTagName('a');
	var exli = document.getElementsByTagName('ul');
	var spa = document.getElementsByTagName('span');
	
	obutton[5].onclick = function(){//前一页
	if(exli[2].style.left == '0px'){
		exli[2].style.left = '-1800px';
		spa[1].innerHTML ='4/4';
	}
	else
	if(exli[2].style.left == '-1800px'){
		exli[2].style.left = '-1200px';
		spa[1].innerHTML ='3/4';
		}
		else
	if(exli[2].style.left == '-1200px'){
		exli[2].style.left = '-600px';
		spa[1].innerHTML ='2/4';
		}
		else
	if(exli[2].style.left == '-600px'){
		exli[2].style.left = '0px';
		spa[1].innerHTML ='1/4';
		}
	}
	obutton[6].onclick = function(){//后一页
		if(exli[2].style.left == '0px'){
		exli[2].style.left = '-600px';
		spa[1].innerHTML ='2/4';
	}
	else
	if(exli[2].style.left == '-600px'){
		exli[2].style.left = '-1200px';
		spa[1].innerHTML ='3/4';
		}
		else
	if(exli[2].style.left == '-1200px'){
		exli[2].style.left = '-1800px';
		spa[1].innerHTML ='4/4';
		}
		else
	if(exli[2].style.left == '-1800px'){
		exli[2].style.left = '0px';
		spa[1].innerHTML ='1/4';
		}
	}
}
