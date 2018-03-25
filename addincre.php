<?php session_start(); 
if(isset($_SESSION['username']))
{

if((isset($_REQUEST['m']))&&(isset($_REQUEST['y']))&&(isset($_REQUEST['d']))&&(isset($_REQUEST['acad'])))
{
$monyr=$_REQUEST['m']."-".$_REQUEST['y'];
$d=$_REQUEST['d'];
$acad=$_REQUEST['acad'];
}
else
{
$monyr=0;
$d=0;
$acad=0;
}


if(isset($_REQUEST['no'])&&(isset($_REQUEST['mon'])))
{
$mon=$_REQUEST['mon'];
$num=$_REQUEST['no'];
}
else
{
$mon=0;
$num=0;
}


?>
<html>
<head>
<title>Increment_details</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="irac.css" type="text/css">

<script type="text/javascript">

        function hide()
        {
          	 document.getElementById('shows').style.display = 'none';
        }
		function OnC(mlvalue)
		{
		if(mlvalue=="ml")
    		 document.getElementById('shows').style.display = 'block';
			 else
			 document.getElementById('shows').style.display = 'none'; 
	    }

function loadXMLDoc11()
{
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("here").innerHTML=xmlhttp.responseText;
    }
  }
  var rno=document.form2.trefno.value;
//  alert(rno);
xmlhttp.open("POST","salarylog.php?trefno="+rno,true);
xmlhttp.send();
}
function showUser(str)
{

if (str=="")
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  } 
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("POST","getuser.php?q="+str,true);
xmlhttp.send();
}

    </script>
</head>

<body onLoad="hide()" bgcolor="#FFFFFF" text="#000000">
<table width="850" border="0" align="center">
  <tr> 
    <td> 
      <?php include("header.php")?>    </td>
  </tr>
  <tr> 
    <td> 
      <?php include("sample1.html")?>    </td>
  </tr>
  <tr>
    <td height="18">&nbsp;</td>
  </tr>
  <tr>
    <td height="18">&nbsp;</td>
  </tr>
  <tr>
    <td height="18"> </td>
  </tr>
  <tr> 
    <td height="18">&nbsp;</td>
  </tr>
  <tr>
    <td height="18">
      <form name="form3" method="post" action="incre.php">
        <table width="300" border="0" bordercolor="#CCCCCC" align="right">
          <tr> 
            <td bgcolor="#FFFFFF" width="100"> 
              <div align="center"><font color="#FFFF00"><b></b></font></div>            </td>
            <td bgcolor="#FFFFFF"> 
              <select name="m" class="input"required/>
              
                <option value="Mar">Mar</option>
                <option value="Jun">Jun</option>
                
                <option value="Sep">Sep</option>
                
                <option value="Dec">Dec</option>
              </select>            </td>
            <td bgcolor="#FFFFFF"> 
              <select name="y" class="input"required/>
                <option value="2010">2010</option>
                <option value="2011">2011</option>
                <option value="2012">2012</option>
                <option value="2013">2013</option>
                <option value="2014">2014</option>
                <option value="2015">2015</option>
                <option value="2016">2016</option>
                <option value="2017">2017</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
              </select>            </td>
            <td bgcolor="#FFFFFF"> 
              <input type="submit" name="Submit32" value="Find" class="button1">            </td>
          </tr>
        </table>
        <div align="right"></div>
      </form>    </td>
  </tr>
  <tr> 
    <td height="18"> 
      <form name="form1" method="post" action="addincrephp.php">
        <table width="750" border="0" align="center">
          <tr> 
            <td colspan="3"> 
              <div align="center">
                <p class="sample"> Leave Details</p>
              </div>            </td>
          </tr>
          <tr> 
            <td width="128">&nbsp;</td>
            <td colspan="2">&nbsp;</td>
          </tr>
          <tr> 
            <td width="128"> 
              <p class="sample">Refno</p>            </td>
            <td colspan="2"> <font face="Geneva, Arial, Helvetica, san-serif"> 
              <font size="2"><B>
              <input type="text" name="refno" onChange="showUser(this.value)" class="input" required/>
             
              <div id="txtHint"></div> </b></font></font> </td>
          </tr>
          <tr> 
            <td width="128"> 
               <p class="sample">Reason</p>            </td>
            <td width="86"> 
              <select name="itype"class="input"  onchange='OnC(this.value)'>
                <option value="Others" selected>Others</option>
                <option value="ml">M.L</option>
              </select>            </td>
            <td width="372"> 
              <div id="shows">  
                <p class="sample">From
                  <input type="date"  class="input" placeholder="DD-MM-YYYY" name="fdate" required size="10"/>
            
              To
                <input type="date" class="input" placeholder="DD-MM-YYYY" name="tdate" required size="10"/>
                Duration
                <input type="text" class="input" name="duration"placeholder="no of months" required size="5"/></p>
              </div>            </td>
          </tr>
          <tr> 
            <td width="128"> 
 			<p class="sample">Date</p>             </td>
            <td colspan="2"> 
              <input type="text" class="input" placeholder="DD-MM-YYYY" name="idate" required/>            </td>
          </tr>
          <tr> 
            <td width="128"> 
 <p class="sample">Comments</p>            </td>
            <td colspan="2"> 
              <input type="text" class="input" name="reason" required/>            </td>
          </tr>
          <tr> 
            <td width="128">&nbsp;</td>
            <td colspan="2">&nbsp;</td>
          </tr>
          <tr> 
            <td colspan="3"> 
              <div align="center"> 
                <input type="submit" name="Submit2" value="Save" class="button">
              </div>            </td>
          </tr>
        </table>
      </form>    </td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td> <form name="form2" method="post" action="addincre.php">
        <table width="280" border="0">
          <tr> 
            <td bgcolor="#000000"> 
              <div align="center"></div>
              <div align="right"><font face="Geneva, Arial, Helvetica, san-serif" size="2"><b><font color="#FFFF00" size="4">&#149; 
                </font><font color="#FFFFFF">SalaryLog</font></b></font> 
                <input type="search" name="trefno" size=""onKeyUp="loadXMLDoc11()" placeholder="Enter Refno "class="input"required/>
              </div>
            </td>
          </tr>
        </table>
        </form>  </td>
  </tr>
  <tr>
    <td>   </td>
  </tr>
  <tr>
    <td><div id="here"></div></td>
  </tr>
  <tr> 
 
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td bgcolor="#990000" height="5"></td>
  </tr>
  <tr> 
    <td> 
      <div align="center"> 
        <?php include("nav1.php") ?>
      </div>    </td>
  </tr>
</table>
</body>
</html>
<?php 
} 
else
header('location:index.php');
?>