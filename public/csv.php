<?

function saveFile($items, $fileName) {
	$handle = fopen($filename, 'w');

	foreach($items, $item) {
		fwrite($handle, $item . PHP_EOL)
	}
	fclose($handle);
}

$addressbook = [
	['Marvel Comics', 'PO Box 1527', 'Long Island City', 'NY', '11101'],
	['LucasArts', 'PO Box 29901', 'San Francisco', 'CA', '94129']
];

$handle = fopen('address_book.csv', 'w');

foreach()


$heading = array('User ID', 'Username', 'First Name', 'Last Name', 'Is Admin');
$users = array(

	array(
		'id' => '1',
		'username' => 'creyna',
		'first_name' => 'Christopher',
		'last_name' => 'Reyna',
		'is_admin' => TRUE
		),
	array(
		'id' => '2',
		'username' => 'treyna',
		'first_name' => 'Toby',
		'last_name' => 'Reyna',
		'is_admin' => FALSE
		)

);
$handle = fopen('users.csv', 'w');