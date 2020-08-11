<?php

$usr = $con->prepare ('SELECT link FROM extra WHERE id="serv"');
$usr->execute();

$res = $usr->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="col pr-2  ml-4 " style="padding-top: 5% ;">
    <div class="d-flex head-page-4">
        <div class="col">
            <h3 class="mt-3 pb-0 mb-0">Services</h3>
        </div>
    </div>


    <hr class="mt-0">
    <div class="containerr p-2" >
        <div class="col-auto  mx-auto mr-1  " >

            <table class="table ">
                <tbody class="mx-auto">
                    <form action="?data=7" method="post">
                    <textarea class="form-control" name="serv" style="position: fixed;height: 70%;width: 87%;"><?= $res[0]['link']; ?></textarea>
                        <div class="   mt-1  col">
                            <input type="submit" class="btn btn-light  text-white bg-primary" style="position: fixed;top: 92%;width: 85%;" value="Save">
                        </div>
                    </form>
                </tbody>
            </table>
        </div>

    </div>


</div>

<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>tinymce.init({selector:'textarea'});</script>