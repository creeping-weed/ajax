<?php
//准备表单数据
header("content-type:text/html;charset=utf-8");
$elements = array(
    0 => array(
        'tag' => 'input',
        'text' => '姓  名:',
        'attr' => array('type' => 'text', 'name' => 'user')
    ),
    1 => array(
        'tag' => 'input',
        'text' => '邮  箱:',
        'attr' => array('type' => 'text', 'name' => 'email')
    ),
    2 => array(
        'tag' => 'input',
        'text' => '手机号码:',
        'attr' => array('type' => 'text', 'name' => 'mobile')
    ),
    3 => array(
        'tag' => 'input',
        'text' => '性  别:',
        'attr' => array('type' => 'radio', 'name' => 'gender'),
        'option' => array('m' => '男', 'w' => '女'),
        'default' => 'm'
    ),
    4 => array(
        'tag' => 'input',
        'text' => '爱  好:',
        'attr' => array('type' => 'checkbox', 'name' => 'hobby[]'),
        'option' => array('swimming' => '游泳', 'reading' => '读书', 'running' => '跑步'),
        'default' => array('swimming','reading')
    ),
    5 => array(
        'tag' => 'select',
        'text' => '住  址:',
        'attr' => array('name' => 'area'),
        'option' => array('' => '--请选择--', 'BJ' => '北京', 'SH' => '上海', 'SZ'=> '深圳')
    ),
    6 => array(
        'tag' => 'textarea',
        'text' => '自我介绍:',
        'attr' => array('name' => 'introduce', 'cols' => 50, 'rows' => 5)
    ),
    7 => array(
        'tag' => 'input',
        'attr' => array('type' => 'submit', 'value' => '提交')
    )
);

function createInput($elements){
    $str = '<div><ul>';
    foreach ($elements as $v){
        if($v['tag']=='input'){
            if($v['attr']['type']=='text'){
                $str.='<li>'.$v['text'].'<input type="text" name="'.$v['attr']['name'].'"></li>';
            }else if($v['attr']['type']=='radio'){
                $str.='<li>'.$v['text'];
                foreach($v['option'] as $o){
                    $str.='<input type="radio" name="'.$v['attr']['name'].'" id="'.$o.'"><label for="'.$o.'">'.$o.'</label>';
                }
                $str.='</li>';
            }else if($v['attr']['type']=='checkbox'){
                $str.='<li>'.$v['text'];
                foreach($v['option'] as $o){
                    $str.='<input type="checkbox" name="'.$v['attr']['name'].'" id="'.$o.'"><label for="'.$o.'">'.$o.'</label>';
                }
                $str.='</li>';
            }else{
                $str.='<li><input type="'.$v['attr']['type'].'" value="'.$v['attr']['value'].'"></li>';
            }

        }
        if($v['tag']=='select'){
            $str.='<li>'.$v['text'].'<select name="'.$v['attr']['name'].'" >';
            foreach($v['option'] as $o){
                $str.=' <option>'.$o.'</option>';
            }
            $str.='</select></li>';
        }
        if($v['tag']=='textarea'){
            $str.='<li>'.$v['text'].'<textarea name="'.$v['attr']['name'].'" cols="'.$v['attr']['cols'].'" rows="'.$v['attr']['rows'].'"></textarea></li>';
        }
    }
    $str.= '</ul></div>';
    echo $str;
}
?>