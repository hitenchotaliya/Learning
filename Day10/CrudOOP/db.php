<?php

use function PHPSTORM_META\type;

class Database
{

    private $db_host = "localhost";
    private $db_user = "root";
    private $db_pass = "root";
    private $db_name = "test";

    private $mysqli = "";
    private $result = array();
    private $conn = false;


    public function __construct()
    {
        if (!$this->conn) {
            $this->mysqli = new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
            $this->conn = true;
            if ($this->mysqli->connect_errno) {
                array_push($this->result, $this->mysqli->connect_error);
                echo "Connection failed: " . $this->mysqli->connect_error;
                return false;
            }
        } else {
            return true;
        }
    }


    //Close connection
    public function  __destruct()
    {
        if ($this->conn) {
            if ($this->mysqli->close()) {
                $this->conn = false;
                return true;
            }
        } else {
            return false;
        }
    }

    private function TableExist($TableName)
    {
        $sql = "SHOW TABLES FROM $this->db_name LIKE '$TableName'";
        $TableInDB = $this->mysqli->query($sql);

        if ($TableInDB !== false) {
            if ($TableInDB->num_rows == 1) {
                return true;
            } else {
                array_push($this->result, $TableName . " Table does not exist in database.");
                return false;
            }
        } else {
            // Handle query execution error
            array_push($this->result, "Error executing query: " . $this->mysqli->error);
            return false;
        }
    }
    public function GetResult()
    {
        $StoreData = $this->result;
        $this->result = array();
        return $StoreData;
    }

    public function Select($table, $rows = "*", $join = null, $where = null, $orderby = null, $limit = null)
    {
        if ($this->TableExist($table)) {
            $sql = "SELECT $rows FROM $table";
            if ($join != null) {
                $sql .= " JOIN $join";
            }
            if ($where != null) {
                $sql .= " WHERE $where";
            }
            if ($orderby != null) {
                $sql .= " ORDER BY $orderby";
            }
            if ($limit != null) {
                if (isset($_GET['page'])) {
                    $page = $_GET['page'];
                } else {
                    $page = 1;
                }
                $start = ($page - 1) * $limit;
                $sql .= " LIMIT $start,$limit";
            }

            echo $sql;
            $query = $this->mysqli->query($sql);
            if ($query) {
                $this->result = $query->fetch_all(MYSQLI_ASSOC);
                return true;
            } else {
                array_push($this->result, $this->mysqli->error);
                return false;
            }
        } else {
            array_push($this->result, $this->mysqli->error);
        }
    }
    public function sql($sql)
    {
        $query = $this->mysqli->query($sql);

        if ($query) {
            $this->result = $query->fetch_all(MYSQLI_ASSOC);
            return true;
        } else {
            array_push($this->result, $this->mysqli->error);
            return false;
        }
    }
    public function Insert($TableName, $Values = array())
    {
        if ($this->TableExist($TableName)) {
            print_r($Values);

            $table_columns = implode(',', array_keys($Values));
            $table_value = implode("','", $Values);
            $sql = "INSERT into $TableName($table_columns) Values ('$table_value')";
            // echo $sql;
            if ($this->mysqli->query($sql)) {
                array_push($this->result, $this->mysqli->insert_id);
                return true;
            } else {
                array_push($this->result, $this->mysqli->error);
                return false;
            }
        } else {
            return false;
        }
    }

    public function Update($TableName, $Values = array(), $Where = "")
    {
        if ($this->TableExist($TableName)) {

            // print_r($Values);
            $args = array();
            foreach ($Values as $key => $value) {
                $args[] = "$key= '$value'";
            }
            echo "<pre>";
            print_r($args);
            $sql = "UPDATE $TableName SET " . implode(',', $args);
            if ($Where != null) {
                $sql .= "WHERE $Where";
            }
            if ($this->mysqli->query($sql)) {
                array_push($this->result, $this->mysqli->affected_rows);
                return true;
            } else {
                array_push($this->result, $this->mysqli->error);
                return false;
            }
            // echo $sql;
        } else {
            return false;
        }
    }

    public function Delete($TableName, $Where = null)
    {
        if ($this->TableExist($TableName)) {
            $sql = "DELETE FROM $TableName ";
            if ($Where != null) {
                $sql .= "WHERE $Where";
            }
            if ($this->mysqli->query($sql)) {
                array_push($this->result, $this->mysqli->affected_rows);
                return true;
            } else {
                array_push($this->result, $this->mysqli->error);
                return false;
            }
            echo $sql;
        } else {
            return false;
        }
    }

    public function Pagination($table, $join = null, $where = null, $limit = null)
    {
        if ($this->TableExist($table)) {
            if ($limit != null) {
                // Count total records
                $sql = "SELECT COUNT(*) FROM $table";

                if ($join != null) {
                    $sql .= " JOIN $join";
                }
                if ($where != null) {
                    $sql .= " WHERE $where";
                }
                $query = $this->mysqli->query($sql);

                // Get total records count
                $TotalRecords = $query->fetch_array();
                $TotalRecords = $TotalRecords[0];

                // Calculate total pages based on the limit
                $TotalPage = ceil($TotalRecords / $limit);

                // Get the current page from the URL
                $url = basename($_SERVER['PHP_SELF']);

                if (isset($_GET['page'])) {
                    $page = $_GET['page'];
                } else {
                    $page = 1;
                }


                $TResult = "<ul class='pagination'>";

                // Display Previous button if not on the first page
                if ($page > 1) {
                    $TResult .= "<li><a href='$url?page=" . ($page - 1) . "'>Prev</a></li>";
                }

                // Loop for displaying page numbers
                for ($i = 1; $i <= $TotalPage; $i++) {
                    if ($i == $page) {
                        $cls = "class='active' style='color:red'";
                    } else {
                        $cls = "";
                    }
                    // Page number links
                    $TResult .= "<li><a $cls href='$url?page=$i'>$i</a></li>";
                }
                // Display Next button if not on the last page
                if ($page < $TotalPage) {
                    $TResult .= "<li><a href='$url?page=" . ($page + 1) . "'>Next</a></li>";
                }
                $TResult .= "</ul'>";


                return $TResult;
            } else {
                return false; // Pagination is not applicable without a limit
            }
        } else {
            array_push($this->result, $this->mysqli->error);
        }
    }
}
