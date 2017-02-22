<?php
/**
 * Created by javier
 * Date: 22/02/17
 * Time: 09:04
 */

namespace App\Controller;

use Cake\ORM\TableRegistry;

/**
 * @property \App\Model\Table\UsersTable Users
 */
class TestingController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        if ($this->request->getParam('action') === 'notWorking') {
            $this->loadModel('Users');
        }
    }
    
    public function working()
    {
        $user = TableRegistry::get('Users')->find()->contain(['Tags'])->where(['Users.id' => 2])->first();
        $this->response->body(sprintf('<pre>%s</pre>', json_encode($user, JSON_PRETTY_PRINT)));

        return $this->response;
    }
    
    public function workingToo()
    {
        $this->loadModel('Users');
        $user = $this->Users->find()->contain(['Tags'])->where(['Users.id' => 2])->first();
        $this->response->body(sprintf('<pre>%s</pre>', json_encode($user, JSON_PRETTY_PRINT)));
        
        return $this->response;
    }
    
    public function notWorking()
    {
        $user = $this->Users->find()->contain(['Tags'])->where(['Users.id' => 2])->first();
        $this->response->body(sprintf('<pre>%s</pre>', json_encode($user, JSON_PRETTY_PRINT)));
        
        return $this->response;
    }
}