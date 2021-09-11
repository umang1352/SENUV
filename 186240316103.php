<!DOCTYPE html>
<html>
<head><title>

</title><link href="marksheet.css" rel="stylesheet" type="text/css">
    <style type="text/css" media="print">
        .Page {
            display: none;
        }

        .verticalLine {
            border-left: thick solid #ff0000;
        }

        .imgmargin {
            margin-right: 20px;
        }

        .imgcaptch > img {
            border: 1px solid grey !important;
            width: 130px;
            height: 40px;
        }

        .button {
        }
    </style>
    <script type="text/javascript">
        function RefreshCaptcha() {
            var img = document.getElementById("imgCaptcha");
            img.src = "../Handler.ashx?query=" + Math.random();
        }
    </script>
</head>

<body>
    <form method="post" action="./" onkeypress="javascript:return WebForm_FireDefaultButton(event, 'btnSubmit')" id="form1">
<div class="aspNetHidden">
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="">
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="">
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="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">
</div>

<script type="text/javascript">
//<![CDATA[
var theForm = document.forms['form1'];
if (!theForm) {
    theForm = document.form1;
}
function __doPostBack(eventTarget, eventArgument) {
    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }
}
//]]>
</script>


<script src="/WebResource.axd?d=023GZwYJa1mP-iToFYugvLEN1yohVFPF05uVxTp8zGdi1_5c4YGgqYSoNgIdiB0yU5M-YdRzungBCDHrKyH0J2CI6hAe1B0ceJQ9Z441YpM1&amp;t=637020724373396906" type="text/javascript"></script>


<script src="/WebResource.axd?d=cbPKfv7Uiicukkhnjz6PzcDqp_nNwJPAduKMdqg-D6eFVio8_qWV_Io4EISb3PDfEz0BDIqwJ-JJkG72lPQVCvMEjKGl9595wbltamTFxxY1&amp;t=637020724373396906" type="text/javascript"></script>
<div class="aspNetHidden">

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="CA0B0334">
	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEdAAXNeYyVFJSgR7/aTwnSDvXlZAOKKrbaqBuZEOgDujbIJE7faODj1tnvTzvom6kOTSTV8jFig0gbXGgleszPUj0LPOaW1pQztoQA36D1w/+bXaVQROo6pgmPghqxWyJq52dbLdtlsKeOcBYCMQaQlsnV">
</div>
         <div class="page">
            <div class="header">
                
                <div class="title">
                    <img src="logo.png" style="margin-left: -880px; width: 50px; margin-top: 5px; margin-bottom: -35px;">
                    <center>
                    <h1>
                        Gujarat Technological University</h1>
                </center>
                    <h2 id="PGTitle">Student Grade History
                    </h2>
                </div>
                <div class="clear hideSkiplink">
                </div>
            </div>
            <div class="main">
                <table class="Page">
        <tbody><tr>
            <td>
                <table>
                    <tbody><tr>
                        <td height="15px">Enrollment No :
                        </td>
                        <td>
                            <input name="txtEnrollNo" type="text" value="186240316103" maxlength="12" id="txtEnrollNo" tabindex="1" oninvalid="setCustomValidity('Invalid Enroll No.')" onchange="try{setCustomValidity('')}catch(e){}" pattern="\d*" style="font-size:Large;height:35px;">

                            
                        </td>
                    </tr>
                </tbody></table>
            </td>
            <td>
                <table class="imgmargin">
                    <tbody><tr>
                        <td>
                            
                            <input type="image" name="imgref" id="imgref" class="imgmargin" src="refresh.png" alt="Refresh" onclick="javascript:RefreshCaptcha();">
                        </td>

                        <?php
                        include("captcha.php");
                        ?>

                            
                        </td>
                        <td>Captcha Validation :
                        </td>
                        <td>
                            <input name="CodeNumberTextBox" type="text" maxlength="9" id="CodeNumberTextBox" tabindex="2" class="csstext" style="color:#CC0000;font-size:Large;height:35px;width: 80px; height: 20px; padding-top: 2px; margin-top: 5px;">
                        </td>
                        <td>
                            <input type="submit" name="btnSubmit" value="Search..." id="btnSubmit" tabindex="3" class="button" style="background-color:#999999;border-style:Solid;font-size:Medium;font-weight:normal;height:40px;width:150px;">
                            
                        </td>
                    </tr>
                </tbody></table>
            </td>
        </tr>
    </tbody></table>
    <table>
        <tbody><tr>
            <td>
                <span id="lblMSG" style="color:Red;font-weight:bold;"></span>
            </td>
        </tr>
    </tbody></table>
    <table id="TblStdInfo" class="Mytable" style="color: Black;">
	<tbody><tr>
		<td>Name :
            </td>
		<td>
                <span id="lblName">SAVALIYA PARTH SUDHIRBHAI</span>
            </td>
	</tr>
	<tr>
		<td>Enrollment No :
            </td>
		<td>
                <span id="lblMapNumber">186240316103</span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                
            </td>
	</tr>
	<tr>
		<td>Institute :
            </td>
		<td>
                <span id="lblInstName">624--GOVERNMENT POLYTECHNIC, HIMATNAGAR</span>
            </td>
	</tr>
	<tr>
		<td>Branch :
            </td>
		<td>
                <span id="lblBranch">DI-16-INFORMATION TECHNOLOGY</span>
            </td>
	</tr>
	<tr>
		<td>
                
            </td>
	</tr>
</tbody></table>

    <div id="div2">
        <div>
	<table class="Mytable textcenter" cellspacing="0" cellpadding="2" rules="all" id="grdv2" style="color:Black;background-color:LightGoldenrodYellow;border-color:Tan;border-width:1px;border-style:solid;border-collapse:collapse;">
		<tbody><tr style="background-color:Tan;font-weight:bold;">
			<th scope="col">Enrollment No.</th><th scope="col">CPI</th><th scope="col">CGPA</th><th scope="col">TOT BACKL</th><th scope="col">BCK1</th><th scope="col">BCK2</th><th scope="col">BCK3</th><th scope="col">BCK4</th><th scope="col">BCK5</th><th scope="col">BCK6</th>
		</tr><tr>
			<td>186240316103</td><td>7.17</td><td>7.98</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>-</td><td>-</td>
		</tr>
	</tbody></table>
</div>
        <div>
	<table class="textcenter" cellspacing="0" align="Center" rules="all" border="1" id="grdvLastExm" style="background-color:Bisque;width:100%;border-collapse:collapse;">
		<tbody><tr>
			<th scope="col">Last Exam</th><th scope="col">Sem</th><th scope="col">Declaration Date</th><th scope="col">Cur Back</th><th scope="col">SPI</th>
		</tr><tr>
			<td>
                        <span id="grdvLastExm_Label1_0" title="2390">DIPL SEM 4 - Regular (MAY 2020)</span>
                    </td><td>4</td><td>06-7-2020</td><td>0</td><td>7.78</td>
		</tr>
	</tbody></table>
</div>
    </div>
    <div style="text-align: center">
        <span id="dtnmsg" style="color:Maroon;font-size:11pt;"></span>
    </div>
    <div style="vertical-align: bottom">
        
        <div>

</div>
    </div>
    <div id="div3">
        
                <table class="mrksheet Mytable">
                    <tbody><tr>
                        <th>Sem
                            <span id="rptmarksheetHistoryOuter_Label6_0">1</span>
                        </th>
                    </tr>
                </tbody></table>
                
                        <table class="Session">
                            <tbody><tr>
                                <td>

                                    
                                    <span id="lblSession" class="Ses">Winter - 2018</span>
                                    <span id="lblSeatno" class="Ses">(Seat No : D144010)</span>
                                </td>
                                <td align="right" style="font-weight: bold;">CUR. BACKLOG :
                                    <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_0_lblBCK_0">1</span>
                                </td>
                            </tr>
                        </tbody></table>
                        <table class="mrksheetdetail Mytable">
                            
                            
                            
                                    <tbody><tr>
                                        <th style="width: 70px;">sub code
                                        </th>
                                        <th style="width: 700px;">subject name
                                        </th>
                                        <th style="width: 20px;">E_AB
                                        </th>
                                        <th style="width: 20px;">TH ESE
                                        </th>
                                        <th th="" style="width: 20px;">TH PA
                                        </th>
                                        <th th="" style="width: 20px;">TH TOTAL
                                        </th>
                                        <th th="" style="width: 20px;">PR ESE
                                        </th>
                                        <th th="" style="width: 20px;">PR PA
                                        </th>
                                        <th th="" style="width: 20px;">PR TOTAL
                                        </th>
                                        <th th="" style="width: 20px;">Subject Grade
                                        </th>
                                    </tr>
                                
                                    <tr>
                                        <td align="center">
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_0_rptmarksheetHistoryInnerNew_0_TextBox3_0">3300001</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_0_rptmarksheetHistoryInnerNew_0_TextBox4_0">Basic Mathematics</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_0_rptmarksheetHistoryInnerNew_0_Label9_0">-</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_0_rptmarksheetHistoryInnerNew_0_Label2_0">DD</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_0_rptmarksheetHistoryInnerNew_0_Label3_0">CD</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_0_rptmarksheetHistoryInnerNew_0_Label4_0">DD</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_0_rptmarksheetHistoryInnerNew_0_Label5_0">-</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_0_rptmarksheetHistoryInnerNew_0_Label7_0">-</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_0_rptmarksheetHistoryInnerNew_0_Label8_0">-</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_0_rptmarksheetHistoryInnerNew_0_Label1_0">DD</span>
                                        </td>
                                    </tr>
                                
                                    <tr>
                                        <td align="center">
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_0_rptmarksheetHistoryInnerNew_0_TextBox3_1">3300002</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_0_rptmarksheetHistoryInnerNew_0_TextBox4_1">English</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_0_rptmarksheetHistoryInnerNew_0_Label9_1">-</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_0_rptmarksheetHistoryInnerNew_0_Label2_1">CC</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_0_rptmarksheetHistoryInnerNew_0_Label3_1">CD</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_0_rptmarksheetHistoryInnerNew_0_Label4_1">CC</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_0_rptmarksheetHistoryInnerNew_0_Label5_1">BC</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_0_rptmarksheetHistoryInnerNew_0_Label7_1">BB</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_0_rptmarksheetHistoryInnerNew_0_Label8_1">BB</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_0_rptmarksheetHistoryInnerNew_0_Label1_1">CC</span>
                                        </td>
                                    </tr>
                                
                                    <tr>
                                        <td align="center">
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_0_rptmarksheetHistoryInnerNew_0_TextBox3_2">3300003</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_0_rptmarksheetHistoryInnerNew_0_TextBox4_2">Environment Conservation And Hazard Management</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_0_rptmarksheetHistoryInnerNew_0_Label9_2">-</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_0_rptmarksheetHistoryInnerNew_0_Label2_2">CD</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_0_rptmarksheetHistoryInnerNew_0_Label3_2">BC</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_0_rptmarksheetHistoryInnerNew_0_Label4_2">CC</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_0_rptmarksheetHistoryInnerNew_0_Label5_2">-</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_0_rptmarksheetHistoryInnerNew_0_Label7_2">-</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_0_rptmarksheetHistoryInnerNew_0_Label8_2">-</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_0_rptmarksheetHistoryInnerNew_0_Label1_2">CC</span>
                                        </td>
                                    </tr>
                                
                                    <tr>
                                        <td align="center">
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_0_rptmarksheetHistoryInnerNew_0_TextBox3_3">3310701</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_0_rptmarksheetHistoryInnerNew_0_TextBox4_3">Computer Programming</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_0_rptmarksheetHistoryInnerNew_0_Label9_3">-</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_0_rptmarksheetHistoryInnerNew_0_Label2_3">DD</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_0_rptmarksheetHistoryInnerNew_0_Label3_3">CD</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_0_rptmarksheetHistoryInnerNew_0_Label4_3">DD</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_0_rptmarksheetHistoryInnerNew_0_Label5_3">BC</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_0_rptmarksheetHistoryInnerNew_0_Label7_3">BC</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_0_rptmarksheetHistoryInnerNew_0_Label8_3">BC</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_0_rptmarksheetHistoryInnerNew_0_Label1_3">CC</span>
                                        </td>
                                    </tr>
                                
                                    <tr>
                                        <td align="center">
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_0_rptmarksheetHistoryInnerNew_0_TextBox3_4">3310702</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_0_rptmarksheetHistoryInnerNew_0_TextBox4_4">Fundamental Of Digital Electronics</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_0_rptmarksheetHistoryInnerNew_0_Label9_4">-</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_0_rptmarksheetHistoryInnerNew_0_Label2_4">FF</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_0_rptmarksheetHistoryInnerNew_0_Label3_4">BC</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_0_rptmarksheetHistoryInnerNew_0_Label4_4">FF</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_0_rptmarksheetHistoryInnerNew_0_Label5_4">BC</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_0_rptmarksheetHistoryInnerNew_0_Label7_4">CC</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_0_rptmarksheetHistoryInnerNew_0_Label8_4">CC</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_0_rptmarksheetHistoryInnerNew_0_Label1_4">FF</span>
                                        </td>
                                    </tr>
                                
                                    <tr>
                                        <td align="center">
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_0_rptmarksheetHistoryInnerNew_0_TextBox3_5">3310703</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_0_rptmarksheetHistoryInnerNew_0_TextBox4_5">Fundamental Of Computer Application</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_0_rptmarksheetHistoryInnerNew_0_Label9_5">-</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_0_rptmarksheetHistoryInnerNew_0_Label2_5">-</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_0_rptmarksheetHistoryInnerNew_0_Label3_5">-</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_0_rptmarksheetHistoryInnerNew_0_Label4_5">-</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_0_rptmarksheetHistoryInnerNew_0_Label5_5">BC</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_0_rptmarksheetHistoryInnerNew_0_Label7_5">BC</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_0_rptmarksheetHistoryInnerNew_0_Label8_5">BC</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_0_rptmarksheetHistoryInnerNew_0_Label1_5">BC</span>
                                        </td>
                                    </tr>
                                
                        </tbody></table>
                    
                        <table class="Session">
                            <tbody><tr>
                                <td>

                                    
                                    <span id="lblSession" class="Ses">Summer - 2019</span>
                                    <span id="lblSeatno" class="Ses">(Seat No : D129576)</span>
                                </td>
                                <td align="right" style="font-weight: bold;">CUR. BACKLOG :
                                    <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_0_lblBCK_1">0</span>
                                </td>
                            </tr>
                        </tbody></table>
                        <table class="mrksheetdetail Mytable">
                            
                            
                            
                                    <tbody><tr>
                                        <th style="width: 70px;">sub code
                                        </th>
                                        <th style="width: 700px;">subject name
                                        </th>
                                        <th style="width: 20px;">E_AB
                                        </th>
                                        <th style="width: 20px;">TH ESE
                                        </th>
                                        <th th="" style="width: 20px;">TH PA
                                        </th>
                                        <th th="" style="width: 20px;">TH TOTAL
                                        </th>
                                        <th th="" style="width: 20px;">PR ESE
                                        </th>
                                        <th th="" style="width: 20px;">PR PA
                                        </th>
                                        <th th="" style="width: 20px;">PR TOTAL
                                        </th>
                                        <th th="" style="width: 20px;">Subject Grade
                                        </th>
                                    </tr>
                                
                                    <tr>
                                        <td align="center">
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_0_rptmarksheetHistoryInnerNew_1_TextBox3_0">3310702</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_0_rptmarksheetHistoryInnerNew_1_TextBox4_0">Fundamental Of Digital Electronics</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_0_rptmarksheetHistoryInnerNew_1_Label9_0">-</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_0_rptmarksheetHistoryInnerNew_1_Label2_0">CC</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_0_rptmarksheetHistoryInnerNew_1_Label3_0">BC</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_0_rptmarksheetHistoryInnerNew_1_Label4_0">CC</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_0_rptmarksheetHistoryInnerNew_1_Label5_0">BC</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_0_rptmarksheetHistoryInnerNew_1_Label7_0">CC</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_0_rptmarksheetHistoryInnerNew_1_Label8_0">CC</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_0_rptmarksheetHistoryInnerNew_1_Label1_0">CC</span>
                                        </td>
                                    </tr>
                                
                        </tbody></table>
                    
            
                <table class="mrksheet Mytable">
                    <tbody><tr>
                        <th>Sem
                            <span id="rptmarksheetHistoryOuter_Label6_1">2</span>
                        </th>
                    </tr>
                </tbody></table>
                
                        <table class="Session">
                            <tbody><tr>
                                <td>

                                    
                                    <span id="lblSession" class="Ses">Summer - 2019</span>
                                    <span id="lblSeatno" class="Ses">(Seat No : D129576)</span>
                                </td>
                                <td align="right" style="font-weight: bold;">CUR. BACKLOG :
                                    <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_1_lblBCK_0">0</span>
                                </td>
                            </tr>
                        </tbody></table>
                        <table class="mrksheetdetail Mytable">
                            
                            
                            
                                    <tbody><tr>
                                        <th style="width: 70px;">sub code
                                        </th>
                                        <th style="width: 700px;">subject name
                                        </th>
                                        <th style="width: 20px;">E_AB
                                        </th>
                                        <th style="width: 20px;">TH ESE
                                        </th>
                                        <th th="" style="width: 20px;">TH PA
                                        </th>
                                        <th th="" style="width: 20px;">TH TOTAL
                                        </th>
                                        <th th="" style="width: 20px;">PR ESE
                                        </th>
                                        <th th="" style="width: 20px;">PR PA
                                        </th>
                                        <th th="" style="width: 20px;">PR TOTAL
                                        </th>
                                        <th th="" style="width: 20px;">Subject Grade
                                        </th>
                                    </tr>
                                
                                    <tr>
                                        <td align="center">
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_1_rptmarksheetHistoryInnerNew_0_TextBox3_0">3300005</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_1_rptmarksheetHistoryInnerNew_0_TextBox4_0">BASIC PHYSICS (GROUP-2)</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_1_rptmarksheetHistoryInnerNew_0_Label9_0">-</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_1_rptmarksheetHistoryInnerNew_0_Label2_0">BC</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_1_rptmarksheetHistoryInnerNew_0_Label3_0">CD</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_1_rptmarksheetHistoryInnerNew_0_Label4_0">BC</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_1_rptmarksheetHistoryInnerNew_0_Label5_0">AB</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_1_rptmarksheetHistoryInnerNew_0_Label7_0">AB</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_1_rptmarksheetHistoryInnerNew_0_Label8_0">AB</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_1_rptmarksheetHistoryInnerNew_0_Label1_0">BC</span>
                                        </td>
                                    </tr>
                                
                                    <tr>
                                        <td align="center">
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_1_rptmarksheetHistoryInnerNew_0_TextBox3_1">3320002</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_1_rptmarksheetHistoryInnerNew_0_TextBox4_1">ADVANCED MATHEMATICS (GROUP-1)</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_1_rptmarksheetHistoryInnerNew_0_Label9_1">-</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_1_rptmarksheetHistoryInnerNew_0_Label2_1">CC</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_1_rptmarksheetHistoryInnerNew_0_Label3_1">BB</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_1_rptmarksheetHistoryInnerNew_0_Label4_1">BC</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_1_rptmarksheetHistoryInnerNew_0_Label5_1">-</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_1_rptmarksheetHistoryInnerNew_0_Label7_1">-</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_1_rptmarksheetHistoryInnerNew_0_Label8_1">-</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_1_rptmarksheetHistoryInnerNew_0_Label1_1">BC</span>
                                        </td>
                                    </tr>
                                
                                    <tr>
                                        <td align="center">
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_1_rptmarksheetHistoryInnerNew_0_TextBox3_2">3320701</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_1_rptmarksheetHistoryInnerNew_0_TextBox4_2">Basic Electronics</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_1_rptmarksheetHistoryInnerNew_0_Label9_2">-</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_1_rptmarksheetHistoryInnerNew_0_Label2_2">CD</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_1_rptmarksheetHistoryInnerNew_0_Label3_2">CC</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_1_rptmarksheetHistoryInnerNew_0_Label4_2">CC</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_1_rptmarksheetHistoryInnerNew_0_Label5_2">CC</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_1_rptmarksheetHistoryInnerNew_0_Label7_2">CC</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_1_rptmarksheetHistoryInnerNew_0_Label8_2">CC</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_1_rptmarksheetHistoryInnerNew_0_Label1_2">CC</span>
                                        </td>
                                    </tr>
                                
                                    <tr>
                                        <td align="center">
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_1_rptmarksheetHistoryInnerNew_0_TextBox3_3">3320702</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_1_rptmarksheetHistoryInnerNew_0_TextBox4_3">Advanced Computer Programming</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_1_rptmarksheetHistoryInnerNew_0_Label9_3">-</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_1_rptmarksheetHistoryInnerNew_0_Label2_3">DD</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_1_rptmarksheetHistoryInnerNew_0_Label3_3">CD</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_1_rptmarksheetHistoryInnerNew_0_Label4_3">DD</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_1_rptmarksheetHistoryInnerNew_0_Label5_3">BC</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_1_rptmarksheetHistoryInnerNew_0_Label7_3">BC</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_1_rptmarksheetHistoryInnerNew_0_Label8_3">BC</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_1_rptmarksheetHistoryInnerNew_0_Label1_3">CC</span>
                                        </td>
                                    </tr>
                                
                                    <tr>
                                        <td align="center">
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_1_rptmarksheetHistoryInnerNew_0_TextBox3_4">3321601</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_1_rptmarksheetHistoryInnerNew_0_TextBox4_4">Fundamental Of Information Technology</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_1_rptmarksheetHistoryInnerNew_0_Label9_4">-</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_1_rptmarksheetHistoryInnerNew_0_Label2_4">-</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_1_rptmarksheetHistoryInnerNew_0_Label3_4">-</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_1_rptmarksheetHistoryInnerNew_0_Label4_4">-</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_1_rptmarksheetHistoryInnerNew_0_Label5_4">BC</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_1_rptmarksheetHistoryInnerNew_0_Label7_4">BC</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_1_rptmarksheetHistoryInnerNew_0_Label8_4">BC</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_1_rptmarksheetHistoryInnerNew_0_Label1_4">BC</span>
                                        </td>
                                    </tr>
                                
                                    <tr>
                                        <td align="center">
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_1_rptmarksheetHistoryInnerNew_0_TextBox3_5">3990001</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_1_rptmarksheetHistoryInnerNew_0_TextBox4_5">Contributor Personality Development</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_1_rptmarksheetHistoryInnerNew_0_Label9_5">-</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_1_rptmarksheetHistoryInnerNew_0_Label2_5">BC</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_1_rptmarksheetHistoryInnerNew_0_Label3_5">AB</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_1_rptmarksheetHistoryInnerNew_0_Label4_5">BB</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_1_rptmarksheetHistoryInnerNew_0_Label5_5">AB</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_1_rptmarksheetHistoryInnerNew_0_Label7_5">AB</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_1_rptmarksheetHistoryInnerNew_0_Label8_5">AB</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_1_rptmarksheetHistoryInnerNew_0_Label1_5">BB</span>
                                        </td>
                                    </tr>
                                
                        </tbody></table>
                    
            
                <table class="mrksheet Mytable">
                    <tbody><tr>
                        <th>Sem
                            <span id="rptmarksheetHistoryOuter_Label6_2">3</span>
                        </th>
                    </tr>
                </tbody></table>
                
                        <table class="Session">
                            <tbody><tr>
                                <td>

                                    
                                    <span id="lblSession" class="Ses">Winter - 2019</span>
                                    <span id="lblSeatno" class="Ses">(Seat No : D322646)</span>
                                </td>
                                <td align="right" style="font-weight: bold;">CUR. BACKLOG :
                                    <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_2_lblBCK_0">0</span>
                                </td>
                            </tr>
                        </tbody></table>
                        <table class="mrksheetdetail Mytable">
                            
                            
                            
                                    <tbody><tr>
                                        <th style="width: 70px;">sub code
                                        </th>
                                        <th style="width: 700px;">subject name
                                        </th>
                                        <th style="width: 20px;">E_AB
                                        </th>
                                        <th style="width: 20px;">TH ESE
                                        </th>
                                        <th th="" style="width: 20px;">TH PA
                                        </th>
                                        <th th="" style="width: 20px;">TH TOTAL
                                        </th>
                                        <th th="" style="width: 20px;">PR ESE
                                        </th>
                                        <th th="" style="width: 20px;">PR PA
                                        </th>
                                        <th th="" style="width: 20px;">PR TOTAL
                                        </th>
                                        <th th="" style="width: 20px;">Subject Grade
                                        </th>
                                    </tr>
                                
                                    <tr>
                                        <td align="center">
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_2_rptmarksheetHistoryInnerNew_0_TextBox3_0">3330701</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_2_rptmarksheetHistoryInnerNew_0_TextBox4_0">Operating System</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_2_rptmarksheetHistoryInnerNew_0_Label9_0">-</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_2_rptmarksheetHistoryInnerNew_0_Label2_0">DD</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_2_rptmarksheetHistoryInnerNew_0_Label3_0">AA</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_2_rptmarksheetHistoryInnerNew_0_Label4_0">CC</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_2_rptmarksheetHistoryInnerNew_0_Label5_0">AB</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_2_rptmarksheetHistoryInnerNew_0_Label7_0">AB</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_2_rptmarksheetHistoryInnerNew_0_Label8_0">AB</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_2_rptmarksheetHistoryInnerNew_0_Label1_0">BC</span>
                                        </td>
                                    </tr>
                                
                                    <tr>
                                        <td align="center">
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_2_rptmarksheetHistoryInnerNew_0_TextBox3_1">3330704</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_2_rptmarksheetHistoryInnerNew_0_TextBox4_1">Data Structure</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_2_rptmarksheetHistoryInnerNew_0_Label9_1">-</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_2_rptmarksheetHistoryInnerNew_0_Label2_1">CD</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_2_rptmarksheetHistoryInnerNew_0_Label3_1">CC</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_2_rptmarksheetHistoryInnerNew_0_Label4_1">CC</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_2_rptmarksheetHistoryInnerNew_0_Label5_1">AA</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_2_rptmarksheetHistoryInnerNew_0_Label7_1">BB</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_2_rptmarksheetHistoryInnerNew_0_Label8_1">BB</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_2_rptmarksheetHistoryInnerNew_0_Label1_1">BC</span>
                                        </td>
                                    </tr>
                                
                                    <tr>
                                        <td align="center">
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_2_rptmarksheetHistoryInnerNew_0_TextBox3_2">3331601</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_2_rptmarksheetHistoryInnerNew_0_TextBox4_2">Digital Memory System</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_2_rptmarksheetHistoryInnerNew_0_Label9_2">-</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_2_rptmarksheetHistoryInnerNew_0_Label2_2">BC</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_2_rptmarksheetHistoryInnerNew_0_Label3_2">AA</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_2_rptmarksheetHistoryInnerNew_0_Label4_2">BB</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_2_rptmarksheetHistoryInnerNew_0_Label5_2">AA</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_2_rptmarksheetHistoryInnerNew_0_Label7_2">AA</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_2_rptmarksheetHistoryInnerNew_0_Label8_2">AA</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_2_rptmarksheetHistoryInnerNew_0_Label1_2">AB</span>
                                        </td>
                                    </tr>
                                
                                    <tr>
                                        <td align="center">
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_2_rptmarksheetHistoryInnerNew_0_TextBox3_3">3331602</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_2_rptmarksheetHistoryInnerNew_0_TextBox4_3">Computer Graphics</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_2_rptmarksheetHistoryInnerNew_0_Label9_3">-</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_2_rptmarksheetHistoryInnerNew_0_Label2_3">BB</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_2_rptmarksheetHistoryInnerNew_0_Label3_3">BB</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_2_rptmarksheetHistoryInnerNew_0_Label4_3">BB</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_2_rptmarksheetHistoryInnerNew_0_Label5_3">AA</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_2_rptmarksheetHistoryInnerNew_0_Label7_3">AA</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_2_rptmarksheetHistoryInnerNew_0_Label8_3">AA</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_2_rptmarksheetHistoryInnerNew_0_Label1_3">AB</span>
                                        </td>
                                    </tr>
                                
                                    <tr>
                                        <td align="center">
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_2_rptmarksheetHistoryInnerNew_0_TextBox3_4">3331603</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_2_rptmarksheetHistoryInnerNew_0_TextBox4_4">Software Practices With Vb.net</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_2_rptmarksheetHistoryInnerNew_0_Label9_4">-</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_2_rptmarksheetHistoryInnerNew_0_Label2_4">-</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_2_rptmarksheetHistoryInnerNew_0_Label3_4">-</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_2_rptmarksheetHistoryInnerNew_0_Label4_4">-</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_2_rptmarksheetHistoryInnerNew_0_Label5_4">AB</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_2_rptmarksheetHistoryInnerNew_0_Label7_4">AB</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_2_rptmarksheetHistoryInnerNew_0_Label8_4">AB</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_2_rptmarksheetHistoryInnerNew_0_Label1_4">AB</span>
                                        </td>
                                    </tr>
                                
                        </tbody></table>
                    
            
                <table class="mrksheet Mytable">
                    <tbody><tr>
                        <th>Sem
                            <span id="rptmarksheetHistoryOuter_Label6_3">4</span>
                        </th>
                    </tr>
                </tbody></table>
                
                        <table class="Session">
                            <tbody><tr>
                                <td>

                                    
                                    <span id="lblSession" class="Ses">Summer - 2020</span>
                                    <span id="lblSeatno" class="Ses">(Seat No : D418114)</span>
                                </td>
                                <td align="right" style="font-weight: bold;">CUR. BACKLOG :
                                    <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_3_lblBCK_0">0</span>
                                </td>
                            </tr>
                        </tbody></table>
                        <table class="mrksheetdetail Mytable">
                            
                            
                            
                                    <tbody><tr>
                                        <th style="width: 70px;">sub code
                                        </th>
                                        <th style="width: 700px;">subject name
                                        </th>
                                        <th style="width: 20px;">E_AB
                                        </th>
                                        <th style="width: 20px;">TH ESE
                                        </th>
                                        <th th="" style="width: 20px;">TH PA
                                        </th>
                                        <th th="" style="width: 20px;">TH TOTAL
                                        </th>
                                        <th th="" style="width: 20px;">PR ESE
                                        </th>
                                        <th th="" style="width: 20px;">PR PA
                                        </th>
                                        <th th="" style="width: 20px;">PR TOTAL
                                        </th>
                                        <th th="" style="width: 20px;">Subject Grade
                                        </th>
                                    </tr>
                                
                                    <tr>
                                        <td align="center">
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_3_rptmarksheetHistoryInnerNew_0_TextBox3_0">3341601</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_3_rptmarksheetHistoryInnerNew_0_TextBox4_0">Information Communication Technology</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_3_rptmarksheetHistoryInnerNew_0_Label9_0">-</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_3_rptmarksheetHistoryInnerNew_0_Label2_0">BC</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_3_rptmarksheetHistoryInnerNew_0_Label3_0">BB</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_3_rptmarksheetHistoryInnerNew_0_Label4_0">BB</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_3_rptmarksheetHistoryInnerNew_0_Label5_0">AA</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_3_rptmarksheetHistoryInnerNew_0_Label7_0">AB</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_3_rptmarksheetHistoryInnerNew_0_Label8_0">AB</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_3_rptmarksheetHistoryInnerNew_0_Label1_0">BB</span>
                                        </td>
                                    </tr>
                                
                                    <tr>
                                        <td align="center">
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_3_rptmarksheetHistoryInnerNew_0_TextBox3_1">3341602</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_3_rptmarksheetHistoryInnerNew_0_TextBox4_1">Object Oriented Programming</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_3_rptmarksheetHistoryInnerNew_0_Label9_1">-</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_3_rptmarksheetHistoryInnerNew_0_Label2_1">CC</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_3_rptmarksheetHistoryInnerNew_0_Label3_1">CC</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_3_rptmarksheetHistoryInnerNew_0_Label4_1">CC</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_3_rptmarksheetHistoryInnerNew_0_Label5_1">AB</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_3_rptmarksheetHistoryInnerNew_0_Label7_1">AB</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_3_rptmarksheetHistoryInnerNew_0_Label8_1">AB</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_3_rptmarksheetHistoryInnerNew_0_Label1_1">BB</span>
                                        </td>
                                    </tr>
                                
                                    <tr>
                                        <td align="center">
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_3_rptmarksheetHistoryInnerNew_0_TextBox3_2">3341603</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_3_rptmarksheetHistoryInnerNew_0_TextBox4_2">Fundamentals Of Software Development</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_3_rptmarksheetHistoryInnerNew_0_Label9_2">-</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_3_rptmarksheetHistoryInnerNew_0_Label2_2">BC</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_3_rptmarksheetHistoryInnerNew_0_Label3_2">BB</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_3_rptmarksheetHistoryInnerNew_0_Label4_2">BC</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_3_rptmarksheetHistoryInnerNew_0_Label5_2">AA</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_3_rptmarksheetHistoryInnerNew_0_Label7_2">AB</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_3_rptmarksheetHistoryInnerNew_0_Label8_2">AB</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_3_rptmarksheetHistoryInnerNew_0_Label1_2">BB</span>
                                        </td>
                                    </tr>
                                
                                    <tr>
                                        <td align="center">
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_3_rptmarksheetHistoryInnerNew_0_TextBox3_3">3341604</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_3_rptmarksheetHistoryInnerNew_0_TextBox4_3">Internet Technology</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_3_rptmarksheetHistoryInnerNew_0_Label9_3">-</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_3_rptmarksheetHistoryInnerNew_0_Label2_3">CC</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_3_rptmarksheetHistoryInnerNew_0_Label3_3">CC</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_3_rptmarksheetHistoryInnerNew_0_Label4_3">CC</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_3_rptmarksheetHistoryInnerNew_0_Label5_3">AB</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_3_rptmarksheetHistoryInnerNew_0_Label7_3">AB</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_3_rptmarksheetHistoryInnerNew_0_Label8_3">AB</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_3_rptmarksheetHistoryInnerNew_0_Label1_3">BB</span>
                                        </td>
                                    </tr>
                                
                                    <tr>
                                        <td align="center">
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_3_rptmarksheetHistoryInnerNew_0_TextBox3_4">3341605</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_3_rptmarksheetHistoryInnerNew_0_TextBox4_4">Database Management</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_3_rptmarksheetHistoryInnerNew_0_Label9_4">-</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_3_rptmarksheetHistoryInnerNew_0_Label2_4">CC</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_3_rptmarksheetHistoryInnerNew_0_Label3_4">CD</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_3_rptmarksheetHistoryInnerNew_0_Label4_4">CD</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_3_rptmarksheetHistoryInnerNew_0_Label5_4">AB</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_3_rptmarksheetHistoryInnerNew_0_Label7_4">AB</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_3_rptmarksheetHistoryInnerNew_0_Label8_4">AB</span>
                                        </td>
                                        <td>
                                            <span id="rptmarksheetHistoryOuter_rptmarksheetHistoryOuterInner_3_rptmarksheetHistoryInnerNew_0_Label1_4">BC</span>
                                        </td>
                                    </tr>
                                
                        </tbody></table>
                    
            
        <div>
            <span id="printDateTime" style="color:Black;font-weight:bold;">Print/View Date-Time :15 March, 2021 - 23:48:51</span>
            -S1
        </div>
    </div>
            </div>
            <div class="clear">
            </div>
        </div>
        <div class="footer">
        </div>
    

<script type="text/javascript">
//<![CDATA[
WebForm_AutoFocus('btnSubmit');//]]>
</script>
</form>


</body>
</html>