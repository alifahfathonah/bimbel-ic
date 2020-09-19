<?php
    include_once("../../system/connection.php");
    include_once("../../system/class/Database.php");

    if ( empty($_GET['mod']) ) {
        include_once('home.php');
    } else {
        // print_r($_REQUEST);
        include_once("{$_GET['mod']}.php");
    }

    function render_page($page,$data=NULL) {
        include("../../system/connection.php");
        // include("../../system/class/Database.php");

        view("header");
        view("navigation", getNavigation() );
        view($page,$data);
        view("footer", getFooter() );
    }

    function getNavigation() {
        include("../../system/connection.php");
        include_once("../model/navigation.php");
        $modelNavigation = new Navigation($db);
        $program_bimbingan = $modelNavigation->getProgram();
        foreach ($program_bimbingan as $key => $value) {
            $value->rows = $modelNavigation->getSubBimbingan('program_id',$value->program_id);
        }
        return [
            'program_bimbingan' => $program_bimbingan
        ];
    }
    function getFooter() {
        include("../../system/connection.php");
        include_once("../model/footer.php");
        $modelFooter = new Footer($db);
        return [
            'hubungi_kami' => $modelFooter->getHubungiKami(),
            'link_terkait' => $modelFooter->getLinkterkait()
        ];
    }

    function view($page,$data=NULL) {
        if ( $data ) {
            extract($data);
        }
        include_once("../view/{$page}.php");
    }
    function seo($s){
        $c = array (' ');
        $d = array ('-','/','\\',',','.','#',':',';','\'','"','[',']','{','}',')','(','|','`','~','!','@','%','$','^','&','*','=','?','+');

        $s = str_replace($d, '', $s); // Hilangkan karakter yang telah disebutkan di array $d
        
        $s = strtolower(str_replace($c, '-', $s)); // Ganti spasi dengan tanda - dan ubah hurufnya menjadi kecil semua
        return $s;
    }