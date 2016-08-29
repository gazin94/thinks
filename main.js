function appendEvent(obj,evnt,script){
	var f=new Function(script);
	if (obj.addEventListener) 	obj.addEventListener(evnt,f,false); 	else
	if (obj.attachEvent) 		obj.attachEvent('on'+evnt,f); 	else
		alert('Unknown browser or object');
	return f;
}

function cancel_event(event){
	event=event || window.event;
	if (event.preventDefault) event.preventDefault(); else event.returnValue=false;
	if (event.stopPropagation) event.stopPropagation(); else event.cancelBubble=true;
   return false;	
}



function newTag(ATagName,AClassName,APad,AInner,AOnClick){
  var x=document.createElement(ATagName);
  if (AClassName) x.setAttribute('class',AClassName);
  if (APad) APad.appendChild(x);
  if (AInner) x.innerHTML=AInner;
  if (AOnClick) appendEvent(x,'click',AOnClick);
  return x;
}


function popup(){
	var pad=newTag('DIV','pad',document.body,null,'close_popup(this)');
	window.form=newTag('DIV','form',document.body,null,'cancel_event()');
	form.innerHTML='<DIV=class='+'popup'+'><form method="post" action='+'php/save.php'+'>'+
	'<center><textarea class="thinks" name="text" autofocus maxlength="140"></textarea>'+
	'<center><button class="reg" type="submit" value="Отправить" name="save" onclick=this.form.submit() />'+
	'Отправить</button></center>'+
	'</form></DIV>';
}

function close_popup(src){
	document.body.removeChild(src);
	document.body.removeChild(window.form);
}	

