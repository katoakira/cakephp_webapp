<?php 
    class Item extends AppModel {
        public $validate = array(
            'title' => array(
                'rule' => 'notEmpty',
                'message' => 'タイトルを入力してください'
            ),
            'name' => array(
                'rule' => 'notEmpty',
                'message' => '名前を入力してください'
            ),
            'body' => array(
                'rule' => 'notEmpty',
                'message' => '文字を入力してください'
            ),
            'price' => array(
                'rule' => 'notEmpty',
                'message' => '価格を入力してください'
            ),
            'due_date' => array(
                'rule' => 'notEmpty',
                'message' => '締切日を入力してください'
            )
        );
    }
