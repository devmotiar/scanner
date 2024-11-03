<?php include_once"admin/connect.php";?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<HTML>

<HEAD>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="referrer" content="never">
    <meta name="referrer" content="no-referrer">
    <meta content="origin" id="mref" name="referrer">
    <META content="text/html; charset=iso-8859-1" http-equiv=Content-Type>
    <META content="Microsoft FrontPage 6.0" name=GENERATOR>



    <TITLE> Chhatrapati Shaw Ji Maharaj University, Kanpur Examination Results</TITLE>





    <link rel="stylesheet" href="captcha1.css">



    <TITLE> Chhatrapati Shaw Ji Maharaj University, Kanpur Examination Results</TITLE>

    <style>
    <!--
    table {
        font-family: PrimaSans BT, Verdana, sans-serif;
        font-size: x-small
    }

    .style1 {
        font-size: 16px;
        font-weight: bold;
    }

    .style4 {
        font-size: 16px;
        font-weight: bold;
        color: #800000;
    }

    .style5 {
        color: #0000FF;
        font-weight: bold;
    }
    -->
    </style>

</HEAD>

<BODY bgcolor="#FFFFFF" link="#804000" vlink="#804000" alink="#804000" topmargin="0" leftmargin="0" marginwidth="0"
    marginheight="0" onLoad="newwin()">


    <CENTER>
        <div align="center">
            <center>
                <TABLE border=0 width="100%">
                    <TBODY>
                        <tr>
                            <td bgColor="#FFFFFF" height="40" width="15%" align="center">
                                <h2><strong>
                                        <font color="#006699" face="Arial" size="5">
                                            <span style="font-weight: 400">CSJM University, Kanpur<br>
                                                Chhatrapati Shaw Ji Maharaj University, Kanpur Examination Results<br>
                                            </span>
                                        </font>
                                        <font color="#ffffff" face="MS Sans Serif" size="2">brought
                                            to you by</font>
                                        <font face="MS Sans Serif" size="2" color="#FFFFFF">&nbsp; </font>
                                        <b>Under Om Prakash Chaubey Mahavidyalaya</b> <b></b>
                                        <span style="font-weight: 400">
                                            <font size="2" color="#006699" face="Arial">Managed by </font>
                                        </span>
                                        <font color="#ffffff" face="Arial" size="3">
                                            <a href="https://www.nic.in/" style="COLOR: #006699; text-decoration:none">
                                                National Informatics Centre</span>
                                        </font></a>
                                    </strong></h2>
                                <hr>
                            </td>
                        </tr>
                        <TR>
                            <TD valign="middle" align="center">
                                <P><span class="style1">
                                        <font color="#800000" face="Arial">&nbsp; Chhatrapati Shaw Ji Maharaj
                                            University, Kanpur Examination Results</font>
                                    </span><br>
                                    &nbsp;
                                    <center>
                                        /* <FORM action=result-view.php method=post name=FrontPage_Form1
                                            onSubmit="return FrontPage_Form1_Validator(this), checkform(this)">

                                            <P> <br>
                                                <b>
                                                    <font size="2">Please Enter Your Enrollment No. : </font>
                                                </b>

                                                <br>
                                                <INPUT name=roll size=20 maxlength=25>&nbsp;

                                            </P>




                                            <P align="center">
                                                <INPUT name=B1 type=submit value=Submit><INPUT name=B2 type=reset
                                                    value=Reset>
                                                <BR>
                                        </FORM> */

                                        <FORM method="post" name="FrontPage_Form1">

                                            <P> <br>
                                                <b>
                                                    <font size="2">Please Enter Your Enrollment No. : </font>
                                                </b>

                                                <br>
                                                <INPUT name="roll" size="20" maxlength="25">&nbsp;

                                            </P>




                                            <P align="center">
                                                <INPUT name="B1" type="submit" value="Submit"><INPUT name="B2"
                                                    type=reset value="Reset">
                                                <BR>
                                        </FORM>
                                    </center>
                            </TD>
                        </TR>
                        <td background="Drag to a file to choose it." bgcolor="#FFFFFF">
                            <div align="center">&nbsp;</div>
                            <div align="center">&nbsp;</div>
                            <div align="center">&nbsp;</div>


                </TABLE>
            </center>
        </div>
    </CENTER>

    <div>
        <?php
      if (isset($_REQUEST['B1'])) {
      	$roll = $_REQUEST['roll'];
      	
      	$sql = mysqli_query($con,"SELECT * FROM result WHERE rollno = '$roll'");
      	if (mysqli_num_rows($sql) > 0) {
      		$row = mysqli_fetch_assoc($sql);
      			?>
        <tr>

            <td>Enrollment No: <?php echo $row['rollno'];?></td>
            <td><?php echo $row['content'];?></td>

        </tr>
        <?php
      		 
      	}else{
            echo "<td> No result found!</td>";

        }	
      	}
      ?>


    </div>



    <div align="center">
        <center>

            <table border="0">
                <tr>
                    <td width="100%" bgcolor="#FFFFFF">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#FFBC79"
                            style="WIDTH: 80%" align=center>
                            <tr>
                                <td align="middle" bgcolor="#E1E1E1"><br>
                                    <br>
                                    <br>
                                    &nbsp;
                                </td>
                                <td align="middle" bgcolor="#E1E1E1">
                                    <font face="Arial">DISCLAIMER</font>
                                    <p>
                                        <font face="Arial" size="2">Neither <A href="https://www.nic.in/">NIC</A>
                                            nor Board/Council/Institution/University is responsible
                                            for any inadvertent error that may have crept in the
                                            results being published on NET. The results published on
                                            net are for immediate information to the examinees.
                                            These cannot be treated as original mark sheets.
                                            Respective</a>
                                            Board/Council/Institution/University has provided the data and
                                            intimated for publication.</font>
                                    <p align="justify"> <br>
                                </td>
                                <td align="center" bgcolor="#FFFFF">
                                    <p align="justify">
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </center>
    </div>


    <p align="center">
        <font face="Arial">Hosted By <a href="http://www.nic.in" target="_blank">National Informatics Centre (NIC)
            </a><br>
            Data Provided By Chhatrapati Shaw Ji Maharaj University, Kanpur</font>
    </p>



</BODY>

</HTML>