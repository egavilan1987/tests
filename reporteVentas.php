
221










































To do
PHP, HTML, CSS, JS, and MySQL practice
Write about what's going on right now.
Reading
Reading book
Search for MySQL courses. 











PHP, HTML, CSS, JS, and MySQL practice
---------------------------------------------------------------------------------------------------------------------

DATA BASE

USE ventas;
CREATE TABLE facturas (
     id_factura INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
     id_user INT NOT NULL,
     id_product INT NOT NULL,
     items INT NOT NULL,
     subtotal DECIMAL (6,2) NOT NULL,   
     impuesto DECIMAL (6,2) NOT NULL,
     total DECIMAL (6,2) NOT NULL,
     created_date DATETIME NOT NULL,
     updated_date DATETIME NOT NULL
);


---------------------------------------------------------------------------------------------------------------------
ventas.php

<!DOCTYPE html>
<html>
<head>
<title>Ventas</title>
</head>
<body>
<form method="POST" action="ventas.php">
     <table width='500' border='3' >
         <tr bgcolor='dodgerBlue'>
             <th colspan='50'>Registro de Ventas
                </th>
            </tr>
            <tr>
             <td align='right'>Customers
                </td>
                <td>
                 <select name='customer'>
                     <option value='A'>Enmanuel </option>
                        <option value='B'>Gavilan </option>
                        <option value='C'>Cruz</option>
                    </select>
                </td>
            </tr>
            <tr>
             <td align='right'>Item
                </td>
                <td>
                 <select name='customer'>
                     <option value='A'>Articulo 1 | Precio: 800 | En Inventario: 20</option>
                        <option value='B'>Articulo 2 | Precio: 250 | En Inventario: 25</option>
                        <option value='C'>Articulo 3 | Precio: 350 | En Inventario: 23</option>
                    </select>
                </td>
            </tr>
            <tr>
             <td align='right'>Number of Items
                </td>
                <td>
                 <input>
                </td>
            </tr>            
            <tr>
             <td colspan='50' align='center'>
                 <input type='submit' name='submit'>
                </td>
            </tr>
        </table>        
    </form>
    <br><br>
<table width='600' border='3'>
     <tr align='center' bgcolor='dodgerBlue' >
         <th colspan='10'>Reporte de Venta</th>
        </tr>
        <tr>
            <th>Customer</th>
            <th>Item</th>
            <th>Quantity</th>
            <th>Subtotal</th>
            <th>Taxes</th>
            <th>Total</th>
        </tr>
        <tr>
            <td>Enamnuel Gavilan</td>
            <td>Iphone 3</td>
            <td>3</td>
            <td>300</td>
            <td>50</td>
            <td>350</td>          
        </tr>        
    </table>
</body>
</html>

******************************************************************
ventaReporte.php (CRUD)


<!DOCTYPE html>
<html>
<head>
<title>Reporte de Ventas</title>
</head>
<body>
<table width='600' border='3'>
     <tr align='center' bgcolor='dodgerBlue' >
         <th colspan='10'>Reporte de Ventas</th>
        </tr>
        <tr>
         <th>No.</th>
            <th>Customer</th>
            <th>Item</th>
            <th>Quantity</th>
            <th>Subtotal</th>
            <th>Taxes</th>
            <th>Total</th>
            <th colspan='3'>Action</th>
        </tr>
        <tr>
         <td>1</td>
            <td>Enamnuel Gavilan</td>
            <td>Iphone 3</td>
            <td>3</td>
            <td>300</td>
            <td>50</td>
            <td>350</td>
            <td>
             <a href="#">View</a>
            </td>
            <td>
             <a href="#">Update</a>
            </td>
            <td>
             <a href="#">Delete</a>
            </td>            
        </tr>        
    </table>
</body>
</html>










































