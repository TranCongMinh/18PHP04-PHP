<table class="table">
                <tr>
                  <th style="width: 10px">ID</th>
                  <th>Name</th>
                  <th>Avatar</th>
                  <th style="width: 40px">Action</th>
                </tr>
                <?php while ($row = $listUser->fetch_assoc()) {
                    $id = $row['id'];
                  ?>
                  <tr>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['username']?></td>
                    <td><img src="<?php echo "img/".$row['avatar']?>"></td>
                    <td>
                    <a href="admin.php?action=edit_user&id=<?php echo $id;?>"><button type="button">EDIT</button></a> 
                    <a href="admin.php?action=delete_user&id=<?php echo $id;?>"><button type="button">DELETE</button></a>
                    </td>
                  </tr>
                <?php }?>
              </table>