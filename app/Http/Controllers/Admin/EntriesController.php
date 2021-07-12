<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Entry\BulkDestroyEntry;
use App\Http\Requests\Admin\Entry\DestroyEntry;
use App\Http\Requests\Admin\Entry\IndexEntry;
use App\Http\Requests\Admin\Entry\StoreEntry;
use App\Http\Requests\Admin\Entry\UpdateEntry;
use App\Models\Entry;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Http\Controllers\ThankYouResult;

class EntriesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexEntry $request
     * @return array|Factory|View
     */
    public function index(IndexEntry $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Entry::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            [
                'id',
                'umur',
                'jantina',
                'agama',
                'lainAgamaDetail',
                'bangsa',
                'daerahBertugas',
                'status',
                'bilAnak',
                'bilIsiRumah',
                'tinggalBersamaPasangan',
                'bilBilikTidur',
                'education',
                'agensi',
                'kumpulanPerkhidmatan',
                'tarafJawatan',
                'skimPerkhidmatan',
                'gredJawatan',
                'gajiKasarBulanan',
                'gajiBersihBulanan',
                'kesukaranGaji',
                'tempohPerkhidmatanTahun',
                'tempohPerkhidmatanBulan',
                'masalahKesihatan',
                'masalahKesihatanDetail',
                'tempatTinggal',
                'tempatTinggalDetail',
                'tinggalBersama',
                'tinggalBersamaDetail',
                'kenderaanKerja',
                'kenderaanKerjaDetail',
                'B1',
                'B2',
                'B3',
                'B4',
                'B5',
                'B6',
                'B7',
                'B8',
                'B9',
                'B10',
                'B11',
                'B12',
                'B13',
                'B14',
                'B15',
                'B16',
                'B17',
                'B18',
                'C1',
                'C2',
                'D1',
                'E1',
                'E2',
                'E3',
                'E4',
                'E5',
                'E6',
                'F1',
                'F2',
                'F3',
                'F4',
                'F5',
                'F6',
                'G1',
                'G2',
                'G3',
                'G4',
                'G5',
                'G6',
                'G7',
                'G8',
                'G9',
                'G10',
                'H1',
                'H2',
                'H3',
                'H4',
                'H5',
                'H6',
                'H7',
                'H8',
                'H9',
                'H10',
                'H11',
                'H12',
                'H13',
                'H14',
                'H15',
                'H16',
                'H17',
                'H18',
                'H19',
                'H20',
                'H21',
                'H22',
                'H23',
                'H24',
                'H25',
                'H26',
                'H27',
                'H28',
                'H29',
                'H30',
                'H31',
                'H32',
                'H33',
                'H34',
                'H35',
                'I1',
                'I2',
                'I3',
                'J1',
                'J2',
                'J3',
                'J4',
                'J5',
                'J6',
                'J7',
                'J8',
                'J9',
                'J10',
                'K1',
                'K2',
                'K3',
                'K4',
                'K5',
                'K6',
                'K7',
                'K8',
                'K9',
                'K10',
                'L1',
                'L2',
                'L3',
                'L4',
                'M1',
                'M2',
                'M3',
                'N1',
                'N2',
                'N3',
                'N4',
                'O1',
                'O2',
                'O3',
                'O4',
                'O5',
                'P1',
                'P2',
                'Q1',
                'Q2',
                'Q3',
                'Q4',
                'komen',
                'cadangan',
                'uuid'
            ],

            // set columns to searchIn
            [
                'id',
                'umur',
                'jantina',
                'agama',
                'lainAgamaDetail',
                'bangsa',
                'daerahBertugas',
                'status',
                'bilAnak',
                'bilIsiRumah',
                'tinggalBersamaPasangan',
                'bilBilikTidur',
                'education',
                'agensi',
                'kumpulanPerkhidmatan',
                'tarafJawatan',
                'skimPerkhidmatan',
                'gredJawatan',
                'gajiKasarBulanan',
                'gajiBersihBulanan',
                'kesukaranGaji',
                'tempohPerkhidmatanTahun',
                'tempohPerkhidmatanBulan',
                'masalahKesihatan',
                'masalahKesihatanDetail',
                'tempatTinggal',
                'tempatTinggalDetail',
                'tinggalBersama',
                'tinggalBersamaDetail',
                'kenderaanKerja',
                'kenderaanKerjaDetail',
            ]
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.entry.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.entry.create');

        return view('admin.entry.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreEntry $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreEntry $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Entry
        $entry = Entry::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/entries'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/entries');
    }

    public function storeForm(Request $req)
    {
        Entry::create($req->all());
        //return redirect()->route('/result', ['uuid' => $req->uuid]);
        return redirect()->action(
            [ThankYouResult::class, 'index'], ['uuid' => $req->uuid]
        );
    }

    /**
     * Display the specified resource.
     *
     * @param Entry $entry
     * @throws AuthorizationException
     * @return void
     */
    public function show(Entry $entry)
    {
        $this->authorize('admin.entry.show', $entry);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Entry $entry
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Entry $entry)
    {
        $this->authorize('admin.entry.edit', $entry);


        return view('admin.entry.edit', [
            'entry' => $entry,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateEntry $request
     * @param Entry $entry
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateEntry $request, Entry $entry)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Entry
        $entry->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/entries'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/entries');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyEntry $request
     * @param Entry $entry
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyEntry $request, Entry $entry)
    {
        $entry->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyEntry $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyEntry $request): Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Entry::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
