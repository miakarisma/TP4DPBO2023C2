<?php

class Member extends DB
{
    function read()
    {
        $query = "SELECT * FROM members JOIN job ON members.id_job=job.id_job ORDER BY members.id_member";

        return $this->execute($query);
    }

    function readbyId($id)
    {
        $query = "SELECT * FROM members JOIN job ON members.id_job=job.id_job WHERE members.id_member='$id'";

        return $this->execute($query);
    }    

    function create($data)
    {
        $name = $data['name'];
        $email = $data['email'];
        $phone = $data['phone'];
        $join_date = $data['join_date'];
        $id_job = $data['id_job'];

        $query = "INSERT INTO members VALUES (NULL, '$name', '$email', '$phone', '$join_date', '$id_job')";

        return $this->execute($query);
    }

    function update($id, $data)
    {
        $name = $data['name'];
        $email = $data['email'];
        $phone = $data['phone'];
        $join_date = $data['join_date'];
        $id_job = $data['id_job'];

        $query = "UPDATE members SET name='$name', email='$email', phone='$phone', join_date='$join_date', id_job='$id_job' WHERE id_member='$id'";
        return $this->execute($query);
        // return $this->executeAffected($query);
    }

    function delete($id)
    {
        $query = "DELETE FROM members where id_member='$id'";
        return $this->execute($query);
        // return $this->executeAffected($query);
    }
}