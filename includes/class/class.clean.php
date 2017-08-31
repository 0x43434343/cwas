 <?
//->Class Anti SQL Injector Coded By Walid
//->For more Classes contact me on my twitter: @walid_naceri
error_reporting(0);
interface walid{
public function security($input);
public function mysql_check();}
class security_sql implements walid{
public function __call($imen,$walid)
{
echo $imen." isn't a name of a function";
}
public function mysql_check(){
if(!mysql_ping()){
die("<script>alert('The security against SQL INJECTION can't work check the connection to database')</script>");
}}
public function security($input){
$input = mysql_real_escape_string($input);
if(preg_match("/'|script|<|>|''|or'|'or| ''|=|''='/",$input)){
echo "<script>alert('Security By Walid Twitter:@walid_naceri')</script>";
die();
}}}
//-> How to use.
//-> first you have to make the object and be carfule you have to make sure that you are connected with Database(MySQl).
//-> $only_test = new security_sql();
//->Seconde run the function mysql_check();
//->$only_test->mysql_check();
//->Finally Run the function security and inside it put the post that the user or anyone enter it without any thing ex:
//->$only_test->security($_POST['test']);
?> 
