@extends('layouts.app')

@section('content')
<div class="container">
    <div class="searchbar mt-0 mb-4">
        <div class="row">
            <div class="col-md-6">
                <form>
                    <div class="input-group">
                        <input
                            id="indexSearch"
                            type="text"
                            name="search"
                            placeholder="{{ __('crud.common.search') }}"
                            value="{{ $search ?? '' }}"
                            class="form-control"
                            autocomplete="off"
                        />
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-primary">
                                <i class="icon ion-md-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6 text-right">
                @can('create', App\Models\Produk::class)
                <a href="{{ route('produks.create') }}" class="btn btn-primary">
                    <i class="icon ion-md-add"></i> @lang('crud.common.create')
                </a>
                @endcan
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div style="display: flex; justify-content: space-between;">
                <h4 class="card-title">@lang('crud.produks.index_title')</h4>
            </div>

            <div class="table-responsive">
                <table class="table table-borderless table-hover">
                    <thead>
                        <tr>
                            <th class="text-left">
                                @lang('crud.produks.inputs.judul')
                            </th>
                            <th class="text-left">
                                @lang('crud.produks.inputs.kategori_id')
                            </th>
                            <th class="text-left">
                                @lang('crud.produks.inputs.bahan_id')
                            </th>
                            <th class="text-left">
                                @lang('crud.produks.inputs.deskripsi')
                            </th>
                            <th class="text-right">
                                @lang('crud.produks.inputs.harga')
                            </th>
                            <th class="text-left">
                                @lang('crud.produks.inputs.gambar')
                            </th>
                            <th class="text-center">
                                @lang('crud.common.actions')
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($produks as $produk)
                        <tr>
                            <td>{{ $produk->judul ?? '-' }}</td>
                            <td>
                                {{ optional($produk->kategori)->kategori ?? '-'
                                }}
                            </td>
                            <td>
                                {{ optional($produk->bahan)->jenis_bahan ?? '-'
                                }}
                            </td>
                            <td>{{ $produk->deskripsi ?? '-' }}</td>
                            <td>{{ $produk->harga ?? '-' }}</td>
                            <td>
                                <x-partials.thumbnail
                                    src="{{ $produk->gambar ? \Storage::url($produk->gambar) : '' }}"
                                />
                            </td>
                            <td class="text-center" style="width: 134px;">
                                <div
                                    role="group"
                                    aria-label="Row Actions"
                                    class="btn-group"
                                >
                                    @can('update', $produk)
                                    <a
                                        href="{{ route('produks.edit', $produk) }}"
                                    >
                                        <button
                                            type="button"
                                            class="btn btn-light"
                                        >
                                            <i class="icon ion-md-create"></i>
                                        </button>
                                    </a>
                                    @endcan @can('view', $produk)
                                    <a
                                        href="{{ route('produks.show', $produk) }}"
                                    >
                                        <button
                                            type="button"
                                            class="btn btn-light"
                                        >
                                            <i class="icon ion-md-eye"></i>
                                        </button>
                                    </a>
                                    @endcan @can('delete', $produk)
                                    <form
                                        action="{{ route('produks.destroy', $produk) }}"
                                        method="POST"
                                        onsubmit="return confirm('{{ __('crud.common.are_you_sure') }}')"
                                    >
                                        @csrf @method('DELETE')
                                        <button
                                            type="submit"
                                            class="btn btn-light text-danger"
                                        >
                                            <i class="icon ion-md-trash"></i>
                                        </button>
                                    </form>
                                    @endcan
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7">
                                @lang('crud.common.no_items_found')
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="7">{!! $produks->render() !!}</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
