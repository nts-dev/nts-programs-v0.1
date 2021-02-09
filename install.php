<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_WARNING);

//Database

$db = array( 	'table_list' => array (
  'archive_documents' => 6,
  'archived_toc' => 26,
  'branch' => 31,
  'captivate' => 6,
  'course_server' => 4,
  'course_versions' => 5,
  'document_questions' => 7,
  'document_toc' => 10,
  'document_toc_content' => 2,
  'document_toc_history' => 5,
  'document_toc_plan' => 4,
  'documents' => 8,
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
'database' =>'nts_site', 
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
    <div id="title">nts-projects</div>

    <div id="layout">
        <form action="" method="POST">
            <div class="title">Installation</div>
            <div>
                <span>Install path</span>
                <input type="text" name="dir" value="">
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