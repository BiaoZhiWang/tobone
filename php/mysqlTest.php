<?php
    header("Content-Type:text/json;charset=utf-8");
//    ���ݿ�����
    $conn = @mysql_connect("localhost","root","")
           or die("���ݿ�����ʧ�ܣ������������,�Ժ�������");
       mysql_select_db("tobone");
       mysql_query("set names 'utf8'");
//       ���ݿ�����
       //��ȡ���ݿ�����
        if($_POST['class']=='title'){
                      $sql = "select title from hottitle;";
        }else if($_POST['class']=='article'){
               $sql="select id, type,imgSrc,title,abstract ,author ,date,number from article";
        }else if($_POST['class']=='sortArticle'){
               $sql='select id, type,title,abstract ,author ,date,number from article where type="'.$_POST['type'].'";';
        }
        else if($_POST['class']=='art_context'){
                $id=$_POST['id'];
                $sql="select context from art_context where id=".$id.';';
        }else if($_POST['class']=='nav'){
        //ע�������ѯ����Ķ�����
                $sql='select id from article where type="'.$_POST['type'].'";';
        }else if($_POST['class']=='clicknav'){
                $sql='select value from clicknav where type="current";';
        }


       $result = mysql_query($sql);
       $arr=array();
       while($row = mysql_fetch_object($result))
         {
            array_push($arr,$row);
         }
         //���������json�������
        print_r(json_encode($arr));
//         print_r('php');

?>