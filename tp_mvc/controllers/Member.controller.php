<?php
include_once("conf.php");
include_once("models/Member.class.php");
include_once("models/Job.class.php");
include_once("views/Member.view.php");

class MemberController {
  private $member;
  private $job;

  function __construct(){
    $this->member = new Member(Conf::$db_host, Conf::$db_user, Conf::$db_pass, Conf::$db_name);
    $this->job = new Job(Conf::$db_host, Conf::$db_user, Conf::$db_pass, Conf::$db_name);
  }

  public function index() {
    $this->member->open();
    $this->member->read();
    $data = array();
    while($row = $this->member->getResult()){
      array_push($data, $row);
    }

    $this->member->close();

    $view = new MemberView();
    $view->render($data);
  }

  
  function add($data){
    $this->member->open();
    $this->member->create($data);
    $this->member->close();
    
    header("location:index.php");
  }

  function edit($id, $data){
    $this->member->open();
    $this->member->update($id, $data);
    $this->member->close();
    
    header("location:index.php");
  }

  function delete($id){
    $this->member->open();
    $this->member->delete($id);
    $this->member->close();
    
    header("location:index.php");
  }

  function formAddEdit($id) {
    $this->member->open();
    $this->member->readbyId($id);
    $data = $this->member->getResult();
    $this->member->close();

    $this->job->open();
    $this->job->read();
    $jobs = array();
    while($row = $this->job->getResult()){
      array_push($jobs, $row);
    }
    $this->job->close();

    $view = new MemberView();
    $view->viewFormAddEdit($id, $data, $jobs);
  }

}