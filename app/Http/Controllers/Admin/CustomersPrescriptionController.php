<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CustomersPrescription\BulkDestroyCustomersPrescription;
use App\Http\Requests\Admin\CustomersPrescription\DestroyCustomersPrescription;
use App\Http\Requests\Admin\CustomersPrescription\IndexCustomersPrescription;
use App\Http\Requests\Admin\CustomersPrescription\StoreCustomersPrescription;
use App\Http\Requests\Admin\CustomersPrescription\UpdateCustomersPrescription;
use App\Models\CustomersPrescription;
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

class CustomersPrescriptionController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexCustomersPrescription $request
     * @return array|Factory|View
     */
    public function index(IndexCustomersPrescription $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(CustomersPrescription::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['full_name', 'T1', 'T2', 'T3', 'T4', 'T5', 'T6', 'T7', 'T8', 'T9', 'T10', 'T11', 'T12', 'T13', 'T14', 'T15', 'T16', 'T17', 'T18', 'T19', 'T20', 'N1', 'N2', 'N3', 'N4', 'N5', 'N6', 'N7', 'N8', 'N9', 'N10', 'N11', 'N12', 'N13', 'N14', 'N15', 'N16', 'N17', 'N18', 'N19', 'N20', 'customer_code', 'visit_date', 'id', 'customer_id', 'customer_history_id'],

            // set columns to searchIn
            ['full_name', 'T1', 'T2', 'T3', 'T4', 'T5', 'T6', 'T7', 'T8', 'T9', 'T10', 'T11', 'T12', 'T13', 'T14', 'T15', 'T16', 'T17', 'T18', 'T19', 'T20', 'N1', 'N2', 'N3', 'N4', 'N5', 'N6', 'N7', 'N8', 'N9', 'N10', 'N11', 'N12', 'N13', 'N14', 'N15', 'N16', 'N17', 'N18', 'N19', 'N20', 'customer_code', 'visit_date', 'CANBENH', 'CAPBAC', 'DONVI', 'DONTHUOC', 'id', 'customer_id', 'customer_history_id']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.customers-prescription.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.customers-prescription.create');

        return view('admin.customers-prescription.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreCustomersPrescription $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreCustomersPrescription $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the CustomersPrescription
        $customersPrescription = CustomersPrescription::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/customers-prescriptions'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/customers-prescriptions');
    }

    /**
     * Display the specified resource.
     *
     * @param CustomersPrescription $customersPrescription
     * @throws AuthorizationException
     * @return void
     */
    public function show(CustomersPrescription $customersPrescription)
    {
        $this->authorize('admin.customers-prescription.show', $customersPrescription);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param CustomersPrescription $customersPrescription
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(CustomersPrescription $customersPrescription)
    {
        $this->authorize('admin.customers-prescription.edit', $customersPrescription);


        return view('admin.customers-prescription.edit', [
            'customersPrescription' => $customersPrescription,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateCustomersPrescription $request
     * @param CustomersPrescription $customersPrescription
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateCustomersPrescription $request, CustomersPrescription $customersPrescription)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values CustomersPrescription
        $customersPrescription->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/customers-prescriptions'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/customers-prescriptions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyCustomersPrescription $request
     * @param CustomersPrescription $customersPrescription
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyCustomersPrescription $request, CustomersPrescription $customersPrescription)
    {
        $customersPrescription->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyCustomersPrescription $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyCustomersPrescription $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    CustomersPrescription::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
