<?php
if (!isset($_POST["q_id"]))
{
    header('location: index.php');
}
?>

<body>
<div id="ham3da-main">
    <header class="ham3da-header">

        <div class="ham3da-shapes">
        </div>

        <h1 class="ham3da-headline" >
            <?php
            if (!isset($header))
            {
                include_once('header.php');
            }

            if (isset($_POST["p_id"]))
            {
                update_status2_pay(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE, $_POST["p_id"]);
            }

            echo '<a href="' . $s_address_t . '">' . $s_title . '</a>';
            $ex_name = '';
            if (isset($_POST["ex_name"]))
            {
                $ex_name = $_POST["ex_name"];
            }
            ?>
        </h1>

        <h2 class="ham3da-slogan">
            <?php
            echo $s_description;
            ?>

        </h2>


        <nav class="ham3da-nav">
            <ul class="ham3da-hmenu">

                <li><a href="index.php" class="active">آزمون‌ها</a></li>
                <li><a href="http://negareshebartar.com/" class="">نگرش برتر</a></li>
                <li><a href="mailto:bahman.aminy@gmail.com" class="">تماس با ما</a></li>
            </ul>
        </nav>

    </header>

    <div class="ham3da-sheet clearfix">
        <div class="ham3da-layout-wrapper">
            <div class="ham3da-content-layout">
                <div class="ham3da-content-layout-row">
                    <div class="ham3da-layout-cell ham3da-sidebar1">
                        <div class="ham3da-block clearfix">
                            <div class="ham3da-blockheader">
                                <h3 class="t">درباره سایت</h3>
                            </div>

                            <div class="ham3da-blockcontent">
                                <p align="justify">
                                    آزمون‌های آنلاین جهت علاقمندانی که قصد خودشناسی بیشتری داشته و یا برای مقاصد درمانی نیاز داشته باشند، در سایت قابل اجرا است.
                                </p>

                            </div>
                        </div>
                        <div class="ham3da-block clearfix">
                            <div class="ham3da-blockheader">
                                <h3 class="t">ورود به سایت</h3>
                            </div>
                            <div class="ham3da-blockcontent">
                                <?php
                                include_once('log_check.php');
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="ham3da-layout-cell ham3da-content">
                        <article class="ham3da-post ham3da-article">
                            <div class="ham3da-postmetadataheader">
                                <h2 class="ham3da-postheader"><span class="ham3da-postheadericon"><?php echo 'نتیجه برای: ' . $ex_name; ?></span></h2>

                            </div>

                            <div class="ham3da-postcontent ham3da-postcontent-0 clearfix"><div class="ham3da-content-layout">
                                    <div class="ham3da-content-layout-row">
                                        <div class="ham3da-layout-cell layout-item-0" style="width: 100%" >
                                            <p>
                                                <center>
                                            <div id="exams">

                                                <?php
                                                //مشخصات آزمون

                                                if (!isset($_POST["q_id"]))
                                                {

                                                    //header("location: index.php");
                                                    go_to_url(ROOT_URL . '/index.php');
                                                    exit(0);
                                                }
                                                $q_id = "";
                                                $q_type = "";

                                                $q_id = $_POST["q_id"];
                                                $q_type = $_POST["q_type"];

                                                $q_count = load_question_count(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE, "questions", $q_id);

                                                $Name = $_POST["name"];
                                                $last_name = $_POST["last_name"];

                                                $Birthday = $_POST["birthday"];
                                                $Education = $_POST["education"];
                                                $Job = $_POST["job"];
                                                $status = $_POST["status"];
                                                $Mobile = $_POST["mobile"];
                                                $Email = $_POST["email"];
                                                $reagent = $_POST["reagent"];
                                                $ex_name = $_POST["ex_name"];
                                                $sex = $_POST["sex"];

                                                $sex1 = $_POST["sex1"];
                                                $Name1 = $_POST["name1"];
                                                $Birthday1 = $_POST["birthday1"];
                                                $Education1 = $_POST["education1"];
                                                $Job1 = $_POST["job1"];
                                                $status1 = $_POST["status1"];
                                                $Mobile1 = $_POST["mobile1"];
                                                $Email1 = $_POST["email1"];
                                                $reagent1 = $_POST["reagent1"];
                                                $ex_name1 = $_POST["ex_name1"];
                                                $last_name1 = $_POST["last_name1"];


                                                $num_q = $_POST["num_q"];
                                                $num_r = $_POST["num_r"];


                                                $st_time = explode(" ", $_POST["st_time"]);

                                                $date_p = explode("/", $st_time[0]);
                                                $time_p = explode(":", $st_time[1]);

                                                $St_Time = to_persian_2($time_p[0], $time_p[1], $time_p[2], $date_p[1], $date_p[2], $date_p[0]);


                                                $persian_date1 = get_persian_date();

                                                $End_Time = $persian_date1["Date"] . " " . $persian_date1["Time"];

                                                user_insert(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE, "userinfo", $q_id, $Name, $Birthday, $Education, $Job, $status, $Mobile, $Email, $St_Time, $End_Time, $reagent, $last_name, $sex, $ex_name);

                                                $file_name = xls_file_name(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE, "userinfo");

                                                function send_to_excel1($q_id, $q_type, $q_count, $Name, $last_name, $Birthday, $Education, $Job, $status, $Mobile, $Email, $reagent, $ex_name, $sex, $sex1, $Name1, $Birthday1, $Education1, $Job1, $status1, $Mobile1, $Email1, $reagent1, $ex_name1, $last_name1, $num_q, $num_r, $st_time, $date_p, $time_p, $St_Time, $persian_date1, $End_Time, $file_name, $s_title, $s_address_t, $admim_mail = ADMIN_MAIL)
                                                {

                                                    require_once("PHPExcel/Classes/PHPExcel.php");
                                                    $objPHPExcel = new PHPExcel();
                                                    // Set document properties
                                                    $objPHPExcel->getProperties()
                                                        ->setCreator("ham3da.ir")
                                                        ->setLastModifiedBy("ham3da.ir")
                                                        ->setTitle("Test Document")
                                                        ->setSubject("Test Document")
                                                        ->setDescription("Test document From My site.")
                                                        ->setKeywords("Test")
                                                        ->setCategory("Test")
                                                    ;

                                                    $objPHPExcel->setActiveSheetIndex(0)
                                                        ->setRightToLeft(true)
                                                        ->setCellValue('A1', $Name1)
                                                        ->setCellValue('B1', $Name)
                                                        ->setCellValue('A2', $last_name1)
                                                        ->setCellValue('B2', $last_name)
                                                        ->setCellValue('A3', $Birthday1)
                                                        ->setCellValue('B3', $Birthday)
                                                        ->setCellValue('A4', $Education1)
                                                        ->setCellValue('B4', $Education)
                                                        ->setCellValue('A5', $Job1)
                                                        ->setCellValue('B5', $Job)
                                                        ->setCellValue('A6', $status1)
                                                        ->setCellValue('B6', $status)
                                                        ->setCellValue('A7', $sex1)
                                                        ->setCellValue('B7', $sex)
                                                        ->setCellValue('A8', $Mobile1)
                                                        ->setCellValue('B8', $Mobile)
                                                        ->setCellValue('A9', $Email1)
                                                        ->setCellValue('B9', $Email)
                                                        ->setCellValue('A10', $reagent1)
                                                        ->setCellValue('B10', $reagent)
                                                        ->setCellValue('A11', $ex_name1)
                                                        ->setCellValue('B11', $ex_name)
                                                        ->setCellValue('A12', $num_q)
                                                        ->setCellValue('B12', $num_r);

                                                    for ($i = 0; $i <= $q_count - 1; $i++)
                                                    {
                                                        $cel_num1 = $i + 1;
                                                        if (isset($_POST["f_" . $cel_num1]))
                                                        {
                                                            $q_val = $_POST["f_" . $cel_num1];
                                                        } else
                                                        {
                                                            $q_val = "";
                                                        }
                                                        // Add some data
                                                        $cel_num = $i + 13;
                                                        $objPHPExcel->setActiveSheetIndex(0)
                                                            ->setCellValue('A' . $cel_num, $i + 1)
                                                            ->setCellValue('B' . $cel_num, $q_val);
                                                    }

                                                    // Rename worksheet
                                                    $objPHPExcel->getActiveSheet()->setTitle('Sheet1');

                                                    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');

                                                    $file_name1 = "Test_NEO_" . str_replace('/', '-', $persian_date1["Date"]) . "_" . $file_name . ".xlsx";
                                                    $file_x_dir =  "/xls/" . $file_name1;
                                                    $objWriter->save($file_x_dir);


                                                    echo('<p align="justify">کاربر گرامی، آزمون شما با موفقیت ثبت شد و پس از بررسی نتیجه آن به شما اعلام خواهد شد.</p>');

                                                    echo('<p align="justify">در صورت نیاز از این کد رهگیری برای پیگیری آزمون خود استفاده نمایید: ' . "<span id='red'>Test_NEO_" . str_replace('/', '-', $persian_date1["Date"]) . "_" . $file_name . '<span></p>');


                                                    echo('<p align="left" >با تشکر ');

                                                    echo '<a href="' . $s_address_t . '">' . $s_title . '</a></p>';
                                                    $body = '<div dir="rtl"><p>یک آزمون با مشخصات زیر برگزار شد و فایل آن پیوست گردید:</p>';
                                                    $body .= "<p>نام آزمون: " . $ex_name . "</p>";
                                                    $body .= "<p>نام شرکت کننده: " . $Name . ' ' . $last_name . "</p>";
                                                    $body .= "<p>تاریخ: " . $persian_date1["Date"] . "</p>";

                                                    $body .= "<p>فایل اکسل پیوست شده است.</p>";
                                                    $body .= '</div>';


                                                    // $sendit = new AttachmentEmail($admim_mail, $ex_name , $body, $file_name1, $file_name1);
                                                    // $sendit -> mail();

                                                    send_email($admim_mail, $ex_name, $body, $file_x_dir, admin_mail);
                                                    //unlink($file_name1);
                                                }

                                                function send_to_excel4($q_id, $q_type, $q_count, $Name, $last_name, $Birthday, $Education, $Job, $status, $Mobile, $Email, $reagent, $ex_name, $sex, $sex1, $Name1, $Birthday1, $Education1, $Job1, $status1, $Mobile1, $Email1, $reagent1, $ex_name1, $last_name1, $num_q, $num_r, $st_time, $date_p, $time_p, $St_Time, $persian_date1, $End_Time, $file_name, $s_title, $s_address_t, $admim_mail = ADMIN_MAIL)
                                                {
                                                    require_once("PHPExcel/Classes/PHPExcel.php");
                                                    $objPHPExcel = new PHPExcel();
                                                    // Set document properties
                                                    $objPHPExcel->getProperties()
                                                        ->setCreator("ham3da.ir")
                                                        ->setLastModifiedBy("ham3da.ir")
                                                        ->setTitle("Test Document")
                                                        ->setSubject("Test Document")
                                                        ->setDescription("Test document From My site.")
                                                        ->setKeywords("Test")
                                                        ->setCategory("Test")
                                                    ;

                                                    $objPHPExcel->setActiveSheetIndex(0)
                                                        ->setRightToLeft(true)
                                                        ->setCellValue('A1', $Name1)
                                                        ->setCellValue('B1', $Name)
                                                        ->setCellValue('A2', $last_name1)
                                                        ->setCellValue('B2', $last_name)
                                                        ->setCellValue('A3', $Birthday1)
                                                        ->setCellValue('B3', $Birthday)
                                                        ->setCellValue('A4', $Education1)
                                                        ->setCellValue('B4', $Education)
                                                        ->setCellValue('A5', $Job1)
                                                        ->setCellValue('B5', $Job)
                                                        ->setCellValue('A6', $status1)
                                                        ->setCellValue('B6', $status)
                                                        ->setCellValue('A7', $sex1)
                                                        ->setCellValue('B7', $sex)
                                                        ->setCellValue('A8', $Mobile1)
                                                        ->setCellValue('B8', $Mobile)
                                                        ->setCellValue('A9', $Email1)
                                                        ->setCellValue('B9', $Email)
                                                        ->setCellValue('A10', $reagent1)
                                                        ->setCellValue('B10', $reagent)
                                                        ->setCellValue('A11', $ex_name1)
                                                        ->setCellValue('B11', $ex_name)
                                                        ->setCellValue('A12', $num_q)
                                                        ->setCellValue('B12', $num_r);

                                                    for ($i = 0; $i <= $q_count - 1; $i++)
                                                    {
                                                        $cel_num1 = $i + 1;
                                                        if (isset($_POST["f_" . $cel_num1]))
                                                        {
                                                            $q_val = $_POST["f_" . $cel_num1];
                                                        } else
                                                        {
                                                            $q_val = "";
                                                        }
                                                        // Add some data
                                                        $cel_num = $i + 13;
                                                        $objPHPExcel->setActiveSheetIndex(0)
                                                            ->setCellValue('A' . $cel_num, $i + 1)
                                                            ->setCellValue('B' . $cel_num, $q_val);
                                                    }

                                                    // Rename worksheet
                                                    $objPHPExcel->getActiveSheet()->setTitle('Sheet1');

                                                    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');

                                                    if (intval($q_id) == 4)
                                                    {
                                                        $file_name1 = "Test_MMPI_" . str_replace('/', '-', $persian_date1["Date"]) . "_" . $file_name . ".xlsx";
                                                        $file_x_dir = ROOT_DIR . "/xls/" . $file_name1;
                                                        $objWriter->save($file_x_dir);
                                                    } else if (intval($q_id) == 8)
                                                    {
                                                        $file_name1 = "Test_Milon_" . str_replace('/', '-', $persian_date1["Date"]) . "_" . $file_name . ".xlsx";
                                                        $file_x_dir = ROOT_DIR . "/xls/" . $file_name1;
                                                        $objWriter->save($file_x_dir);
                                                    }
                                                    if (intval($q_id) == 10)
                                                    {
                                                        $file_name1 = "Test_Esterang_" . str_replace('/', '-', $persian_date1["Date"]) . "_" . $file_name . ".xlsx";
                                                        $file_x_dir = ROOT_DIR . "/xls/" . $file_name1;
                                                        $objWriter->save($file_x_dir);
                                                    }
                                                    if (intval($q_id) == 11)
                                                    {
                                                        $file_name1 = "Test_Ketel_" . str_replace('/', '-', $persian_date1["Date"]) . "_" . $file_name . ".xlsx";
                                                        $file_x_dir = ROOT_DIR . "/xls/" . $file_name1;
                                                        $objWriter->save($file_x_dir);
                                                    }

                                                    echo('<p align="justify">کاربر گرامی، آزمون شما با موفقیت ثبت شد و پس از بررسی نتیجه آن به شما اعلام خواهد شد.</p>');

                                                    if (intval($q_id) == 4)
                                                    {
                                                        echo('<p align="justify">در صورت نیاز از این کد رهگیری برای پیگیری آزمون خود استفاده نمایید: ' . "<span id='red'>Test_MMPI_" . str_replace('/', '-', $persian_date1["Date"]) . "_" . $file_name . '<span></p>');
                                                    } else if (intval($q_id) == 8)
                                                    {
                                                        echo('<p align="justify">در صورت نیاز از این کد رهگیری برای پیگیری آزمون خود استفاده نمایید: ' . "<span id='red'>Test_Milon_" . str_replace('/', '-', $persian_date1["Date"]) . "_" . $file_name . '<span></p>');
                                                    }
                                                    if (intval($q_id) == 10)
                                                    {
                                                        echo('<p align="justify">در صورت نیاز از این کد رهگیری برای پیگیری آزمون خود استفاده نمایید: ' . "<span id='red'>Test_MMPI_" . str_replace('/', '-', $persian_date1["Date"]) . "_" . $file_name . '<span></p>');
                                                    }
                                                    if (intval($q_id) == 11)
                                                    {
                                                        echo('<p align="justify">در صورت نیاز از این کد رهگیری برای پیگیری آزمون خود استفاده نمایید: ' . "<span id='red'>Test_Ketel_" . str_replace('/', '-', $persian_date1["Date"]) . "_" . $file_name . '<span></p>');
                                                    }
                                                    echo('<p align="left" >با تشکر ');

                                                    echo '<a href="' . $s_address_t . '">' . $s_title . '</a></p>';
                                                    $body = '<div dir="rtl"><p>یک آزمون با مشخصات زیر برگزار شد و فایل آن پیوست گردید:</p>';
                                                    $body .= "<p>نام آزمون: " . $ex_name . "</p>";
                                                    $body .= "<p>نام شرکت کننده: " . $Name . ' ' . $last_name . "</p>";
                                                    $body .= "<p>تاریخ: " . $persian_date1["Date"] . "</p>";

                                                    $body .= "<p>فایل اکسل پیوست شده است.</p>";
                                                    $body .= '</div>';


                                                    // $sendit = new AttachmentEmail($admim_mail, $ex_name , $body, $file_name1, $file_name1);
                                                    // $sendit -> mail();
                                                    // echo('<p>admin mail: '.$admim_mail.'</p>');
                                                    //  mail($admim_mail, $ex_name, $body);
                                                    send_email($admim_mail, $ex_name, $body, $file_x_dir, admin_mail);
                                                    //unlink($file_name1);
                                                }

                                                switch (intval($q_type))
                                                {
                                                    case 1;
                                                        //excel1
                                                        send_to_excel1($q_id, $q_type, $q_count, $Name, $last_name, $Birthday, $Education, $Job, $status, $Mobile, $Email, $reagent, $ex_name, $sex, $sex1, $Name1, $Birthday1, $Education1, $Job1, $status1, $Mobile1, $Email1, $reagent1, $ex_name1, $last_name1, $num_q, $num_r, $st_time, $date_p, $time_p, $St_Time, $persian_date1, $End_Time, $file_name, $s_title, $s_address_t, ADMIN_MAIL);
                                                        break;

                                                    case 4;
                                                        //excel4
                                                        send_to_excel4($q_id, $q_type, $q_count, $Name, $last_name, $Birthday, $Education, $Job, $status, $Mobile, $Email, $reagent, $ex_name, $sex, $sex1, $Name1, $Birthday1, $Education1, $Job1, $status1, $Mobile1, $Email1, $reagent1, $ex_name1, $last_name1, $num_q, $num_r, $st_time, $date_p, $time_p, $St_Time, $persian_date1, $End_Time, $file_name, $s_title, $s_address_t, ADMIN_MAIL);
                                                        break;
                                                    case 8;
                                                        //excel8
                                                        send_to_excel4($q_id, $q_type, $q_count, $Name, $last_name, $Birthday, $Education, $Job, $status, $Mobile, $Email, $reagent, $ex_name, $sex, $sex1, $Name1, $Birthday1, $Education1, $Job1, $status1, $Mobile1, $Email1, $reagent1, $ex_name1, $last_name1, $num_q, $num_r, $st_time, $date_p, $time_p, $St_Time, $persian_date1, $End_Time, $file_name, $s_title, $s_address_t, ADMIN_MAIL);
                                                        break;
                                                    case 10;
                                                        //excel8
                                                        send_to_excel4($q_id, $q_type, $q_count, $Name, $last_name, $Birthday, $Education, $Job, $status, $Mobile, $Email, $reagent, $ex_name, $sex, $sex1, $Name1, $Birthday1, $Education1, $Job1, $status1, $Mobile1, $Email1, $reagent1, $ex_name1, $last_name1, $num_q, $num_r, $st_time, $date_p, $time_p, $St_Time, $persian_date1, $End_Time, $file_name, $s_title, $s_address_t, ADMIN_MAIL);
                                                        break;
                                                    case 11;
                                                        //excel8
                                                        $q_count = load_question_count(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE, "4op_test", $q_id);

                                                        send_to_excel4($q_id, $q_type, $q_count, $Name, $last_name, $Birthday, $Education, $Job, $status, $Mobile, $Email, $reagent, $ex_name, $sex, $sex1, $Name1, $Birthday1, $Education1, $Job1, $status1, $Mobile1, $Email1, $reagent1, $ex_name1, $last_name1, $num_q, $num_r, $st_time, $date_p, $time_p, $St_Time, $persian_date1, $End_Time, $file_name, $s_title, $s_address_t, ADMIN_MAIL);
                                                        break;
                                                }
                                                ?>

                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </article>

                    </div>

                </div>
            </div>
        </div>



        <footer class="ham3da-footer">
            <p>تمامی سوالات خود را با ما <a href="mailto:bahman.aminy@gmail.com">مطرح</a>
                کنید</p>
            <p>
                <?php
                echo $s_Copyright;
                ?>

            </p>
        </footer>

    </div>
</div>
<p class="ham3da-page-footer">
    <span id="ham3da-footnote-links">طراحی و اجرا: <a href="http://ham3da.ir" target="_blank">ham3da.ir</a></span>
</p>

</div>

</body>
<a href="#" title="برو بالا" class="scrollToTop"></a>
</html>
