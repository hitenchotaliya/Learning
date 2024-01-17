<?php
//Join
$sql="Select ptable.pid,ptable.pname , ctable.cname
from ptable
JOIN ctable ON ctable.cid = ptable.pid;";

$sql="SELECT cname FROM ptable NATURAL JOIN ctable;";

$right="SELECT pname, cname
FROM ctable
RIGHT OUTER JOIN ptable ON ptable.pid = ctable.pid";