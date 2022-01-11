const showResult=(value)=>{

    if (value.length==0) {
      document.getElementById("show").innerHTML="";
      document.getElementById("show").style.border="0px";

      return;
    }
    document.getElementById("show").style.color="white";
    let xmlhttp;

    if(window.XMLHttpRequest){
        xmlhttp = new XMLHttpRequest();
    }
    else{
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    xmlhttp.onreadystatechange=()=>{
        if(xmlhttp.readyState==4 && xmlhttp.status==200){
           document.getElementById("show").innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET", `result_search?key=`+value,true);
    xmlhttp.send();
}

function signup(){
    var key= document.getElementById("search").value;
    var ok=false;
    var check = (/.([a-zA-Z])/.test(key));
    if(check ==false){
        alert("Vui lòng điền từ khóa!");
        ok =false;
    }else{
        ok =true;
    }
	return ok;
}
