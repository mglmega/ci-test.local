<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Test extends BaseController
{
    public function index()
    {
        // $categoryMod = model('CategoryMod');

        # insert 
        // $newCategory = new \App\Entities\Category();
        // // $newCategory->name = 'E-sport';
        // $newCategory->name = '';
        // if (!$categoryMod->save($newCategory)) {
        //     var_dump($categoryMod->errors());
        // } else {
        //     echo 'Category saved successfully';
        // }


        # update
        // $category = $categoryMod->find(4);
        // echo $category->name;
        // echo '<br>';
        // $category->name .= ' Updated';
        // if (!$categoryMod->save($category)) {
        //     var_dump($categoryMod->errors());
        // } else {
        //     echo 'Category update successfully';
        // }

        # delete
        // $categoryMod->delete(4);


        # findALl
        // echo '<pre>';
        // $list = $categoryMod->findAll();
        // foreach ($list as $category) {
        //     // \var_dump($category);
        //     // 
        //     echo $category->created_at->humanize();
        //     echo '<hr>';
        //     echo $category->created_at->setTimezone('Asia/Ulaanbaatar')->toDateString();
        //     echo '<hr>';
        // echo $category->insertInfo();
        // echo '<hr>';
        // }
        // // echo '<pre>';
        // // \var_dump($list);
        // // echo '</pre>';
        // echo '</pre>';


        // echo '<br>';
        // service('settings')->set('App.siteName', 'Mg CI4 testing official packeges');
        // echo service('settings')->get('App.siteName');
        $user = auth()->user();
        // echo '<pre>';
        // \var_dump($user);
        // echo '</pre>';
        echo $user->can('admin.access');




        echo '<br>';
        return 'here';
    }


    public function namechange($newName = '')
    {
        // die('mglmega');
        service('settings')->set('App.siteName', $newName);
        return \redirect()->to('/test');
    }
}
