<?PHP

if ($_POST['submit'] == "OK" && $_POST['login'] && $_POST['passwd'])
{
	$user = $_POST['login'];
	$pass = $_POST['passwd'];
	$pass = hash('sha512', $pass);
	$path = '../private';
	$file = $path . '/passwd';
	if (!file_exists($path)) {
		mkdir($path);
	}
	$userdata = [];
	if (file_exists($file)) {
		$data = file_get_contents($file);
		$userdata = unserialize($data);
	}
	if ($userdata[$user]) {
		echo 'ERROR' . "\n";
		return;
	}
	$userdata[$user] = [
		'login' => $user,
		'passwd' => $pass
	];
	$data = serialize($userdata);
	file_put_contents($file, $data);
	echo 'OK' . "\n";
}
else {
	echo 'ERROR' . "\n";
	return;
}
?>