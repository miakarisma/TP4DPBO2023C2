<?php
include_once("conf.php");
include_once("models/Job.class.php");
include_once("views/Job.view.php");

class JobController {
  private $job;

  function __construct(){
    $this->job = new Job(Conf::$db_host, Conf::$db_user, Conf::$db_pass, Conf::$db_name);
  }

  public function index() {
    $this->job->open();
    $this->job->read();
    $data = array();
    while($row = $this->job->getResult()){
      array_push($data, $row);
    }

    $this->job->close();

    $view = new JobView();
    $view->render($data);
  }

  
  function add($data){
    $this->job->open();
    $this->job->create($data);
    $this->job->close();
    
    header("location:index.php?job");
  }

  function edit($id, $data){
    $this->job->open();
    $this->job->update($id, $data);
    $this->job->close();
    
    header("location:index.php?job");
  }

  function delete($id){
    $this->job->open();
    $this->job->delete($id);
    $this->job->close();
    
    header("location:index.php?job");
  }

  function formAddEdit($id) {
    $this->job->open();
    $this->job->readbyId($id);
    $data = $this->job->getResult();
    $this->job->close();

    $view = new JobView();
    $view->viewFormAddEdit($id, $data);
  }


}