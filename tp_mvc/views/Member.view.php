<?php
    class MemberView{
        public function render($data)
        {
            $no = 1;
            $dataMember = null;
            foreach($data as $row) {
                $dataMember .= "
                    <tr>
                    <th>" . $no . "</th>
                    <td>" . $row['name'] . "</td>
                    <td>" . $row['email'] . "</td>
                    <td>" . $row['phone'] . "</td>
                    <td>" . $row['join_date'] . "</td>
                    <td>" . $row['name_job'] . "</td>
                    <td>
                        <a class='btn btn-success' href='index.php?id_edit=" . $row['id_member'] . "'>Edit</a>
                        <a class='btn btn-danger' href='index.php?id_hapus=" . $row['id_member'] . "'>Delete</a>
                    </td>
                    </tr>
                ";

                $no++;
            }

            $tpl = new Template("templates/member.html");
            $tpl->replace("DATA_MEMBER", $dataMember);
            $tpl->write();
        }

        public function viewFormAddEdit($id, $data, $jobs)
        {
            $tpl = new Template("templates/addeditmember.html");
            $title = "Create New Member";
            $dataProfesi = null;
            // create input select option
            foreach($jobs as $row){
                $dataProfesi .= "
                <option value='". $row['id_job'] ."'>". $row['id_job'] ." - ". $row['name_job'] ."</option>
                ";
            }
            if ($id != null) {
                $title = "Edit Member";
                $tpl->replace("DATA_VAL_NAME", $data['name']);
                $tpl->replace("DATA_VAL_EMAIL", $data['email']);
                $tpl->replace("DATA_VAL_PHONE", $data['phone']);
                $tpl->replace("DATA_VAL_DATE", $data['join_date']);
                $tpl->replace("DATA_ID", $id);
            }
            $tpl->replace("DATA_TITLE", $title);
            $tpl->replace("DATA_VAL_JOB", $dataProfesi);
            $tpl->write();
        }
    }