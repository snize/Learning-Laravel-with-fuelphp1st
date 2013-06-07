<?php

class FormController extends BaseController
{

    /*
    |--------------------------------------------------------------------------
    | Default Home Controller
    |--------------------------------------------------------------------------
    |
    | You may wish to use controllers instead of, or in addition to, Closure
    | based routes. That's great! Here is an example controller method to
    | get you started. To route to this controller, just add the route:
    |
    |	Route::get('/', 'HomeController@showWelcome');
    |
    */

    protected $layout = 'template';

    public function getIndex()
    {
        $this->layout->title = 'コンタクトフォーム';
        $this->layout->content = View::make('form.index');
    }

    public function postConfirm()
    {
        $validator = $this->get_validation();

        if ($validator->fails()) {
            $this->layout->title = 'エラー | 確認 | コンタクトフォーム';
            $this->layout->content = 'xxx';
            return Redirect::back()
                ->withErrors($validator)
                ->withInput();
        } else {
            $this->layout->title = '確認 | コンタクトフォーム';
            $this->layout->content = 'qqq';
        }
    }

    public function get_validation()
    {
        //Todo trimがない

        $rules = array(
            'name' => 'required|max:50',
            'email' => 'required|max:100|email',
            'comment' => 'required|max:400',
        );

        $validator = Validator::make(Input::all(), $rules);

        return $validator;
    }

}