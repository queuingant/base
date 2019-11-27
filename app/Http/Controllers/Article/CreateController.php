<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Auth;

class CreateController extends Controller
{
    public function articleCreate(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'content' => 'required',
        ],[],[
            'title' => '文章标题',
            'content' => '文章内容',
        ]);

        Article::create([
            'user_id' => Auth::user()->id,
            'title' => $request->title,
            'content' => $request['content'],
        ]);

        session()->flash('green','创建成功');
        return redirect()->route('articlesBigToSmall');
    }
}
