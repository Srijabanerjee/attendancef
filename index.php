<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Online Attendance</title>
    <style type="text/css">
      .style1{
        font-family: "Courier New", monospace;
        font-size: 60px;
        color: #FFFFFF;
        font-style: italic;
      }
      .style2{
        font-size: 24px;
        color: #FFF;
      }
      .style6{
        color: black;
        font-size: 16px;
      }
    </style>
  </head>
  <body>
    <table width="900" border="2" align="center">
      <tr>
        <td bordercolor="Green" bgcolor="green"> <h1 align="center"> <strong><span class="style1">Attendance Portal</span></strong></h1></td>
      </tr>

      <tr>
        <td bgcolor="#999966"> <div align="center">
          <?php
            include "menu.php";
          ?>
        </div> </td>
      </tr>

      <tr height="350">
        <td> <div align="center">
          <form class="" action="insertmember.php" method="post">
            <table width="400" border="2" align="center" bordercolor="#9966FF" bgcolor="#C7B6B1">
              <tr>
                <td colspan="2" bgcolor="green"> <div align="center"><strong><span class="style2">
                  Enter member's info </span> </strong>
                </div> </td>
              </tr>

              <tr>
                <td width="160"><span class="style6">CASPER ID.</span></td>
                <td width="222"><span class="style6"> <input type="text" name="casperid" value="casperid"> </span></td>
              </tr>


              <tr>
                <td width="160"><span class="style6">NAME</span></td>
                <td width="222"><span class="style6"> <input type="text" name="name" value="name"> </span></td>
              </tr>

              <tr>
                <td><span class="style6">MOBILE NO.</span></td>
                <td><span class="style6"> <input type="text" name="mobile" value="mobile"></span> </td>
              </tr>

              <tr>
                <td><span class="style6">MAIL ID</span></td>
                <td><span class="style6"> <input type="email" name="email" value="email"></span> </td>
              </tr>

              <tr>
                <td colspan="2"> <div align="center">
                  <input type="submit" value="Add Employee" name="btnsubmit">
                  &nbsp;
                  <input type="reset" name="btnreset" value="Reset">
                </div> </td>
              </tr>

            </table>
          </form>
        </div> </td>
      </tr>
    </table>
    <?php include "footer.php" ?>
  </body>
</html>
