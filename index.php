<?php
include_once "lib/JSONClass.php";
error_reporting( E_ALL );

$json = new JSONClass('blog.json');
$blog = $json->jsonDecode();
//echo $blog->shopperEmail . "<br>";
//echo $blog->contents[0]->productID . "<br>";
//echo $blog->contents[0]->productName . "<br>";

$page = '<!doctype html><head>
<title>' . $blog->title . '</title>
<meta charset="utf-8">
</head><body>';

/*
// DEBUGGING
$posts = $blog->contents;
echo '<pre>';
var_dump($posts);
echo '</pre>';
*/

for ($i = count($blog->contents); $i > 0; $i--){

	$page .= '<h1>' . $blog->contents[$i -1 ]->title . '</h1>';
	$page .= '<p>' . $blog->contents[$i - 1]->date . '</p>';
	$page .= $blog->contents[$i - 1]->post . '<hr>';
}
$page .= '</body></html>';
echo $page; // Output HTML

?>
