var xmlHttp;

function showUser(str)
{ 
    xmlHttp=GetXmlHttpObject();
    if (xmlHttp==null)
    {
        alert ("Browser does not support HTTP Request");
        return;
    } 
    var url="responsejson.php";
    url=url+"?q="+str;
    url=url+"&sid="+Math.random();
    xmlHttp.onreadystatechange=stateChanged ;
    xmlHttp.open("GET",url,true);
    xmlHttp.send(null);
}

function stateChanged() 
{ 
    if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
    {

        document.getElementById("json_text").innerHTML=xmlHttp.responseText;
        var obj = JSON.parse(xmlHttp.responseText);
        document.getElementById("firstname").innerHTML=obj[0]["FirstName"];
        document.getElementById("lastname").innerHTML=obj[0]["LastName"];
        document.getElementById("job").innerHTML=obj[0]["Job"];
        document.getElementById("age_text").innerHTML="Age: ";
        document.getElementById("age").innerHTML=obj[0]["Age"];
        document.getElementById("hometown_text").innerHTML="<br/>From: ";
        document.getElementById("hometown").innerHTML=obj[0]["Hometown"];
    }
}

function GetXmlHttpObject()
{ 
    var objXMLHttp=null
        if (window.XMLHttpRequest)
        {
            objXMLHttp=new XMLHttpRequest()
        }
        else if (window.ActiveXObject)
        {
            objXMLHttp=new ActiveXObject("Microsoft.XMLHTTP")
        }
    return objXMLHttp
}
