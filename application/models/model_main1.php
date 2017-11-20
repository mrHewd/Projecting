<?php
class Model_Main extends Model
{
	public function get_data($page,$tags)
	{	
            $data=array();
            session_start();
            $hello;
            $name = "Guest";
                if (!empty($_SESSION)&&!empty($_SESSION["name"])){
                    $hello="Sign Out";
                    $name  =$_SESSION["name"];
                }else {
                    $hello="Sign In";
                }
            $name='Hello, '.$name.'!';
            
            $data['name']=$name;
            $data['hello']=$hello;
            $data['tags']=$tags;
            
            $user = 'root';
            $pass = '';
            $dbh = new PDO('mysql:host=localhost; dbname=forumdb; ', $user, $pass);

            if(isset($page)){
                $page_n=$page;                        
            }else {
                $page_n=1;                        
            }

            $q_to_show=5;
            $r = $dbh->prepare('SELECT question.id,name,question_text,tags,date,login FROM question,forum_user where question.user_id=forum_user.id'
                    .(isset($tags)?" and tags LIKE '%$tags%'":'')
                    . ' order by question.id desc limit '.(($page_n-1)*$q_to_show).','.($q_to_show));
            $r->execute();
            
            while ($row = $r->fetch(PDO::FETCH_LAZY))
            {
                $data['questions'][]=array(
                    'title'=>$row["name"],
                    'id'=>$row["id"],
                    'text'=>$row["question_text"],
                    'login'=>$row["login"],
                    'tags'=>$row["tags"],
                    'date'=>$row["date"],
                );
            }
            $r = $dbh->prepare('SELECT question.id,name,question_text,tags,date,login,count(*) as count FROM question,forum_user where question.user_id=forum_user.id'
                            .((isset($tags)?" and tags LIKE '%$tags%'":'')));
            $r->execute();
            $question_n=0;
             while ($row = $r->fetch(PDO::FETCH_LAZY)){
               $question_n=$row["count"];
                }

            if($question_n%$q_to_show==0){  
                $data['page_limit']=$question_n/$q_to_show;                        
            }else{
                $data['page_limit']=intval($question_n/$q_to_show)+1;                       
            }
                     
            return $data;
	}
}