# Hospital 
# ######################
# Database
- Entity
# ######################
# Relations

# ######################
# Ui
<!-- <!-- <th><?php for ($i = 0; $i < count($names); $i++) {
                echo $names[$i];
            } ?></th> -->
<th><?php foreach ($doctor as $docData) {
        foreach ($category as $catData) {
            if ($docData['categoryID'] == $catData['id']) {
                echo $catData['name'] . " ";
            }
        }
    } ?></th> -->

    

<!-- <div class="form-group">
                    <label>Category Name</label>
                    <select name="catID" class="custom-select">
                        <?php foreach ($cat as $data) { ?>
                            <option value="<?php echo $data['id'] ?>"> <?php echo $data['name'] ?></option1>
                            <?php } ?>
                    </select>
                </div> -->


                                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                            Categories
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item " href="/hospital/category/add.php">Add</a>
                            <a class="dropdown-item" href="/hospital/category/list.php">List</a>
                        </div>
                    </li>

                                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                            Categories
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item " href="/hospital/category/add.php">Add</a>
                            <a class="dropdown-item" href="/hospital/category/list.php">List</a>
                        </div>
                    </li>