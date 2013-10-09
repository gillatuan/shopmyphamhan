<?php class Helper {    static function url($route, $params = array(), $ampersand = '&') {        return Yii::app()->controller->createUrl($route, $params, $ampersand);    }    static function themeUrl() {        return Yii::app()->theme->baseUrl;    }    /**     * Application base path     */    static function basePath() {        return Yii::app()->basePath;    }    /**     * site base url     */    static function baseUrl() {        return Yii::app()->request->getBaseUrl(true);    }    /**     * Application runtime path     */    static function runtimePath() {        return Yii::app()->basePath . '/runtime';    }    /**     * Application cache path     */    static function cachePath() {        return Yii::app()->basePath . '/runtime/cache';    }    /**     * Application clientScript object     *     * @return CClientScript     */    static function cs() {        return Yii::app()->clientScript;    }    /**     * @param $file     *     * @return string     * public a (css, js) file into the asset folder from the specified one     */    public static function register($file, $module = 'Blog', $screen = '') {        $url  = Yii::app()->getAssetManager()->publish(            Yii::getPathOfAlias('application.modules.' . $module . '.assets'));        $path = $url . '/' . $file;        if (strpos($file, 'js') !== false) {            return Yii::app()->clientScript->registerScriptFile($path);        } else if (strpos($file, 'css') !== false) {            return Yii::app()->clientScript->registerCssFile($path, $screen);        }        return $path;    }    static public function t($string, $params = array(), $module = '', $alias = 'translate') {        Yii::import('application.modules.' . $module . '.' . $module . 'Module');        return Yii::t($module ? $module . 'Module.' . $alias : $alias, $string, $params);    }    /* set a flash message to display after the request is done */    static public function setFlash($id = 'Blog', $message) {        Yii::app()->user->setFlash($id, $message);    }    static public function hasFlash($id = 'Blog') {        return Yii::app()->user->hasFlash($id);    }    /* retrieve the flash message again */    public static function getFlash($id = 'Blog') {        return Yii::app()->user->getFlash($id);    }    static public function renderFlash($id, $classFlash = 'label label-success span12', $style = false, $classFade = 'label-success', $time = '5000', $url = '') {        if (Helper::hasFlash($id)) {            echo $style == false ? '<div class="' . $classFlash . '">' : '<div class="' . $classFlash . '" style="padding: 7px 10px; margin-bottom: 20px; font-size: 18px; color: white">';            echo Helper::getFlash($id);            echo '</div>';            Helper::cs()->registerScript('fadeMessage', "                setTimeout(function() {                    $('." . $classFade . "').fadeOut('slow');                }, " . $time .");                if ('" . $url ."' != '') {                    setTimeout(function() {                        window.location = '" . $url . "';                    },  " . $time .");                }            ");        }    }    /**     * Yii application user     *     * @return CWebUser     */    static function user() {        return Yii::app()->user;    }    public static function updateAlias($model) {        $lcate = $model::model()->findAll('');        foreach ($lcate as $l) {            $model::model()->updateByPk($l['id'], array('alias' => privateLib::unicode_convert($l['title'])));        }    }    public static function createAlias($model, $title)    {        $alias = trim($title);        $alias = self::urlAlias($title);        return $alias;//        return self::checkDuplicateAlias($model, $alias);    }    public static function urlAlias($str)    {        $uni_from = ' ()!$?:,&+=><ÀàÁáÂâẢảÃãÄäÅåĀāĂăĄąǞǟǺǻÆæǼǽẠạẬậẶặẤấẮắẦầẪẫẨẩẲẳẴẵẰằḂḃĆćÇçČčĈĉĊċḐḑĎďḊḋĐđðǄǆÈèÉéĚěÊêỂểËëĒēĔĕĘęĖėƷʒǮǯẸẹỆệẺẻỄễẾếỀềẼẽḞḟǴǵĢģǦǧĜĝĞğĠġĤĥĦħÌìÍíÎîĨĩÏïĪīĬĭĮįİıỊịỈỉĴĵḰḱĶķǨǩĹĺĻļĽľĿŀŁłṀṁŃńŅņŇňÑñŉŊŋǊǌÒòÓóƠơỜờÔôÕõÖöŌōŎŏØøŐőǾǿŒœỌọỢợỘộỒồỞởỎỏỚớỐốỔổỖỗỠỡṖṗŔŕŖŗŘřɼŚśŞşŠšŜŝṠṡſßŢţŤťṪṫŦŧÞþÙùÚúÛûỦủŨũÜŮůŪūŬŭŲųŰűỤụỰựÙừỨứƯưỬửỮữẀẁẂẃŴŵẄẅỲỳÝýŶŷŸÿỴỵỸỹỶỷŹźŽžŻż`~\`';        $uni_to = '-____________AaAaAaAaAaAaAaAaAaAaAaAaAaAaAaAaAaAaAaAaAaAaAaAaAaBbCcCcCcCcCcDdDdDdDddDdEeEeEeEeEeEeEeEeEeEeEeEeEeEeEeEeEeEeEeFfGgGgGgGgGgGgHhHhIiIiIiIiIiIiIiIiIiIiIiJjKkKkKkLlLlLlLlLlMmNnNnNnNnnNnNnOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoPpRrRrRrrSsSsSsSsSsSsTtTtTtTtTtUuUuUuUuUuUUuUuUuUuUuUuUuUuUuUuUuUuWwWwWwWwYyYyYyYyYyYyYyZzZzZz___';        $from = "\\'\"/.@#%^*".$uni_from;        $to   = '__________'.$uni_to;        return strtolower(self::toAscii($from, $to, $str));    }    public static function toAscii($from, $to, $str)    {        mb_internal_encoding("UTF-8");        for ($i=0; $i<mb_strlen($from); $i++)        {            $fromChar = mb_substr($from, $i,1);            $toChar = mb_substr($to, $i,1);            $str = mb_eregi_replace("\\".$fromChar, $toChar, $str);        }        //return $str;        return mb_convert_encoding($str,'ASCII');    }    public static function checkDuplicateAlias($model, $alias)    {        $criteria = new CDbCriteria();        $criteria->condition = "alias = :alias";        $criteria->params = array(':alias' => $alias);        $objectList = $model->model()->count($criteria);        if($objectList > 0){            for($i=2; $i<99; $i++){                $criteria->condition = "Alias = :alias";                $criteria->params = array(':alias' => $alias . '_' . $i);                $exist = $model->model()->count($criteria);                if ($exist == 0) {                    return $alias . '_' . $i;                }            }        }        return $alias;    }    public static function unicode_convert($str) {            if (!$str) {                return false;            }            $unicode = array(                'a' => array(                    'á', 'à', 'ả', 'ã', 'ạ', 'ă', 'ắ', 'ặ', 'ằ', 'ẳ', 'ẵ', 'â', 'ấ', 'ầ', 'ẩ', 'ẫ', 'ậ'                ),                'A' => array(                    'Á', 'À', 'Ả', 'Ã', 'Ạ', 'Ă', 'Ắ', 'Ặ', 'Ằ', 'Ẳ', 'Ẵ', 'Â', 'Ấ', 'Ầ', 'Ẩ', 'Ẫ', 'Ậ'                ),                'd' => array('đ'),                'D' => array('Đ'),                'e' => array(                    'é', 'è', 'ẻ', 'ẽ', 'ẹ', 'ê', 'ế', 'ề', 'ể', 'ễ', 'ệ'                ),                'E' => array(                    'É', 'È', 'Ẻ', 'Ẽ', 'Ẹ', 'Ê', 'Ế', 'Ề', 'Ể', 'Ễ', 'Ệ'                ),                'i' => array(                    'í', 'ì', 'ỉ', 'ĩ', 'ị'                ),                'I' => array(                    'Í', 'Ì', 'Ỉ', 'Ĩ', 'Ị'                ),                'o' => array(                    'ó', 'ò', 'ỏ', 'õ', 'ọ', 'ô', 'ố', 'ồ', 'ổ', 'ỗ', 'ộ', 'ơ', 'ớ', 'ờ', 'ở', 'ỡ', 'ợ'                ),                '0' => array(                    'Ó', 'Ò', 'Ỏ', 'Õ', 'Ọ', 'Ô', 'Ố', 'Ồ', 'Ổ', 'Ỗ', 'Ộ', 'Ơ', 'Ớ', 'Ờ', 'Ở', 'Ỡ', 'Ợ'                ),                'u' => array(                    'ú', 'ù', 'ủ', 'ũ', 'ụ', 'ư', 'ứ', 'ừ', 'ử', 'ữ', 'ự'                ),                'U' => array(                    'Ú', 'Ù', 'Ủ', 'Ũ', 'Ụ', 'Ư', 'Ứ', 'Ừ', 'Ử', 'Ữ', 'Ự'                ),                'y' => array(                    'ý', 'ỳ', 'ỷ', 'ỹ', 'ỵ'                ),                'Y' => array(                    'Ý', 'Ỳ', 'Ỷ', 'Ỹ', 'Ỵ'                ),                '-' => array(                    ' ', '&quot;', '&amp;', '.', '/', '\'', '’', '(', ')', ',', '!', '"', '“', '”', '%', '&', '@', '#', '$', '*', '?', ':'                ),            );            foreach ($unicode as $nonUnicode => $uni) {                foreach ($uni as $value) {                    $str = str_replace($value, $nonUnicode, $str);                }            }            return $str;        }    public static function convertToAlias($text, $lower = true) {        // replace non letter or digits by -        $text = preg_replace('~[^\\pL\d]+~u', '-', $text);        // trim        $text = trim($text, '-');        // transliterate        if (function_exists('iconv')) {            $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);        }        // lowercase        $text = $lower ? strtolower($text) : $text;        // remove unwanted characters        $text = preg_replace('~[^-\w]+~', '', $text);        if (empty($text)) {            return 'n-a';        }        //$text = preg_replace('/\W+/', '-', $text);        return $text;    }    public static function changeDateToFormat($date, $dateBefore = 'Y-m-d') {        if ($dateBefore == 'm-d-Y') {            list($m, $d, $y) = explode('-', $date);            $updatedDate = mktime(0, 0, 0, $m, $d, $y);        } else {            $updatedDate = strtotime($date);        }        return $updatedDate;    }    public static function addSomeDayToDate($date, $someHour = 1, $dateBefore = 'Y-m-d') {        $dateChanged = self::changeDateToFormat($date, $dateBefore);        return $dateChanged + 3600 * $someHour;    }    public static function getTimeAgo($iTimestamp) {        if (!is_numeric($iTimestamp)) {            return '';        }        // Get Current Timestamp        $iCurrentTimestamp = time();        if ($iTimestamp >= $iCurrentTimestamp) {            return 0;        }        // Get Difference between Current Timestamp        // and Timestamp of item        $iDifference = $iCurrentTimestamp - $iTimestamp;        // Save the periods in an array        $periods = array(            "sec",            "min",            "hour",            "day",            "week",            "month",            "year",            "decade"        );        // Save the lengths of each period in another array        $lengths = array(            "60",            "60",            "24",            "7",            "4.35",            "12",            "10"        );        // The loop below will go through the lengths array        // starting at key 0 and incrementing each time the        // loop is run        // Each time, the $iDifference variable is divided by the        // length being accessed        // The loop will stop running once $iDifference is smaller        // than the value of the length being accessed at the time        // The aim of this loop is find out how old the item is        for ($j = 0; $iDifference >= $lengths[$j]; $j++) {            $iDifference /= $lengths[$j];        }        // If 'j' is equal to 6, this means the item was added        // over a month ago. In this case, we simply want to        // display the month and the year.        if ($j < 3) {            // On the other hand, if the item is more recent, we use            // the code below to display the age of the item such as:            // '3 days ago' or '7 hours ago'            $iDifference = round($iDifference);            if ($iDifference != 1) {                $periods[$j] .= "s";            }            $sReturn = $iDifference . " " . $periods[$j] . " ago";        } elseif ($j == 3 && date('W', $iTimestamp) == date('W', time())) {            $sReturn = date('l \a\t g:ia', $iTimestamp);        } else {            $sReturn = date('F j, Y', $iTimestamp);        }        // If the value is '1 day ago', we can change this        // to 'yesterday'.        //if (trim($sReturn) == '1 day ago')        //    $sReturn = "Yesterday";        return $sReturn;    }    public static function LuuTinVaoDB($tin, $url, $source) { /*		$tieude = trim(mysql_real_escape_string(strip_tags($tin['tieude'])));		$tomtat = trim(mysql_real_escape_string(strip_tags($tin['tomtat'])));		$content = trim(mysql_real_escape_string($tin['content']));*/        $modelNews              = new News();        $modelNews->title       = $tin['tieude'];        $modelNews->info        = $tin['tomtat'];        $modelNews->content     = $tin['content'];        $modelNews->url         = $url;        $modelNews->alias       = privateLib::unicode_convert($tin['tieude']);        $modelNews->create_time = date('Y-m-d H:i:s');        $modelNews->status      = APPROVED;        $modelNews->save();        /*$sql="INSERT INTO tinmoi (TieuDe,TomTat, Content, urlGoc, Source, Ngay)            VALUES ('$tieude','$tomtat', '$content', '$url', '$source', Now())";        mysql_query($sql) or die (mysql_error());        return true; */    }    public static function Dantri_TrangChu($url) {        $linkarray = array();        $html      = file_get_html($url);        foreach ($html->find(".fon1 mt2") as $link) {            if ($link->href == NULL) {                continue;            }            if ($link->plaintext == NULL) {                continue;            }            $text = str_replace("&nbsp;", " ", $link->plaintext);            $text = trim($text);            if ($text == "") {                continue;            }            if (substr($link->href, 0, 1) == "/") {                $link->href = $url . $link->href;            }            if (in_array($link->href, $linkarray) == false) {                $linkarray[$text] = $link->href;            }        }        foreach ($html->find(".fon6") as $link) {            if ($link->href == NULL) {                continue;            }            if ($link->plaintext == NULL) {                continue;            }            $text = str_replace("&nbsp;", " ", $link->plaintext);            $text = trim($text);            if ($text == "") {                continue;            }            if (substr($link->href, 0, 1) == "/") {                $link->href = $url . $link->href;            }            if (in_array($link->href, $linkarray) == false) {                $linkarray[$text] = $link->href;            }        }        foreach ($html->find(".ul1 li a") as $link) {            if ($link->href == NULL) {                continue;            }            if ($link->plaintext == NULL) {                continue;            }            $text = str_replace("&nbsp;", " ", $link->plaintext);            $text = trim($text);            if ($text == "") {                continue;            }            if (substr($link->href, 0, 1) == "/") {                $link->href = $url . $link->href;            }            if (in_array($link->href, $linkarray) == false) {                $linkarray[$text] = $link->href;            }        }        foreach ($html->find(".fon4") as $link) {            if ($link->href == NULL) {                continue;            }            if ($link->plaintext == NULL) {                continue;            }            $text = str_replace("&nbsp;", " ", $link->plaintext);            $text = trim($text);            if ($text == "") {                continue;            }            if (substr($link->href, 0, 1) == "/") {                $link->href = $url . $link->href;            }            if (in_array($link->href, $linkarray) == false) {                $linkarray[$text] = $link->href;            }        }        $html->clear();        unset($html);        return $linkarray;    }    public static function Dantri_Lay1Tin($urlwebsite, $url) {        $html = file_get_html($url);        $tin  = array();        /*$cate = $html->find('ul.nav li a.active');        $tin['chuyende'] = $cate->innertext;        $cate->outertext = '';*/        $td            = $html->find('div.fon31', 0);        $tin['tieude'] = $td->innertext;        $td->outertext = '';        $tt            = $html->find('div.fon33', 0);        $tin['tomtat'] = $tt->innertext;        $tt->outertext = '';        $content       = $html->find('div.fon34', 0);        foreach ($content->find('img') as $img) {            if (substr($img->src, 0, 1) == "/") {                $img->src = $urlwebsite . $img->src;            }        }        $tin['content'] = $content->innertext;        $html->clear();        unset($html);        return $tin;    }    public static function objectToArray($object) {        if (!is_object($object) && !is_array($object)) {            return $object;        }        if (is_object($object)) {            $object = (array)$object;        }        return array_map('self::objectToArray', $object);    }    /**     * Quick number format     *     * @param numeric $value     * @param string  $type possible values 'number','currency','decimal','percentage'     * @param mixed   $format     * @param mixed   $currency     */    static function formatNumber($value, $type = 'number', $format = null, $currency = null) {        $numberFormater = Yii::app()->getLocale()->getNumberFormatter();        switch ($type) {            case 'number':                return Yii::app()->format->number($value);                break;            case 'currency':                if (!$currency) {                    $currency = 'VND';                }                return $numberFormater->formatCurrency($value, $currency);                break;            case 'decimal':                return $numberFormater->formatDecimal($value);                break;            case 'percentage':                return $numberFormater->formatPercentage($value);                break;            default:                throw new Exception("Invalid format type. Possible types are 'number','currency','decimal','percentage'.");        }    }    /**     * Subsite first N word in the text as an intro text     *     * @param mixed $originalString     * @param mixed $wordsCount     *     * @return string     */    public static function getDisplayedWords($originalString, $wordsCount) {        $displayedText = $originalString;        $totalWords    = explode(' ', $originalString);        $temp          = array();        if (count($totalWords) > $wordsCount) {            for ($i = 0; $i < $wordsCount; $i++) {                $temp[] = $totalWords[$i];            }            $displayedText = implode(' ', $temp) . '...';        }        return $displayedText;    }    /**     * Create a Dom XML document from HTML string     *     * @param mixed $html     * @param mixed $ver     * @param mixed $encoding     *     * @return DOMDocument     */    public static function createXMLDocFromHTML($html, $ver = '1.0', $encoding = 'utf-8') {        $html      = self::htmlEntitiesToChars($html);        $doc       = new DOMDocument('1.0', 'uft-8');        $old_level = error_reporting(E_NONE);        $doc->loadHTML($html);        error_reporting($old_level);        return $doc;    }    public static function htmlEntitiesToChars($str) {        //Convert HTML decimal/hexa entities to characters//        if (mb_detect_encoding($str) == 'UTF-8'){//            decode decimal HTML entities added by web browser        $str = preg_replace('/&#\d{2,5};/ue', "\$this->utf8_entity_decode('$0')", $str);//            decode hex HTML entities added by web browser        $str = preg_replace('/&#x([a-fA-F0-7]{2,8});/ue', "\$this->utf8_entity_decode('&#'.hexdec('$1').';')", $str);//            decode named characters        $str = html_entity_decode($str, ENT_QUOTES, "utf-8");//            echo $str.'<br />';//        }        return $str;    }    /**     * Open an URL using CURL     *     * @param string $url        Url to open     * @param string $referer    referer url     * @param string $postFields data to post, in querystring format     * @param string $method     post method, possible value: post, get     * @param bool   $useSSL     whether to use SSL or not     * @param bool   $header     prepend HTTP header into response     * @param array  $httpheader HTTP header to post with the request     * @param string $cookieFile path to cookie file to save and load cookies, must be r/writable     *     * @return string     */    static function curlRequest($url, $referer = '', $postFields = '', $method = 'get', $useSSL = false, $header = false, $httpheader = array(), $cookieFile = '') {        $agent = "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.1) Gecko/20061204 Firefox/2.0.0.1";        if ($method == 'get' && $postFields != '') {            $url .= '?' . $postFields;        }        $ch = curl_init();        curl_setopt($ch, CURLOPT_URL, $url);        curl_setopt($ch, CURLOPT_USERAGENT, $agent);        if ($postFields != '') {            curl_setopt($ch, CURLOPT_POST, true);        } else {            curl_setopt($ch, CURLOPT_HTTPGET, true);        }        if ($method == 'post') {            ;        }        curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields); //The full data to post in a HTTP "POST" operation.        if ($method == 'get') {            curl_setopt($ch, CURLOPT_HTTPGET, true);        }        if ($header) {            curl_setopt($ch, CURLOPT_HEADER, 1);        }        $httpheader[] = "ContentType: application/xml; charset=utf-8";        $httpheader[] = "Cache-Control: max-age=0";        $httpheader[] = "Connection: keep-alive";        $httpheader[] = "Keep-Alive: 300";        $httpheader[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";        $httpheader[] = "Pragma: ";        curl_setopt($ch, CURLOPT_HTTPHEADER, $httpheader);        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);        if ($referer != '') {            curl_setopt($ch, CURLOPT_REFERER, $referer);        } //The contents of the "Referer: " header to be used in a HTTP request.        $cookie_file_path = realpath('gmail_cookies.txt');        curl_setopt($ch, CURLOPT_COOKIEFILE,            $cookie_file_path); // The name of the file containing the cookie data. The cookie file can be in Netscape format, or just plain HTTP-style headers dumped into a file.        curl_setopt($ch, CURLOPT_COOKIEJAR,            $cookie_file_path); // The name of a file to save all internal cookies to when the connection closes.        if ($useSSL) {            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);        }        $result = curl_exec($ch); // grab URL and pass it to the variable.        curl_close($ch); // close curl resource, and free up system resources.        return $result;    }    /**     * Generate random string     *     * @param string $chars possible values: lower,upper,numbers,special,all     * @param int    $length     */    static function randomString($chars, $length = 8) {        // Assign strings to variables        $lc = 'abcdefghijklmnopqrstuvwxyz'; // lowercase        $uc = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'; // uppercase        $nr = '1234567890'; // numbers        $sp = '^@*+-+%()!?'; //special characters        // Set cases for our characters        switch ($chars) {            case 'lower':                $chars = $lc;                break;            case 'upper':                $chars = $uc;                break;            case 'numbers':                $chars = $nr;                break;            case 'special':                $chars = $sp;                break;            case 'all':                $chars = $lc . $uc . $nr . $sp;                break;        }        // Length of character list        $chars_length = strlen($chars) - 1;        // Start our string        $string = $chars{rand(0, $chars_length)};        // Generate random string        for ($i = 1; $i < $length; $i = strlen($string)) {            // Take random character from our list            $random = $chars{rand(0, $chars_length)};            // Make sure the same two characters donâ€™t appear next to each other            if ($random != $string{$i - 1}) {                $string .= $random;            }        }        //return our generated string        return $string;    }    /**     * Get Ip of user     */    public static function getIP() {        if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];        } elseif (isset($_SERVER['HTTP_CLIENT_IP'])) {            $ip = $_SERVER['HTTP_CLIENT_IP'];        } else {            $ip = $_SERVER['REMOTE_ADDR'];        }        return $ip;    }    public static function downloadFile($fullpath) {        if (!file_exists($fullpath)) {            throw new Exception('File not found.');        }        self::downloadContent($fullpath, file_get_contents($fullpath));    }    public static function downloadContent($filename, $content) {        $path_parts = pathinfo($filename);        $ext        = strtolower($path_parts["extension"]);        // Determine Content Type        switch ($ext) {            case "pdf":                $ctype = "application/pdf";                break;            case "exe":                $ctype = "application/octet-stream";                break;            case "zip":                $ctype = "application/zip";                break;            case "doc":                $ctype = "application/msword";                break;            case "xls":                $ctype = "application/vnd.ms-excel";                break;            case "csv":                $ctype = "application/vnd.ms-excel";                break;            case "ppt":                $ctype = "application/vnd.ms-powerpoint";                break;            case "gif":                $ctype = "image/gif";                break;            case "png":                $ctype = "image/png";                break;            case "jpeg":            case "jpg":                $ctype = "image/jpg";                break;            default:                $ctype = "application/force-download";        }        header("Pragma: public"); // required        header("Expires: 0");        header("Cache-Control: must-revalidate, post-check=0, pre-check=0");        header("Cache-Control: private", false); // required for certain browsers        header("Content-Type: $ctype");        header("Content-Disposition: attachment; filename=\"" . basename($filename) . "\";");        header("Content-Transfer-Encoding: binary");        while (@ob_end_clean())            ;        echo $content;    }    public static function get($key, $defaultValue = '') {        return Yii::app()->request->getQuery($key, $defaultValue);    }    public static function post($key='', $defaultValue = '') {        if (empty($key)) {            return Yii::app()->request->isPostRequest;        }        return Yii::app()->request->getPost($key, $defaultValue);    }    public static function performAjaxValidation($model, $formId = 'login-form') {        // for $_GET: Yii::app()->request->getQuery($key, $defaultValue);        if (self::post('ajax') && self::post('ajax', $formId)) {            echo CActiveForm::validate($model);            Yii::app()->end();        }    }    public static function updateStatus($params) {        $success = '';        if (isset($params['status'])) {            $success = $params['model']::model()->updateByPk($params['id'],                array('status' => ($params['status'] == 'active' ? APPROVED : PENDING)));        } elseif (isset($params['visible'])) {            $success = $params['model']::model()->updateByPk($params['id'],                array('visible' => ($params['visible'] == 'active' ? APPROVED : PENDING)));        }        return $success;    }    public static function sortRow($model, $attrPost) {        $i = 1;        if ($attrPost) {            foreach ($attrPost as $id) {                $model::model()->updateByPk($id, array('ordering' => $i));                $i++;            }        }    }    static public function createFolder($folder = '/uploads/temp') {        if (!is_dir(Yii::getPathOfAlias('webroot') . '/uploads/original')) {            mkdir(Yii::getPathOfAlias('webroot') . '/uploads/original');            chmod(Yii::getPathOfAlias('webroot') . '/uploads/original', 0755);        }        if (!is_dir(Yii::getPathOfAlias('webroot') . '/uploads/resize')) {            mkdir(Yii::getPathOfAlias('webroot') . '/uploads/resize');            chmod(Yii::getPathOfAlias('webroot') . '/uploads/resize', 0755);        }        if (!is_dir(Yii::getPathOfAlias('webroot') . '/uploads/thumb')) {            mkdir(Yii::getPathOfAlias('webroot') . '/uploads/thumb');            chmod(Yii::getPathOfAlias('webroot') . '/uploads/thumb', 0755);        }        if (!is_dir(Yii::getPathOfAlias('webroot') . '/uploads/detail')) {            mkdir(Yii::getPathOfAlias('webroot') . '/uploads/detail');            chmod(Yii::getPathOfAlias('webroot') . '/uploads/detail', 0755);        }        if (!is_dir(Yii::getPathOfAlias('webroot') . '/uploads/resizeBanner')) {            mkdir(Yii::getPathOfAlias('webroot') . '/uploads/resizeBanner');            chmod(Yii::getPathOfAlias('webroot') . '/uploads/resizeBanner', 0755);        }        if (!is_dir(Yii::getPathOfAlias('webroot') . '/' . $folder)) {            mkdir(Yii::getPathOfAlias('webroot') . '/' . $folder);            chmod(Yii::getPathOfAlias('webroot') . '/' . $folder, 0777);        }    }    static public function uploadImage($model, $fileUploadName, $folder='', $resize=false, $thumb=false, $size=array()) {        // create folder to upload image into it        $uploadFolderOriginal = 'uploads/original/' . $folder;        $uploadFolderThumb = 'uploads/thumb/' . $folder;        $uploadFolderResize = 'uploads/resize/' . $folder;        $uploadFolderDetail = 'uploads/detail/' . $folder;        $uploadFolderResizeBanner = 'uploads/resizeBanner/' . $folder;        self::createFolder($uploadFolderOriginal);        self::createFolder($uploadFolderResize);        self::createFolder($uploadFolderThumb);        self::createFolder($uploadFolderDetail);        self::createFolder($uploadFolderResizeBanner);        $typeFile  = CUploadedFile::getInstancesByName($fileUploadName);        if (count($typeFile)) {            foreach ($typeFile as $file) {                $timeFileName = date('Y_m_d_H_i_s', time()) . '-vomamxenang-' . ucfirst($file->name);                $file->saveAs($uploadFolderOriginal . '/' . $timeFileName);                $newFile[] = $timeFileName;                // resize original image                $modelResize = new ResizeImage($uploadFolderOriginal . '/' . $timeFileName);                if ($resize) {                    /*$size = array(                        'w' => '100', 'h' => '100' , 'typeSize' => 'exact' ('maxWidth', 'maxHeight')                    );*/                    $modelResize->resizeTo($size['w'], $size['h'], $size['typeSize']);                    $modelResize->saveImage($uploadFolderResize . '/' . $timeFileName);                    if ($folder == 'Banner') {                        $modelResize->resizeTo(229, 229, 'maxWidth');                        $modelResize->saveImage($uploadFolderResizeBanner . '/' . $timeFileName);                    }                }                if ($thumb) {                    $modelResize->resizeTo(391, 293);                    $modelResize->saveImage($uploadFolderDetail . '/' . $timeFileName);                    $modelResize->resizeTo($size['w']/2, $size['h']/2);                    $modelResize->saveImage($uploadFolderThumb . '/' . $timeFileName);                }            }            $image     = $fileUploadName == 'avatar' ? $model->avatar : $model->image;            $oldFile   = $image ? explode(',', $image) : array();            $arr       = !count($oldFile) ? $newFile : array_merge($oldFile, $newFile);            $fileImage = count($arr) == 1 ? $arr[0] : implode(',', $arr);        } else {            $fileImage = !$model->isNewRecord ? $model->image : '';        }        return $fileImage;    }    public static function deleteImage($params) {        $data = $params['model']::model()->find('id=:id', array(':id' => $params['id']));        if ($data) {            $fileName = isset($params['colFileName']) ? $params['colFileName'] : 'image';            $typeFile = explode(',', $data[$fileName]);            if (in_array($params['imageName'], $typeFile)) {                $diffTypeFile = array_diff($typeFile, array($params['imageName']));                $typeFile     = implode(',', $diffTypeFile);                $params['model']::model()->updateByPk($params['id'], array($params['colFileName'] => $typeFile));                unlink($params['folder'] . '/original/' . $params['model'] . '/' . $params['imageName']);                if (is_file($params['folder'] . '/resize/' . $params['model'] . '/' .$params['imageName'])) {                    unlink($params['folder'] . '/resize/' . $params['model'] . '/' .$params['imageName']);                }                if (is_file($params['folder'] . '/thumb/' . $params['model'] . '/' .$params['imageName'])) {                    unlink($params['folder'] . '/thumb/' . $params['model'] . '/' .$params['imageName']);                }            } else {                foreach ($typeFile as $file) {                    unlink($params['folder'] . '/' . $file);                }            }        }    }    public static function renderFiles($files = '') {        if ($files) {            $file = explode(',', $files);            foreach ($file as $f) {                echo $f . '<br />';            }        }    }    public static function renderImage($image, $folder = 'uploads', $char = ',', $getFirstItem = false, $isRandom = false) {        $dataImage = self::explodeCharData($image, $char, $getFirstItem, $isRandom);        return Helper::baseUrl() . '/' . $folder . '/' . $dataImage;    }    public static function explodeCharData($data, $char = ',', $getFirstItem = false, $isRandom = false) {        if (strpos($data, $char)) {            $array = explode($char, $data);        } else {            $array = $data;        }        if ($getFirstItem) {            $array = is_array($array) ? $array[0] : $array;        }        if ($isRandom) {            $array = is_array($array) ? $array[array_rand($array)] : $array;        }        return $array;    }    public static function printArray($typeLookup='Display_On_Page', $arrData, $char=',') {        if (is_string($arrData)) {            echo Lookup::item($typeLookup, $arrData);        } elseif (is_array($arrData)) {            if (count($arrData)) {                foreach ($arrData as $value) {                    echo Lookup::item($typeLookup, $value) . '<br />';                }            }        }    }    /**     * Get extension of a file     *     */    public static function getExt($fileName) {        return strtolower(substr(strrchr($fileName, '.'), 1));    }    public static function get_subfolders_name($path, $file = false) {        $list=array();        $results = scandir($path);        foreach ($results as $result) {            if ($result === '.' or $result === '..' or $result === '.svn') {                continue;            }            if(!$file) {                if (is_dir($path . '/' . $result)) {                    $list[]=trim($result);                }            }            else {                if (is_file($path . '/' . $result)) {                    $list[]=trim($result);                }            }        }        return $list;    }    public static function get_youtube_id($url, $need_curl = true) {        $url_modified=strtolower(str_replace('www.', '', $url));        if(strpos($url_modified,'http://youtube.com')!==false) {            parse_str(parse_url($url,PHP_URL_QUERY));            /** end split the query string into an array**/            if (!isset($v)) {                return false;            }	    	    //fast fail for links with no v attrib - youtube only            if($need_curl){                $checklink = 'http://gdata.youtube.com/feeds/api/videos/'. $v;                //** curl the check link ***//                $ch = curl_init();                curl_setopt($ch, CURLOPT_URL,$checklink);                curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);                curl_setopt($ch, CURLOPT_TIMEOUT, 5);                $result = curl_exec($ch);                curl_close($ch);                $return = $v;                if (trim($result) == "Invalid id") {                    $return = false;                } //you tube response                return $return; //the stream is a valid youtube id.            }            return $v;        }        return false;    }    public static function sendMail($param) {        // send mail        Yii::import('ext.yii-mail.YiiMailMessage');        Yii::app()->mail->viewPath = $param['viewPath'];        //send mail        $message       = new YiiMailMessage;        $message->view = $param['view'];        $message->setSubject($param['subject']);        //data        $message->setBody($param['body'], 'text/html');        $message->addTo($param['mailTo']);        $message->setFrom($param['mailFrom']);        if ($param['view'] == 'send_cart_order') {            $message->addCC('tuan.buidoanngoc@gmail.com');        }        Yii::app()->mail->send($message);    }    public static function updateFieldValue($model, $params) {        $value = $params['value'];        $attr  = $params['attr'];        switch ($attr) {            case 'discount':                $model->is_sale_off = $value > 0 ? 1 : 0;                $model->discount    = $value;                break;            case 'is_popular':                $model->$attr = $value > 0 ? 1 : 0;                break;            case 'status':                $model->$attr = $value == 1 ? 2 : 1;                break;            case 'is_read':                $model->$attr = $value == 1 ? 2 : 1;                break;            default:                $model->$attr = $value;                break;        }        return $model;    }    public static function seo($params) {        $keywords    = !empty($params['keywords']) ? $params['keywords'] : DEFAULT_META_KEYWORDS;        $description = !empty($params['description']) ? $params['description'] : DEFAULT_META_DESCRIPTION;        Helper::cs()->registerMetaTag($keywords, 'keywords');        Helper::cs()->registerMetaTag($description, 'description');        if (isset($params['title'])) {            Helper::cs()->registerMetaTag($params['title'], 'og:title');            Helper::cs()->registerMetaTag($params['type'], 'og:type');            Helper::cs()->registerMetaTag($params['url'], 'og:url');            Helper::cs()->registerMetaTag($params['image'] != '' ? $params['image'] : '/uploads/no_image.gif', 'og:image');            Helper::cs()->registerMetaTag($description, 'og:description');            Helper::cs()->registerMetaTag($params['site_name'], 'og:site_name');        }    }}