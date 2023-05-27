<?php
include_once("models/Template.class.php");
include_once("models/DB.class.php");
include_once("controllers/Member.controller.php");
include_once("controllers/Job.controller.php");

$member = new MemberController();
$job = new JobController();

if (isset($_POST['submit'])) {
    if ($_GET['id_edit'] > 0) {
        $id = $_GET['id_edit'];
        $member->edit($id, $_POST);
    }
    else {
        //memanggil add
        $member->add($_POST);
    }
} 
else if (isset($_POST['submitJob'])) {
    if ($_GET['id_editJob'] > 0) {
        $id = $_GET['id_editJob'];
        $job->edit($id, $_POST);
    }
    else {
        //memanggil add
        $job->add($_POST);
    }
}
else if(isset($_GET['add'])) {
    // memanggil form add
    $member->formAddEdit(null);
} 
else if (isset($_GET['addJob'])) {
    // memanggil form add
    $job->formAddEdit(null);
}
else if (!empty($_GET['id_hapus'])) {
    //memanggil add
    $id = $_GET['id_hapus'];
    $member->delete($id);
} 
else if (!empty($_GET['id_hapusJob'])) {
    //memanggil add
    $id = $_GET['id_hapusJob'];
    $job->delete($id);
}
else if (!empty($_GET['id_edit']))
{
    $id = $_GET['id_edit'];
    $member->formAddEdit($id);
}
else if (!empty($_GET['id_editJob']))
{
    $id = $_GET['id_editJob'];
    $job->formAddEdit($id);
}
else if(isset($_GET['job'])) {
    // memanggil form add
    $job->index();
} 
else{
    $member->index();
}
