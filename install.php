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
  'document_questions' => 7,
  'document_toc' => 10,
  'document_toc_content' => 2,
  'document_toc_history' => 5,
  'document_toc_plan' => 4,
  'documents' => 12,
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

function get($key) {
    if (isset($GLOBALS['HTTP_VARS'][$key]))
        return $GLOBALS['HTTP_VARS'][$key];
}

function byte($size) {
    $unim = array("B", "KB", "MB", "GB", "TB", "PB");
    $i = 0;
    while ($size >= 1024) {
        $i++;
        $size = $size / 1024;
    }
    return number_format($size, ($i ? 2 : 0), ",", ".") . " " . $unim[$i];
}

function myFlush() {
    ob_end_flush();
    ob_flush();
    flush();
    ob_start();
}

if (get('dump') && isset($db)) {
    $sql = base64_decode($db['contents']);
    $sql = gzuncompress($sql);
    echo "Dump database <b>{$db['database']}</b><br/></br><textarea style=\"width:100%;padding:10px;\" rows=\"30\">$sql</textarea>";
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

        $dbc = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);

        // Check connection
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit();
        }

        $db_installed = false;
        $error = false;

        $sql = base64_decode($db['structure']);
        $sql = gzuncompress($sql);
        $query = explode(";\r", $sql);

        echo "<br/><br/><h3>DATABASE: CREATE STRUCTURE</h3>";

        for ($i = 0; $i < count($query); $i++) {
            list($table, $rows) = each($db['table_list']);
            echo "<div>$table ($rows rows)";
            if (!mysqli_query($dbc, $query[$i])) {
                $error = true;
                echo ' - <font color="red">ERROR</font>' . mysqli_error($dbc);
            } else
                echo " - OK";
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
            if (!mysqli_query($dbc, $query[$i])) {
                $error = true;
                echo ' - <font color="red">ERROR</font> ' . mysqli_error($dbc) . " <div class=\"error\">" . $query[$i] . "</div>";
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
            <div><button>INSTALLATION</button></div>
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