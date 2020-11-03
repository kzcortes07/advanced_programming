<?php
            class User
            {
              public $name;

              function addFriend($name){
                echo "$name" . " added a friend. <br>";
              }
              function postStatus($name){
                echo "$name" . " posted a status. <br>";
              }
            }
            $usernew = new User();
            echo $usernew->addFriend('Ken Zedric Cortes');
            echo "<br>";
            echo $usernew->postStatus('Ken Zedric Cortes');

      ?>
