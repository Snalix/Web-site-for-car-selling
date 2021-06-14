<?php

class UserRepository extends Db
{
public function create($data) {
$sql = "
INSERT INTO users(id, username, password, email, u_role)
VALUES(NULL, :username, :password, :email,'user')
";
$stmt = $this->conn->prepare($sql);
$stmt->bindValue(":username", $data["username"], PDO::PARAM_STR);
$stmt->bindValue(":password", $data["password"], PDO::PARAM_STR);
$stmt->bindValue(":email", $data["email"], PDO::PARAM_STR);
return $stmt->execute();
}

public function getByUsernameAndPassword($username, $password) {
$sql = "
SELECT * FROM users
WHERE username = :username AND password = :password
";
$stmt = $this->conn->prepare($sql);
$stmt->bindValue(":username", $username, PDO::PARAM_STR);
$stmt->bindValue(":password", $password, PDO::PARAM_STR);
$stmt->execute();
return $stmt->fetch(PDO::FETCH_OBJ);
}
}