<?
include 'header.php';
session_start();
?>
<?
    




if (isset($_POST['submit1'])) {
    if($_SESSION['submit1'] == true){
        header('location:adminPanel.php?error=ha');
    }
    $users = $_POST['users'];
    $users = $_POST['passwords'];
    if (isset($_POST['users']) && isset($_POST['passwords'])) {
        if ($_POST['users'] != '' && $_POST['passwords'] != '') {
            foreach ($_SESSION['xotira'] as $xotira) {
                if ($_POST['users'] === $xotira['user'] && $_POST['passwords'] === $xotira['pass']) {
                    header('location:adminPanel.php?error=ha');
                } else {

                    header('location:login1.php?error=yoq');
                }
            }
        } else {
            header('location:login1.php?error=toldiring');
        }
    }else {
        header('location:login1.php?error=toldiring');
    }
}



?>
<div class="conteiner">
    <div class="row">
        <div class="col-6 offset-3">
            <?
            if (isset($_GET['error'])) {
                if ($_GET['error'] == 'yoq') {
            ?>

                    <center class="mt-5 mb-5">
                        <h1 class="alert alert-danger"> <i class="bi bi-exclamation-octagon-fill "></i> Parol yoki Login xato</h1>
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
                if ($_GET['error'] == 'toldiring') {
            ?>

                    <center class="mt-5 mb-5">
                        <h1 class="alert alert-danger"> <i class="bi bi-exclamation-octagon-fill "></i> Login va Parolni Kiriting</h1>
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

            <p class="text-center lead ">Kirish</p>
            <form action="login1.php" method="post" class="">
                <div class="input-group mt-3">
                    <span class="input-group-text"><i class="bi bi-at"></i></span>
                    <input type="text" name="users" placeholder="Username" class="form-control">
                </div>
                <div class="input-group mt-3">
                    <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
                    <input type="password" name="passwords" id="" placeholder="Password" class="form-control">
                </div>
                <div class="input-group mt-3">
                    <input type="submit" name="submit1" id="" class="btn btn-outline-success btn-lg w-100 m-5">
                </div>
            </form>
        </div>
    </div>
</div>


<? include 'footer.php'; ?>