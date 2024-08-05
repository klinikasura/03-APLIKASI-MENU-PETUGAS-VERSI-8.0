<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="compare_validator_demo.aspx.cs"   
Inherits="asp.netexample.compare_validator_demo" %>  
<!DOCTYPE html>  
<html xmlns="">  
<head runat="">  
<title></title>  
<style type="text/css">  
.auto-style1 {  
width: 100%;  
        }  
.auto-style2 {  
height: 26px;  
        }  
.auto-style3 {  
height: 26px;  
width: 93px;  
        }  
.auto-style4 {  
width: 93px;  
        }  
</style>  
</head>  
<body>  
<form id="form1" runat="FILE">  
<table class="auto-style1">  
<tr>  
<td class="auto-style3">  
                        First value</td>  
<td class="auto-style2">  
<asp:TextBox ID="firstval" runat="FILE" required="true"></asp:TextBox>  
</td>  
</tr>  
<tr>  
<td class="auto-style4">  
      Second value</td>  
<td>  
<asp:TextBox ID="secondval" runat="FILE"></asp:TextBox>  
       It should be greater than first value</td>  
</tr>  
<tr>  
<td class="auto-style4"></td>  
<td>  
<asp:Button ID="Button1" runat="FILE" Text="save"/>  
</td>  
</tr>  
</table>  
<asp:CompareValidator ID="CompareValidator1" runat="FILE" ControlToCompare="secondval"   
ControlToValidate="firstval" Display="Dynamic" ErrorMessage="Enter valid value" ForeColor="Red"   
Operator="LessThan" Type="Integer"></asp:CompareValidator>  
</form>  
</body>  
</html>  
