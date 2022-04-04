<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Medicine\BulkDestroyMedicine;
use App\Http\Requests\Admin\Medicine\DestroyMedicine;
use App\Http\Requests\Admin\Medicine\IndexMedicine;
use App\Http\Requests\Admin\Medicine\StoreMedicine;
use App\Http\Requests\Admin\Medicine\UpdateMedicine;
use App\Models\Medicine;
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

class MedicineController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexMedicine $request
     * @return array|Factory|View
     */
    public function index(IndexMedicine $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Medicine::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['code', 'name', 'mfg_date', 'exp_date', 'made_in', 'medication_components', 'ID'],

            // set columns to searchIn
            ['code', 'name', 'made_in', 'medication_components', 'notes', 'ID']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.medicine.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.medicine.create');

        return view('admin.medicine.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreMedicine $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreMedicine $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Medicine
        $medicine = Medicine::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/medicines'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/medicines');
    }

    /**
     * Display the specified resource.
     *
     * @param Medicine $medicine
     * @throws AuthorizationException
     * @return void
     */
    public function show(Medicine $medicine)
    {
        $this->authorize('admin.medicine.show', $medicine);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Medicine $medicine
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Medicine $medicine)
    {
        $this->authorize('admin.medicine.edit', $medicine);


        return view('admin.medicine.edit', [
            'medicine' => $medicine,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateMedicine $request
     * @param Medicine $medicine
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateMedicine $request, Medicine $medicine)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Medicine
        $medicine->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/medicines'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/medicines');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyMedicine $request
     * @param Medicine $medicine
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyMedicine $request, Medicine $medicine)
    {
        $medicine->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyMedicine $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyMedicine $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Medicine::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
