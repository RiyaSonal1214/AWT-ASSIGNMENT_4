
<!doctype html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Assignmen4</title>
    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  
}

td {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
  background-color:red;
  
}
th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
  background-color:green;
  padding: 10px;
}
    </style>
     
</head>

<body style="background-color: black;color: yellow;">
    <center>
        <h2 class="pb-2"><u>
                Billing Section</u></p>
        </h2>
        <hr style="height: 3px; color: yellow;">
        <div class="row py-1">
            <div class="col d-flex justify-content-center">
            <form method="POST" name="myform">
                <div class="pb-4 d-flex justify-content-start">
                    <label for="cars">Please select a item:</label><br>
                    </div>
                    <div class="d-flex justify-content-start">
                        <select name="items" id="items" onchange="myform.submit();">
                        <option value="">Select Item</option>
                            <option value="Pencil">Pencil</option>
                            <option value="Pen">Pen</option>
                            <option value="Eraser">Eraser</option>
                            <option value="Book">Book</option>
                            <option value="Scale">Scale</option>
                          </select> 
                    </div>
                  </form>
                    <?php  
if($_POST){
static $it ="";
$SLNO=" ";
 $n1=" ";
$price=" ";
$code=" ";
$qty=" ";
  $it = $_POST['items'];
  if($it == "Pencil")
  {
 $SLNO = "101";
$n1 ="Pencil";
$price="20";
$code = "101";
$qty = "";
  }
  if($it == "Pen")
  {
 $SLNO = "102";
$n1 ="Pen";
$price="30";
$code = "102";
$qty = "";
  }
  if($it == "Eraser")
  {
 $SLNO = "103";
$n1 ="Eraser";
$price="5";
$code = "104";
$qty = "";
  }
  if($it == "Book")
  {
 $SLNO = "104";
$n1 ="Book";
$price="30";
$code = "107";
$qty = "";
  }
  if($it == "Scale")
  {
 $SLNO = "105";
$n1 ="Scale";
$price="10";
$code = "108";
$qty = "";
  }
}
  
echo '<table>
                    <tr>
                    <th>Desciprtion</th>
                      <th>Values</th>                      
                    </tr>
                    <tr>
                      <td> SL_NO</td>
                      <td><input type="number" name="slno" value="'.$SLNO.'"   readonly></td>                     
                    </tr>
                    <tr>
                      <td>ITEM NAME</td>
                      <td><input type="text" name="name1" value="'. $n1 .'"   readonly></td>                  
                    </tr>
                    <tr>
                      <td>ITEM PRICE </td>
                      <td><input type="number" name="price" value="'.$price.'" readonly></td>                     
                    </tr>
                    <tr>
                      <td>ITEM CODE</td>
                      <td><input type="number" name="code" value="'.$code.'" readonly></td>                
                    </tr>
                    <tr>
                      <td> QUANTITY </td>
                      <td><input type="number" name="qty" value="'.$qty.'"></td>                      
                    </tr>
                  </table>';
?>
                     <br>
                     <form method="post">
                  <input type="submit" value="Bill" name="bill">
                 </form>
            </div>
        </div>
    </center>
    
</body>

</html>




