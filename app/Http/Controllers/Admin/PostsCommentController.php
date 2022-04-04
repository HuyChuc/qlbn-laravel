<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PostsComment\BulkDestroyPostsComment;
use App\Http\Requests\Admin\PostsComment\DestroyPostsComment;
use App\Http\Requests\Admin\PostsComment\IndexPostsComment;
use App\Http\Requests\Admin\PostsComment\StorePostsComment;
use App\Http\Requests\Admin\PostsComment\UpdatePostsComment;
use App\Models\PostsComment;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class PostsCommentController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexPostsComment $request
     * @return array|Factory|View
     */
    public function index(IndexPostsComment $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(PostsComment::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'code', 'create_date', 'post_id', 'full_name'],

            // set columns to searchIn
            ['id', 'code', 'create_date', 'comment', 'full_name']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.posts-comment.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.posts-comment.create');

        return view('admin.posts-comment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StorePostsComment $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StorePostsComment $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the PostsComment
        $postsComment = PostsComment::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/posts-comments'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/posts-comments');
    }

    /**
     * Display the specified resource.
     *
     * @param PostsComment $postsComment
     * @throws AuthorizationException
     * @return void
     */
    public function show(PostsComment $postsComment)
    {
        $this->authorize('admin.posts-comment.show', $postsComment);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param PostsComment $postsComment
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(PostsComment $postsComment)
    {
        $this->authorize('admin.posts-comment.edit', $postsComment);


        return view('admin.posts-comment.edit', [
            'postsComment' => $postsComment,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdatePostsComment $request
     * @param PostsComment $postsComment
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdatePostsComment $request, PostsComment $postsComment)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values PostsComment
        $postsComment->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/posts-comments'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/posts-comments');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyPostsComment $request
     * @param PostsComment $postsComment
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyPostsComment $request, PostsComment $postsComment)
    {
        $postsComment->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyPostsComment $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyPostsComment $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    PostsComment::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
