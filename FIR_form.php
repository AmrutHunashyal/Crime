<HTML>
<HEAD>
<title>Criminal Data Maintainance System</title>
<meta http-equiv="pragma" content="no-cache">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<LINK REL="STYLESHEET" TYPE="text/css" HREF="css/stylesheet.css">
<LINK href="css/stylesheet2.css" type="text/css" rel="stylesheet">

</HEAD>
<body leftmargin="0" topmargin="0" rightmargin="0" bottommargin="0">
<SCRIPT language="JavaScript" src="javascript/chrome.js" type="text/javascript"></SCRIPT>
<SCRIPT language="JavaScript" src="javascript/swfobject.js" type="text/javascript"></SCRIPT>
  <script>
          var reg = /^[a-zA-Z]+$/;

function is_valid_char(textField)
{

if(!reg.test(textField.value))
{

alert("Please enter characters only");

textField.value="";

textField.focus();

return false;

}

}
 var reg1 = /^[0-9]+$/;

function is_valid_numbers(textField)
{

if(!reg1.test(textField.value))
{

alert("Please enter numbers only");

textField.value="";

textField.focus();

return false;

}

}
      </script>
<?php
	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 )
            {
		echo '<ul class="err">';
		foreach($_SESSION['ERRMSG_ARR'] as $msg) {
			echo '<li>',$msg,'</li>';
		}
		echo '</ul>';
		unset($_SESSION['ERRMSG_ARR']);
	}
?>
 <form method="post" name="FIR" action="FIR_exec.php">
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>

    <td bgcolor="#335566"><table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="2" align="center"><img src="../home-ifx/x.gif" width="1" height="10"></td>
        </tr>
      <tr>
        <td width="150" align="center" bgcolor="#FFFFFF"><a href="index.php"><img src="images/logo1.jpg"width="119" height="100" border="0"></a></td>
        <td align="center" bgcolor="#FFFFFF">

  <table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
              <td align="right">&nbsp;
            </tr>
	<tr>

              <td align="center"><a href="admin_success.php"><img src="images/title.png" width="500" height="60" border="0"></a></td>
            	  </tr>
           	   <tr>
              <td align="right"><font color="#666666">Sat, April 20, 2013 </font>
			</td>
              </tr>
		 </table>
            </td>
        </tr>
</table>
      <TABLE width="1000" border="0" align="center" cellPadding="0" cellSpacing="0">
        <TR bgcolor="#45738a">
          <TD height="18" align="right" ><DIV style="PADDING-RIGHT: 0px" align=left>
            <DIV class=chromestyle id=chromemenu>

  <UL>

  &nbsp;&nbsp;&nbsp;&nbsp; <LI><A HREF="admin_success.php">Home</A></LI> &nbsp;&nbsp; &nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;<LI><A HREF="#" rel=dropmenu2 >Staff Profile</A></LI> &nbsp;&nbsp; &nbsp;&nbsp;
&nbsp;&nbsp; &nbsp;&nbsp;<LI><A HREF="#" rel=dropmenu3>FIR Genereation </A></LI>  &nbsp;&nbsp; &nbsp;&nbsp;
  &nbsp;&nbsp; &nbsp;&nbsp;<LI><A HREF="#" rel=dropmenu4>Investigation </A></LI>  &nbsp;&nbsp; &nbsp;&nbsp;
 &nbsp;&nbsp; &nbsp;&nbsp;<LI><A HREF="#" rel=dropmenu5>Duty Allocation </A></LI>  &nbsp;&nbsp; &nbsp;&nbsp;
 &nbsp;&nbsp; &nbsp;&nbsp;<LI><A HREF="#" >Report </A></LI>  &nbsp;&nbsp; &nbsp;&nbsp;
 &nbsp;&nbsp; &nbsp;&nbsp;<LI><A HREF="contact3.php">Contact Us </A></LI>  &nbsp;&nbsp; &nbsp;&nbsp;
&nbsp;&nbsp; &nbsp;&nbsp;<LI><A HREF="admin_logout.php" >Logout </A></LI>  &nbsp;&nbsp; &nbsp;&nbsp;

<UL/>
   <!--1st drop down menu -->
   <div class=dropmenudiv id=dropmenu1 style="WIDTH: 200px">
   </div>
  <div class=dropmenudiv id=dropmenu2 style="WIDTH: 200px">
  <A HREF="adminstaff.php"><img src="images/formbullet.gif" border=0>Add Staff Member</A>
  <A HREF=""><img src="images/formbullet.gif" border=0>Update Staff Details</A>
 <A HREF="view_staff_details.php"><img src="images/formbullet.gif" border=0>View Staff Details</A>
 </div>
  <div class=dropmenudiv id=dropmenu3 style="WIDTH: 200px">
	       <A HREF="FIR_form.php"><img src="images/formbullet.gif" border=0>FIR Form</A>
               <A HREF="view_FIR_form.php"><img src="images/formbullet.gif" border=0>View FIR Form</A>
            </div>
             <div class=dropmenudiv id=dropmenu4 style="WIDTH: 200px">
	       <A HREF="add_criminal_details.php"><img src="images/formbullet.gif" border=0>Add Criminal Details</A>

            </div>
             <div class=dropmenudiv id=dropmenu5 style="WIDTH: 200px">
	       <A HREF="duty_allocation.php"><img src="images/formbullet.gif" border=0>Allocate Duty</A>
               <A HREF="view_duty_allocation.php"><img src="images/formbullet.gif" border=0>View Duty Allocated</A>

            </div>
 <!--------------------- code added-------------------------->
            <SCRIPT type=text/javascript>
            cssdropdown.startchrome("chromemenu");
        </SCRIPT>
          </DIV></TD>

        </TR>
      </TABLE>
<table width="1000"  border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <TBODY>
    <TR>
      <TD width="200" align="center" valign="top"><img src="images/banner2.png" width="201" height="294" border="0" usemap="#Map"></TD>
      <TD width="800" align="center">
      <div id="flashcontent">
  This text is replaced by the Flash movie.

</div>
<script type="text/javascript">
   var so = new SWFObject("http://ksp.gov.in/flash/main1.swf", "mymovie", "800", "294", "8", "#ffffff");
   so.addParam("quality", "low");
   so.addParam("wmode", "opaque");
   so.addParam("salign", "t");
   so.write("flashcontent");
</script>
</TD>
      </TR>
    </TBODY>
</table>


   <map name="Map">
  <area shape="rect" coords="15,3,179,29" href="missing_persons.php">
 <area shape="rect" coords="15,78,116,99" href="police_strength.php">
 <area shape="rect" coords="14,125,80,145" href="helpline.php">
 <area shape="rect" coords="12,198,143,219" href="about_FIR.php">

</map>
</td>
  </tr>
</table>

<!-- #EndLibraryItem --><table width="1000"  border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <TBODY>
    <TR>
      <TD width="200" height="100" align="center" valign="top" bgcolor="#f3f3f3"><!-- #BeginLibraryItem "/Library/home-navi.lbi" --><table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="10%">&nbsp;</td>
          <td>&nbsp;</td>

        </tr>
                <tr>
          <td>&nbsp;</td>

        </tr>
                <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>

        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>

        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
		<tr>
          <td>&nbsp;</td>

        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>

        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>

        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>

          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><b>Criminal Data Maintainance System<br>
            Hubli - 580031<br>
            Call 100</b></td>

        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>


      </table><!-- #EndLibraryItem --></TD>
      <TD width="600" align="center" valign="top"><br>
        <table width="97%" border="0" align="center" cellpadding="0" cellspacing="0" class="listtable">

      <marquee><h1> WEL COME TO FIR GENERATION </h1></marquee>

    <table align="center" class="table" cellspacing="6" width="85%">


       <tr class="formfieldheading">

      </tr>
       <tr>
        <td width="40%" valign="top">

          <img src="images/formbullet.gif">&nbsp;&nbsp;FIR ID<font color=red>*</font>
        </td>

        <td width="60%" colspan="2">
                 <input  name="FIR_ID" type=text  maxlength=30 id="FIR_ID" value=''>
       </td>
      </tr>
      <tr>
        <td valign="top"><img src="images/formbullet.gif">&nbsp;&nbsp;Crime No<font color=red>*</font> : </td>
        <td colspan="2"><input name="crime_no" type=text maxlength=30 size=40 id="crime_no"  value=''><br>
      </tr>
      <tr>
        <td><img src="images/formbullet.gif">&nbsp;&nbsp;Type of case<font color=red>*</font> : </td>
        <td>
            <select name="type_of_case" id="type_of_case">
                <option value="General">General</option>
                <option value="Murder">Murder</option>
                <option value="Thief">Thief</option>
                <option value="Rape">Rape</option>
                <option value="Dowry">Dowry</option>
                <option value="Kidnap">Kidnap</option>
            </select>
        </td>
      </tr>
      <tr>
        <td width="40%" valign="top">

          <img src="images/formbullet.gif">&nbsp;&nbsp;Police Station<font color=red>*</font>
        </td>

        <td width="60%" colspan="2">
                 <input  name="police_station" type=text  maxlength=30 id="police_station" value=''  onKeyUp="javascript:is_valid_char(this);">
       </td>
      </tr>
      <tr>
        <td valign="top"><img src="images/formbullet.gif">&nbsp;&nbsp;Taluk<font color=red>*</font> : </td>
        <td colspan="2"><input name="taluk" type=text maxlength=30 size=40 id="taluk" value=''  onKeyUp="javascript:is_valid_char(this);"><br>
      </tr>

      <tr>
        <td valign="top"><img src="images/formbullet.gif">&nbsp;&nbsp;District <font color=red>*</font> : </td>
        <td colspan="2"><input name="distict" type=text maxlength=30 size=40 id="distict"  value=''  onKeyUp="javascript:is_valid_char(this);">          <br>

      </tr>

      <tr>
        <td valign="top"><img src="images/formbullet.gif">&nbsp;&nbsp;Date<font color=red>*</font> : </td>
        <td colspan="2"><input name="date" type=text maxlength=30 size=40 id="date"  value=''><br>
        </td>
      </tr>
      <tr>

        <td>
         <img src="images/formbullet.gif">&nbsp;&nbsp;Section<font color=red>*</font> :        </td>
        <td colspan="2">
          <select name="section" id="section">
              <option value="125">125</option>
              <option value="65">65</option>
              <option value="260">260</option>
          </select>
        </td>
      </tr>

      <tr>

        <td>
         <img src="images/formbullet.gif">&nbsp;&nbsp;Act<font color=red>*</font> :        </td>
        <td colspan="2">
          <select name="act" id="act">
              <option value="125">125</option>
              <option value="65">65</option>
              <option value="260">260</option>
          </select>
        </td>
      </tr>

     <tr>
        <td valign="top"><img src="images/formbullet.gif">&nbsp;&nbsp;Occurrence of Offence Day<font color=red>*</font> : </td>
        <td colspan="2"><input name="occurance_of_offence_day" type=text maxlength=30 size=40 id="occurance_of_offence_day" value=''>          <br>

      </tr>

      <tr>
        <td valign="top"><img src="images/formbullet.gif">&nbsp;&nbsp;Time<font color=red>*</font> : </td>
        <td colspan="2"><input name="time" type=text maxlength=30 size=40 id="time"  value=''><br>
        </td>
      </tr>

      <tr>
        <td valign="top"><img src="images/formbullet.gif">&nbsp;&nbsp;Information received at the  PS<font color=red>*</font> : </td>
        <td colspan="2"><input name="Information_received_at_the_ps" type=text maxlength=30 size=40 id="Information_received_at_the_ps"  value=''  onKeyUp="javascript:is_valid_char(this);"><br>
        </td>
      </tr>
      <tr>
        <td valign="top"><img src="images/formbullet.gif">&nbsp;&nbsp;Reasons for delay in reporting by the Complainant<font color=red>*</font> : </td>
        <td colspan="2"><input name="reason_for_delay" type=text maxlength=30 size=40 id="reason_for_delay"  value='' onKeyUp="javascript:is_valid_char(this);">  <br>
        </td>
      </tr>
        <tr>
        <td valign="top"><img src="images/formbullet.gif">&nbsp;&nbsp;Place of Occurenc with full address<font color=red>*</font> : </td>
        <td colspan="2"><input name="place_of_occurance" type=text maxlength=30 size=40 id="place_of_occurance" value=''  onKeyUp="javascript:is_valid_char(this);">          <br>

      </tr>

      <tr>


      <tr>
        <td>
         <img src="images/formbullet.gif">&nbsp;&nbsp;Distance from PS<font color=red>*</font> :        </td>
        <td colspan="2">
        <input name="distance_from_ps" type=text id="distance_from_ps" size=40 value='' maxlength=30 onKeyUp="javascript:is_valid_numbers(this);">        </td>

      </tr>
      <tr class="formfieldheading">

        <td colspan="3">
         <strong>Complainant Details</strong>
        </td>
      </tr>
       <tr>
        <td>
          <img src="images/formbullet.gif">&nbsp;&nbsp;Complainant ID<font color=red>*</font> :        </td>
        <td colspan="2">
        <input name="complainant_id" type=text id="complainant_id" size=40 value='' maxlength=30 >        </td>

      </tr>
      <tr>
        <td>
          <img src="images/formbullet.gif">&nbsp;&nbsp;Name<font color=red>*</font> :        </td>
        <td colspan="2">
        <input name="name" type=text id="name" size=40 value='' maxlength=30 onKeyUp="javascript:is_valid_char(this);" >        </td>

      </tr>
      <tr>
        <td>
          <img src="images/formbullet.gif">&nbsp;&nbsp;Father's/Husband's Name<font color=red>*</font>:        </td>
        <td colspan="2">
        <input name="middle_name" type=text id="middle_name" size=40 value='' maxlength=30  onKeyUp="javascript:is_valid_char(this);" >        </td>
      </tr>
       <tr>
        <td>
          <img src="images/formbullet.gif">&nbsp;&nbsp;Last Name<font color=red>*</font>:        </td>
        <td colspan="2">
        <input name="last_name" type=text id="last_name" size=40 value='' maxlength=30  onKeyUp="javascript:is_valid_char(this);">        </td>
      </tr>
      <tr>

        <td>
          <img src="images/formbullet.gif">&nbsp;&nbsp;Age<font color=red>*</font> :        </td>
        <td colspan="2">
        <input name="age" type=text id="age" size=40 value='' maxlength=30 onKeyUp="javascript:is_valid_numbers(this);">        </td>
      </tr>
      <tr>

        <td>
                <img src="images/formbullet.gif">&nbsp;&nbsp;Occupation<font color=red>*</font> :        </td>
        <td><input name="occupation" type=text id="occupation" size=40 value='' maxlength=30  onKeyUp="javascript:is_valid_char(this);"></td>
      </tr>
      <tr>
        <td>
          <img src="images/formbullet.gif">&nbsp;&nbsp;Caste<font color=red>*</font>:
        </td>
        <td colspan="2">
            <select name="caste" id="caste" >
                <option value="General">General</option>
                <option value="OBC">OBC</option>
                <option value="SC">SC</option>
                <option value="ST">ST</option>
            </select>
        </td>

      </tr>
      <tr>
        <td>
          <img src="images/formbullet.gif">&nbsp;&nbsp;Nationality <font color=red>*</font>:
        </td>
        <td colspan="2">
      <select name="nationality" id="nationality" >
          <option value="Indian">Indian</option>
          <option value="Others">Others</option>
      </select>
        </td>
      </tr>

      <tr>
        <td>
          <img src="images/formbullet.gif">&nbsp;&nbsp;Address<font color=red>*</font> :
         </td>
        <td colspan="2">
        <input name="address" type=text id="address" size=15  maxlength=10 value=''  onKeyUp="javascript:is_valid_char(this);">
        </td>
      </tr>
     <tr>
     <td> <input type="submit" value="SUBMIT" name="Submit"></td>
    &nbsp;&nbsp;
      <td> <input type="reset" name="Reset" value="Reset"></td>
    </tr>
  


      </table></TD>
      <TD width="200" align="center" valign="top" bgcolor="#f3f3f3"><table width="95%" border="0" align="left" cellpadding="0" cellspacing="0">
        <tr>
          <td width="10%">&nbsp;</td>
          <td>&nbsp;</td>
        </tr>

       </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table></TD>
    </TR>

  </TBODY>
</table>
		 <!--------------------- code added-------------------------->
              		  <!-- #BeginLibraryItem "/Library/home-footer.lbi" -->
<TABLE width="1000" border="0" align="center" cellPadding="0" cellSpacing="0" bgcolor="#ffffff">
        <TR>
          <TD vAlign="center" align="center"><div class="footer"><a href="admin_success.php" class="textlink">Home</a> | <a href="aboutus.php" class="textlink">About Us</a> | <a href="contact3.php" class="textlink">Contact Us</a>  | <a href="http://mail.ksp.gov.in" class="textlink">Email Login</a> | <a href="sitemap.php" class="textlink">Site Map</a></div></TD>

        </TR>
        <TR>
          <TD vAlign="center" align="center">&nbsp;</TD>
        </TR>
        <TR>
          <TD vAlign="center" align="center" height="20"><div class="copyright">Criminals Data Maintainance System</div></TD>
        </TR>
</TABLE>
            	<!--------------------- code added-------------------------->

<!-- #EndLibraryItem --><map name="Map">
  <area shape="rect" coords="228,46,547,145" href="aboutus.php">
</map>
</form>
</body>
</HTML>
