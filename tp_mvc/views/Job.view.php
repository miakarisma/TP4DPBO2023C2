<?php
    class JobView{
        public function render($data)
        {
            $dataJob = null;
            $no = 1;
            foreach($data as $row) {
                $dataJob .= "
                    <tr>
                    <th>" . $no . "</th>
                    <td>" . $row['name_job'] . "</td>
                    <td>" . $row['salary'] . "</td>
                    <td>
                        <a class='btn btn-success' href='index.php?id_editJob=" . $row['id_job'] . "'>Edit</a>
                        <a class='btn btn-danger' href='index.php?id_hapusJob=" . $row['id_job'] . "'>Delete</a>
                    </td>
                    </tr>
                ";

                $no++;
            }

            $tpl = new Template("templates/job.html");
            $tpl->replace("DATA_JOB", $dataJob);
            $tpl->write();
        }

        public function viewFormAddEdit($id, $data)
        {
            $tpl = new Template("templates/addeditjob.html");
            $title = "Create New Job";
            if ($id != null) {
                $title = "Edit Job";
                $tpl->replace("DATA_VAL_JOB", $data['name_job']);
                $tpl->replace("DATA_VAL_SALARY", $data['salary']);
                $tpl->replace("DATA_ID", $id);
            }
            $tpl->replace("DATA_TITLE", $title);
            $tpl->write();
        }
    }
?>