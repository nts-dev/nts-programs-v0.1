<?php

if (!file_exists('config.php')) {
    header("Location: http://{$_SERVER['HTTP_HOST']}/" . basename(dirname(__FILE__)) . "/install.php");
    exit;
}

$eid = filter_input(INPUT_GET, 'eid', FILTER_SANITIZE_NUMBER_INT);
if (!$eid) {
    header("location: login.php");
}

require_once('config.php');

// Make the connection:
$dbc = mysqli_connect($NTS_CFG->dbhost, $NTS_CFG->dbuser, $NTS_CFG->dbpass, $NTS_CFG->dbname);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

session_start();
$query_check_credentials = "SELECT contact_attendent,contact_id,contact_language_id,branch_id FROM relation_contact JOIN trainees ON trainees.IntranetID = relation_contact.contact_id WHERE contact_id = '" . $eid . "'";
$result_check_credentials = mysqli_query($dbc, $query_check_credentials);
if (!$result_check_credentials) {//If the QUery Failed 
    echo 'Query Failed ';
}
if (@mysqli_num_rows($result_check_credentials) == 1) {//if Query is successfull  // A match was made.
    $_SESSION = mysqli_fetch_array($result_check_credentials, MYSQLI_ASSOC); //Assign the result of this query to SESSION Global Variable
}
$username = $_SESSION['contact_attendent'];
$language = $_SESSION['contact_language_id'];
//}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Projects Program</title>
    <!-- <link rel="shortcut icon" href="Views/imgs/laptop_settings-512.png"  type="image/x-icon" > -->
    <script src="dhtmlxsuite4/codebase/dhtmlx.js"></script>
    <link rel="stylesheet" type="text/css" href="dhtmlxsuite4/codebase/dhtmlx.css"/>
    <link rel="stylesheet" type="text/css" href="dhtmlxsuite4/skins/terrace/dhtmlx.css"/>
    <link rel="stylesheet" type="text/css" href="dhtmlxsuite4/skins/web/dhtmlx.css"/>
    <!--         <link rel="stylesheet" type="text/css" href="Views/css/font-awesome/css/font-awesome.min.css"/>
            <link rel="stylesheet" type="text/css" href="Views/css/custom.css"/> -->

    <style>

        html, body {
            width: 100%;
            height: 100%;
            margin: 0px;
            overflow: hidden;
        }

        .dhxlayout_base_dhx_web div.dhx_cell_layout div.dhx_cell_cont_layout {
            /*border: none;*/
            padding: 0px !important;
        }
    </style>
    <script>

        var myLayout;
        var myToolbar;

        function doOnLoad() {

            myLayout = new dhtmlXLayoutObject(document.body, "1C");
            myLayout.cells("a").hideHeader();

            var myToolbar = myLayout.attachToolbar();
            // myToolbar.setIconset("awesome");
            myToolbar.addButton('def', 0, 'Projects', '', '');
            myToolbar.addSeparator('button_separator_1', 1);
            myToolbar.addButton('videos', 2, 'Videos', '', '');
            myToolbar.addSeparator('button_separator_2', 3);
            myToolbar.addButton('doc_extract', 4, 'Goodle Doc Extract', '', '');
            myToolbar.addSeparator('button_separator_3', 5);
            myToolbar.addText('welcomeText', 6,"<?= $username ?>");
            myToolbar.addSeparator('button_separator_4',7)
            myToolbar.addButton('logout', 8,"Sign out");
            myToolbar.addSpacer("button_separator_3");
            myToolbar.attachEvent("onClick", showView);

            // by the default "def" view used, when layout is loaded
            // this view also loaded, so just init

            myLayout.cells("a").attachURL("http://" + location.host + "/main/projects/index.php?eid=<?= $eid ?>");
        }

        function showView(id) {

            var firstShow = myLayout.cells("a").showView(id);

            // view became visible first time, loading content
            if (firstShow) {

                if (id == "videos") {
                    myLayout.cells("a").attachURL("http://" + location.host + "/main/videos/home.php?eid=<?= $eid ?>");
                }

                if (id == "doc_extract") {
                    myLayout.cells("a").attachURL("http://" + location.host + "/main/doc_extract/?eid=<?= $eid ?>");
                }
            }
        }

    </script>
</head>
<body onload="doOnLoad();">
</body>

</html>
