<?
include 'header_admin.php';
session_start();


?>

<div class="conteiner text-end ">
    <center>
        <h1 class="text-success">Welcome to Admin</h1>

        <section>
            <div class="conteiner " style="margin:5% 20% ;">
                <div>
                    <div class="d-flex align-items-end flex-column">
                        <div style="margin:-3% 18%"> <a href="exit.php" class="btn btn-outline-danger ">All delete</a></div>
                    </div>
                    <div class="d-flex">
                        <div class="mb-5 " style="margin:-3% 18%"> <a href="index.php" class="btn btn-outline-info ">Exit</a></div>
                    </div>
                </div>

                <table class="table table-bordered table-secondary table-secondary table-hover">
                    <thead class="table-primary">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Username</th>
                            <th scope="col">Password</th>
                        </tr>
                    </thead>
                    <? $n = 1;
                    foreach ($_SESSION['xotira'] as $xotira) {
                    ?>
                        <tbody>
                            <tr>
                                <th scope="row"  class="table-warning"><?= $n ?></th>
                                <td><?= $xotira['name'] ?></td>
                                <td class="table-success"><?= $xotira['user'] ?></td>
                                <td><?= $xotira['pass'] ?></td>
                            </tr>

                        </tbody>
                    <? $n++;
                    } ?>
                </table>
            </div>

        </section>
    </center>
</div>


<? include 'footer_admin.php'; ?>