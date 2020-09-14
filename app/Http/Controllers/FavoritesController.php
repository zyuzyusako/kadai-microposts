<?php

//課題で追加以下全文

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
 /**
     * ユーザをお気に入りするアクション。
     *
     * @param  $id  相手ユーザのid
     * @return \Illuminate\Http\Response
     */
    public function store($id)
    {
        // 認証済みユーザ（閲覧者）が、 idのお気に入りを追加する
        \Auth::user()->favolite($id);
        // 前のURLへリダイレクトさせる
        return back();
    }

    /**
     * ユーザをお気に入りからはずすアクション。
     *
     * @param  $id  相手ユーザのid
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // 認証済みユーザ（閲覧者）が、 idのお気に入りをアンフォローする
        \Auth::user()->unfavolite($id);
        // 前のURLへリダイレクトさせる
        return back();
    }

}
