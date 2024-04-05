<?php
    $conn = new mysqli('localhost','root','','company');

    if(isset($_POST['btn'])){ 
        $f_name = $_POST['fname'];
        $c_name = $_POST['contact'];
        $a_ddress = $_POST['address'];
        $conn->query(" call add_manufacture( '$f_name','$a_ddress','$c_name')");
    }

    ?>


    <h2>Manufacture Tabe</h2>
    <form action="#" method="post"> 
        <table> 
            <tr> 
                <td><label for="fname">Name</label></td>
                <td><input type="text" name="fname"></td>
            </tr>

          
            
            
            <tr> 
                <td><label for="contact">Contact</label></td>
                <td><input type="text" name ="contact"></td>
            </tr>
            <tr> 
                <td><label for="address">address</label></td>
                <td><input type="text" name="address"></td>
            </tr>

            <tr> 
                <td><input type="submit" name ="btn" value="submit"></td>
            </tr>
        </table>

    </form>


    <?php

    if(isset($_POST['btnsub'])){ 
        $p_name = $_POST['pname'];
        $p_price = $_POST['pprice'];
        $m_id = $_POST['manufac'];

        $conn->query("call add_product('$p_name','$p_price','$m_id')");
    }

    
    if(isset($_POST['butt'])){ 
        $p_name = $_POST['manufac'];

        $conn->query("delete from manufacture where id ='$p_name'");
    }


    ?>  


        <h1>Product Table</h1>
    <form action="#" method="post"> 
         
        <tr> 
            <td><label for="pname">Name</label></td><br>
            <td><input type="text" name="pname"></td><br><br>
        </tr>

        <tr> 
            <td><label for="pprine">Price</label></td><br>
            <td><input type="text" name="pprice"></td><br><br>
        </tr>

     

        <tr> 
            <td><label for="manufac">Manufacture Name</label></td>
            <td> 
                <select name="manufac">
                   <?php
                    $manufac = $conn->query("select * From manufacture");
                    while(list($mid,$name) = $manufac->fetch_row()){ 
                        echo "<option value='$mid'>$name</option>";
                    }

                   ?>

                </select>


            </td>
            
        </tr>


        <tr> 
            <td><input type="submit" name="btnsub" value="submit"></td><br><br>
        </tr>

            
    


        <form action="#" method="post"> 
            <tr> 
            <td><label for="manufac">Manufacture Name</label></td>
            <td> 
                <select name="manufac">
                   <?php
                    $manufac = $conn->query("select * From manufacture");
                    while(list($mid,$name) = $manufac->fetch_row()){ 
                        echo "<option value='$mid'>$name</option>";
                    }

                   ?>

                </select>


            </td>
            </tr>
           <tr> 
            <td><input type="submit" name="butt" value="delete"></td>
           </tr>

        </form>




    <h1>View Port</h1>  
    
    
    <Form> 

    <table border='1'> 

    <tr> 
        <th>Id</th>
        <th>Name</th>
        <th>Price</th>
        <th>Mname</th>
        <th>Address</th>
        <th>Contact No</th>
    </tr>

    <?php
    $product = $conn->query("select * From view_product");
    while(list($id,$name,$price,$mname,$address,$contact)=$product->fetch_row()){ 
        echo "<tr> 
                    <td>$id</td>
                    <td>$name</td>
                    <td>$price</td>
                    <td>$mname</td>
                    <td>$address</td>
                    <td>$contact</td>
            </tr>";
    }

    ?>

    </table>
       
    
    <h1>View condition</h1>  
    
    
    <Form> 

    <table border='1'> 

    <tr> 
        <th>Id</th>
        <th>Name</th>
        <th>Price</th>
    </tr>

    <?php
    $product = $conn->query("select * From select_product");
    while(list($id,$name,$price)=$product->fetch_row()){ 
        echo "<tr> 
                    <td>$id</td>
                    <td>$name</td>
                    <td>$price</td>
                    
                 
            </tr>";
    }

    ?>

    </table>