<!DOCKTYPE html>

<html>

<head>
    <title>
        lab Task
    </title>
</head>
<style>
table {
    background-color:white ;
    margin:1px 50px 30 px 300 px;
}
body{
    background-colour:lightblue;
}
h2{
    color:red;
}
div{
    color:red;
    font-size:20 px;
}
#para {
    margin-top:40px;
    font-size:20 px;
    width:400 px;
}


</style>

<body>
<from onsumit = "return handlersubmit()">

<table>


<tr> <td> <h2> Donor Infomatrion </h2></td></tr>

< form onsubmit="handlersubmit()>"

<tr><td>First Name :</td><td><input type = "text"id= "fname"</td></tr>
<tr><td>Last Name :</td><td><input type = "text"id= "lname"</td></tr>
<tr><td>Company :</td><td><input type = "text"id= "company"</td></tr>

<tr><td>Address 1:</td><td><input type = "text"id= "address1"</td></tr>
<tr><td>Address 2:</td><td><input type = "text"id= "address2"</td></tr>
<tr><td>City :</td><td><input type = "text"id= "city"</td></tr>

<tr><td>State :</td><td><select name = "Maritial Status">


<option value =" --Select--">--Select a state from dropdrown --</option>
<option value ="Single" >Single</option>
<option value ="Married" >Married</option>
</select>"</td></tr>
</table>



</from>


</body>


</html>