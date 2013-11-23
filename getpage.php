<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<head>
<meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">
</head>
<body>
<?php include_once "markdown.php"; ?>

<?php 

// the page we are on determines where to look for posts
$page = htmlspecialchars(str_replace("/", "", $_GET["page"]));

// default to the first page
$page = intval($page == "" ? "1" : $page);

$file_list = scandir("pages", 1);
$total = count($file_list);

print('<div class="data">');

if ($page > 0 and $page < $total) {

    // use this line to read the diary last post first
    //$afilename = 'pages/' . $file_list[$page - 2];
    // or use this line to read it chronologically
    $afilename = 'pages/' . $page . '.md';

    if (file_exists($afilename)) {
        // grab the post contents
        $afilecontents = file_get_contents($afilename);
        // Markdownify
        $afilecontents = Markdown($afilecontents);
        print($afilecontents);
    } else {
        print('');
    }

}   // if mapped > 0

print('</div>');
?>
</div>
</body></html>
