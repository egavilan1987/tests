<!DOCTYPE html>
<html>
<head>
     <title>Product Registration</title>
</head>
<body>
	<form action="product.php" method = "POST">
		<table align = 'center' border = '2' width = '500'>
        	<tr  align = 'center' bgcolor = 'dodgerBlue'>
            	<th colspan = '2'>
                	<h5>Products Registration</h5>
                </th>
            </tr>
            <tr>
            <td align = 'right'>Name</td>
            <td>
            	<input type = 'text' name='name'>
            </td>
            </tr>
            <tr>
            <td align = 'right'>Description</td>
            <td>
            	<input type = 'text' name='description'>
            </td>
            </tr>
            <tr>
            <td align = 'right'>Quantity</td>
            <td>
            	<input type = 'number' name='quantity'>
            </td>
            </tr>
            <tr>
            <td align = 'right'>Price</td>
            <td>
            	<input type = 'number' name='price'>
            </td>
            </tr>
            <tr><td colspan = '2' align = 'center'><input type = 'submit'></td>
            </tr>
          </table>
     </form>
</body>
</html>
