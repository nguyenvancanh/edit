<?php
class EditsController extends AppController{
	var $name ="Edit";
	var $layout = "default";
	public function index(){
		$edit = $this->Edit->find('all',array('oder'=>'id_desc'));
		$this->set('edit',$edit);
	}
	// thêm post
    public function add(){
        $actionHeading="Add a Post";
        $actionSlogan="Please fill in all fieds.";
        $this->set(compact('actionheading','actionSlogan'));
        
        if(!empty($this->data)){
            $this->Edit->create();
            if($this->Edit->save($this->data)){
                $this->Session->setFlash(__('The Post has been saved',true));
                $this->redirect('index');
            }else{
                $this->Session->setFlash(__('The Post could not be saved. Please try again',true));
            }
        }
        
    }
    // edit post
    function edit($id=null){
        
        /*$actionHeading="Edit a Post";
        $actionSogan = " Please input all fill";
        $this->set(compact('actionHeading','actionSogan'));
        if($id && empty($this->data)){
            $this->Session->setFlash("invalid post");
        }
        if(!empty($this->data)){
        	echo $this->request->data['data[Post][title]'];	
           if( $this->Edit->save($this->data)){
                $this->Session->setFlash('The Post has been saved');
                $this->redirect(array('action'=>'index'));
            }else{
                $this->Session->setFlash('The post could not saved');
            }
        }
        /*if(empty($this->data)){
            $this->data = $this->Edit->read(null,$id);
        }
        */
        if($this->request->is('post')){
        	//echo "string";
        	$this->Edit->create();
        	if($this->Edit->save($this->request->data)){
        		$this->Session->setFlash('The Post has been saved');
        		$this->redirect(array('action'=>'index'));
        	}else{
        		$this->Session->setFlash('The post could not saved');
        	}
        }
    }
    //delete post
    function delete($id=null){
        if(!$id){
            $this->Session->setFlash('Id is invalid for post');
        }
        if($this->Edit->delete($id)){
            $this->Session->setFlash('The Post deleted');
            $this->redirect('index');
        }
    }
}