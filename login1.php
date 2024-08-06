<?
include 'header.php';
session_start();
?>
<?


if (isset($_POST['submit1'])) {
    $users = $_POST['users'];
    $users = $_POST['passwords'];
    if (isset($_POST['users']) && isset($_POST['passwords'])) {
        if ($_POST['users'] != '' && $_POST['passwords'] != '') {
            foreach ($_SESSION['xotira'] as $xotira) {
                if ($_POST['users'] === $xotira['user'] && $_POST['passwords'] === $xotira['pass']) {
                    header('location:adminPanel.php?error=ha');
                } else {

                    header('location:Panel.php?error=yoq');
                }
            }
        }
    }
}



?>
<div class="conteiner">
    <div class="row mt-4  justify-content-center">
        <div class="col-6 card bg-light">
            <h2 class="fs-1 text-center pt-3 ">
                Sign up
            </h2>
            <p class="text-center lead ">Kirish</p>
            <form action="login1.php" method="post">
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