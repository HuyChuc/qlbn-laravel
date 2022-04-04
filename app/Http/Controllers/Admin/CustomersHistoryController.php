<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CustomersHistory\BulkDestroyCustomersHistory;
use App\Http\Requests\Admin\CustomersHistory\DestroyCustomersHistory;
use App\Http\Requests\Admin\CustomersHistory\IndexCustomersHistory;
use App\Http\Requests\Admin\CustomersHistory\StoreCustomersHistory;
use App\Http\Requests\Admin\CustomersHistory\UpdateCustomersHistory;
use App\Models\CustomersHistory;
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

class CustomersHistoryController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexCustomersHistory $request
     * @return array|Factory|View
     */
    public function index(IndexCustomersHistory $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(CustomersHistory::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['name', 'age', 'customer_code', 'visit_date', 'id', 'customer_id'],

            // set columns to searchIn
            ['name', 'age', 'customer_code', 'visit_date', 'KHAMBENH', 'BENHSU', 'LYDO', 'id', 'customer_id']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.customers-history.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.customers-history.create');

        return view('admin.customers-history.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreCustomersHistory $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreCustomersHistory $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the CustomersHistory
        $customersHistory = CustomersHistory::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/customers-histories'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/customers-histories');
    }

    /**
     * Display the specified resource.
     *
     * @param CustomersHistory $customersHistory
     * @throws AuthorizationException
     * @return void
     */
    public function show(CustomersHistory $customersHistory)
    {
        $this->authorize('admin.customers-history.show', $customersHistory);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param CustomersHistory $customersHistory
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(CustomersHistory $customersHistory)
    {
        $this->authorize('admin.customers-history.edit', $customersHistory);


        return view('admin.customers-history.edit', [
            'customersHistory' => $customersHistory,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateCustomersHistory $request
     * @param CustomersHistory $customersHistory
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateCustomersHistory $request, CustomersHistory $customersHistory)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values CustomersHistory
        $customersHistory->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/customers-histories'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/customers-histories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyCustomersHistory $request
     * @param CustomersHistory $customersHistory
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyCustomersHistory $request, CustomersHistory $customersHistory)
    {
        $customersHistory->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyCustomersHistory $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyCustomersHistory $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    CustomersHistory::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
