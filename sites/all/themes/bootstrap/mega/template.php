<?php


function mega_preprocess_html(&$vars, $hook) {
    foreach (system_region_list($GLOBALS['theme']) as $region_key => $region_name) {

        // Get the content for each region and add it to the $region variable
        if ($blocks = block_get_blocks_by_region($region_key)) {
            $vars['region'][$region_key] = $blocks;
        }
        else {
            $vars['region'][$region_key] = array();
        }
    }

}

function mega_preprocess_page(&$vars, $hook) {

    $var['bazar_background'] = theme_get_setting('bazar_background');
    if (isset($vars['node'])) {
        $type = $vars['node']->type;
        $vars['theme_hook_suggestions'][] = 'page__'.$type;

        switch($type){
            case 'member':
                mega_preprocess_member($vars);
                break;
            case 'home':
                mega_preprocess_home($vars);
                break;
            default:
                break;

        }
    }
}

function mega_preprocess_member(&$vars){
    $node = $vars['node'];
    $member = array();
    $member['first_name'] = $node->field_member_first_name[LANGUAGE_NONE][0]['value'];
    $member['last_name'] = $node->field_member_last_name[LANGUAGE_NONE][0]['value'];
    $member['email'] = $node->field_email[LANGUAGE_NONE][0]['value'];
    $member['phone'] = $node->field_phone[LANGUAGE_NONE][0]['value'];
    $member['photo'] = base_path().path_to_theme().'/img/placeholder-img.jpg';
//    $member_profile = user_load($node->uid);
    $vars['member'] = $member;
}

function mega_preprocess_home(&$vars){
    $node = $vars['node'];
    $home = array();
    $home['welcome_message'] = $node->field_welcome_message[LANGUAGE_NONE][0]['value'];
    $home['objectives_message'] = $node->field_objectives_mission[LANGUAGE_NONE][0]['value'];
    $vars['home'] = $home;
}


function mega_views_pre_render(&$view) {
    if($view->name == 'member_overview'){
        $members = array();
        foreach($view->result as $key => $member){
            $memberIns = array();
            $memberIns['first_name'] = $member->field_field_member_first_name[0]['raw']['value'];
            $memberIns['last_name'] = $member->field_field_member_last_name[0]['raw']['value'];
            $memberIns['phone'] = $member->field_field_phone[0]['raw']['value'];
            $memberIns['email'] = $member->field_field_email[0]['raw']['value'];
            $memberIns['link'] = url('node/'.$member->nid);
            $members[] = $memberIns;
        }
        $view->members = $members;
    }
    //var_dump($view->result);
}

function mega_form_alter(&$form, $form_state, $form_id)  {
    switch ($form_id)  {
        case 'collect_member_info_form':

            break;
    }
}

function mega_preprocess_button(&$vars) {
    if($vars['element']['#type'] == 'submit'){
        unset($vars['element']['#attributes']['class']);
        $vars['element']['#attributes']['class'][] = 'btn';
    }
}
