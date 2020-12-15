<?php
include "config.php";
class fonctions
{

    function add_car_item($titre,$slogan,$ord,$img)
    {
        $sql="insert into sisagri.carousel (titre,slogan,num,img)
                                        values(:tit,:slg,:ord,:img)";

        $db=config::getConnexion();
        try
        {
            $req=$db->prepare($sql);
            $req->bindValue(':tit',$titre);
            $req->bindValue(':slg',$slogan);
            $req->bindValue(':img',$img);
            $req->bindValue(':ord',$ord);
            $req->execute();
        }
        catch (Exception $e)
        {
            echo "error :".$e->getMessage();
        }
    }


    function add_Service_item($titre,$text,$img)
    {
        $sql="insert into sisagri.service (titre,text,img)
                                        values(:tit,:txt,:img)";

        $db=config::getConnexion();
        try
        {
            $req=$db->prepare($sql);
            $req->bindValue(':tit',$titre);
            $req->bindValue(':txt',$text);
            $req->bindValue(':img',$img);
            $req->execute();
        }
        catch (Exception $e)
        {
            echo "error :".$e->getMessage();
        }
    }

    function get_car_item()
    {
        $sql="select * from sisagri.carousel order by num ASC";
        $db=config::getConnexion();
        try
        {
            return $db->query($sql);
        }
        catch (Exception $e)
        {
            echo "error :".$e->getMessage();
        }

    }

    function get_service_item()
    {


            $sql="select * from sisagri.service " ;


        $db=config::getConnexion();
        try
        {
            return $db->query($sql);
        }
        catch (Exception $e)
        {
            echo "error :".$e->getMessage();
        }

    }

    function del_car_item($id )
    {
        $sql="delete from sisagri.carousel where id='$id'";
        $db=config::getConnexion();
        try
        {
//            $req=$db->prepare($sql);
//            $req->bindValue(':id',$id);
//            $req->execute();
            $db->query($sql);
        }
        catch (Exception $e)
        {
            echo "error :".$e->getMessage();
        }
    }


    function del_Service_item($id )
    {
        $sql="delete from sisagri.service where id='$id'";
        $db=config::getConnexion();
        try
        {
//            $req=$db->prepare($sql);
//            $req->bindValue(':id',$id);
//            $req->execute();
            $db->query($sql);
        }
        catch (Exception $e)
        {
            echo "error :".$e->getMessage();
        }
    }
    function edit_car_item($id,$titre=null,$slogan=null,$ord=null,$img=null)
    {
        $sql="update sisagri.carousel set titre='$titre', num='$ord',slogan='$slogan',img='$img' where id='$id'";

        if($img=="")
        {
            $sql="update sisagri.carousel set titre='$titre', slogan='$slogan', num='$ord' where id='$id'";
        }

        echo $sql;
        $db=config::getConnexion();
        try
        {
            $db->query($sql);
        }
        catch (Exception $e)
        {
            echo "error :".$e->getMessage();
        }
        
    }


    function edit_service_item($id,$titre=null,$text=null,$img=null)
    {
        $sql="update sisagri.service set titre= :titre, text= :text,img= :img where id='$id'";

        if($img=="")
        {
            $sql="update sisagri.service set titre= :titre, text= :text where id='$id'";
        }

        echo $sql;
        $db=config::getConnexion();
        try
        {
            $req=$db->prepare($sql);
            $req->bindValue(':titre',$titre);
            $req->bindValue(':text',$text);

             if ($img!="")
             {
                 $req->bindValue(':img',$img);
             }
            $req->execute();
        }
        catch (Exception $e)
        {
            echo "error :".$e->getMessage();
        }
    }



    function get_Mis_Vis_item($lang=null)
    {
        $sql="select * from dalice.mis_vis " ;
        if ($lang!=null){
            $sql="select * from dalice.mis_vis WHERE lang='$lang'" ;
        }

        $db=config::getConnexion();
        try
        {
            return $db->query($sql);
        }
        catch (Exception $e)
        {
            echo "error :".$e->getMessage();
        }

    }


    function edit_MisVis_item($lang,$mis=null,$vis=null,$img_mis=null,$img_vis=null)
    {
        $sql="update dalice.mis_vis set mis= :mis, vis= :vis ,img_mis=:img_mis,img_vis=:img_vis where lang='$lang'";
        echo "1".$img_mis;
        echo"2".$img_vis;
        if(($img_mis=="") and ($img_vis!=""))
        {
            $sql="update dalice.mis_vis set mis= :mis, vis= :vis ,img_vis= :img_vis where lang='$lang'";
        }
        else if (($img_vis=="") and ($img_mis!="") )
        {
            $sql="update dalice.mis_vis set mis= :mis, vis= :vis ,img_mis= :img_mis where lang='$lang'";
        }
        else if (($img_mis=='') and ($img_vis==''))
        {
            $sql="update dalice.mis_vis set mis= :mis, vis= :vis  where lang='$lang'";
        }

        echo $sql;
        $db=config::getConnexion();
        try
        {
            $req=$db->prepare($sql);
            $req->bindValue(':mis',$mis);
            $req->bindValue(':vis',$vis);


            if (($img_mis!="") and ($img_vis==""))
            {
                echo '1';
                $req->bindValue(':img_mis',$img_mis);
            }
            else if (($img_mis=="") and ($img_vis!=""))
            {
                echo '2';
                $req->bindValue(':img_vis',$img_vis);
            }
            else if (($img_mis!="") and ($img_vis!=""))
            {
                echo '3';
            $req->bindValue(':img_mis', $img_mis);
            $req->bindValue(':img_vis', $img_vis);
        }


            $req->execute();
        }
        catch (Exception $e)
        {
            echo "error :".$e->getMessage();
        }
    }

    function get_act_item($lang=null)
    {
        $sql="select * from dalice.act1 " ;
        if ($lang!=null){
            $sql="select * from dalice.act1 WHERE lang='$lang'" ;
        }

        $db=config::getConnexion();
        try
        {
            return $db->query($sql);
        }
        catch (Exception $e)
        {
            echo "error :".$e->getMessage();
        }

    }


    function edit_act_item($lang,$titre=null,$val=null,$titre2=null,$val2=null,$titre3=null,$val3=null)
    {
        $sql="update dalice.act1 set titre= :titre, val= :val,titre2= :titre2,val2= :val2,titre3= :titre3 ,val3 = :val3 where lang='$lang'";

        echo $sql;
        $db=config::getConnexion();
        try
        {
            $req=$db->prepare($sql);
            $req->bindValue(':titre',$titre);
            $req->bindValue(':val',$val);
            $req->bindValue(':titre2',$titre2);
            $req->bindValue(':val2',$val2);
            $req->bindValue(':titre3',$titre3);
            $req->bindValue(':val3',$val3);


            $req->execute();
        }
        catch (Exception $e)
        {
            echo "error :".$e->getMessage();
        }
    }


    function get_Cor_item()
    {
        $sql="select * from sisagri.cordonnee " ;

        $db=config::getConnexion();
        try
        {
            return $db->query($sql);
        }
        catch (Exception $e)
        {
            echo "error :".$e->getMessage();
        }

    }


    function edit_Cor_item($id,$tel=null,$email=null,$adresse=null,$insta=null,$twitter=null,$linkedin=null,$fb=null)
    {
        $sql="update sisagri.cordonnee set tel= :tel, email= :email,adresse= :adresse,insta= :insta ,twitter= :twitter ,linkedin = :linkedin ,fb =:fb where id='$id'";

        echo $sql;
        $db=config::getConnexion();
        try
        {
            $req=$db->prepare($sql);
            $req->bindValue(':tel',$tel);
            $req->bindValue(':email',$email);
            $req->bindValue(':adresse',$adresse);
            $req->bindValue(':insta',$insta);
            $req->bindValue(':twitter',$twitter);
            $req->bindValue(':linkedin',$linkedin);

            $req->bindValue(':fb',$fb);


            $req->execute();
        }
        catch (Exception $e)
        {
            echo "error :".$e->getMessage();
        }
    }

}
