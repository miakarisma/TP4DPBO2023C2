<?php

class Job extends DB
{
    function read()
    {
        $query = "SELECT * FROM job";

        return $this->execute($query);
    }

    function readbyId($id)
    {
        $query = "SELECT * FROM job WHERE id_job='$id'";

        return $this->execute($query);
    }

    function create($data)
    {
        $name_job = $data['name_job'];
        $salary = $data['salary'];

        $query = "INSERT INTO job VALUES (NULL, '$name_job', '$salary')";
        return $this->execute($query);
        // return $this->executeAffected($query);
    }

    function update($id, $data)
    {
        $name_job = $data['name_job'];
        $salary = $data['salary'];

        $query = "UPDATE job SET name_job='$name_job', salary='$salary' WHERE id_job='$id'";
        return $this->execute($query);
        // return $this->executeAffected($query);
    }

    function delete($id)
    {
        $query = "DELETE FROM job where id_job='$id'";
        // return $this->executeAffected($query);
        return $this->execute($query);
    }
}