<?php
/**
 * The control file of message of XiRangBPS.
 *
 * @copyright   Copyright 2009-2011 QingDao XiRang Network Infomation Co,LTD (www.xirang.biz)
 * @author      Yidong Wang <yidong@cnezsoft.com>
 * @package     message
 * @version     $Id$
 * @link        http://www.xirang.biz
 */
class message extends control
{
    /**
     * View a message 
     * 
     * @param  int    $messageID 
     * @access public
     * @return void
     */
    public function view($messageID)
    {
        $message = $this->message->getByID($messageID);
        if($message->to != $this->app->user->account) die();
        $this->message->markReaded($message->id);
        $this->locate($message->link);
    }

    /**
     * Batch delete messages.
     * 
     * @param  array    $messages 
     * @param  string   $confirm 
     * @access public
     * @return void
     */
    public function batchDelete($messages = '', $confirm = 'no')
    {
        if($confirm == 'no')
        {
            if($this->post->messages)
            {
                $deleteLink = inlink('batchDelete', 'messages=' . join(',', $this->post->messages) . '&confirm=yes');
                die(js::confirm($this->lang->message->confirmDelete, $deleteLink));
            }
        }
        else
        {
            $messages = explode(',', $messages);
            foreach($messages as $message) $this->message->deleteByAccount($message, $this->app->user->account);
            die(js::locate($this->createLink('user', 'message'), 'parent'));
        }
    }
}
