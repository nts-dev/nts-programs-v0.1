<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_WARNING);

//Database

$db = array( 	'table_list' => array (
  'archive_documents' => 6,
  'archived_toc' => 26,
  'branch' => 31,
  'captivate' => 6,
  'course_choices' => 10,
  'course_question' => 7,
  'course_question_to_page' => 6,
  'course_server' => 4,
  'course_versions' => 5,
  'document' => 12,
  'document_questions' => 7,
  'document_to_branch' => 3,
  'document_toc' => 10,
  'document_toc_content' => 2,
  'document_toc_history' => 5,
  'document_toc_plan' => 4,
  'documents_comments' => 5,
  'events' => 56,
  'google_docs' => 10,
  'lookuptable' => 9,
  'modules' => 9,
  'modules_copy' => 9,
  'moodle_content' => 5,
  'moodle_documents' => 9,
  'moodle_servers' => 6,
  'moodle_toc' => 7,
  'project_course_choices' => 10,
  'project_course_question' => 6,
  'project_course_question_to_page' => 6,
  'project_data' => 6,
  'project_data_items' => 4,
  'project_map_privileges' => 7,
  'project_privileges' => 10,
  'project_properties' => 7,
  'project_specification' => 4,
  'project_to_branch' => 3,
  'project_to_relation' => 3,
  'project_to_spreadsheet' => 3,
  'project_to_user' => 6,
  'project_type' => 3,
  'project_user_privileges' => 24,
  'projects_dir' => 13,
  'projects_dir_translation' => 4,
  'projects_monitoring' => 18,
  'projects_object_translation' => 6,
  'projects_objects' => 19,
  'projects_planning' => 3,
  'projects_to_documents' => 6,
  'projects_to_procedures' => 3,
  'projects_uploads' => 11,
  'projects_uploads_to_branch' => 3,
  'question_responces' => 11,
  'relation' => 34,
  'relation_address' => 20,
  'relation_contact' => 58,
  'server' => 8,
  'st_audio_file' => 10,
  'st_audio_language' => 3,
  'st_audiomovie' => 5,
  'st_captiontime' => 4,
  'st_course' => 6,
  'st_media' => 11,
  'st_media_copy' => 10,
  'st_module' => 8,
  'st_procedures' => 2,
  'st_scripts' => 5,
  'st_subject' => 5,
  'st_subtitle_properties' => 7,
  'st_text_files' => 5,
  'st_translations' => 4,
  'st_user_preview_stat' => 7,
  'status' => 3,
  'subjects' => 8,
  'tasks_to_planning' => 3,
  'tasks_to_projects' => 3,
  'tbdocuments' => 22,
  'tbdocuments_history' => 16,
  'tbdocuments_privileges' => 21,
  'toc' => 25,
  'tradestar_report_frequency' => 2,
  'tradestar_reports' => 26,
  'tradestar_reports_archive' => 8,
  'tradestar_reports_category' => 2,
  'tradestar_reports_to_employees' => 2,
  'trainees' => 27,
  'trs_metadata' => 12,
  'types' => 2,
  'uploads' => 11,
  'xoops_shop_languages' => 7,
), 
'structure' =>'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', 
'contents' =>'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', 
'database' =>'nts_projects', 
); 



//Settings
$settings=array();
$settings['execute'] = '';

?>
<style>
	html			{ background: #336699; }
	body			{ padding: 10px; background: #fff; font: 12px "Lucida Grande"; color: #333; }
	#title			{ font-size: 18px; }
	#layout			{ width: 500px; border: 1px solid #ccc; border-bottom: 0px; background: #eee; margin-top: 10px; }
	#layout .title	{ background: #ff9900; color: #fff; font-size: 16px; }
	#layout div		{ padding: 10px;  border: 1px solid #fff; border-bottom: 1px solid #ccc; min-height: 20px; }
	#layout span	{ width: 200px; display: block; float: left; }
	
	#doc			{ float: right; margin-right: 30px; width: 300px; border: 1px solid #ccc; background: #eee; padding: 10px; color: #999; }
	
	#list			{ background: #fff; border: 1px solid #ccc; }
	#list th		{ background: #ff9900; color: #fff; font-size: 13px; }
	#list td		{ background: #eee; border-top: 1px solid #fff; border-bottom: 1px solid #ccc; border-right: 1px solid #ccc;  border-left: 1px solid #fff; padding: 5px; font-size: 11px; }
	#copyright		{ margin-top: 20px; font-size: 11px; }
	
	fieldset		{ margin-top: 20px; border: 0px; padding: 0px; border:1px solid #999; background:#ddd; }
	input[type='text'], 
	textarea	{ border: 1px solid #aaa; margin:1px; padding: 5px; font-family: Helvetica; font-size: 14px; width: 250px; color: #333; }
	input[type='text']:focus,
	textarea:focus	{ border: 1px solid #6699cc; }
	
	button			{ display:block; margin:0 7px 0 0; background-color:#f5f5f5; border:1px solid #d3d3d3; border-top:1px solid #e9e9e9; border-left:1px solid #e9e9e9; font-family:"Lucida Grande", Tahoma, Arial, Verdana, sans-serif; font-size:100%; line-height:130%; text-decoration:none; font-weight:bold; color:#565656; cursor:pointer; padding:5px 10px 6px 7px; }
	button:hover	{ border: 1px solid #ccc; color: #ff6600; background: white; }
	
	.error			{ border: 1px solid #990000; background: #ffeeee; padding: 5px; margin: 5px; }
</style>
<?php
set_time_limit(300); // 5 minutes
ob_start();

$GLOBALS['HTTP_VARS'] = $_GET + $_POST;

function get($key)
{
    if (isset($GLOBALS['HTTP_VARS'][$key]))
        return $GLOBALS['HTTP_VARS'][$key];
}

function byte($size)
{
    $unim = array("B", "KB", "MB", "GB", "TB", "PB");
    $i = 0;
    while ($size >= 1024) {
        $i++;
        $size = $size / 1024;
    }
    return number_format($size, ($i ? 2 : 0), ",", ".") . " " . $unim[$i];
}

function myFlush()
{
    ob_end_flush();
    ob_flush();
    flush();
    ob_start();
}

if (get('dump') && isset($db)) {

    $structure = base64_decode($db['structure']);
    $structure = gzuncompress($structure);

    $sql = base64_decode($db['contents']);
    $sql = gzuncompress($sql);
    echo "Dump database <b>{$db['database']}</b><br/></br><textarea style=\"width:100%;padding:10px;\" rows=\"30\">$structure\n$sql</textarea>";
    exit;
}

$dir = get('dir');
$execute = isset($settings['execute']) ? $dir . "/" . $settings['execute'] : $dir;
$overwrite = get('overwrite');
$install = get('install');

//se install
if ($install) {

//    if ($dir != "" && substr($dir, strlen($dir) - 1, 1) != "/")
//        $dir .= "/";
//
//    if ($dir != '' && !file_exists($dir))
//        mkdir($dir);


    if (get('db')) {

        $db_hostname = get('db_hostname');
        $db_username = get('db_username');
        $db_password = get('db_password');
        $db_database = get('db_database');

        $dbc = mysqli_connect($db_hostname, $db_username, $db_password);

        // Check connection
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit();
        }

        // create database if not exist
        mysqli_query($dbc, "CREATE DATABASE IF NOT EXISTS {$db_database}") or die(mysqli_error($dbc));

        // Change db to provided db
        mysqli_select_db($dbc, $db_database) or die(mysqli_error($dbc));

        $db_installed = false;
        $error = false;

        $sql = base64_decode($db['structure']);
        $sql = gzuncompress($sql);
        $query = explode(";\r", $sql);

        echo "<br/><br/><h3>DATABASE: CREATE STRUCTURE</h3>";

        for ($i = 0; $i < count($query); $i++) {
            list($table, $rows) = each($db['table_list']);
            echo "<div>$table ($rows rows)";
            if ($query[$i]) {
                if (!mysqli_query($dbc, $query[$i])) {
                    $error = true;
                    echo ' - <font color="red">ERROR</font>' . mysqli_error($dbc);
                } else
                    echo " - OK";
            }
            echo "</div>";
            myFlush();
        }
        if ($error)
            echo "<div>Some errors encountered</div>";
        $error = false;

        $sql = base64_decode($db['contents']);
        $sql = gzuncompress($sql);
        $query = explode(";\n", $sql);

        echo "<br/><br/><hr><h3>DATABASE: INSERT CONTENT</h3>";
        for ($i = 0; $i < count($query); $i++) {
            if ($query[$i]) {
                if (!mysqli_query($dbc, $query[$i])) {
                    $error = true;
                    echo ' - <font color="red">ERROR</font> ' . mysqli_error($dbc) . " <div class=\"error\">" . $query[$i] . "</div>";
                }
            }
            echo "</div>";
            myFlush();
        }
        if ($error)
            echo "<div>Some errors encountered</div>";

        mysqli_close($dbc);
        $db_installed = true;

        if ($db_installed) {

            echo "Database Installed";
            //------------------------------------------
            // Open config file
            //------------------------------------------
            $fp = fopen("config.php", "w");
            $settings_file = "<?php" . "\n";
            $settings_file .= "\n" . "//Settings" . "\n";
            $settings_file .= "unset(\$NTS_CFG);";
            $settings_file .= "\n" . "global \$NTS_CFG;";
            $settings_file .= "\n" . "\$NTS_CFG = new stdClass();";
            $settings_file .= "\n" . "\$NTS_CFG->dbhost = '$db_hostname';";
            $settings_file .= "\n" . "\$NTS_CFG->dbuser = '$db_username';";
            $settings_file .= "\n" . "\$NTS_CFG->dbpass = '$db_password';";
            $settings_file .= "\n" . "\$NTS_CFG->dbname = '$db_database';";
            $settings_file .= "\n" . "\$NTS_CFG->wwwroot = '$dir';" . "\n";
            fwrite($fp, $settings_file, strlen($settings_file));
            fclose($fp);
            myFlush();
        }
    }

    echo " <br><hr><h1>Installation Complete!";

    if ($execute)
        echo "<a href=\"{$execute}\">Click here to go {$execute}</a>.";
} else {
    ?>
    <body>
    <!-- created with PHP Installer -->
    <div id="title">NTS Programs</div>

    <div id="layout">
        <form action="" method="POST">
            <div class="title">Installation</div>
            <div>
                <span>Install path</span>
                <input type="text" name="dir" value="http://localhost/nts-programs">
            </div>
            <input type="hidden" name="db" value="1"> 
            <div>
                Database settings
                <fieldset id="db_fieldset">
                    <div><span>Database Hostname</span>
                        <input type="text" name="db_hostname" value="">
                    </div>
                    <div><span>Database Username</span>
                        <input type="text" name="db_username" value="">
                    </div>
                    <div><span>Database Password</span>
                        <input type="text" name="db_password" value="">
                    </div>
                    <div><span>Database Name</span>
                        <input type="text" name="db_database" value="<?php echo $db['database']; ?>">
                    </div>
                    <div>
                        <a href="?dump=1" target="_blank">Click here to download the database for manual installing.</a>
                    </div>
                </fieldset>
            </div>
            <div>
                <input type="checkbox" name="install" id="install"> <label for="install">Confirm installation.</label>
            </div>
            <div><button>INSTALL</button></div>
        </form>
    </div>
    <br/>
    Database in the package
    <table cellspacing="0" cellpadding="5" id="list">
        <thead>
        <th>Table</th>
        <th>Rows</th>
    </thead>
    <?php
    foreach( $db['table_list'] as $table => $n )
    echo "<tr><td>$table</td><td>{$n}</td></tr>";
    ?>
</table>
</body>
    <?php
}
?>