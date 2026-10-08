<?php
require_once 'includes/page/header.php';

if (isset($_POST["username"], $_POST["full_name"], $_POST["password"])) {
    $reg_statement = $connection->getPdo()->prepare("INSERT 
    INTO user (username, full_name, password, user_token) 
    VALUES (?,?,?,?)");
    $reg_statement->execute([
        $_POST["username"],
        $_POST["full_name"],
        sha1($_POST["password"]),
        md5(uniqid(mt_rand(), true)),
    ]);
}
?>
<div class="container mt-5">
    <div class="row">
        <form method="POST" action="<?php echo $_SERVER["PHP_SELF"] ?>">
            <div class="w-50 m-auto">
                <label class="form-label">Felhasználónév</label>
                <input type="text" name="username" class="form-control">
                <label class="form-label">Teljes név</label>
                <input type="text" name="full_name" class="form-control">
                <label class="form-label">Jelszó</label>
                <input type="password" name="password" class="form-control">

                <br>
                <button type="submit" class="btn btn-primary m-auto">Elküld</button>
        </form>
    </div>
</div>
</div>
<?php
require_once 'includes/page/end.php';
?>