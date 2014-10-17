

//活动分类的js控制
var span = document.getElementsByTagName("span");
span[2].style.display = "none";
function change(choose)  
 {   
    var index = (document.getElementById("type").value); 
	switch(index){
		case "1":
		{
	
			span[2].innerHTML = "请选择子活动类型";
			span[2].style.display = "inline"
			
			document.getElementById("subtype_1").className="basic-input";
			document.getElementById("subtype_12").className="basic-input hide"
			document.getElementById("subtype_7").className="basic-input hide"
			document.getElementById("subtype_23").className="basic-input hide"
			break;
		}
		case "12":
		{
			span[2].innerHTML = "请选择子活动类型";
			span[2].style.display = "inline"
			document.getElementById("subtype_12").className="basic-input";
			document.getElementById("subtype_1").className="basic-input hide"
			document.getElementById("subtype_7").className="basic-input hide"
			document.getElementById("subtype_23").className="basic-input hide"
			break;
		}
		case "7":
		{
			span[2].innerHTML = "请选择子活动类型";
			span[2].style.display = "inline"
			document.getElementById("subtype_7").className="basic-input";
			document.getElementById("subtype_1").className="basic-input hide"
			document.getElementById("subtype_12").className="basic-input hide"
			document.getElementById("subtype_23").className="basic-input hide"
			break;
		}
		case "23":
		{
			span[2].innerHTML = "请选择子活动类型";
			span[2].style.display = "inline"
			document.getElementById("subtype_23").className="basic-input";
			document.getElementById("subtype_1").className="basic-input hide"
			document.getElementById("subtype_12").className="basic-input hide"
			document.getElementById("subtype_7").className="basic-input hide"
			break;
		}
		case "00":
		{
			span[2].innerHTML = "请选择活动类型";
			span[2].style.display = "inline"
			document.getElementById("subtype_23").className="basic-input hide";
			document.getElementById("subtype_1").className="basic-input hide"
			document.getElementById("subtype_12").className="basic-input hide"
			document.getElementById("subtype_7").className="basic-input hide"
			break;
		}
		default:{
			document.getElementById("subtype_23").className="basic-input hide";
			document.getElementById("subtype_1").className="basic-input hide"
			document.getElementById("subtype_12").className="basic-input hide"
			document.getElementById("subtype_7").className="basic-input hide"
			span[2].style.display = "none";
			}
	}
 }
 function spa(spa){
	span[2].style.display = "none";
	var typ2 = (spa.value); if(typ2=='0'){span[2].innerHTML = "请选择子活动类型";
			span[2].style.display = "inline";}
}

//活动时间类型变换
function typechange(time){
	var time = document.getElementById("repeat_type").value;
	switch(time){
		case "0":{
			document.getElementById("evnetDateOnedayHook").style.display = "block";
			document.getElementById("eventDateContinueHook").style.display = "none";
			document.getElementById("eventDateWeekHook").style.display = "none";
			document.getElementById("eventDateIntermHook").style.display = "none";
			var time2 = document.getElementsByClassName("editable-select-options");
            time2[0].style = "height: 200px; overflow: auto; width: 104px; top: 439.183px; left: 382.5px; visibility: visible; display: none;"
			time2[1].style="height: 200px; overflow: auto; width: 104px; top: 439.183px; left: 524.5px; visibility: visible; display: none;"
			break;
			}	
		case "1":{
			document.getElementById("evnetDateOnedayHook").style.display = "none";
			document.getElementById("eventDateContinueHook").style.display = "block";
			document.getElementById("eventDateWeekHook").style.display = "none";
			document.getElementById("eventDateIntermHook").style.display = "none";
			var time2 = document.getElementsByClassName("editable-select-options");
            time2[0].style = "height: 200px; overflow: auto; width: 104px; top: 477.183px; left: 333.5px; visibility: visible; display: none;";
			time2[1].style = "height: 200px; overflow: auto; width: 104px; top: 477.183px; left: 475.5px; visibility: visible; display: none;";
			break;
			}
		case "2":{
			document.getElementById("evnetDateOnedayHook").style.display = "none";
			document.getElementById("eventDateContinueHook").style.display = "none";
			document.getElementById("eventDateWeekHook").style.display = "block";
			document.getElementById("eventDateIntermHook").style.display = "none";
			var time2 = document.getElementsByClassName("editable-select-options");
			time2[0].style="height: 200px; overflow: auto; width: 104px; top: 521.9px; left: 333.5px; visibility: visible; display: none;";
			time2[1].style="height: 200px; overflow: auto; width: 104px; top: 521.9px; left: 475.5px; visibility: visible; display: none;";
			break;
			}
		case "3":{
			document.getElementById("evnetDateOnedayHook").style.display = "none";
			document.getElementById("eventDateContinueHook").style.display = "none";
			document.getElementById("eventDateWeekHook").style.display = "none";
			document.getElementById("eventDateIntermHook").style.display = "block";
			break;
			}				
		}
	}
//当天结束控制模块
function begintimeshow(){
	var time = document.getElementsByClassName("editable-select-options");
	time[0].style.display = "block";	
}
function begintimechange(ind){
	var time = document.getElementsByClassName("editable-select-options");
	var begintime = document.getElementById("one_begin_time");
	var begintime1 = document.getElementById("more_begin_time");
	var begintime2 = document.getElementById("week_begin_time");
	begintime.className = "basic-input editable-select";
	begintime1.className = "basic-input editable-select";
	begintime2.className = "basic-input editable-select";
	begintime.value= ind.innerHTML;
	begintime1.value = ind.innerHTML;
	begintime2.value = ind.innerHTML;
	time[0].style.display = "none";
}
function endtimeshow(){
	var time = document.getElementsByClassName("editable-select-options");
	time[1].style.display = "block";	
}
function endtimechange(ind){
	var time = document.getElementsByClassName("editable-select-options");
	var endtime = document.getElementById("one_end_time");
	var endtime1 = document.getElementById("more_end_time");
	var endtime2 = document.getElementById("week_end_time");
	endtime.className = "basic-input editable-select";
	endtime1.className = "basic-input editable-select";
	endtime2.className = "basic-input editable-select";
	endtime.value = ind.innerHTML;
	endtime1.value = ind.innerHTML;
	endtime2.value = ind.innerHTML;
	time[1].style.display = "none";
}
//收费与免费模块
function activefee(){
	var fee = document.getElementById("active_fee");
	fee.className = "tem inner-back";
	}
function free(){
	var fee = document.getElementById("active_fee");
	fee.className = "item inner-back hide";
}
//添加费用模块
function tjfy(){
	var mk = document.getElementsByClassName("con_item fee_item hide");
	var zg = document.getElementById("addFeeHook");
	for(var k=0;k<=mk.length-1;k++)
	{
		if(mk[k].style.display=="none")
		{
			mk[k].style.display = "block";
			if(mk.length-1 == k)
			{
		   zg.style.display = "none";
		   }
			break;
		}
	}
}
//删除费用模块
function scfy(num){
	var mk = document.getElementsByClassName("con_item fee_item hide");
	
	if(mk[num].style.display=="block")
		{
		   
			mk[num].style.display = "none";
			
		}
	
}























