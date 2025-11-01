<?php

declare(strict_types=1);

class MessageController {
  public function send() {

  }

  public function delete($message_id) {
      //delete message by message id
  }

  public function save_as_draft() {
     //save a message as a draft
  }

  public function filter_messages() {
      //filter messages based on date,read, unread and drafts
  }

  public function retrieve_drafts($user_id) {
   //get all drafts(as a result of the filter_messages() method)
  }

  public function retrieve_message($message_id) {
      //get selected message of a user
  }

  public function retrieve_messages($user_id) {
    //get all user messages
  }

  public function delete_all($user_id) {
      //delete all of a users messages
  }

  public function send_notification() {
      //send a notification when a message is sent
  }







}
