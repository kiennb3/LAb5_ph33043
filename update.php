<?php
//khai bao thong tin
$ser="localhost";//server
$u="root";//user
$p="";//pass
$db="ab";//ten database
//tao ket noi csdl
$conn= new mysqli($ser,$u,$p,$db);
//lenh insert
$sql="update test set HoTen='Do trung kien',SoDT='0363779192' where Ma=3";
//thuc hien insert
if($conn->query($sql)===TRUE){
    echo "Da update thanh cong";
}
else
{
    echo "Co loi: ".$conn->error;
}
$conn->close();//dong ket noi

?>