<?php
session_start();

require('connect.php');




function dd($value) // to be deleted
{
    echo "<pre>", print_r($value, true),"</pre>";
    die();
}

function executeQuery($sql, $data)
{
    global $conn;
    $stmt = $conn->prepare($sql); // prepare statement for security pupose
    $values = array_values($data);
    $types = str_repeat('s', count($values)); // take a string and repeat a no. of times
    $stmt->bind_param( $types, ...$values); // $stmt->bind_param($conditions, 'ss'); php is smart enough to typecast string into php
    $stmt->execute();
    return $stmt;
}



function selectOne($table, $conditions = [])
{
    global $conn;
    $sql = "SELECT * FROM $table"; // query
    

    // // return records that match conditions...
    // $sql = "SELECT * FROM users WHERE admin = 0 AND username = 'Rajat' LIMIT"
    $i = 0;
    foreach ( $conditions as $key => $value ) {
        if ( $i === 0)
        {
            $sql = $sql . " WHERE $key = ?";
        } else {
            $sql = $sql . " AND $key = ?";
        }
        $i++;
    }
    // dd($sql);

    // $sql = "SELECT * FROM users WHERE admin = 0 AND username = 'Rajat' LIMIT"
    $sql = $sql . " LIMIT 1";

    $stmt = executeQuery($sql, $conditions);
    $records = $stmt->get_result()->fetch_assoc();
    return $records;
    
    
}



function selectAll($table, $conditions = [])
{
    global $conn;
    $sql = "SELECT * FROM $table"; // query
    if (empty($conditions)) {
        $stmt = $conn->prepare($sql); // prepare statement for security pupose
        $stmt->execute();
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    }else{
        // // return records that match conditions...
        // $sql = "SELECT * FROM users WHERE username "
        $i = 0;
        foreach ( $conditions as $key => $value ) {
            if ( $i === 0)
            {
                $sql = $sql . " WHERE $key = ?";
            } else {
                $sql = $sql . " AND $key = ?";
            }
            $i++;
        }
        // dd($sql);
        $stmt = $stmt = executeQuery($sql, $conditions);
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    }
    
}

function create( $table, $data)
{
    global $conn;
    // $sql = "INSERT INTO users (username, admin, email, password) VALUES (?, ?, ?, ?)" // no differnce between them
    //$sql = "INSERT INTO users SET username = ?, admin = ?, email = ?, password = ?"
    $sql = "INSERT INTO $table SET";
    $i = 0;
    foreach ( $data as $key => $value ) {
        if ( $i === 0)
        {
            $sql = $sql . " $key = ?";
        } else {
            $sql = $sql . ", $key = ?";
        }
        $i++;
    }
    $stmt = executeQuery($sql, $data);
    $id = $stmt->insert_id;
    return $id;
    
}


function update( $table, $id, $data)
{
    global $conn;

    //$sql = "UPDATE users SET username = ?, admin = ?, email = ?, password = ? WHERE id = ?" 
    $sql = "UPDATE $table SET";
    $i = 0;
    foreach ( $data as $key => $value ) {
        if ( $i === 0)
        {
            $sql = $sql . " $key = ?";
        } else {
            $sql = $sql . ", $key = ?";
        }
        $i++;
    }

    $sql = $sql . " WHERE id = ?";
    $data['id'] = $id;
    $stmt = executeQuery($sql, $data);
    return $stmt->affected_rows;
    
}


function delete( $table, $id )
{
    global $conn;

    //$sql = "DELETE FROM users WHERE id = ?"
    $sql = "DELETE FROM $table WHERE id = ?";
   
    $stmt = executeQuery($sql, ['id' => $id]);
    return $stmt->affected_rows;
    
}


// example conditions : - 
// $data = ['admin' => 1,
//         'username' => 'Rohit Vishwas',
//          'email' => 'sav127rajat@gmail.com',
//          'password' => '147852369'         
// ];

// $id = update('users', 2, $data);
// dd($id);



// $id = delete('users', 2);
// dd($id);