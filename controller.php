<?php
/**
* Created by Syed Khalid Ahamed
* Date: 2021-08-05 18:14:43
*/
namespace App\Http\Admin\Controllers;
use Illuminate\Http\Request;
namespace App\Http\Admin\Controllers;
class SettingController extends Controller
            {
            /**
             * Display a listing of the resource.
             *
             * @return \Illuminate\Http\Response
             */
            public function index()
            {
                $title = [
                    'Title' => Lang::get('labels.setting')
                ];
                $language_id  =  '1';
                $result = [];
                $message = [];
                $errorMessage = [];

                $result = [
                    'Title' => 'Menu',
                    'message' => $message,
                    'errorMessage' => $errorMessage
                ];
                return view('admin.setting.index',$title)->with('result', $result);
            }

            /**
             * Show the form for creating a new resource.
             *
             * @return \Illuminate\Http\Response
             */
            public function create()
            {
            //
            }

            /**
             * Store a newly created resource in storage.
             *
             * @param  \Illuminate\Http\Request  $request
             * @return \Illuminate\Http\Response
             */
            public function store(Request $request)
            {
            //
            }

            /**
             * Display the specified resource.
             *
             * @param  int  $id
             * @return \Illuminate\Http\Response
             */
            public function show($id)
            {
            //
            }

            /**
             * Show the form for editing the specified resource.
             *
             * @param  int  $id
             * @return \Illuminate\Http\Response
             */
            public function edit($id)
            {
            //
            }

            /**
             * Update the specified resource in storage.
             *
             * @param  \Illuminate\Http\Request  $request
             * @param  int  $id
             * @return \Illuminate\Http\Response
             */
            public function update(Request $request, $id)
            {
            //
            }

            /**
             * Remove the specified resource from storage.
             *
             * @param  int  $id
             * @return \Illuminate\Http\Response
             */
            public function destroy($id)
            {
            //
            }

         }