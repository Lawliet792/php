@php $editing = isset($bahan) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="jenis_bahan"
            label="Jenis Bahan"
            :value="old('jenis_bahan', ($editing ? $bahan->jenis_bahan : ''))"
            maxlength="255"
            placeholder="Jenis Bahan | Misal Kain"
            required
        ></x-inputs.text>
    </x-inputs.group>
</div>
