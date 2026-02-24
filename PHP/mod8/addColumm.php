<? php
try{
     $pdo= new pdo("mysql:host=localhost; dbanme=testnita," "root", "")
    $username:"Jack";
    $password=password_hash("mypassword", PASSWORD_DEFAULT);

    $sql="INSERT INTO users(username,password) VALUES ('$username','$password')";
    $pdo->exec($sql);
    echo "new record ctreated successfully";
}catch(DOExcption $e){
    echo $e->getMessag
}