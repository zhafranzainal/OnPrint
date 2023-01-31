<?php

function getUsersData($id)
{
	$array = array ();
	$query = mysqli_query("SELECT * FROM 'users' WHERE 'id' =" . $id);
while($r = mysqli_fetch_assoc($query))


{
		$array['id'] = $r['id'];
		$array['name'] = $r['name'];
		$array['mobile_no'] = $r['mobile_no'];
		$array['address_id'] = $r['address_id'];
}

	return $array;
}

function getid ($username)
{
    $query = $query = mysqli_query("SELECT 'id' FROM 'users' WHERE 'username' =". $username);
    while($r = mysqli_fetch_assoc($query))

    {
        return $r['id'];
    }
}

?>

<?php
//display the userdata

if (isset ($_SESSION['username']))
{
    $userdata = getUserData(getid($_SESSION['username']));
    ?>
    <?php echo $userdata ['username']

}
