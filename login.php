<? include 'header.php'; ?>
<?
session_start();

if (empty($_SESSION['xotira'])) {
    $_SESSION['xotira'] = [];
}



if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $passC = $_POST['c_password'];
    if (isset($name) && isset($user) && isset($pass) && isset($passC)) {
        if ($name != "" && $user != "" && $pass != "" && $pass != "") {
            if ($pass == $passC) {
                array_push($_SESSION['xotira'], [
                    'name' => $name,
                    'user' => $user,
                    'pass' => $pass
                ]);
                header('location:login1.php');
            } else {
                header('location:login.php?error=true');
            }
        } else {
            header('location:login.php?error=toldir');
        }
    } else {
        header('location:login.php?error=toldir');
    }
}



?>
<div class="conteiner">
    <div class="row">
        <div class="col-6 offset-3">
            <?
            if (isset($_GET['error'])) {
                if ($_GET['error'] == 'toldir') {
            ?>

                    <center class="mt-5 mb-5">
                        <h1 class="alert alert-danger"> <i class="bi bi-exclamation-octagon-fill "></i> Ma'lumot To'ldiring</h1>
                    </center>
            <?
                }
            }
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-6 offset-3">
            <?
            if (isset($_GET['error'])) {
                if ($_GET['error'] == 'true') {
            ?>

                    <center class="mt-5 mb-5">
                        <h1 class="alert alert-danger"> <i class="bi bi-exclamation-octagon-fill "></i> Parollar bir birga mos emas</h1>
                    </center>
                <?
                }
                if ($_GET['error'] == 'userbor') {
                ?>

                    <center class="mt-5 mb-5">
                        <h1 class="alert alert-danger"> <i class="bi bi-exclamation-octagon-fill "></i>Bunday foydalanuvchi bor</h1>
                    </center>
            <?
                }
            }
            ?>
        </div>
    </div>
    <div class="row mt-4  justify-content-center">
        <a href="index.php" type="button" class="btn-close " aria-label="Close"></a>
        <div class="col-6 card bg-light">
            <h2 class="fs-1 text-center pt-3 ">
                Sign up
            </h2>
            <p class="text-center lead ">Ro'yhatdan o'tish</p>
            <form action="login.php" method="post">
                <div class="input-group mt-3">
                    <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                    <input type="text" name="name" id="" placeholder="Full Name" class="form-control">
                </div>
                <div class="input-group mt-3">
                    <span class="input-group-text"><i class="bi bi-at"></i></span>
                    <input type="text" name="username" id="autoSizingInputGroup" placeholder="Username" class="form-control">
                </div>
                <div class="input-group mt-3">
                    <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
                    <input type="password" name="password" id="" placeholder="Password" class="form-control">
                </div>
                <div class="input-group mt-3">
                    <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
                    <input type="password" name="c_password" id="" placeholder="Confirm Password" class="form-control">
                </div>
                <div class="input-group mt-3">
                    <input type="submit" name="submit" id="" class="btn btn-outline-success btn-lg w-100 m-5">
                </div>
            </form>
        </div>
    </div>
</div>

<? include 'footer.php'; ?>