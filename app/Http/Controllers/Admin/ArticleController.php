<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ArticleRequest;
use App\Models\Article;
use App\Services\ArticleService;
use Exception;
use Illuminate\Http\UploadedFile;
use Log;
use Str;

class ArticleController extends Controller
{
    public function index()
    { // 文章列表
        return view('admin.article.index', ['articles' => Article::latest()->orderByDesc('sort')->paginate()->appends(request('page'))]);
    }

    public function store(ArticleRequest $request)
    { // 添加文章
        $data = $request->validated();
        // LOGO
        try {
            if ($data['type'] !== '4' && $request->hasFile('logo')) {
                $path = $this->fileUpload($request->file('logo'));
                if (is_string($path)) {
                    $data['logo'] = $path;
                } else {
                    return $path;
                }
            }

            $data['content'] = json_encode($data['content']);

            if ($article = Article::create($data)) {
                return redirect(route('admin.article.edit', $article))->with('successMsg', '添加成功');
            }
        } catch (Exception $e) {
            Log::error('添加文章错误：'.$e->getMessage());

            return redirect()->back()->withInput()->withErrors($e->getMessage());
        }

        return redirect()->back()->withInput()->withErrors('添加失败');
    }

    public function fileUpload(UploadedFile $file)
    { // 图片上传
        $fileName = Str::random(8).time().'.'.$file->getClientOriginalExtension();

        if (! $file->storeAs('public', $fileName)) {
            return redirect()->back()->withInput()->withErrors('Logo存储失败');
        }

        return 'upload/'.$fileName;
    }

    public function create()
    { // 添加文章页面
        $categories = Article::whereNotNull('category')->distinct()->get('category');

        return view('admin.article.info', compact('categories'));
    }

    public function show(Article $article)
    { // 文章页面
        $article->content = (new ArticleService($article))->getContent();

        return view('admin.article.show', compact('article'));
    }

    public function edit(Article $article)
    { // 编辑文章页面
        $categories = Article::whereNotNull('category')->distinct()->get('category');

        return view('admin.article.info', compact('article', 'categories'));
    }

    public function update(ArticleRequest $request, Article $article)
    { // 编辑文章
        $data = $request->validated();
        $data['logo'] = $data['logo'] ?? null;
        // LOGO
        if ($data['type'] !== '4' && $request->hasFile('logo')) {
            $path = $this->fileUpload($request->file('logo'));
            if (is_string($path)) {
                $data['logo'] = $path;
            } else {
                return $path;
            }
        }

        if ($article->update($data)) {
            return redirect()->back()->with('successMsg', '编辑成功');
        }

        return redirect()->back()->withInput()->withErrors('编辑失败');
    }

    public function destroy(Article $article)
    { // 删除文章
        try {
            $article->delete();
        } catch (Exception $e) {
            Log::error('删除文章失败：'.$e->getMessage());

            return response()->json(['status' => 'fail', 'message' => '删除失败：'.$e->getMessage()]);
        }

        return response()->json(['status' => 'success', 'message' => '删除成功']);
    }
}
