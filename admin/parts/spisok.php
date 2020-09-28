
<div class="card-header ">
    <h4 class="card-title">Users</h4>
</div>
<div class="card-body table-full-width table-responsive">
    <table class="table table-hover table-striped">
        <thead>
            <th>ID</th>
            <th>ЛОГИН</th>
            <th>ТЕЛЕФОН</th>
            <th>ИМЯ</th>
            <th>ФАМИЛИЯ</th>
            <th>Email</th>
            <th>Status (click to change)</th>
        </thead>
        <tbody>
            <?php
            //получить всех клиентов
            $sql ="SELECT * FROM users";
            $result = $conn->query($sql);
            
            //цикл вывода всех клиентов
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['login']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td><?php echo $row['first_name']; ?></td>
                        <td><?php echo $row['second_name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        
                        <td id="statusUser"  onclick="changeStatus(this)" data-iduser="<?php echo $row["id"]; ?>"><?php  if($row['admin_param'] == 0){echo 'User';}else if($row['admin_param'] == 1){echo 'Admin';}; ?></td>
                        
                        </td>
                    </tr>
                <?php
                }
            ?> 
        </tbody>
    </table>
</div>
