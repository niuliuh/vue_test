<?php 
$arr = pathinfo('/wwwroot/include/page.class.php');
substr($arr['basename'],strrpos($arr['basename'],'.'));


class test{
    public $testa;
    public $testb;
    public function testfun(){
        echo 'this is a function';
    }
}
$new_test = new test();
$new_test->testa;
$new_test->testfun();

//本地mysql数据库db_test里已建有表friend，数据库的连接用户为root，密码为123。friend表字段为：id,name,age,gender,phone,email，请使用php连接mysql，选择出friend表里age > 20的所有记录打印结果，并统计出查询出的结果总数。

/*$link = mysqli_connect('localhost','root','123','db_test');
mysqli_select_db($link,'friend');
$result = mysqli_query('select id,name from friend where age > 20');
$count = mysqli_num_rows($result);
while($row = mysqli_fetch_row($result)){
    print_r($row);
}

alert table tablename add index ('');
*/

$arr = [1,2,3,4,5];
function test($arr){
    for($i=0;$i<count($arr);$i++){
        for($j=0;$j<count($arr)-1-$i;$j++){
            if($arr[$j] > $arr[$j+1]){
                $tmp = $arr[$j+1];
                $arr[$j+1] = $arr[$j];
                $arr[$j] = $tmp; 
            }
        }
    }
    return $arr;
}
print_r(test($arr));
echo '---<br>---';
//请以空格作为间隔，拆分字符串’Apple Orange Banana Strawberry’,组成数组$fruit, 数组中所有元素都用小写字母，并按照字母先后次序排序
$str = 'Apple Orange Banana Strawberry';
$arr = sort(explode(" ",strtolower($str)));
//对于用户输入一串字符串$string,要求$string中只能包含大于0的数字和英文逗号，请用正则 表达式验证，对于不符合要求的$string返回出错信息
class reg{
    public function preg_str($str){
        if(preg_match("/^([1-9,])+$/",$str)){
            return true;
        }else{
            return false;
        }
    }
}
$regs = new reg();
$str = '23423423,23432,';
if($regs->preg_str($str)){
    echo 'true';
}else{
    echo 'false';
}
echo '---<br>---';

//二维数组排序， $arr是数据，$keys是排序的健值，$order是排序规则，1是升序，0是降序

    $arr = [
        [3,2,1],
        [4,5,6],
        [7,8,9]
    ];
    if (!is_array($arr)) {
        return false;
    }
    echo '<pre>';
    $keys = 1;
    $keysvalue = array();
    foreach($arr as $key => $val) {
        $keysvalue[$key] = $val[$keys];
    }
    if($order == 0){
        arsort($keysvalue);
    }else {
        asort($keysvalue);
    }
    reset($keysvalue);

    foreach($keysvalue as $key => $vals) {
        $keysort[$key] = $key;
    }
    $new_array = array();
    foreach($keysort as $key => $val) {
        $new_array[$key] = $arr[$val];
    }
    print_r($keysort);
    print_r($new_array);


   echo '---<br>---';
   //单例模式，创建mysqli数据库链接的单例对象
class Db {                                  ////////////////////////////////////////////////////////////////////////////////
    private static $instance;
    public $handle;
    Private function __construct($host,$username,$password,$dbname) {
        $this->handle=NULL;
        $this->getcon($host,$username,$password,$dbname);
    }
    public static function getBb() {
        self::$instance=new Db();
        return self::$instance;
    }
    private function getcon($host,$username,$password,$dbname) {
        if($this->handle!=NULL){
            return true;
        }
        $this->handle=mysqli_connect($host,$username,$password,$dbname);
    }
}
alert table table_name add sex enum('1','2');





   echo '---<br>---';
echo phpinfo();




