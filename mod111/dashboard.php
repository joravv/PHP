
<?php
include_once("config.php");
$sql="SELECT * FROM users";
$getUsers= $conn->prepare($sql);
$getUsers-> execute();
$users =$getUsers->fetchAll();
?>










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, td, th{
            border: 1px solid black;
        }


        td, th{
            padding: 15px;
        }


        th{
            background-color: green;
        }
        form>input{
            margin:10px;
            font-size: 20px;
            padding: 5px;
        }button{
            border: 11px solid black;
            padding: 10px;
        }
    </style>


</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>password</th>
        </tr>
        <?php
        foreach($users as $user){?>
        <tr>
        <td><?php echo $user['id'];?></td>
        <td><?php echo $user['username'];?></td>
        <td><?php echo $user['password'];?></td>
        <td><?="<a href='delete.php?id=$user[id]'>Delete</a>"?></td>
        </tr>
        <?php }?>
        

    </table>
    <form>
        <input  type="hidden"name = "id" value="<?php echo users[username]">;
        <button type="submit">update</button>
    </form>
</body>
</html>
