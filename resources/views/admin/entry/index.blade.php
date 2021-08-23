@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.entry.actions.index'))

@section('body')

    <entry-listing
        :data="{{ $data->toJson() }}"
        :url="'{{ url('admin/entries') }}'"
        inline-template>

        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i> {{ trans('admin.entry.actions.index') }}
                        <a class="btn btn-primary btn-spinner btn-sm pull-right m-b-0" href="{{ url('admin/entries/create') }}" role="button"><i class="fa fa-plus"></i>&nbsp; {{ trans('admin.entry.actions.create') }}</a>
                    </div>
                    <div class="card-body" v-cloak style="overflow-x:auto;">
                        <div class="card-block">
                            <form @submit.prevent="">
                                <div class="row justify-content-md-between">
                                    <div class="col col-lg-7 col-xl-5 form-group">
                                        <div class="input-group">
                                            <input class="form-control" placeholder="{{ trans('brackets/admin-ui::admin.placeholder.search') }}" v-model="search" @keyup.enter="filter('search', $event.target.value)" />
                                            <span class="input-group-append">
                                                <button type="button" class="btn btn-primary" @click="filter('search', search)"><i class="fa fa-search"></i>&nbsp; {{ trans('brackets/admin-ui::admin.btn.search') }}</button>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-sm-auto form-group ">
                                        <select class="form-control" v-model="pagination.state.per_page">
                                            
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="100">100</option>
                                        </select>
                                    </div>
                                </div>
                            </form>

                            <table class="table table-hover table-listing">
                                <thead>
                                    <tr>
                                        <th class="bulk-checkbox">
                                            <input class="form-check-input" id="enabled" type="checkbox" v-model="isClickedAll" v-validate="''" data-vv-name="enabled"  name="enabled_fake_element" @click="onBulkItemsClickedAllWithPagination()">
                                            <label class="form-check-label" for="enabled">
                                                #
                                            </label>
                                        </th>
                                        <th style="display: none" is='sortable' :column="'id'">id</th>
                                        <th is='sortable' :column="'completedR'">Status Responded</th>
                                        <th is='sortable' :column="'email'">email</th>
                                        <th is='sortable' :column="'umur'">Umur</th>
                                        <th is='sortable' :column="'jantina'">Jantina</th>
                                        <th is='sortable' :column="'agama'">Agama</th>
                                        <th is='sortable' :column="'lainAgamaDetail'">Lain-lain agama</th>
                                        <th is='sortable' :column="'daerahBertugas'">Daerah Bertugas</th>
                                        <th is='sortable' :column="'status'">Status</th>
                                        <th is='sortable' :column="'bilAnak'">Bilangan Anak</th>
                                        <th is='sortable' :column="'bilIsiRumah'">Bilangan Isi Rumah</th>
                                        <th is='sortable' :column="'tinggalBersamaPasangan'">Tinggal Bersama Pasangan</th>
                                        <th is='sortable' :column="'bilBilikTidur'">Bil. Bilik Tidur</th>
                                        <th is='sortable' :column="'education'">Tahap Pendidikan</th>
                                        <th is='sortable' :column="'agensi'">Agensi</th>
                                        <th is='sortable' :column="'kumpulanPerkhidmatan'">Kumpulan Perkhidmatan</th>
                                        <th is='sortable' :column="'tarafJawatan'">Taraf Jawatan</th>
                                        <th is='sortable' :column="'skimPerkhidmatan'">Skim Perkhidmatan</th>
                                        <th is='sortable' :column="'gredJawatan'">Gred Jawatan</th>
                                        <th is='sortable' :column="'gajiKasarBulanan'">Gaji Kasar Bulanan</th>
                                        <th is='sortable' :column="'gajiBersihBulanan'">Gaji Bersih Bulanan</th>
                                        <th is='sortable' :column="'kesukaranGaji'">Kesukaran Gaji</th>
                                        <th is='sortable' :column="'tempohPerkhidmatanTahun'">Tempoh Perkhidmatan (Tahun)</th>
                                        <th is='sortable' :column="'tempohPerkhidmatanBulan'">Tempoh Perkhidmatan (Bulan)</th>
                                        <th is='sortable' :column="'masalahKesihatan'">Masalah Kesihatan</th>
                                        <th is='sortable' :column="'masalahKesihatanDetail'">Masalah Kesihatan (Nyatakan) </th>
                                        <th is='sortable' :column="'tempatTinggal'">Tempat Tinggal</th>
                                        <th is='sortable' :column="'tempatTinggalDetail'">Tempat Tinggal (Nyatakan)</th>
                                        <th is='sortable' :column="'tinggalBersama'">Tinggal Bersama</th>
                                        <th is='sortable' :column="'tinggalBersamaDetail'">Tinggal Bersama (Nyatakan)</th>
                                        <th is='sortable' :column="'kenderaanKerja'">Kenderaan Kerja</th>
                                        <th is='sortable' :column="'kenderaanKerjaDetail'">Kenderaan Kerja (Nyatakan)</th>

                                        <th></th>
                                    </tr>
                                    <tr v-show="(clickedBulkItemsCount > 0) || isClickedAll">
                                        <td class="bg-bulk-info d-table-cell text-center" colspan="68">
                                            <span class="align-middle font-weight-light text-dark">{{ trans('brackets/admin-ui::admin.listing.selected_items') }} @{{ clickedBulkItemsCount }}.  <a href="#" class="text-primary" @click="onBulkItemsClickedAll('/admin/entries')" v-if="(clickedBulkItemsCount < pagination.state.total)"> <i class="fa" :class="bulkCheckingAllLoader ? 'fa-spinner' : ''"></i> {{ trans('brackets/admin-ui::admin.listing.check_all_items') }} @{{ pagination.state.total }}</a> <span class="text-primary">|</span> <a
                                                        href="#" class="text-primary" @click="onBulkItemsClickedAllUncheck()">{{ trans('brackets/admin-ui::admin.listing.uncheck_all_items') }}</a>  </span>

                                            <span class="pull-right pr-2">
                                                <button class="btn btn-sm btn-danger pr-3 pl-3" @click="bulkDelete('/admin/entries/bulk-destroy')">{{ trans('brackets/admin-ui::admin.btn.delete') }}</button>
                                            </span>

                                        </td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(item, index) in collection" :key="item.id" :class="bulkItems[item.id] ? 'bg-bulk' : ''">
                                        <td class="bulk-checkbox">
                                            <input class="form-check-input" :id="'enabled' + item.id" type="checkbox" v-model="bulkItems[item.id]" v-validate="''" :data-vv-name="'enabled' + item.id"  :name="'enabled' + item.id + '_fake_element'" @click="onBulkItemClicked(item.id)" :disabled="bulkCheckingAllLoader">
                                            <label class="form-check-label" :for="'enabled' + item.id">
                                            </label>
                                        </td>

                                        <td style="display: none">@{{ item.id }}</td>
                                        <td>@{{ item.completedR == 1 ? 'Lengkap' : 'Belum Lengkap' }}</td>
                                        <td>@{{ item.email }}</td>
                                        <td>@{{ item.umur }}</td>
                                        <td>@{{ item.jantina }}</td>
                                        <td>@{{ item.agama }}</td>
                                        <td>@{{ item.lainAgamaDetail }}</td>
                                        <td>@{{ item.daerahBertugas }}</td>
                                        <td>@{{ item.status }}</td>
                                        <td>@{{ item.bilAnak }}</td>
                                        <td>@{{ item.bilIsiRumah }}</td>
                                        <td>@{{ item.tinggalBersamaPasangan }}</td>
                                        <td>@{{ item.bilBilikTidur }}</td>
                                        <td>@{{ item.education }}</td>
                                        <td>@{{ item.agensi }}</td>
                                        <td>@{{ item.kumpulanPerkhidmatan }}</td>
                                        <td>@{{ item.tarafJawatan }}</td>
                                        <td>@{{ item.skimPerkhidmatan }}</td>
                                        <td>@{{ item.gredJawatan }}</td>
                                        <td>@{{ item.gajiKasarBulanan }}</td>
                                        <td>@{{ item.gajiBersihBulanan }}</td>
                                        <td>@{{ item.kesukaranGaji }}</td>
                                        <td>@{{ item.tempohPerkhidmatanTahun }}</td>
                                        <td>@{{ item.tempohPerkhidmatanBulan }}</td>
                                        <td>@{{ item.masalahKesihatan }}</td>
                                        <td>@{{ item.masalahKesihatanDetail }}</td>
                                        <td>@{{ item.tempatTinggal }}</td>
                                        <td>@{{ item.tempatTinggalDetail }}</td>
                                        <td>@{{ item.tinggalBersama }}</td>
                                        <td>@{{ item.tinggalBersamaDetail }}</td>
                                        <td>@{{ item.kenderaanKerja }}</td>
                                        <td>@{{ item.kenderaanKerjaDetail }}</td>
                                        {{--<td>@{{ item.B15 }}</td>
                                        <td>@{{ item.B16 }}</td>
                                        <td>@{{ item.B17 }}</td>
                                        <td>@{{ item.B18 }}</td>
                                        <td>@{{ item.B19 }}</td>
                                        <td>@{{ item.B20 }}</td>
                                        <td>@{{ item.B21 }}</td>
                                        <td>@{{ item.B22 }}</td>
                                        <td>@{{ item.B23 }}</td>
                                        <td>@{{ item.B24 }}</td>
                                        <td>@{{ item.B25 }}</td>
                                        <td>@{{ item.B26 }}</td>
                                        <td>@{{ item.B27 }}</td>
                                        <td>@{{ item.B28 }}</td>
                                        <td>@{{ item.B29 }}</td>
                                        <td>@{{ item.B30 }}</td>
                                        <td>@{{ item.B31 }}</td>
                                        <td>@{{ item.B32 }}</td>
                                        <td>@{{ item.B33 }}</td>
                                        <td>@{{ item.B34 }}</td>
                                        <td>@{{ item.B35 }}</td>
                                        <td>@{{ item.B36 }}</td>
                                        <td>@{{ item.B37 }}</td>
                                        <td>@{{ item.B38 }}</td>
                                        <td>@{{ item.B39 }}</td>
                                        <td>@{{ item.B40 }}</td>
                                        <td>@{{ item.B41 }}</td>
                                        <td>@{{ item.B42 }}</td>
                                        <td>@{{ item.B43 }}</td>
                                        <td>@{{ item.B44 }}</td>
                                        <td>@{{ item.B45 }}</td>
                                        <td>@{{ item.C1 }}</td>
                                        <td>@{{ item.C2 }}</td>
                                        <td>@{{ item.C3 }}</td>
                                        <td>@{{ item.C4 }}</td>
                                        <td>@{{ item.C5 }}</td> --}}
                                        
                                        <td>
                                            <div class="row no-gutters">
                                                <div class="col-auto">
                                                    <a class="btn btn-sm btn-spinner btn-info" :href="item.resource_url + '/edit'" title="{{ trans('brackets/admin-ui::admin.btn.edit') }}" role="button"><i class="fa fa-edit"></i></a>
                                                </div>
                                                <form class="col" @submit.prevent="deleteItem(item.resource_url)">
                                                    <button type="submit" class="btn btn-sm btn-danger" title="{{ trans('brackets/admin-ui::admin.btn.delete') }}"><i class="fa fa-trash-o"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="row" v-if="pagination.state.total > 0">
                                <div class="col-sm">
                                    <span class="pagination-caption">{{ trans('brackets/admin-ui::admin.pagination.overview') }}</span>
                                </div>
                                <div class="col-sm-auto">
                                    <pagination></pagination>
                                </div>
                            </div>

                            <div class="no-items-found" v-if="!collection.length > 0">
                                <i class="icon-magnifier"></i>
                                <h3>{{ trans('brackets/admin-ui::admin.index.no_items') }}</h3>
                                <p>{{ trans('brackets/admin-ui::admin.index.try_changing_items') }}</p>
                                <a class="btn btn-primary btn-spinner" href="{{ url('admin/entries/create') }}" role="button"><i class="fa fa-plus"></i>&nbsp; {{ trans('admin.entry.actions.create') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </entry-listing>

@endsection