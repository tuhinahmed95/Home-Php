<!-- Modals -->
<!-- Add products modal -->
<dialog id="my_modal_1" class="modal ">
    <div class="modal-box " style="max-width:800px;">
        <form method="post" action="ViewCode.php">
            
            <label for="name">Name</label><br>
            <input name="name" type="text" id="name" class="input-field"><br>


            <label for="brand_id">Brand</label><br>
            <select  class="select-field" name="brand_id" id="brand_id">
                <?php
                    $conn = mysqli_connect('localhost', 'root', '', 'dhakamart');
                    $query = "SELECT * FROM brand";
                    $query_run = mysqli_query($conn,  $query);
                    if (mysqli_num_rows($query_run)>0) {
                    foreach ($query_run as $row) {
                    ?>
                    <option value="<?php echo $row['id']?>"><?php echo $row ['name']?></option>
                    <?php
                 }
                }
                ?>
            
            </select><br>


            <div class="modal-action modal_btn">
                <input type="text" name="test">
                <!-- if there is a button in form, it will close the modal -->
                <button class="btn" type="submit" name="add_category">ADD</button>
            </div>

        </form>
        <form method="dialog">
            <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
        </form>
    </div>
</dialog>
<!-- Add products modal end-->
<!-- Modals End-->
<!-- -------------------------------------Content start form here---------------------------------------------- -->
<!-- Products table header -->
<div class="flex gap-3 items-center justify-center my-5">
    <div class="border-t flex-grow "></div>
    <h1 class="text-center font-bold text-2xl">Category Table</h1>
    <div class="border-t flex-grow "></div>
</div>
<!-- Add Product -->
<div class="flex justify-end my-4">
    <button class="btn btn-md btn-secondary view-details " onclick="my_modal_1.showModal()">
        <i class="fa-regular fa-square-plus"></i> Add Category
    </button>
</div>
<!-- Products Table -->
<div class="">
    <table class="custom-table">
        <thead>
            <tr>
                <th>#ID</th>
                <th>Name</th>
                <th>Brand</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $conn = mysqli_connect('localhost', 'root', '', 'dhakamart');
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            $query = "SELECT category.id, category.name, brand.name bname from category, brand where category.brand_id = brand.id";
            $query_run = mysqli_query($conn,  $query);
            if (mysqli_num_rows($query_run) > 0) {
                foreach ($query_run as $row) {
            ?>
                    <tr>
                        <th><?php echo $row["id"] ?></th>
                        
                        <td><?php echo $row["name"] ?></td>
                        <td><?php echo $row["bname"] ?></td>
                        
                        <td>
                            <!-- You can open the modal using ID.showModal() method -->
                            <div class="tooltip" data-tip="Edit">

                                <a href="CategoryEdit.php?id=<?php echo $row["id"] ?>"><i style="color:green; font-size:20px;" class="fa-regular fa-pen-to-square"></i></a>

                            </div>
                            <!-- Delete Button -->
                            <div class="tooltip" data-tip="Delete">
                                <form action="ViewCode.php" method="post">
                                    <button type="submit" name="delete_cat" value="<?php echo $row['id'] ?>"><i style="color:red; font-size:20px;" class="fa-regular fa-trash-can"></i></button>
                                </form>
                            </div>
                            <!-- View details button -->
                            <!-- <div class="tooltip" data-tip="Details">
                                <button onclick="my_modal_2.showModal()">
                                    <i style="color:#007bff; font-size:20px; margin-left:10px;" class="fa-regular fa-eye"></i>
                                </button>
                            </div> -->
                        </td>
                    </tr>

            <?php
                }
            } else {

                echo "<h1>No records found</h1>";
            }
            ?>

        </tbody>
    </table>
</div>