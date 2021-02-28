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

                                        <th is='sortable' :column="'id'">{{ trans('admin.entry.columns.id') }}</th>
                                        <th is='sortable' :column="'umur'">{{ trans('admin.entry.columns.umur') }}</th>
                                        <th is='sortable' :column="'jantina'">{{ trans('admin.entry.columns.jantina') }}</th>
                                        <th is='sortable' :column="'agama'">{{ trans('admin.entry.columns.agama') }}</th>
                                        <th is='sortable' :column="'bangsa'">{{ trans('admin.entry.columns.bangsa') }}</th>
                                        <th is='sortable' :column="'status'">{{ trans('admin.entry.columns.status') }}</th>
                                        <th is='sortable' :column="'bilAnak'">{{ trans('admin.entry.columns.bilAnak') }}</th>
                                        <th is='sortable' :column="'tinggalBersamaPasangan'">{{ trans('admin.entry.columns.tinggalBersamaPasangan') }}</th>
                                        <th is='sortable' :column="'education'">{{ trans('admin.entry.columns.education') }}</th>
                                        <th is='sortable' :column="'jumlahGaji'">{{ trans('admin.entry.columns.jumlahGaji') }}</th>
                                        <th is='sortable' :column="'kesukaranGaji'">{{ trans('admin.entry.columns.kesukaranGaji') }}</th>
                                        <th is='sortable' :column="'pernahTukarKerja'">{{ trans('admin.entry.columns.pernahTukarKerja') }}</th>
                                        <th is='sortable' :column="'masalahKesihatan'">{{ trans('admin.entry.columns.masalahKesihatan') }}</th>
                                        <th is='sortable' :column="'tempatTinggal'">{{ trans('admin.entry.columns.tempatTinggal') }}</th>
                                        <th is='sortable' :column="'tinggalBersama'">{{ trans('admin.entry.columns.tinggalBersama') }}</th>
                                        <th is='sortable' :column="'kenderaanKerja'">{{ trans('admin.entry.columns.kenderaanKerja') }}</th>
                                        <th is='sortable' :column="'B1'">{{ trans('admin.entry.columns.B1') }}</th>
                                        <th is='sortable' :column="'B2'">{{ trans('admin.entry.columns.B2') }}</th>
                                        <th is='sortable' :column="'B3'">{{ trans('admin.entry.columns.B3') }}</th>
                                        <th is='sortable' :column="'B4'">{{ trans('admin.entry.columns.B4') }}</th>
                                        <th is='sortable' :column="'B5'">{{ trans('admin.entry.columns.B5') }}</th>
                                        <th is='sortable' :column="'B6'">{{ trans('admin.entry.columns.B6') }}</th>
                                        <th is='sortable' :column="'B7'">{{ trans('admin.entry.columns.B7') }}</th>
                                        <th is='sortable' :column="'B8'">{{ trans('admin.entry.columns.B8') }}</th>
                                        <th is='sortable' :column="'B9'">{{ trans('admin.entry.columns.B9') }}</th>
                                        <th is='sortable' :column="'B10'">{{ trans('admin.entry.columns.B10') }}</th>
                                        <th is='sortable' :column="'B11'">{{ trans('admin.entry.columns.B11') }}</th>
                                        <th is='sortable' :column="'B12'">{{ trans('admin.entry.columns.B12') }}</th>
                                        <th is='sortable' :column="'B13'">{{ trans('admin.entry.columns.B13') }}</th>
                                        <th is='sortable' :column="'B14'">{{ trans('admin.entry.columns.B14') }}</th>
                                        <th is='sortable' :column="'B15'">{{ trans('admin.entry.columns.B15') }}</th>
                                        <th is='sortable' :column="'B16'">{{ trans('admin.entry.columns.B16') }}</th>
                                        <th is='sortable' :column="'B17'">{{ trans('admin.entry.columns.B17') }}</th>
                                        <th is='sortable' :column="'B18'">{{ trans('admin.entry.columns.B18') }}</th>
                                        <th is='sortable' :column="'B19'">{{ trans('admin.entry.columns.B19') }}</th>
                                        <th is='sortable' :column="'B20'">{{ trans('admin.entry.columns.B20') }}</th>
                                        <th is='sortable' :column="'B21'">{{ trans('admin.entry.columns.B21') }}</th>
                                        <th is='sortable' :column="'B22'">{{ trans('admin.entry.columns.B22') }}</th>
                                        <th is='sortable' :column="'B23'">{{ trans('admin.entry.columns.B23') }}</th>
                                        <th is='sortable' :column="'B24'">{{ trans('admin.entry.columns.B24') }}</th>
                                        <th is='sortable' :column="'B25'">{{ trans('admin.entry.columns.B25') }}</th>
                                        <th is='sortable' :column="'B26'">{{ trans('admin.entry.columns.B26') }}</th>
                                        <th is='sortable' :column="'B27'">{{ trans('admin.entry.columns.B27') }}</th>
                                        <th is='sortable' :column="'B28'">{{ trans('admin.entry.columns.B28') }}</th>
                                        <th is='sortable' :column="'B29'">{{ trans('admin.entry.columns.B29') }}</th>
                                        <th is='sortable' :column="'B30'">{{ trans('admin.entry.columns.B30') }}</th>
                                        <th is='sortable' :column="'B31'">{{ trans('admin.entry.columns.B31') }}</th>
                                        <th is='sortable' :column="'B32'">{{ trans('admin.entry.columns.B32') }}</th>
                                        <th is='sortable' :column="'B33'">{{ trans('admin.entry.columns.B33') }}</th>
                                        <th is='sortable' :column="'B34'">{{ trans('admin.entry.columns.B34') }}</th>
                                        <th is='sortable' :column="'B35'">{{ trans('admin.entry.columns.B35') }}</th>
                                        <th is='sortable' :column="'B36'">{{ trans('admin.entry.columns.B36') }}</th>
                                        <th is='sortable' :column="'B37'">{{ trans('admin.entry.columns.B37') }}</th>
                                        <th is='sortable' :column="'B38'">{{ trans('admin.entry.columns.B38') }}</th>
                                        <th is='sortable' :column="'B39'">{{ trans('admin.entry.columns.B39') }}</th>
                                        <th is='sortable' :column="'B40'">{{ trans('admin.entry.columns.B40') }}</th>
                                        <th is='sortable' :column="'B41'">{{ trans('admin.entry.columns.B41') }}</th>
                                        <th is='sortable' :column="'B42'">{{ trans('admin.entry.columns.B42') }}</th>
                                        <th is='sortable' :column="'B43'">{{ trans('admin.entry.columns.B43') }}</th>
                                        <th is='sortable' :column="'B44'">{{ trans('admin.entry.columns.B44') }}</th>
                                        <th is='sortable' :column="'B45'">{{ trans('admin.entry.columns.B45') }}</th>
                                        <th is='sortable' :column="'C1'">{{ trans('admin.entry.columns.C1') }}</th>
                                        <th is='sortable' :column="'C2'">{{ trans('admin.entry.columns.C2') }}</th>
                                        <th is='sortable' :column="'C3'">{{ trans('admin.entry.columns.C3') }}</th>
                                        <th is='sortable' :column="'C4'">{{ trans('admin.entry.columns.C4') }}</th>
                                        <th is='sortable' :column="'C5'">{{ trans('admin.entry.columns.C5') }}</th>

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

                                    <td>@{{ item.id }}</td>
                                        <td>@{{ item.umur }}</td>
                                        <td>@{{ item.jantina }}</td>
                                        <td>@{{ item.agama }}</td>
                                        <td>@{{ item.bangsa }}</td>
                                        <td>@{{ item.status }}</td>
                                        <td>@{{ item.bilAnak }}</td>
                                        <td>@{{ item.tinggalBersamaPasangan }}</td>
                                        <td>@{{ item.education }}</td>
                                        <td>@{{ item.jumlahGaji }}</td>
                                        <td>@{{ item.kesukaranGaji }}</td>
                                        <td>@{{ item.pernahTukarKerja }}</td>
                                        <td>@{{ item.masalahKesihatan }}</td>
                                        <td>@{{ item.tempatTinggal }}</td>
                                        <td>@{{ item.tinggalBersama }}</td>
                                        <td>@{{ item.kenderaanKerja }}</td>
                                        <td>@{{ item.B1 }}</td>
                                        <td>@{{ item.B2 }}</td>
                                        <td>@{{ item.B3 }}</td>
                                        <td>@{{ item.B4 }}</td>
                                        <td>@{{ item.B5 }}</td>
                                        <td>@{{ item.B6 }}</td>
                                        <td>@{{ item.B7 }}</td>
                                        <td>@{{ item.B8 }}</td>
                                        <td>@{{ item.B9 }}</td>
                                        <td>@{{ item.B10 }}</td>
                                        <td>@{{ item.B11 }}</td>
                                        <td>@{{ item.B12 }}</td>
                                        <td>@{{ item.B13 }}</td>
                                        <td>@{{ item.B14 }}</td>
                                        <td>@{{ item.B15 }}</td>
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
                                        <td>@{{ item.C5 }}</td>
                                        
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